<?php

namespace GubarevBizz\Transport\Vehicle;

class Vehicle implements VehicleInterface
{
    /** @var array|VehicleInterface[]  */
    private $vehicles = [];

    /** {@inheritdoc} */
    public function render()
    {
        foreach ($this->vehicles as $vehicle) {
            echo $vehicle->render() . "<br>";
        }
    }

    /**
     * @param VehicleInterface $vehicle
     */
    public function addVehicle(VehicleInterface $vehicle)
    {
        $this->vehicles[] = $vehicle;
    }
}
