<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
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