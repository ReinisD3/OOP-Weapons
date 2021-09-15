<?php

abstract class PaymentMethod
{
    abstract public function enterCredentials(): void;
}