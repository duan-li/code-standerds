<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: Duan
 * Date: 8/10/18
 * Time: 10:40 AM
 */

namespace CodeStandards\PHPCodeSniffer\Generic\Formatting;


use CodeStandards\Interfaces\Againstable;

class AgainstDisallowMultipleStatements implements Againstable
{
    public function against(): void
    {
        $aVar = 1; $bVar = 1;
    }
}