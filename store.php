<?php
// ieroču veikals
//ieroči
//licences
//ierocim ir lodes lidojuma trajektorija


class Store
{
    protected array $storedGuns = [];

    public function __construct(array $gunsToStore)
    {
        foreach ($gunsToStore as $gun) {
            $this->addGun($gun);
        }
    }

    private function addGun(Gun $gun): void
    {
        $this->storedGuns[] = $gun;
    }

}

