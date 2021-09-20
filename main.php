<?php

require_once 'products/product.php';
require_once 'products/guns/gun.php';
require_once 'products/guns/pistol.php';
require_once 'products/guns/machine-gun.php';
require_once 'products/guns/explosive.php';
require_once 'products/bullets/bullet.php';
require_once 'Store/stored-product.php';
require_once 'Store/store.php';
require_once 'Store/store-display.php';
require_once 'payment-methods/PaymentMethod.php';
require_once 'payment-methods/Paypal.php';
require_once 'payment-methods/CreditCard.php';



$productsToStore = [
    new StoredProduct(new Pistol('Eagle'),247,5),
    new StoredProduct(new MachineGun('AK47'),747,3),
    new StoredProduct(new Pistol('Glock', 4),111,10),
    new StoredProduct(new Explosive('Grenade'),99,7),
    new StoredProduct(new Bullet('GlockBullets',44,2,1888),0.75,1500)
];
$gunStoreDisplay = new StoreDisplay(new Store($productsToStore));
$gunStoreDisplay->open();