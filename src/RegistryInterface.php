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
     * @param string $value
     */
    public function setFirst(string $value);

    /**
     * @param string $value
     */
    public function setSecond(string $value);

    /**
     * @return string
     */
    public function getFirst(): string;

    /**
     * @return string
     */
    public function getSecond(): string;
}
