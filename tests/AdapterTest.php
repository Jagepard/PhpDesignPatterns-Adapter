<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Structural\Adapter\Tests;

use Structural\Adapter\Registry;
use Structural\Adapter\Adapter;
use Structural\Adapter\AnotherRegistry;
use Structural\Adapter\RegistryInterface;
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class AdapterTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Adapter
     */
    private $adapter;
    /**
     * @var RegistryInterface
     */
    private $registry;

    protected function setUp(): void
    {
        $this->registry = new Registry();
        $this->adapter  = new Adapter(new AnotherRegistry());
    }

    public function testSecond()
    {
        $this->getRegistry()->setFirst('First');
        $this->assertEquals('First', $this->getRegistry()->getFirst());
        $this->getRegistry()->setSecond('3.14');
        $this->assertEquals('3.14', $this->getRegistry()->getSecond());
    }

    public function testAdapt()
    {
        $this->getAdapter()->setFirst('First');
        $this->assertEquals('First', $this->getAdapter()->getFirst());
        $this->getAdapter()->setSecond('3.14');
        $this->assertEquals('3.14', $this->getAdapter()->getSecond());
    }

    /**
     * @return Adapter
     */
    public function getAdapter(): Adapter
    {
        return $this->adapter;
    }

    /**
     * @return RegistryInterface
     */
    public function getRegistry(): RegistryInterface
    {
        return $this->registry;
    }
}
