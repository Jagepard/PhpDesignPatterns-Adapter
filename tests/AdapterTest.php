<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Structural\Adapter\Tests;

use Structural\Adapter\Registry;
use Structural\Adapter\RegistryAdapter;
use Structural\Adapter\AnotherRegistry;
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

/**
 * Class AdapterTest
 * @package Structural\Adapter\Tests
 */
class AdapterTest extends PHPUnit_Framework_TestCase
{

    /**
     * @var RegistryAdapter
     */
    protected $adapter;
    /**
     * @var Registry
     */
    protected $registry;

    protected function setUp(): void
    {
        $this->registry = new Registry();
        $this->adapter  = new RegistryAdapter(new AnotherRegistry());
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
