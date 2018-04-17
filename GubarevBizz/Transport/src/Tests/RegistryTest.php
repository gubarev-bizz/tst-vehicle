<?php

namespace Transport\Tests;

use GubarevBizz\Transport\Autoloader;
use GubarevBizz\Transport\Registry;
use InvalidArgumentException;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class RegistryTest extends TestCase
{
    /** @var Registry|MockObject */
    private $registry;

    public function setUp()
    {
        Autoloader::autoload();
        $this->registry = new Registry();
    }

    /**
     * @test
     */
    public function testAddVehicleIfNameIsFail()
    {
        $name = 'blabla';
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage("Vehicle with {$name} not supported");
        $this->registry::addVehicle($name);
    }

    /**
     * @test
     */
    public function testAddVehicleIfAlreadyExists()
    {
        $object = $this->registry;
        $object::addVehicle(Registry::TYPE_BMW);
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Vehicle with the given name already exists');
        $object::addVehicle(Registry::TYPE_BMW);
    }

    /**
     * @test
     */
    public function testGetVehiclesSuccess()
    {
        $object = $this->registry;
        $object::addVehicle(Registry::TYPE_HELICOPTER);
        $object::addVehicle(Registry::TYPE_KAMAZ);
        $object::addVehicle(Registry::TYPE_BMW, true);

        $this->assertCount(3, $object->getVehicles());
    }
}
