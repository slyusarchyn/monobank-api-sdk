<?php

namespace Slyusarchyn\Monobank\Dto\Interfaces;

/**
 * Interface AccountInterface
 * @package Slyusarchyn\Monobank\Dto\Interfaces
 */
interface AccountInterface extends Arrayable
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
     * @return int
     */
    public function getCurrencyCode(): int;

    /**
     * @param int $currencyCode
     * @return $this
     */
    public function setCurrencyCode(int $currencyCode): self;

    /**
     * @return string
     */
    public function getCashbackType(): string;

    /**
     * @param string $cashbackType
     * @return $this
     */
    public function setCashbackType(string $cashbackType): self;

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
     * @return int
     */
    public function getCreditLimit(): int;

    /**
     * @param int $creditLimit
     * @return $this
     */
    public function setCreditLimit(int $creditLimit): self;

    /**
     * @return array
     */
    public function getMaskedPan(): array;

    /**
     * @param array $maskedPan
     * @return $this
     */
    public function setMaskedPan(array $maskedPan): self;

    /**
     * @return string
     */
    public function getType(): string;

    /**
     * @param string $type
     * @return $this
     */
    public function setType(string $type): self;

    /**
     * @return string
     */
    public function getIban(): string;

    /**
     * @param string $iban
     * @return $this
     */
    public function setIban(string $iban): self;
}