<?php

class Paypal extends PaymentMethod
{
    private string $address;
    private string $password;

    public function __toString(): string
    {
        return 'Paypal';
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getPassword(): string
    {
        return $this->password;
    }
    public function enterCredentials(): void
    {
        $this->address = trim(readline('Enter Paypal address : ')) . PHP_EOL;
        $this->password = trim(readline('Enter Paypal password : ')) . PHP_EOL;;
    }
}