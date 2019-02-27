<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Structural\Adapter;

/**
 * Class AnotherRegistry
 * @package Structural\Adapter
 */
class AnotherRegistry implements AnotherRegistryInterface
{
    /**
     * @var array
     */
    private $data;

    /**
     * @param string $item
     */
    public function setData(string $item)
    {
        $this->data[] = $item;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }
}
