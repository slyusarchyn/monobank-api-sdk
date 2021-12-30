<?php

namespace Slyusarchyn\Monobank\Exceptions;

use Psr\Http\Message\ResponseInterface;

/**
 * Class Factory
 * @package Slyusarchyn\Monobank\Exceptions
 */
class Factory
{
    private const INVALID_ACCOUNT = 'invalid account';

    private const UNKNOWN_TOKEN = 'Unknown \'X-Token\'';

    private const TOO_MANY_REQUESTS = 'Too many requests';

    private const INTERNAL_ERROR = 'internal error';

    /**
     * @param ResponseInterface $response
     * @return InternalErrorException|InvalidAccountException|MonobankException|TooManyRequestsException|UnknownTokenException
     */
    public static function createFromResponse(ResponseInterface $response)
    {
        $errorDescription = json_decode($response->getBody()->getContents(), true)['errorDescription'] ?? 'Unknown error';

        switch ($errorDescription) {
            case self::INVALID_ACCOUNT:
                return new InvalidAccountException($errorDescription);
            case self::UNKNOWN_TOKEN:
                return new UnknownTokenException($errorDescription);
            case self::TOO_MANY_REQUESTS:
                return new TooManyRequestsException($errorDescription);
            case self::INTERNAL_ERROR:
                return new InternalErrorException($errorDescription);
            default:
                return new MonobankException($errorDescription);
        }
    }
}