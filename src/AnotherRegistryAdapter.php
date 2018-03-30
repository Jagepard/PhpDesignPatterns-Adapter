<?php
/**
 * Date: 30.03.18
 * Time: 13:04
 *
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Structural\Adapter;

/**
 * Class AnotherRegistryAdapter
 * @package Structural\Adapter
 */
class AnotherRegistryAdapter extends AnotherRegistry implements RegistryInterface
{

    /**
     * @var RegistryInterface
     */
    protected $registry;

    /**
     * @var AnotherRegistryInterface
     */
    protected $anotherRegistry;

    /**
     * AnotherRegistryAdapter constructor.
     * @param RegistryInterface $registry
     */
    public function __construct(RegistryInterface $registry)
    {
        $this->registry = $registry;
    }

    public function setFirstValue(string $firstValue)
    {
        $this->setKey((int)$firstValue);
    }

    public function setSecondValue(string $secondValue)
    {
        $this->setSlug((int)$secondValue);
    }

    /**
     * @return string
     */
    public function getFirstValue(): string
    {
        return (string)$this->getKey();
    }

    /**
     * @return string
     */
    public function getSecondValue(): string
    {
        return (string)$this->getSlug();
    }

    /**
     * @param mixed $key
     */
    protected function setKey($key)
    {
        $this->key = $key;
    }

    /**
     * @param mixed $slug
     */
    protected function setSlug($slug)
    {
        $this->slug = $slug;
    }
}