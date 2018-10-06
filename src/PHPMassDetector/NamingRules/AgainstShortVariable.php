<?php
declare(strict_types=1);

namespace CodeStandards\PHPMassDetector\NamingRules;

use CodeStandards\Interfaces\Againstable;

/**
 * Created by PhpStorm.
 * User: Duan
 * Date: 5/10/18
 * Time: 4:30 PM
 */
class AgainstShortVariable implements Againstable
{

    public function against(): void
    {
        $va = 1;
    }
}