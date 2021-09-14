<?php

use JetBrains\PhpStorm\Pure;

class Pistol extends Gun
{

    public function __construct(string $name, int $bulletType = 2)
    {
        parent::__construct($name, $bulletType);
    }

    public function getLicense(): string
    {
        return 'P-' . parent::getLicense();
    }

    public function bulletTrajectory(): int
    {
        return $this->bulletType * 100;
    }
}