<?php

use GubarevBizz\Transport\Vehicle\BmwVehicle;
use GubarevBizz\Transport\Vehicle\BoatVehicle;
use GubarevBizz\Transport\Vehicle\HelicopterVehicle;
use GubarevBizz\Transport\Vehicle\KamazVehicle;
use GubarevBizz\Transport\Vehicle\Vehicle;

require __DIR__.'/vendor/autoload.php';

$vehicles = new Vehicle();
$vehicles->addVehicle(new BmwVehicle());
$vehicles->addVehicle(new BoatVehicle());
$vehicles->addVehicle(new HelicopterVehicle());
$vehicles->addVehicle(new KamazVehicle());
$vehicles->render();
