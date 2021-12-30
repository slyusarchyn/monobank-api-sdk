<?php

namespace Slyusarchyn\Monobank\Dto\Interfaces;

/**
 * Interface ClientInfoInterface
 * @package Slyusarchyn\Monobank\Dto\Interfaces
 */
interface ClientInfoInterface extends Arrayable
{
    /**
     * @return string
     */
    public function getClientId(): string;

    /**
     * @param string $clientId
     * @return $this
     */
    public function setClientId(string $clientId): self;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @param string $name
     * @return mixed
     */
    public function setName(string $name);

    /**
     * @return string
     */
    public function getFirstName(): string;

    /**
     * @return string
     */
    public function getLastName(): string;

    /**
     * @return string|null
     */
    public function getWebHookUrl(): ?string;

    /**
     * @param string|null $webHookUrl
     * @return $this
     */
    public function setWebHookUrl(?string $webHookUrl): self;

    /**
     * @return string
     */
    public function getPermissions(): string;

    /**
     * @param string $permissions
     * @return $this
     */
    public function setPermissions(string $permissions): self;

    /**
     * @return AccountsInterface
     */
    public function getAccounts(): AccountsInterface;

    /**
     * @param AccountsInterface $accounts
     * @return $this
     */
    public function setAccounts(AccountsInterface $accounts): self;

    /**
     * @param array $data
     * @return static
     */
    public static function fromResponse(array $data): self;
}
