<?php
/**
 * Date: 30.03.18
 * Time: 12:57
 *
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
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
    public $key;
    /**
     * @var
     */
    public $slug;

    /**
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