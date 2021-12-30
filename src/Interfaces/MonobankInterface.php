<?php

namespace Slyusarchyn\Monobank\Interfaces;

use DateTime;
use Slyusarchyn\Monobank\Dto\Interfaces\ClientInfoInterface;
use Slyusarchyn\Monobank\Dto\Interfaces\CurrenciesInterface;
use Slyusarchyn\Monobank\Dto\Interfaces\StatementsInterface;
use Slyusarchyn\Monobank\Dto\Interfaces\WebHookUrlInterface;

/**
 * Interface MonobankInterface
 * @package Slyusarchyn\Monobank\Interfaces
 */
interface MonobankInterface
{
    const BASE_URL = 'https://api.monobank.ua';

    /**
     * @return CurrenciesInterface
     */
    public function getCurrencies(): CurrenciesInterface;

    /**
     * @return ClientInfoInterface
     */
    public function getClientInfo(): ClientInfoInterface;

    /**
     * @param WebHookUrlInterface $webHookUrl
     * @return bool
     */
    public function setWebhook(WebHookUrlInterface $webHookUrl): bool;

    /**
     * @param string   $accountId
     * @param DateTime $from
     * @param DateTime $to
     * @return StatementsInterface
     */
    public function getStatement(string $accountId, DateTime $from, DateTime $to): StatementsInterface;
}