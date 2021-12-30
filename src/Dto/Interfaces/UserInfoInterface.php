<?php

namespace Slyusarchyn\Monobank\Dto\Interfaces;

/**
 * Interface UserInfoInterface
 * @package Slyusarchyn\Monobank\Dto\Interfaces
 */
interface UserInfoInterface
{
    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name): self;

    /**
     * @return AccountsInterface
     */
    public function getAccounts(): AccountsInterface;

    /**
     * @param AccountsInterface $accounts
     * @return $this
     */
    public function setAccount(AccountsInterface $accounts): self;
}