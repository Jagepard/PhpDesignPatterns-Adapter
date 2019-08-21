<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Structural\Adapter;

class Registry implements RegistryInterface
{
    /**
     * @var string
     */
    private $first;
    /**
     * @var string
     */
    private $second;

    /**
     * @param string $value
     */
    public function setFirst(string $value)
    {
        $this->first = $value;
    }

    /**
     * @param string $value
     */
    public function setSecond(string $value)
    {
        $this->second = $value;
    }

    /**
     * @return string
     */
    public function getFirst(): string
    {
        return $this->first;
    }

    /**
     * @return string
     */
    public function getSecond(): string
    {
        return $this->second;
    }
}
