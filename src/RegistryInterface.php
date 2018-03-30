<?php
/**
 * Date: 30.03.18
 * Time: 12:54
 *
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Structural\Adapter;

/**
 * Interface RegistryInterface
 * @package Structural\Adapter
 */
interface RegistryInterface
{

    /**
     * @param string $firstValue
     */
    public function setFirstValue(string $firstValue);

    /**
     * @param string $secondValue
     */
    public function setSecondValue(string $secondValue);

    /**
     * @return string
     */
    public function getFirstValue(): string;

    /**
     * @return string
     */
    public function getSecondValue(): string;
}