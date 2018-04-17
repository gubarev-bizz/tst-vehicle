<?php

namespace Transport\src\Tests\Vehicle;

use GubarevBizz\Transport\Registry;
use GubarevBizz\Transport\src\Vehicle\HelicopterVehicle;
use PHPUnit\Framework\TestCase;

class HelicopterVehicleTest extends TestCase
{
    /** @var HelicopterVehicle */
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
        $this->assertEquals('HELICOPTER', $this->object->getObject());
        $this->assertEquals(Registry::TYPE_HELICOPTER, $this->object->getType());
        $this->assertEquals(Registry::TYPE_HELICOPTER, $this->object->getName());
        $this->assertEquals(Registry::TYPE_HELICOPTER . ' stopped', $this->object->stop());
        $this->assertEquals(Registry::TYPE_HELICOPTER . ' flying', $this->object->fly());
        $this->assertEquals(Registry::TYPE_HELICOPTER . ' landing', $this->object->landing());
        $this->assertEquals(Registry::TYPE_HELICOPTER . ' took off', $this->object->takeOff());
        $this->assertEquals(Registry::TYPE_HELICOPTER . ' refuel HELICOPTER', $this->object->refuel());
        $this->assertCount(3, $this->object->render());
    }

    /**
     * @return HelicopterVehicle
     */
    private function getObject()
    {
        return new HelicopterVehicle(Registry::TYPE_HELICOPTER);
    }
}
