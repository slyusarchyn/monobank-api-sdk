<?php

namespace Slyusarchyn\Monobank\Dto;

use Slyusarchyn\Monobank\Dto\Interfaces\CurrenciesInterface;
use Slyusarchyn\Monobank\Dto\Interfaces\CurrencyInterface;

/**
 * Class Currencies
 * @package Slyusarchyn\Monobank\Dto
 */
class Currencies implements CurrenciesInterface
{
    /**
     * @var CurrencyInterface[]
     */
    private array $items;

    /**
     * @param CurrencyInterface $currency
     * @return $this|CurrenciesInterface
     */
    public function push(CurrencyInterface $currency): CurrenciesInterface
    {
        $this->items[] = $currency;

        return $this;
    }

    /**
     * @param int               $key
     * @param CurrencyInterface $currency
     * @return $this|CurrenciesInterface
     */
    public function put(int $key, CurrencyInterface $currency): CurrenciesInterface
    {
        $this->items[$key] = $currency;

        return $this;
    }

    /**
     * @param int $key
     * @return CurrencyInterface|null
     */
    public function get(int $key): ?CurrencyInterface
    {
        return $this->items[$key] ?? null;
    }

    /**
     * @param array $data
     * @return CurrenciesInterface
     */
    public static function fromResponse(array $data): CurrenciesInterface
    {
        $currencies = new self;

        $currencies->items = array_map(function (array $currency) {
            return Currency::fromResponse($currency);
        }, $data);

        return $currencies;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return array_map(function (CurrencyInterface $item) {
            return $item->toArray();
        }, $this->items);
    }
}
