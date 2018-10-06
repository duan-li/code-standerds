<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: Duan
 * Date: 5/10/18
 * Time: 4:39 PM
 */

namespace CodeStandards\PHPMassDetector\NamingRules;


use CodeStandards\Interfaces\Againstable;

class AgainstLongVariable implements Againstable
{

    public function against(): void
    {
        $AVeryLongVarableIsNotAcceptable = true;
    }
}