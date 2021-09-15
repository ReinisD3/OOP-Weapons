<?php

require_once 'gun.php';
require_once 'pistol.php';
require_once 'machine-gun.php';
require_once 'explosive.php';
require_once 'store.php';
require_once 'store-display.php';
require_once 'PaymentMethod.php';
require_once 'Paypal.php';
require_once 'CreditCard.php';


$store = new Store([
    new Pistol('Eagle'),
    new MachineGun('AK47'),
    new Pistol('Glock', 4),
    new Explosive('Grenade')
]);
$gunStore = new StoreDisplay($store);
$gunStore->open();