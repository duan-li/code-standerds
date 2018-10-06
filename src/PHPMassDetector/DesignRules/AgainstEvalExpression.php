<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: Duan
 * Date: 5/10/18
 * Time: 4:03 PM
 */

namespace CodeStandards\PHPMassDetector\DesignRules;

use CodeStandards\Interfaces\Againstable;

class AgainstEvalExpression implements Againstable
{

    public function against(): void
    {
        eval("$aVAl=1;");
    }
}