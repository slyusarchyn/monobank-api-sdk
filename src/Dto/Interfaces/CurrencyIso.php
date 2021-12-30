<?php

namespace Slyusarchyn\Monobank\Dto\Interfaces;

/**
 * Interface CurrencyIso
 * @package Slyusarchyn\Monobank\Dto\Interfaces
 */
interface CurrencyIso extends Arrayable
{
    /**
     * @param string $currencyName
     * @return $this
     */
    public function setCurrencyByName(string $currencyName): self;

    /**
     * @param int $currencyCode
     * @return $this
     */
    public function setCurrencyByCode(int $currencyCode): self;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return int
     */
    public function getCode(): int;
}
