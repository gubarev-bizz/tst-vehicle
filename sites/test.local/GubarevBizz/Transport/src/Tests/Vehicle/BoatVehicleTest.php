<?php

namespace Transport\src\Tests\Vehicle;

use GubarevBizz\Transport\Registry;
use GubarevBizz\Transport\Vehicle\BoatVehicle;
use PHPUnit\Framework\TestCase;

class BoatVehicleTest extends TestCase
{
    /** @var BoatVehicle */
    private $object;

    public function setUp()
    {
        parent::setUp();
        $this->object = $this->getObject();
    }

    /**
     * @test
     */
    public function testGetWorkSuccess()
    {
        $this->assertEquals('BOAT', $this->object->getObject());
        $this->assertEquals(Registry::TYPE_BOAT, $this->object->getType());
        $this->assertEquals(Registry::TYPE_BOAT . ' moveing', $this->object->move());
        $this->assertEquals(Registry::TYPE_BOAT . ' swimming', $this->object->swim());
        $this->assertEquals(Registry::TYPE_BOAT . ' stopped', $this->object->stop());
        $this->assertEquals(Registry::TYPE_BOAT . ' refuel BOAT', $this->object->refuel());
    }

    /**
     * @return BoatVehicle
     */
    private function getObject()
    {
        return new BoatVehicle();
    }
}
