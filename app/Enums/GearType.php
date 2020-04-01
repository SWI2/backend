<?php


namespace App\Enums;


use BenSampo\Enum\Enum;

/**
 * @method static static Manual()
 * @method static static Automatic()
 */
final class GearType extends Enum
{
    const Manual = 0;
    const Automatic = 1;
}
