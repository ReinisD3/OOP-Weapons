<?php

class StoredGun
{
    private Gun $gun;
    private float $price;
    private int $quantity;

    public function __construct(Gun $gun, float $price, int $quantity)
    {
        $this->gun = $gun;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getGun(): Gun
    {
        return $this->gun;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): void
    {
        $this->quantity -= $quantity;
    }

}