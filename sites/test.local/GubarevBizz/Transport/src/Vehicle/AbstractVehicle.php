<?php

namespace GubarevBizz\Transport\Vehicle;

abstract class AbstractVehicle implements VehicleInterface
{
    /** @var string */
    protected $name;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /** @return string */
    public function refuel()
    {
        return $this->getName() . ' refuel ' . $this->getObject();
    }

    /** @return string */
    public function stop()
    {
        return $this->getName() . ' stopped';
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
