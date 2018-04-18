<?php

namespace GubarevBizz\Transport\Vehicle;

use GubarevBizz\Transport\Registry;
use GubarevBizz\Transport\Vehicle\Traits\VehicleTrait;

class KamazVehicle implements VehicleItemInterface, VehicleInterface
{
    use VehicleTrait;

    /** @return string */
    public function move() :string
    {
        return $this->getType() . ' moveing';
    }

    /** @return string */
    public function emptyLoads() :string
    {
        return $this->getType() . ' refuel ' . $this->getObject();
    }

    /** {@inheritdoc} */
    public function render()
    {
        echo $this->move() . PHP_EOL;
        echo $this->stop() . PHP_EOL;
        echo $this->emptyLoads() . PHP_EOL;
        echo $this->stop() . PHP_EOL;
        echo $this->refuel() . PHP_EOL;
    }

    /** {@inheritdoc} */
    public function getObject() :string
    {
        return 'KAMAZ';
    }

    /** {@inheritdoc} */
    public function getType() :string
    {
        return Registry::TYPE_KAMAZ;
    }
}
