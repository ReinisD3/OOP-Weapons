<?php

class Explosive extends Gun
{
    protected int $bulletType;

    public function __construct(string $name, int $bulletType = 999)
    {
        $this->bulletType = $bulletType;
        parent::__construct($name);
    }

    public function getLicense(): string
    {
        return 'X-'.parent::getLicense();
    }
    public function bulletTrajectory():int
    {
        return pow($this->bulletType,3);
    }
    public function sound() : string
    {
        return 'KABOOM ';
    }
}