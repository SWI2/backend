<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Petrol()
 * @method static static Diesel()
 * @method static static Gas()
 * @method static static Electricity()
 * @method static static Hybrid()
 */
final class FuelType extends Enum
{
    const Petrol = 0;
    const Diesel = 1;
    const Gas = 2;
    const Electricity = 3;
    const Hybrid = 4;
}
