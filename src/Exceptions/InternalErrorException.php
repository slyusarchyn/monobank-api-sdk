<?php

namespace Slyusarchyn\Monobank\Exceptions;

use Exception;
use Slyusarchyn\Monobank\Exceptions\Interfaces\MonobankExceptionInterface;

/**
 * Class InternalErrorException
 * @package Slyusarchyn\Monobank\Exceptions
 */
class InternalErrorException extends Exception implements MonobankExceptionInterface
{
}
