<?php

interface PaymentMethod
{
    public function enterCredentials(): void;


    public function __toString(): string;

}



