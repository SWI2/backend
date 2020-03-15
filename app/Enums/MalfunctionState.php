<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Unresolved()
 * @method static static InResolve()
 * @method static static Repaired()
 */
final class MalfunctionState extends Enum
{
    const Unresolved = 0;
    const InResolve = 1;
    const Repaired = 2;
}
