<?php

namespace GubarevBizz\Transport\Vehicle;

use GubarevBizz\Transport\Registry;
use GubarevBizz\Transport\Vehicle\Traits\VehicleTrait;

class BoatVehicle implements VehicleItemInterface, VehicleInterface
{
    use VehicleTrait;

    /** @return string */
    public function swim() :string
    {
        return $this->getType() . ' swimming';
    }

    /** @return string */
    public function move() :string
    {
        return $this->getType() . ' moveing';
    }

    /** {@inheritdoc} */
    public function render()
    {
        echo $this->swim() . PHP_EOL;
        echo $this->move() . PHP_EOL;
        echo $this->stop() . PHP_EOL;
        echo $this->refuel() . PHP_EOL;
    }

    /** {@inheritdoc} */
    public function getObject() :string
    {
        return 'BOAT';
    }

    /** {@inheritdoc} */
    public function getType() :string
    {
        return Registry::TYPE_BOAT;
    }
}
