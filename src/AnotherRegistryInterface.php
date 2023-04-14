<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Structural\Adapter;

interface AnotherRegistryInterface
{
    /**
     * @param  string $item
     * @return void
     */
    public function setData(string $item);

    /**
     * @return array
     */
    public function getData(): array;
}
