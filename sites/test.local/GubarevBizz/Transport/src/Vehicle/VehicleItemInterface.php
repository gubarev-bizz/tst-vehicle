<?php

namespace GubarevBizz\Transport\Vehicle;

interface VehicleItemInterface
{
    /** @return string */
    public function refuel() : string;

    /** @return string */
    public function stop() : string;

    /** @return string */
    public function getObject() : string;

    /** @return string */
    public function getType() : string;
}
