<?php

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Structural\Adapter;

interface RegistryInterface
{
    public function setFirst(string $value);
    public function setSecond(string $value);
    public function getFirst(): string;
    public function getSecond(): string;
}
