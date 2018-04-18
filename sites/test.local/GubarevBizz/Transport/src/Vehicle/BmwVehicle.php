<?php

namespace GubarevBizz\Transport\Vehicle;

use GubarevBizz\Transport\Registry;
use GubarevBizz\Transport\Vehicle\Traits\VehicleTrait;

class BmwVehicle implements VehicleItemInterface, VehicleInterface
{
    use VehicleTrait;

    /** @return string */
    public function move() :string
    {
        return $this->getType() . ' moveing';
    }

    /** @return string */
    public function musicOn() :string
    {
        return $this->getType() . ' music switched on';
    }

    /** {@inheritdoc} */
    public function render()
    {
        echo $this->move() . PHP_EOL;
        echo $this->musicOn() . PHP_EOL;
        echo $this->stop() . PHP_EOL;
        echo $this->refuel() . PHP_EOL;
    }

    /** {@inheritdoc} */
    public function getObject() :string
    {
        return 'BMW';
    }

    /** {@inheritdoc} */
    public function getType() :string
    {
        return Registry::TYPE_BMW;
    }
}
