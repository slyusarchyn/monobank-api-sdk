<?php

namespace Slyusarchyn\Monobank\Dto;

use Slyusarchyn\Monobank\Dto\Interfaces\AccountInterface;

/**
 * Class Account
 * @package Slyusarchyn\Monobank\Dto
 */
class Account implements AccountInterface
{
    /**
     * @var string
     */
    private string $id;

    /**
     * @var int
     */
    private int $currencyCode;

    /**
     * @var string
     */
    private string $cashbackType;

    /**
     * @var int
     */
    private int $balance;

    /**
     * @var int
     */
    private int $creditLimit;

    /**
     * @var array
     */
    private array $maskedPan;

    /**
     * @var string
     */
    private string $type;

    /**
     * @var string
     */
    private string $iban;

    /**
     * @param $data
     * @return AccountInterface
     */
    public static function fromResponse($data): AccountInterface
    {
        return (new self)->setId($data['id'])
            ->setCurrencyCode($data['currencyCode'])
            ->setCashbackType($data['cashbackType'])
            ->setBalance($data['balance'])
            ->setCreditLimit($data['creditLimit'])
            ->setMaskedPan($data['maskedPan'])
            ->setType($data['type'])
            ->setIban($data['iban']);
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return $this
     */
    public function setId(string $id): Account
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getCurrencyCode(): int
    {
        return $this->currencyCode;
    }

    /**
     * @param int $currencyCode
     * @return $this
     */
    public function setCurrencyCode(int $currencyCode): Account
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getCashbackType(): string
    {
        return $this->cashbackType;
    }

    /**
     * @param string $cashbackType
     * @return $this
     */
    public function setCashbackType(string $cashbackType): Account
    {
        $this->cashbackType = $cashbackType;

        return $this;
    }

    /**
     * @return int
     */
    public function getBalance(): int
    {
        return $this->balance;
    }

    /**
     * @param int $balance
     * @return $this
     */
    public function setBalance(int $balance): Account
    {
        $this->balance = $balance;

        return $this;
    }

    /**
     * @return int
     */
    public function getCreditLimit(): int
    {
        return $this->creditLimit;
    }

    /**
     * @param int $creditLimit
     * @return $this
     */
    public function setCreditLimit(int $creditLimit): Account
    {
        $this->creditLimit = $creditLimit;

        return $this;
    }

    /**
     * @return array
     */
    public function getMaskedPan(): array
    {
        return $this->maskedPan;
    }

    /**
     * @param array $maskedPan
     * @return $this
     */
    public function setMaskedPan(array $maskedPan): Account
    {
        $this->maskedPan = $maskedPan;

        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return $this
     */
    public function setType(string $type): Account
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getIban(): string
    {
        return $this->iban;
    }

    /**
     * @param string $iban
     * @return $this
     */
    public function setIban(string $iban): Account
    {
        $this->iban = $iban;

        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'id'           => $this->getId(),
            'currencyCode' => $this->getCurrencyCode(),
            'cashbackType' => $this->getCashbackType(),
            'balance'      => $this->getBalance(),
            'creditLimit'  => $this->getCreditLimit(),
            'maskedPan'    => $this->getMaskedPan(),
            'type'         => $this->getType(),
            'iban'         => $this->getIban(),
        ];
    }
}
