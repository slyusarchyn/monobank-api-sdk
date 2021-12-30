<?php

namespace Slyusarchyn\Monobank\Dto\Interfaces;

/**
 * Interface StatementsInterface
 * @package Slyusarchyn\Monobank\Dto\Interfaces
 */
interface StatementsInterface extends Arrayable
{
    /**
     * @param array $data
     * @return static
     */
    public static function fromResponse(array $data): self;
}
