<?php

namespace GubarevBizz\Transport\Vehicle;

use GubarevBizz\Transport\Registry;
use GubarevBizz\Transport\Vehicle\Traits\VehicleTrait;

class HelicopterVehicle implements VehicleItemInterface, VehicleInterface
{
    use VehicleTrait;

    /** @return string */
    public function takeOff() :string
    {
        return $this->getType() . ' took off';
    }

    /** @return string */
    public function landing() :string
    {
        return $this->getType() . ' landing';
    }

    /** @return string */
    public function fly() :string
    {
        return $this->getType() . ' flying';
    }

    /** {@inheritdoc} */
    public function render()
    {
        echo $this->takeOff() . PHP_EOL;
        echo $this->landing() . PHP_EOL;
        echo $this->fly() . PHP_EOL;
        echo $this->stop() . PHP_EOL;
        echo $this->refuel() . PHP_EOL;
    }

    /** {@inheritdoc} */
    public function getObject() :string
    {
        return 'HELICOPTER';
    }

    /** {@inheritdoc} */
    public function getType() :string
    {
        return Registry::TYPE_HELICOPTER;
    }
}