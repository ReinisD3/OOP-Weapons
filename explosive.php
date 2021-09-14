<?php

class Explosive extends Gun
{
    protected int $bullet = 999;

    public function getLicense(): string
    {
        return 'X -'.parent::getLicense();
    }
    public function bulletTrajectory():int
    {
        return $this->bullet;
    }
    public function sound() : string
    {
        return 'KABOOM ';
    }
}