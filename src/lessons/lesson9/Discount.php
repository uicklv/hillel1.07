<?php

namespace lesson9;
interface Discount
{
    public function applyDiscount(float $price): float;
}