<?php

class CreditCard extends PaymentMethod
{
    private string $nameSurname;
    private string $cardNumber;
    private string $cardCCV;

    public function __toString(): string
    {
        return 'Credit Card';
    }

    public function getNameSurname(): string
    {
        return $this->nameSurname;
    }

    public function getCardNumber(): string
    {
        return $this->cardNumber;
    }

    public function getCardCCV(): string
    {
        return $this->cardCCV;
    }

    public function enterCredentials(): void
    {
        $this->nameSurname = trim(readline('Enter your Name Surname : ')) . PHP_EOL;
        $this->cardNumber = trim(readline('Enter credit card number : ')) . PHP_EOL;
        $this->cardCCV = trim(readline('Enter credit card CCV : ')) . PHP_EOL;
    }

}