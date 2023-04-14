<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Structural\Adapter;

final class Adapter implements RegistryInterface
{
    private AnotherRegistryInterface $registry;

    /**
     * Sets a different registry type
     * ------------------------------
     * Устанавливает другой тип реестра
     *
     * @param  AnotherRegistryInterface $registry
     */
    public function __construct(AnotherRegistryInterface $registry)
    {
        $this->registry = $registry;
    }

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
        $this->registry->setData($value);
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
        $this->registry->setData($value);
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
        return (string) $this->registry->getData()[0];
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
        return (string) $this->registry->getData()[1];
    }
}
