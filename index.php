<?php

use GubarevBizz\Transport\Autoloader;
use GubarevBizz\Transport\Registry;

require __DIR__.'/vendor/autoload.php';

Autoloader::autoload();

$registry = new Registry();
$registry::addVehicle(Registry::TYPE_BMW);
$registry::addVehicle(Registry::TYPE_BOAT);
$registry::addVehicle(Registry::TYPE_HELICOPTER);
$registry::addVehicle(Registry::TYPE_KAMAZ);

foreach ($registry->getVehicles() as $vehicle) {
    foreach ($vehicle->render() as $elementRender) {
        echo $elementRender . "<br />";
    }

    echo $vehicle->stop() . "<br />";
    echo $vehicle->refuel() . "<br /><br />";
}
