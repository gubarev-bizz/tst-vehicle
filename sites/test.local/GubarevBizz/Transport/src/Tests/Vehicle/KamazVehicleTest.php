<?php

namespace Transport\src\Tests\Vehicle;

use GubarevBizz\Transport\Registry;
use GubarevBizz\Transport\Vehicle\KamazVehicle;
use PHPUnit\Framework\TestCase;

class KamazVehicleTest extends TestCase
{
    /** @var KamazVehicle */
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
        $this->assertEquals('KAMAZ', $this->object->getObject());
        $this->assertEquals(Registry::TYPE_KAMAZ, $this->object->getType());
        $this->assertEquals(Registry::TYPE_KAMAZ . ' stopped', $this->object->stop());
        $this->assertEquals(Registry::TYPE_KAMAZ . ' moveing', $this->object->move());
        $this->assertEquals(Registry::TYPE_KAMAZ . ' refuel KAMAZ', $this->object->emptyLoads());
        $this->assertEquals(Registry::TYPE_KAMAZ . ' refuel KAMAZ', $this->object->refuel());
    }

    /**
     * @return KamazVehicle
     */
    private function getObject()
    {
        return new KamazVehicle();
    }
}
