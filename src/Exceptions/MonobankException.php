<?php

namespace Slyusarchyn\Monobank\Exceptions;

use Exception;
use Slyusarchyn\Monobank\Exceptions\Interfaces\MonobankExceptionInterface;

/**
 * Class MonobankException
 * @package Slyusarchyn\Monobank\Exceptions
 */
class MonobankException extends Exception implements MonobankExceptionInterface
{
}
