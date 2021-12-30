<?php

namespace Slyusarchyn\Monobank\Dto\Interfaces;

use DateTime;

/**
 * Interface CurrencyInterface
 * @package Slyusarchyn\Monobank\Dto\Interfaces
 */
interface CurrencyInterface extends Arrayable
{
    /**
     * @return int
     */
    public function getCurrencyCodeA(): int;

    /**
     * @param int $currencyCodeA
     * @return $this
     */
    public function setCurrencyCodeA(int $currencyCodeA): self;

    /**
     * @return int
     */
    public function getCurrencyCodeB(): int;

    /**
     * @param int $currencyCodeB
     * @return $this
     */
    public function setCurrencyCodeB(int $currencyCodeB): self;

    /**
     * @return DateTime
     */
    public function getDate(): DateTime;

    /**
     * @param DateTime $date
     * @return $this
     */
    public function setDate(DateTime $date): self;

    /**
     * @return float|null
     */
    public function getRateBuy(): ?float;

    /**
     * @param float|null $rateBuy
     * @return $this
     */
    public function setRateBuy(?float $rateBuy): self;

    /**
     * @return float
     */
    public function getRateSell(): ?float;

    /**
     * @param float|null $rateSell
     * @return $this
     */
    public function setRateSell(?float $rateSell): self;

    /**
     * @return float|null
     */
    public function getRateCross(): ?float;

    /**
     * @param float|null $rateCross
     * @return $this
     */
    public function setRateCross(?float $rateCross): self;

    /**
     * @param array $data
     * @return CurrencyInterface
     */
    public static function fromResponse(array $data): CurrencyInterface;
}