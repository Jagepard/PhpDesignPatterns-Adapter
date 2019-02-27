<?php

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Structural\Adapter;

/**
 * Interface AnotherRegistryInterface
 * @package Structural\Adapter
 */
interface AnotherRegistryInterface
{
    /**
     * @param string $item
     */
    public function setData(string $item);

    /**
     * @return array
     */
    public function getData(): array;
}
