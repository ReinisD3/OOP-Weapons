<?php

use JetBrains\PhpStorm\Pure;

class Pistol extends Gun
{
    protected int $bulletType ;

    public function __construct(string $name, int $bulletType = 2)
    {
        $this->bulletType = $bulletType;
        parent::__construct($name);
    }

    public function getLicense(): string
    {
        return 'P-'.parent::getLicense();
    }
    public function bulletTrajectory():int
    {
       return $this->bulletType*100;
    }
    public function sound() : string
    {
        return 'pif paf ';
    }
}