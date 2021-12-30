<?php

namespace Slyusarchyn\Monobank\Dto;

use DateTime;
use Slyusarchyn\Monobank\Dto\Interfaces\StatementInterface;

/**
 * Class Statement
 * @package Slyusarchyn\Monobank\Dto
 */
class Statement implements StatementInterface
{
    /**
     * @var string
     */
    private string $id;

    /**
     * @var DateTime
     */
    private DateTime $time;

    /**
     * @var string
     */
    private string $description;

    /**
     * @var int
     */
    private int $mcc;

    /**
     * @var bool
     */
    private bool $hold;

    /**
     * @var int
     */
    private int $amount;

    /**
     * @var int
     */
    private int $operationAmount;

    /**
     * @var int
     */
    private int $currencyCode;

    /**
     * @var int
     */
    private int $commissionRate;

    /**
     * @var int
     */
    private int $cashbackAmount;

    /**
     * @var int
     */
    private int $balance;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Statement
     */
    public function setId(string $id): Statement
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getTime(): DateTime
    {
        return $this->time;
    }

    /**
     * @param DateTime $time
     * @return Statement
     */
    public function setTime(DateTime $time): Statement
    {
        $this->time = $time;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Statement
     */
    public function setDescription(string $description): Statement
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return int
     */
    public function getMcc(): int
    {
        return $this->mcc;
    }

    /**
     * @param int $mcc
     * @return Statement
     */
    public function setMcc(int $mcc): Statement
    {
        $this->mcc = $mcc;

        return $this;
    }

    /**
     * @return bool
     */
    public function isHold(): bool
    {
        return $this->hold;
    }

    /**
     * @param bool $hold
     * @return Statement
     */
    public function setHold(bool $hold): Statement
    {
        $this->hold = $hold;

        return $this;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     * @return Statement
     */
    public function setAmount(int $amount): Statement
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return int
     */
    public function getOperationAmount(): int
    {
        return $this->operationAmount;
    }

    /**
     * @param int $operationAmount
     * @return Statement
     */
    public function setOperationAmount(int $operationAmount): Statement
    {
        $this->operationAmount = $operationAmount;

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
     * @return Statement
     */
    public function setCurrencyCode(int $currencyCode): Statement
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * @return int
     */
    public function getCommissionRate(): int
    {
        return $this->commissionRate;
    }

    /**
     * @param int $commissionRate
     * @return Statement
     */
    public function setCommissionRate(int $commissionRate): Statement
    {
        $this->commissionRate = $commissionRate;

        return $this;
    }

    /**
     * @return int
     */
    public function getCashbackAmount(): int
    {
        return $this->cashbackAmount;
    }

    /**
     * @param int $cashbackAmount
     * @return Statement
     */
    public function setCashbackAmount(int $cashbackAmount): Statement
    {
        $this->cashbackAmount = $cashbackAmount;

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
     * @return Statement
     */
    public function setBalance(int $balance): Statement
    {
        $this->balance = $balance;

        return $this;
    }

    /**
     * @param array $data
     * @return StatementInterface
     */
    public static function fromResponse(array $data): StatementInterface
    {
        return (new self)->setId($data['id'])
            ->setTime((new DateTime)->setTimestamp($data['time']))
            ->setDescription($data['description'])
            ->setMcc($data['mcc'])
            ->setHold($data['hold'])
            ->setAmount($data['amount'])
            ->setOperationAmount($data['operationAmount'])
            ->setCurrencyCode($data['currencyCode'])
            ->setCommissionRate($data['commissionRate'])
            ->setCashbackAmount($data['cashbackAmount'])
            ->setBalance($data['balance']);
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'id'              => $this->getId(),
            'date'            => $this->getTime()->getTimestamp(),
            'description'     => $this->getDescription(),
            'mcc'             => $this->getMcc(),
            'hold'            => $this->isHold(),
            'amount'          => $this->getAmount(),
            'operationAmount' => $this->getOperationAmount(),
            'currencyCode'    => $this->getCurrencyCode(),
            'commissionRate'  => $this->getCommissionRate(),
            'cashbackAmount'  => $this->getCashbackAmount(),
            'balance'         => $this->getBalance(),
        ];
    }
}
