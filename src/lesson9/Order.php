<?php

class Order
{
    private array $items = [];

    private ?Discount $discount = null;

    public function __construct(array $items, ?Discount $discount = null)
    {
        $this->setItems($items);
        $this->setDiscount($discount);
    }

    /**
     * @param Discount|null $discount
     */
    public function setDiscount(?Discount $discount): void
    {
        $this->discount = $discount;
    }

    /**
     * @return Discount|null
     */
    public function getDiscount(): ?Discount
    {
        return $this->discount;
    }

    /**
     * @param array $items
     */
    public function setItems(array $items): void
    {
        if ($items) {
            foreach ($items as $item) {
                if (!isset($item['amount'], $item['price'])) {
                    throw new Exception('Invalid item structure');
                }
            }
        }
        $this->items = $items;
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    public function getFullPrice(): float
    {
        $fullPrice = 0;
        foreach ($this->getItems() as $item) {
            $fullPrice += $item['price'] * $item['amount'];
        }

        $discount = $this->getDiscount();
        if (isset($discount)) {
            $fullPrice = $discount->applyDiscount($fullPrice);
        }

        return $fullPrice;
    }
}