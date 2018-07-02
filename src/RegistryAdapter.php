<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Structural\Adapter;

/**
 * Class RegistryAdapter
 * @package Structural\Adapter
 */
class RegistryAdapter implements RegistryInterface
{

    /**
     * @var AnotherRegistryInterface
     */
    protected $registry;

    /**
     * RegistryAdapter constructor.
     * @param AnotherRegistryInterface $registry
     */
    public function __construct(AnotherRegistryInterface $registry)
    {
        $this->registry = $registry;
    }

    /**
     * @param string $value
     */
    public function setFirst(string $value)
    {
        $this->registry->setItem($value);
    }

    /**
     * @param string $value
     */
    public function setSecond(string $value)
    {
        $this->registry->setItem($value);
    }

    /**
     * @return string
     */
    public function getFirst(): string
    {
        return (string) $this->registry->getData()[0];
    }

    /**
     * @return string
     */
    public function getSecond(): string
    {
        return (string) $this->registry->getData()[1];
    }
}
