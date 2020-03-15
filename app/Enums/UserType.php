<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Admin()
 * @method static static Seller()
 * @method static static Mechanician()
 */
final class UserType extends Enum
{
    const Admin = 0;
    const Seller = 1;
    const Mechanician = 2;
}
