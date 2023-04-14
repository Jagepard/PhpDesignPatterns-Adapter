<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Structural\Adapter;

interface RegistryInterface
{
    /**
     * @param  string $value
     * @return void
     */
    public function setFirst(string $value);

    /**
     * @param  string $value
     * @return void
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
