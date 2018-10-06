<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: Duan
 * Date: 5/10/18
 * Time: 2:46 PM
 */

namespace CodeStandards\PHPMassDetector\ControversialRules;


use CodeStandards\Interfaces\Againstable;

class AgainstCamelCaseVariableName implements Againstable
{

    public function against(): void
    {
        $a_val = 11;
    }
}