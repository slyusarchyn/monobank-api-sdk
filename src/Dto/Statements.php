<?php

namespace Slyusarchyn\Monobank\Dto;

use Slyusarchyn\Monobank\Dto\Interfaces\StatementInterface;
use Slyusarchyn\Monobank\Dto\Interfaces\StatementsInterface;

/**
 * Class Statements
 * @package Slyusarchyn\Monobank\Dto
 */
class Statements implements StatementsInterface
{
    private array $items;

    /**
     * @param array $data
     * @return static
     */
    public static function fromResponse(array $data): self
    {
        $statements = new self;

        $statements->items = array_map(function (array $statement) {
            return Statement::fromResponse($statement);
        }, $data);

        return $statements;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return array_map(function (StatementInterface $item) {
            return $item->toArray();
        }, $this->items);
    }
}
