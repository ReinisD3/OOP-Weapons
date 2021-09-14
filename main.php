<?php

require_once 'gun.php';
require_once 'pistol.php';
require_once  'machine-gun.php';
require_once 'explosive.php';
require_once 'store.php';
require_once 'store-display.php';

$gunStore = new StoreDisplay([
    new Pistol('Eagle'),
    new MachineGun('AK47'),
    new Pistol('Glock'),
    new Explosive('Grenade')
]);
$gunStore->showGuns();