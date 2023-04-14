<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Structural\Adapter;

class AnotherRegistry implements AnotherRegistryInterface
{
    private array $data;

    /**
     * Sets data
     * ---------
     * Устанавливает данные
     *
     * @param  string $item
     * @return void
     */
    public function setData(string $item)
    {
        $this->data[] = $item;
    }

    /**
     * Receives data
     * -------------
     * Получает данные
     *
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }
}
