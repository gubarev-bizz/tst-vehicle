<?php

namespace Transport\src\Tests\Vehicle;

use GubarevBizz\Transport\Registry;
use GubarevBizz\Transport\Vehicle\BmwVehicle;
use PHPUnit\Framework\TestCase;

class BmwVehicleTest extends TestCase
{
    /** @var BmwVehicle */
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
        $this->assertEquals('BMW', $this->object->getObject());
        $this->assertEquals(Registry::TYPE_BMW, $this->object->getType());
        $this->assertEquals(Registry::TYPE_BMW, $this->object->getName());
        $this->assertEquals(Registry::TYPE_BMW . ' stopped', $this->object->stop());
        $this->assertEquals(Registry::TYPE_BMW . ' moveing', $this->object->move());
        $this->assertEquals(Registry::TYPE_BMW . ' music switched on', $this->object->musicOn());
        $this->assertEquals(Registry::TYPE_BMW . ' refuel BMW', $this->object->refuel());
        $this->assertCount(2, $this->object->render());
    }

    /**
     * @return BmwVehicle
     */
    private function getObject()
    {
        return new BmwVehicle(Registry::TYPE_BMW);
    }
}
