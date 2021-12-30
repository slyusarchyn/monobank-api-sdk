<?php

namespace Slyusarchyn\Monobank\Exceptions;

use Exception;
use Slyusarchyn\Monobank\Exceptions\Interfaces\MonobankExceptionInterface;

/**
 * Class UnknownTokenException
 * @package Slyusarchyn\Monobank\Exceptions
 */
class UnknownTokenException extends Exception implements MonobankExceptionInterface
{
}
