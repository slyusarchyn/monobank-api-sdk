<?php

namespace Slyusarchyn\Monobank;

use DateTime;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\RequestInterface;
use Slyusarchyn\Monobank\Dto\ClientInfo;
use Slyusarchyn\Monobank\Dto\Currencies;
use Slyusarchyn\Monobank\Dto\Interfaces\ClientInfoInterface;
use Slyusarchyn\Monobank\Dto\Interfaces\CurrenciesInterface;
use Slyusarchyn\Monobank\Dto\Interfaces\StatementsInterface;
use Slyusarchyn\Monobank\Dto\Interfaces\WebHookUrlInterface;
use Slyusarchyn\Monobank\Dto\Statements;
use Slyusarchyn\Monobank\Exceptions\Factory;
use Slyusarchyn\Monobank\Interfaces\MonobankInterface;

/**
 * Class MonobankSDK
 * @package Slyusarchyn\Monobank
 */
class MonobankSDK implements MonobankInterface
{
    /**
     * @var ClientInterface
     */
    private ClientInterface $client;

    /**
     * Monobank constructor.
     * @param ClientInterface $client
     */
    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * @return CurrenciesInterface
     * @throws Exceptions\InternalErrorException
     * @throws Exceptions\InvalidAccountException
     * @throws Exceptions\MonobankException
     * @throws Exceptions\TooManyRequestsException
     * @throws Exceptions\UnknownTokenException
     * @throws GuzzleException
     */
    public function getCurrencies(): CurrenciesInterface
    {
        $request = new Request(
            "GET",
            "/bank/currency"
        );

        return Currencies::fromResponse($this->makeRequest($request));
    }

    /**
     * @return ClientInfoInterface
     * @throws Exceptions\InternalErrorException
     * @throws Exceptions\InvalidAccountException
     * @throws Exceptions\MonobankException
     * @throws Exceptions\TooManyRequestsException
     * @throws Exceptions\UnknownTokenException
     * @throws GuzzleException
     */
    public function getClientInfo(): ClientInfoInterface
    {
        $request = new Request(
            "GET",
            "/personal/client-info"
        );

        return ClientInfo::fromResponse($this->makeRequest($request));
    }

    /**
     * @param WebHookUrlInterface $webHookUrl
     * @return bool
     * @throws Exceptions\InternalErrorException
     * @throws Exceptions\InvalidAccountException
     * @throws Exceptions\MonobankException
     * @throws Exceptions\TooManyRequestsException
     * @throws Exceptions\UnknownTokenException
     * @throws GuzzleException
     */
    public function setWebhook(WebHookUrlInterface $webHookUrl): bool
    {
        $this->makeRequest(
            new Request(
                "POST",
                "/personal/webhook",
                [
                    "Content-Type" => "application/json"
                ],
                json_encode(['webHookUrl' => $webHookUrl->getUrl()])
            )
        );

        return true;
    }

    /**
     * @param string        $accountId
     * @param DateTime      $from
     * @param DateTime|null $to
     * @return StatementsInterface
     * @throws Exceptions\InternalErrorException
     * @throws Exceptions\InvalidAccountException
     * @throws Exceptions\MonobankException
     * @throws Exceptions\TooManyRequestsException
     * @throws Exceptions\UnknownTokenException
     * @throws GuzzleException
     */
    public function getStatement(string $accountId, DateTime $from, DateTime $to = null): StatementsInterface
    {
        $request = new Request(
            "GET",
            sprintf("/personal/statement/%s/%s/%s", $accountId, $from->getTimestamp(), $to ? $to->getTimestamp() : '')
        );

        return Statements::fromResponse($this->makeRequest($request));
    }

    /**
     * @param RequestInterface $request
     * @return array
     * @throws Exceptions\InternalErrorException
     * @throws Exceptions\InvalidAccountException
     * @throws Exceptions\MonobankException
     * @throws Exceptions\TooManyRequestsException
     * @throws Exceptions\UnknownTokenException
     * @throws GuzzleException
     */
    private function makeRequest(RequestInterface $request): array
    {
        try {
            $response = $this->client->send($request);
        } catch (RequestException $exception) {
            throw Factory::createFromResponse($exception->getResponse());
        }

        return json_decode($response->getBody(), true);
    }
}