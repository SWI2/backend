<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Rentable()
 * @method static static Damaged()
 */
final class CarState extends Enum
{
    const Rentable = 0;
    const Damaged = 1;
}
