<?php

namespace Slyusarchyn\Monobank\Dto\Interfaces;

/**
 * Interface Arrayable
 * @package Slyusarchyn\Monobank\Dto\Interfaces
 */
interface Arrayable
{
    /**
     * @return array
     */
    public function toArray(): array;
}