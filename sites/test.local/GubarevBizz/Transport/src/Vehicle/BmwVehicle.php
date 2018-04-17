<?php

namespace GubarevBizz\Transport\Vehicle;

use GubarevBizz\Transport\Registry;

class BmwVehicle extends AbstractVehicle
{
    /** @return string */
    public function move()
    {
        return $this->getName() . ' moveing';
    }

    /** @return string */
    public function musicOn()
    {
        return $this->getName() . ' music switched on';
    }

    /** @return array */
    public function render()
    {
        return [
            $this->move(),
            $this->musicOn(),
        ];
    }

    /** @return string */
    public function getObject()
    {
        return 'BMW';
    }

    /** @return string */
    public function getType()
    {
        return Registry::TYPE_BMW;
    }
}
