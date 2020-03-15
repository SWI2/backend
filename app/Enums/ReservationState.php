<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Created()
 * @method static static DepositPayed()
 * @method static static Rented()
 * @method static static Returned()
 */
final class ReservationState extends Enum
{
    const Created = 0;
    const DepositPayed = 1;
    const Rented = 3;
    const Returned = 4;
}
