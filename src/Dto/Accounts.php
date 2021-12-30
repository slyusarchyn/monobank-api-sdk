<?php

namespace Slyusarchyn\Monobank\Dto;

use Slyusarchyn\Monobank\Dto\Interfaces\AccountInterface;
use Slyusarchyn\Monobank\Dto\Interfaces\AccountsInterface;

/**
 * Class Accounts
 * @package Slyusarchyn\Monobank\Dto
 */
class Accounts implements AccountsInterface
{
    /**
     * @var AccountInterface[]
     */
    private array $items;

    /**
     * @param AccountInterface $currency
     * @return $this|AccountsInterface
     */
    public function push(AccountInterface $currency): AccountsInterface
    {
        $this->items[] = $currency;

        return $this;
    }

    /**
     * @param int              $key
     * @param AccountInterface $currency
     * @return $this|AccountsInterface
     */
    public function put(int $key, AccountInterface $currency): AccountsInterface
    {
        $this->items[$key] = $currency;

        return $this;
    }

    /**
     * @param int $key
     * @return AccountInterface|null
     */
    public function get(int $key): ?AccountInterface
    {
        return $this->items[$key] ?? null;
    }

    /**
     * @param array $data
     * @return AccountsInterface
     */
    public static function fromResponse(array $data): AccountsInterface
    {
        $accounts = new self;

        $accounts->items = array_map(function (array $account) {
            return Account::fromResponse($account);
        }, $data);

        return $accounts;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return array_map(function (AccountInterface $item) {
            return $item->toArray();
        }, $this->items);
    }
}
