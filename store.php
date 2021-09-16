<?php
// ieroču veikals
//ieroči
//licences
//ierocim ir lodes lidojuma trajektorija


class Store
{
    private array $storedGuns = [];

    public function __construct(array $gunsToStore)
    {
        foreach ($gunsToStore as $storedGun) {
            $this->addGun($storedGun);
        }
    }

    public function addGun(storedGun $storedGun): void
    {
        $this->storedGuns[] = $storedGun;
    }

    public function getStoredGuns(): array
    {
        return $this->storedGuns;
    }

    public function makePayment(PaymentMethod $paymentMethod): bool
    {
        //nonemu naudu -- ielieku store cashier
        return true;

    }

    public function giveGun(storedGun $storedGun): Gun
    {
        return $storedGun->getGun();
    }

    public function checkIfGunIsStored(string $searchGunName): ?StoredGun
    {
        foreach ($this->storedGuns as $storedGun) {
            $gun = $storedGun->getGun();
            if (strtolower($gun->getName()) === strtolower($searchGunName)) return $storedGun;

        }
        return null;
    }
}

