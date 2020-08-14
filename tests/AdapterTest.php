<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Structural\Adapter\Tests;

use Structural\Adapter\{Registry, Adapter, AnotherRegistry, RegistryInterface};
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class AdapterTest extends PHPUnit_Framework_TestCase
{
    private Adapter $adapter;
    private RegistryInterface $registry;

    protected function setUp(): void
    {
        $this->registry = new Registry();
        $this->adapter  = new Adapter(new AnotherRegistry());
    }

    public function testSecond()
    {
        $this->registry->setFirst('First');
        $this->assertEquals('First', $this->registry->getFirst());
        $this->registry->setSecond('3.14');
        $this->assertEquals('3.14', $this->registry->getSecond());
    }

    public function testAdapt()
    {
        $this->adapter->setFirst('First');
        $this->assertEquals('First', $this->adapter->getFirst());
        $this->adapter->setSecond('3.14');
        $this->assertEquals('3.14', $this->adapter->getSecond());
    }
}
