<?php

namespace GubarevBizz\Transport\Vehicle\Traits;

trait VehicleTrait
{
    /** {@inheritdoc} */
    public function refuel() :string
    {
        return $this->getType() . ' refuel ' . $this->getObject();
    }

    /** {@inheritdoc} */
    public function stop() :string
    {
        return $this->getType() . ' stopped';
    }
}
