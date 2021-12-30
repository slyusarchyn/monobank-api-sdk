<?php

namespace Slyusarchyn\Monobank\Dto;

use Slyusarchyn\Monobank\Dto\Interfaces\WebHookUrlInterface;

/**
 * Class WebHookUrl
 * @package Slyusarchyn\Monobank\Dto
 */
class WebHookUrl implements WebHookUrlInterface
{
    /**
     * @var string
     */
    private string $url;

    /**
     * WebHookUrl constructor.
     * @param string|null $url
     */
    public function __construct(string $url)
    {
        $this->setUrl($url);
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return $this|WebHookUrlInterface
     */
    public function setUrl(string $url): WebHookUrlInterface
    {
        $this->url = $url;

        return $this;
    }
}
