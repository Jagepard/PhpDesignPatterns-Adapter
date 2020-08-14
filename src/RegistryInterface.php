<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Structural\Adapter;

interface RegistryInterface
{
    public function setFirst(string $value);
    public function setSecond(string $value);
    public function getFirst(): string;
    public function getSecond(): string;
}
