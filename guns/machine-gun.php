<?php

class MachineGun extends Gun
{
    public function __construct(string $name, int $bulletType = 50)
    {
        parent::__construct($name, $bulletType);
    }

    public function getLicense(): string
    {
        return 'MG-' . parent::getLicense();
    }

    public function bulletTrajectory(): int
    {
        return $this->bulletType * 111;
    }

    public function sound(): string
    {
        return 'trrrr ';
    }
}