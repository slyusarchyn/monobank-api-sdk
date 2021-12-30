<?php

namespace Slyusarchyn\Monobank\Dto\Interfaces;

use DateTime;

/**
 * Interface StatementInterface
 * @package Slyusarchyn\Monobank\Dto\Interfaces
 */
interface StatementInterface extends Arrayable
{
    /**
     * @return string
     */
    public function getId(): string;

    /**
     * @param string $id
     * @return $this
     */
    public function setId(string $id): self;

    /**
     * @return DateTime
     */
    public function getTime(): DateTime;

    /**
     * @param DateTime $time
     * @return $this
     */
    public function setTime(DateTime $time): self;

    /**
     * @return string
     */
    public function getDescription(): string;

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription(string $description): self;

    /**
     * @return int
     */
    public function getMcc(): int;

    /**
     * @param int $mcc
     * @return $this
     */
    public function setMcc(int $mcc): self;

    /**
     * @return bool
     */
    public function isHold(): bool;

    /**
     * @param bool $hold
     * @return $this
     */
    public function setHold(bool $hold): self;

    /**
     * @return int
     */
    public function getAmount(): int;

    /**
     * @param int $amount
     * @return $this
     */
    public function setAmount(int $amount): self;

    /**
     * @return int
     */
    public function getOperationAmount(): int;

    /**
     * @param int $operationAmount
     * @return $this
     */
    public function setOperationAmount(int $operationAmount): self;

    /**
     * @return int
     */
    public function getCurrencyCode(): int;

    /**
     * @param int $currencyCode
     * @return $this
     */
    public function setCurrencyCode(int $currencyCode): self;

    /**
     * @return int
     */
    public function getCommissionRate(): int;

    /**
     * @param int $commissionRate
     * @return $this
     */
    public function setCommissionRate(int $commissionRate): self;

    /**
     * @return int
     */
    public function getCashbackAmount(): int;

    /**
     * @param int $cashbackAmount
     * @return $this
     */
    public function setCashbackAmount(int $cashbackAmount): self;

    /**
     * @return int
     */
    public function getBalance(): int;

    /**
     * @param int $balance
     * @return $this
     */
    public function setBalance(int $balance): self;

    /**
     * @param array $data
     * @return static
     */
    public static function fromResponse(array $data): self;
}