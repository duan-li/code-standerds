<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: Duan
 * Date: 8/10/18
 * Time: 12:26 PM
 */

namespace CodeStandards\PHPCodeSniffer\Generic\PHP;


use CodeStandards\Interfaces\Againstable;

class AgainstLowerCaseConstant implements Againstable
{
    public function against(): void
    {
        $isFine = TRUE;
        $isNull = NULL;
    }
}