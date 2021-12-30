<?php

namespace Slyusarchyn\Monobank\Dto\Interfaces;

/**
 * Interface AccountsInterface
 * @package Slyusarchyn\Monobank\Dto\Interfaces
 */
interface AccountsInterface extends Arrayable
{
    /**
     * @param array $data
     * @return static
     */
    public static function fromResponse(array $data): self;

    /**
     * @param AccountInterface $currency
     * @return $this
     */
    public function push(AccountInterface $currency): self;

    /**
     * @param int              $key
     * @param AccountInterface $currency
     * @return $this
     */
    public function put(int $key, AccountInterface $currency): self;

    /**
     * @param int $key
     * @return $this|null
     */
    public function get(int $key): ?AccountInterface;
}