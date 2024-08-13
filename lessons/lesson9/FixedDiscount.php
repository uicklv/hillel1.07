<?php

namespace lesson9;

class FixedDiscount implements Discount
{
    private int $limit;
    private int $discount;

    public function __construct(int $limit, int $discount)
    {
        $this->setLimit($limit);
        $this->setDiscount($discount);
    }

    public function applyDiscount(float $price): float
    {
        if ($price > $this->getLimit()) {
            $price -= $this->discount;
        }

        return $price;
    }

    /**
     * @param int $discount
     */
    public function setDiscount(int $discount): void
    {
        if ($discount <= 0) {
            throw new Exception('invalid Discount');
        }
        $this->discount = $discount;
    }

    /**
     * @param int $limit
     */
    public function setLimit(int $limit): void
    {
        if ($limit <= 0) {
            throw new Exception('invalid Discount');
        }
        $this->limit = $limit;
    }

    /**
     * @return int
     */
    public function getDiscount(): int
    {
        return $this->discount;
    }

    /**
     * @return int
     */
    public function getLimit(): int
    {
        return $this->limit;
    }
}