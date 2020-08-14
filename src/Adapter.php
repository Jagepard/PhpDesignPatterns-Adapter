<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Structural\Adapter;

final class Adapter implements RegistryInterface
{
    private AnotherRegistryInterface $registry;

    public function __construct(AnotherRegistryInterface $registry)
    {
        $this->registry = $registry;
    }

    public function setFirst(string $value)
    {
        $this->registry->setData($value);
    }

    public function setSecond(string $value)
    {
        $this->registry->setData($value);
    }

    public function getFirst(): string
    {
        return (string) $this->registry->getData()[0];
    }

    public function getSecond(): string
    {
        return (string) $this->registry->getData()[1];
    }
}
