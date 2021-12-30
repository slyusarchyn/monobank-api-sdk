<?php

namespace Slyusarchyn\Monobank\Exceptions;

use Exception;
use Slyusarchyn\Monobank\Exceptions\Interfaces\MonobankExceptionInterface;

/**
 * Class TooManyRequestsException
 * @package Slyusarchyn\Monobank\Exceptions
 */
class TooManyRequestsException extends Exception implements MonobankExceptionInterface
{
}
