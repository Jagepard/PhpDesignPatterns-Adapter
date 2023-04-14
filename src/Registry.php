<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Structural\Adapter;

class Registry implements RegistryInterface
{
    private string $first;
    private string $second;

    /**
     * Sets the first value
     * --------------------
     * Устанавливает первое значение
     *
     * @param  string $value
     * @return void
     */
    public function setFirst(string $value)
    {
        $this->first = $value;
    }

    /**
     * Sets the second value
     * ---------------------
     * Устанавливает второе значение
     *
     * @param  string $value
     * @return void
     */
    public function setSecond(string $value)
    {
        $this->second = $value;
    }

    /**
     * Gets the first value
     * --------------------
     * Получает первое значение
     *
     * @return string
     */
    public function getFirst(): string
    {
        return $this->first;
    }

    /**
     * Gets the second value
     * ---------------------
     * Получает второе значение
     *
     * @return string
     */
    public function getSecond(): string
    {
        return $this->second;
    }
}
