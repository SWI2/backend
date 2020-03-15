<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static PersonalVehicle()
 * @method static static Truck()
 * @method static static Van()
 */
final class CarType extends Enum
{
    const PersonalVehicle = 0;
    const Truck = 1;
    const Van = 2;
}
