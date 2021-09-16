<?php

interface PaymentMethod
{
    public function enterCredentials(): void;
}