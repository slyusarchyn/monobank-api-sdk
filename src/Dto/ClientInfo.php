<?php

namespace Slyusarchyn\Monobank\Dto;

use Slyusarchyn\Monobank\Dto\Interfaces\AccountsInterface;
use Slyusarchyn\Monobank\Dto\Interfaces\ClientInfoInterface;

/**
 * Class ClientInfo
 * @package Slyusarchyn\Monobank\Dto
 */
class ClientInfo implements ClientInfoInterface
{
    /**
     * @var string
     */
    private string $clientId;
    /**
     * @var string
     */
    private string $name;
    /**
     * @var string|null
     */
    private ?string $webHookUrl;
    /**
     * @var string
     */
    private string $permissions;
    /**
     * @var AccountsInterface
     */
    private AccountsInterface $accounts;

    /**
     * @param array $data
     * @return ClientInfoInterface
     */
    public static function fromResponse(array $data): ClientInfoInterface
    {
        $accounts = Accounts::fromResponse($data['accounts']);

        return (new self)->setClientId($data['clientId'])
            ->setName($data['name'])
            ->setWebHookUrl($data['webHookUrl'])
            ->setPermissions($data['permissions'])
            ->setAccounts($accounts);
    }

    /**
     * @return string
     */
    public function getClientId(): string
    {
        return $this->clientId;
    }

    /**
     * @param string $clientId
     * @return $this
     */
    public function setClientId(string $clientId): self
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getFirstName(): string
    {
        return explode(' ', $this->getName())[0];
    }

    public function getLastName(): string
    {
        return explode(' ', $this->getName())[1];
    }

    /**
     * @return string|null
     */
    public function getWebHookUrl(): ?string
    {
        return $this->webHookUrl;
    }

    /**
     * @param string|null $webHookUrl
     * @return $this
     */
    public function setWebHookUrl(?string $webHookUrl): self
    {
        $this->webHookUrl = $webHookUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getPermissions(): string
    {
        return $this->permissions;
    }

    /**
     * @param string $permissions
     * @return $this
     */
    public function setPermissions(string $permissions): self
    {
        $this->permissions = $permissions;

        return $this;
    }

    /**
     * @return AccountsInterface
     */
    public function getAccounts(): AccountsInterface
    {
        return $this->accounts;
    }

    /**
     * @param AccountsInterface $accounts
     * @return $this
     */
    public function setAccounts(AccountsInterface $accounts): self
    {
        $this->accounts = $accounts;

        return $this;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'clientId'    => $this->getClientId(),
            'name'        => $this->getName(),
            'webHookUrl'  => $this->getWebHookUrl(),
            'permissions' => $this->getPermissions(),
            'accounts'    => $this->getAccounts()->toArray(),
        ];
    }
}
