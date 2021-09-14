<?php

class MachineGun extends Gun
{
    protected int $bulletType;

    public function __construct(string $name, int $bulletType = 50)
    {
        $this->bulletType = $bulletType;
        parent::__construct($name);
    }
    public function getLicense(): string
    {
        return 'MG-'.parent::getLicense();
    }
    public function bulletTrajectory() :int
    {
        return $this->bulletType*111;
    }
    public function sound() :String
    {
        return 'trrrr ' ;
    }
}