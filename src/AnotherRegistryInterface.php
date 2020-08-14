<?php

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Structural\Adapter;

interface AnotherRegistryInterface
{
    public function setData(string $item);
    public function getData(): array;
}
