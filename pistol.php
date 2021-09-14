<?php

class Pistol extends Gun
{
    protected int $bullet = 2;

    public function getLicense(): string
    {
        return 'P -'.parent::getLicense();
    }
    public function bulletTrajectory():int
    {
       return $this->bullet;
    }
    public function sound() : string
    {
        return 'Pif Paf Paf ';
    }
}