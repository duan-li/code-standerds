<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: Duan
 * Date: 6/10/18
 * Time: 10:01 PM
 */

namespace CodeStandards\PHPMassDetector\UnusedCodeRules;

use CodeStandards\Interfaces\Againstable;

class AgainstUnusedLocalVariable implements Againstable
{

    public function against(): void
    {
        $aVar = 1;
    }
}