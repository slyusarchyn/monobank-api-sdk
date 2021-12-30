<?php

namespace Slyusarchyn\Monobank\Dto\Interfaces;

/**
 * Interface CurrenciesInterface
 * @package Slyusarchyn\Monobank\Dto\Interfaces
 */
interface CurrenciesInterface extends Arrayable
{
    /**
     * @param array $data
     * @return static
     */
    public static function fromResponse(array $data): self;

    /**
     * @param CurrencyInterface $currency
     * @return $this
     */
    public function push(CurrencyInterface $currency): self;

    /**
     * @param int               $key
     * @param CurrencyInterface $currency
     * @return $this
     */
    public function put(int $key, CurrencyInterface $currency): self;

    /**
     * @param int $key
     * @return $this|null
     */
    public function get(int $key): ?CurrencyInterface;
}
