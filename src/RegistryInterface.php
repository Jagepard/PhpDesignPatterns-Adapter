<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Structural\Adapter;

/**
 * Interface RegistryInterface
 * @package Structural\Adapter
 */
interface RegistryInterface
{

    /**
     * @param string $firstValue
     */
    public function setFirstValue(string $firstValue);

    /**
     * @param string $secondValue
     */
    public function setSecondValue(string $secondValue);

    /**
     * @return string
     */
    public function getFirstValue(): string;

    /**
     * @return string
     */
    public function getSecondValue(): string;
}