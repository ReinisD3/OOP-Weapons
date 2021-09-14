<?php

class Gun
{
    protected string $name;
    protected int $bulletType;

    public function __construct(string $name, int $bulletType = 2)
    {
        $this->name = $name;
        $this->bulletType = $bulletType;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getLicense(): string
    {
        return strval(rand(1, 1000));
    }

    public function bulletTrajectory(): int
    {
        return $this->bulletType;
    }

    public function sound()
    {
        return 'pif paf ';
    }
}