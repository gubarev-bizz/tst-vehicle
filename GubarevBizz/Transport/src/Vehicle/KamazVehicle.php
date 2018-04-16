<?php

namespace GubarevBizz\Transport\src\Vehicle;

use GubarevBizz\Transport\Registry;
use GubarevBizz\Transport\Vehicle\AbstractVehicle;

class KamazVehicle extends AbstractVehicle
{
    /** @return string */
    public function move()
    {
        return $this->getName() . ' moveing';
    }

    /** @return string */
    public function emptyLoads()
    {
        return $this->getName() . ' refuel ' . $this->getObject();
    }

    /** {@inheritdoc} */
    public function render()
    {
        return [
            $this->move(),
            $this->stop(),
            $this->emptyLoads(),
        ];
    }

    /** {@inheritdoc} */
    public function getObject()
    {
        return 'KAMAZ';
    }

    /** {@inheritdoc} */
    public function getType()
    {
        return Registry::TYPE_KAMAZ;
    }
}
