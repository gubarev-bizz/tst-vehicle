<?php

namespace GubarevBizz\Transport\src\Vehicle;

use GubarevBizz\Transport\Registry;
use GubarevBizz\Transport\Vehicle\AbstractVehicle;

class BoatVehicle extends AbstractVehicle
{
    /** @return string */
    public function swim()
    {
        return $this->getName() . ' swimming';
    }

    /** @return string */
    public function move()
    {
        return $this->getName() . ' moveing';
    }

    /** @return array */
    public function render()
    {
        return [
            $this->swim(),
            $this->move(),
        ];
    }

    /** @return string */
    public function getObject()
    {
        return 'BOAT';
    }

    /** @return string */
    public function getType()
    {
        return Registry::TYPE_BOAT;
    }
}
