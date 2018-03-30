<?php
/**
 * Date: 30.03.18
 * Time: 12:44
 *
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Structural\Adapter;


/**
 * Class Registry
 * @package Structural\Adapter
 */
class Registry implements RegistryInterface
{

    /**
     * @var string
     */
    protected $firstValue;
    /**
     * @var string
     */
    protected $secondValue;

    /**
     * @param string $firstValue
     */
    public function setFirstValue(string $firstValue)
    {
        $this->firstValue = $firstValue;
    }

    /**
     * @param string $secondValue
     */
    public function setSecondValue(string $secondValue)
    {
        $this->secondValue = $secondValue;
    }

    /**
     * @return string
     */
    public function getFirstValue(): string
    {
        return $this->firstValue;
    }

    /**
     * @return string
     */
    public function getSecondValue(): string
    {
        return $this->secondValue;
    }
}