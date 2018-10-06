<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: Duan
 * Date: 5/10/18
 * Time: 4:05 PM
 */

namespace CodeStandards\PHPMassDetector\DesignRules;


use CodeStandards\Interfaces\Againstable;

class AgainstGotoStatement implements Againstable
{

    public function against(): void
    {
        A:
        goto B;

        B:
        $aVal = 1;
    }
}