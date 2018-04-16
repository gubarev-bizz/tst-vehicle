<?php

namespace GubarevBizz\Transport;

use GubarevBizz\Transport\Vehicle\VehicleInterface;

class Registry
{
    const TYPE_BMW = 'bmw';
    const TYPE_BOAT = 'boat';
    const TYPE_HELICOPTER = 'helicopter';
    const TYPE_KAMAZ = 'kamaz';

    /** @var array|VehicleInterface[]  */
    private static $vehicles = [];

    /**
     * @param string    $name
     * @param bool $overwrite
     */
    public static function addVehicle(string $name, $overwrite = false)
    {
        if (!in_array($name, self::getTypes())) {
            throw new \InvalidArgumentException(sprintf('Vehicle with %s not supported', $name));
        }

        if (isset(self::$vehicles[$name]) && !$overwrite) {
            throw new \InvalidArgumentException('Vehicle with the given name already exists');
        }

        foreach (get_declared_classes() as $class) {
            $reflection = new \ReflectionClass($class);

            if ($reflection->implementsInterface(VehicleInterface::class) && !$reflection->isAbstract()) {
                /** @var VehicleInterface $instance */
                $instance = new $class($name);

                if ($instance->getType() == $name) {
                    self::$vehicles[$name] = new $class($name);
                }
            }
        }
    }

    /**
     * @return VehicleInterface[]
     */
    public function getVehicles()
    {
        return self::$vehicles;
    }

    /**
     * @return string[]
     */
    protected static function getTypes()
    {
        return [
            self::TYPE_BMW,
            self::TYPE_BOAT,
            self::TYPE_HELICOPTER,
            self::TYPE_KAMAZ,
        ];
    }
}
