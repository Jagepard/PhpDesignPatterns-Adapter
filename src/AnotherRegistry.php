<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Structural\Adapter;

class AnotherRegistry implements AnotherRegistryInterface
{
    private array $data;

    public function setData(string $item)
    {
        $this->data[] = $item;
    }

    public function getData(): array
    {
        return $this->data;
    }
}
