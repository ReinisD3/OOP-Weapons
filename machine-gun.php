<?php

class MachineGun extends Gun
{
    protected int $bullet = 50;

    public function getLicense(): string
    {
        return 'MG -'.parent::getLicense();
    }
    public function bulletTrajectory() :int
    {
        return $this->bullet;
    }
    public function sound() :String
    {
        return 'trrrrrrrrrr ' ;
    }
}