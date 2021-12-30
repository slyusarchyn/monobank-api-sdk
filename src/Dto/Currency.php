<?php

namespace Slyusarchyn\Monobank\Dto;

use DateTime;
use Slyusarchyn\Monobank\Dto\Interfaces\CurrencyInterface;

/**
 * Class Currency
 * @package Slyusarchyn\Monobank\Dto
 */
class Currency implements CurrencyInterface
{
    /**
     * @var int
     */
    private int $currencyCodeA;

    /**
     * @var int
     */
    private int $currencyCodeB;

    /**
     * @var DateTime
     */
    private DateTime $date;

    /**
     * @var float|null
     */
    private ?float $rateBuy;

    /**
     * @var float|null
     */
    private ?float $rateSell;

    /**
     * @var float|null
     */
    private ?float $rateCross;

    /**
     * @return int
     */
    public function getCurrencyCodeA(): int
    {
        return $this->currencyCodeA;
    }

    /**
     * @param int $currencyCodeA
     * @return $this
     */
    public function setCurrencyCodeA(int $currencyCodeA): Currency
    {
        $this->currencyCodeA = $currencyCodeA;

        return $this;
    }

    /**
     * @return int
     */
    public function getCurrencyCodeB(): int
    {
        return $this->currencyCodeB;
    }

    /**
     * @param int $currencyCodeB
     * @return $this
     */
    public function setCurrencyCodeB(int $currencyCodeB): Currency
    {
        $this->currencyCodeB = $currencyCodeB;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDate(): DateTime
    {
        return $this->date;
    }

    /**
     * @param DateTime $date
     * @return $this
     */
    public function setDate(DateTime $date): Currency
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getRateBuy(): ?float
    {
        return $this->rateBuy;
    }

    /**
     * @param float|null $rateBuy
     * @return $this
     */
    public function setRateBuy(?float $rateBuy): Currency
    {
        $this->rateBuy = $rateBuy;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getRateSell(): ?float
    {
        return $this->rateSell;
    }

    /**
     * @param float|null $rateSell
     * @return $this
     */
    public function setRateSell(?float $rateSell): Currency
    {
        $this->rateSell = $rateSell;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getRateCross(): ?float
    {
        return $this->rateCross;
    }

    /**
     * @param float|null $rateCross
     * @return $this
     */
    public function setRateCross(?float $rateCross): Currency
    {
        $this->rateCross = $rateCross;

        return $this;
    }

    /**
     * @param array $data
     * @return CurrencyInterface
     */
    public static function fromResponse(array $data): CurrencyInterface
    {
        return (new self)->setCurrencyCodeA($data['currencyCodeB'])
            ->setCurrencyCodeB($data['currencyCodeB'])
            ->setDate((new DateTime)->setTimestamp($data['date']))
            ->setRateBuy($data['rateBuy'] ?? null)
            ->setRateSell($data['rateSell'] ?? null)
            ->setRateCross($data['rateCross'] ?? null);
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'currencyCodeA' => $this->getCurrencyCodeA(),
            'currencyCodeB' => $this->getCurrencyCodeB(),
            'date'          => $this->getDate()->getTimestamp(),
            'rateBuy'       => $this->getRateBuy(),
            'rateSell'      => $this->getRateSell(),
            'rateCross'     => $this->getRateCross(),
        ];
    }
}
