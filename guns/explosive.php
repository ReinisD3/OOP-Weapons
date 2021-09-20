<?php

class Explosive extends Gun
{

    public function __construct(string $name, int $bulletType = 999)
    {
        parent::__construct($name, $bulletType);
    }

    public function getLicense(): string
    {
        return 'X-' . parent::getLicense();
    }

    public function bulletTrajectory(): int
    {
        return pow($this->bulletType, 3);
    }

    public function sound(): string
    {
        return 'KABOOM ';
    }
}