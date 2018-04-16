<?php

namespace Transport\Tests;

use GubarevBizz\Transport\Registry;
use GubarevBizz\Transport\src\Vehicle\KamazVehicle;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class RegistryTest extends TestCase
{
    /** @var Registry|MockObject */
    private $registry;

    public function setUp()
    {
        parent::setUp();
        $this->registry = $this->createMock(Registry::class);
    }

    /**
     * @test
     */
    public function testSuccessGetVehicles()
    {
        $this->registry->method('addVehicle')
            ->with(Registry::TYPE_KAMAZ);
        $this->registry->method('getVehicles')
            ->willReturn($this->getObjectVehicle());

        $this->assertEquals($this->getObjectVehicle(), $this->registry->getVehicles());
    }

    private function getObjectVehicle()
    {
        return new KamazVehicle(Registry::TYPE_KAMAZ);
    }
}
