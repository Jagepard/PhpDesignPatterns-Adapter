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
final class Adapter implements RegistryInterface
{
    /**
     * @var AnotherRegistryInterface
     */
    private $registry;

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
        $this->getRegistry()->setData($value);
    }

    /**
     * @param string $value
     */
    public function setSecond(string $value)
    {
        $this->getRegistry()->setData($value);
    }

    /**
     * @return string
     */
    public function getFirst(): string
    {
        return (string) $this->getRegistry()->getData()[0];
    }

    /**
     * @return string
     */
    public function getSecond(): string
    {
        return (string) $this->getRegistry()->getData()[1];
    }

    /**
     * @return AnotherRegistryInterface
     */
    public function getRegistry(): AnotherRegistryInterface
    {
        return $this->registry;
    }
}
