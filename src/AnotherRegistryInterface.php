<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Structural\Adapter;

interface AnotherRegistryInterface
{
    public function setData(string $item);
    public function getData(): array;
}
