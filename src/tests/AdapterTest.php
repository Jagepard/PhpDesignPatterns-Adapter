<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;
use Structural\Adapter\AnotherRegistryAdapter;
use Structural\Adapter\Registry;


/**
 * Class SingletonsPoolTest
 */
class AdapterTest extends PHPUnit_Framework_TestCase
{

    protected $registry;
    protected $adapter;

    protected function setUp(): void
    {
        $this->registry = new Registry();
        $this->adapter  = new AnotherRegistryAdapter($this->registry);
    }

    public function testFirstValue()
    {
        $this->getRegistry()->setFirstValue('FirstValue');
        $this->assertEquals('FirstValue', $this->getRegistry()->getFirstValue());
    }

    public function testSecondValue()
    {
        $this->getRegistry()->setSecondValue('3.14');
        $this->assertEquals('3.14', $this->getRegistry()->getSecondValue());
    }

    public function testAdaptFirstValue()
    {
        $this->getAdapter()->setFirstValue('FirstValue');
        $this->assertEquals(0, $this->getAdapter()->getFirstValue());
    }

    public function testAdaptSecondValue()
    {
        $this->getAdapter()->setSecondValue('3.14');
        $this->assertEquals(3, $this->getAdapter()->getSecondValue());
    }

    /**
     * @return mixed
     */
    public function getRegistry()
    {
        return $this->registry;
    }

    /**
     * @return mixed
     */
    public function getAdapter()
    {
        return $this->adapter;
    }
}
