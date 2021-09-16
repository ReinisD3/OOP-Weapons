<?php

require_once 'gun.php';
require_once 'pistol.php';
require_once 'machine-gun.php';
require_once 'explosive.php';
require_once 'stored-gun.php';
require_once 'store.php';
require_once 'store-display.php';
require_once 'PaymentMethod.php';
require_once 'Paypal.php';
require_once 'CreditCard.php';



$gunsToStore = [
    new StoredGun(new Pistol('Eagle'),247,5),
    new StoredGun(new MachineGun('AK47'),747,3),
    new StoredGun(new Pistol('Glock', 4),111,10),
    new StoredGun(new Explosive('Grenade'),99,7)
];
$gunStoreDisplay = new StoreDisplay(new Store($gunsToStore));
$gunStoreDisplay->open();