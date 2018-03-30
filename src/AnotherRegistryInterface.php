<?php
/**
 * Date: 30.03.18
 * Time: 12:56
 *
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Structural\Adapter;


interface AnotherRegistryInterface
{

    /**
     * @return int
     */
    public function getKey(): int;

    /**
     * @return int
     */
    public function getSlug(): int;
}