<?php

namespace Slyusarchyn\Monobank\Dto\Interfaces;

/**
 * Interface WebHookUrlInterface
 * @package Slyusarchyn\Monobank\Dto\Interfaces
 */
interface WebHookUrlInterface
{
    /**
     * @return string
     */
    public function getUrl(): string;

    /**
     * @param string $url
     * @return $this
     */
    public function setUrl(string $url): self;
}
