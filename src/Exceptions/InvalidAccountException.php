<?php

namespace Slyusarchyn\Monobank\Exceptions;

use Exception;
use Slyusarchyn\Monobank\Exceptions\Interfaces\MonobankExceptionInterface;

/**
 * Class InvalidAccountException
 * @package Slyusarchyn\Monobank\Exceptions
 */
class InvalidAccountException extends Exception implements MonobankExceptionInterface
{
}
