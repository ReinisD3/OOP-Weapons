<?php

class Gun
{
    protected string $name;
    protected int $bullet = 10; //standart bullet

    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getLicense(): string
    {
        return strval(rand(1,1000));
    }
    public function bulletTrajectory():int
    {
        return $this->bullet;
    }
    public function sound()
    {
        return 'bum bum';
    }
}