<?php

declare(strict_types=1);

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
    public function setItem(string $item);

    /**
     * @return array
     */
    public function getData(): array;
}
