<?php
declare(strict_types=1);

namespace CodeStandards\PHPMassDetector\DesignRules;

use CodeStandards\Interfaces\Againstable;

/**
 * Created by PhpStorm.
 * User: Duan
 * Date: 5/10/18
 * Time: 3:58 PM
 */
class AgainstExitExpression implements Againstable
{

    public function against(): void
    {
        exit(1);
    }
}