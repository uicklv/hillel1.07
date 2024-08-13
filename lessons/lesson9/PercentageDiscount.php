<?php

namespace lesson9;

class PercentageDiscount implements Discount
{
    private int $percentage;

    public function __construct(int $percentage)
    {
        $this->setPercentage($percentage);
    }

    public function applyDiscount(float $price): float
    {
        $price -= $price * ($this->getPercentage() / 100);

        return $price;
    }

    /**
     * @param int $percentage
     */
    public function setPercentage(int $percentage): void
    {
        if ($percentage <= 0 || $percentage > 99) {
            throw new Exception('Invalid percentage value');
        }
        $this->percentage = $percentage;
    }

    /**
     * @return int
     */
    public function getPercentage(): int
    {
        return $this->percentage;
    }


}