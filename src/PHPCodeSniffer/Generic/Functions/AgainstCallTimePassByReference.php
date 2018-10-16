<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: Duan
 * Date: 8/10/18
 * Time: 11:38 AM
 */

namespace CodeStandards\PHPCodeSniffer\Generic\Functions;


use CodeStandards\Interfaces\Againstable;

class AgainstCallTimePassByReference implements Againstable
{
    public function against(): void
    {
        $aVar = '1';

        $this->method(&$aVar);
    }

    public function method($aVar)
    {
        return $aVar;
    }
}