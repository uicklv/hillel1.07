<?php

interface Discount
{
    public function applyDiscount(float $price): float;
}