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
     * @var
     */
    protected $key;
    /**
     * @var
     */
    protected $slug;

    /**
     * @codeCoverageIgnore
     * AnotherRegistry constructor.
     * @param $key
     * @param $slug
     */
    public function __construct(int $key, int $slug)
    {
        $this->key  = $key;
        $this->slug = $slug;
    }

    /**
     * @return mixed
     */
    public function getKey(): int
    {
        return $this->key;
    }

    /**
     * @return mixed
     */
    public function getSlug(): int
    {
        return $this->slug;
    }
}