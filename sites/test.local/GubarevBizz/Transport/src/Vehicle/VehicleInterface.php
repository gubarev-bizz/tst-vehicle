<?php

namespace GubarevBizz\Transport\Vehicle;

interface VehicleInterface
{
    /** @return string */
    public function refuel();

    /** @return string */
    public function stop();

    /** @return array */
    public function render();

    /** @return string */
    public function getName();

    /** @return string */
    public function getObject();

    /** @return string */
    public function getType();
}
