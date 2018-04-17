<?php

namespace GubarevBizz\Transport\src\Vehicle;

use GubarevBizz\Transport\Registry;
use GubarevBizz\Transport\Vehicle\AbstractVehicle;

class HelicopterVehicle extends AbstractVehicle
{
    /** @return string */
    public function takeOff()
    {
        return $this->getName() . ' took off';
    }

    /** @return string */
    public function landing()
    {
        return $this->getName() . ' landing';
    }

    /** @return string */
    public function fly()
    {
        return $this->getName() . ' flying';
    }

    /** {@inheritdoc} */
    public function render()
    {
        return [
            $this->takeOff(),
            $this->landing(),
            $this->fly(),
        ];
    }

    /** {@inheritdoc} */
    public function getObject()
    {
        return 'HELICOPTER';
    }

    /** {@inheritdoc} */
    public function getType()
    {
        return Registry::TYPE_HELICOPTER;
    }
}