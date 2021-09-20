<?php

class Bullet implements Product
{
    private string $name;
    private int $weight;
    private int $size;
    private int $damage;

    public function __construct(string $name, int $weight , int $size, int $damage)
    {

        $this->name = $name;
        $this->weight = $weight;
        $this->size = $size;
        $this->damage = $damage;
    }

    public function getName(): string
    {
        return $this->name;
    }
}