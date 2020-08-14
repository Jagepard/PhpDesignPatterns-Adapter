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

    public function setFirst(string $value)
    {
        $this->first = $value;
    }

    public function setSecond(string $value)
    {
        $this->second = $value;
    }

    public function getFirst(): string
    {
        return $this->first;
    }

    public function getSecond(): string
    {
        return $this->second;
    }
}
