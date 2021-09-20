<?php

require_once 'guns/gun.php';
require_once 'guns/pistol.php';
require_once 'guns/machine-gun.php';
require_once 'guns/explosive.php';
require_once 'Store/stored-gun.php';
require_once 'Store/store.php';
require_once 'Store/store-display.php';
require_once 'payment-methods/PaymentMethod.php';
require_once 'payment-methods/Paypal.php';
require_once 'payment-methods/CreditCard.php';



$gunsToStore = [
    new StoredGun(new Pistol('Eagle'),247,5),
    new StoredGun(new MachineGun('AK47'),747,3),
    new StoredGun(new Pistol('Glock', 4),111,10),
    new StoredGun(new Explosive('Grenade'),99,7)
];
$gunStoreDisplay = new StoreDisplay(new Store($gunsToStore));
$gunStoreDisplay->open();