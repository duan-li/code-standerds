<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: Duan
 * Date: 8/10/18
 * Time: 11:35 AM
 */

namespace CodeStandards\PHPCodeSniffer\Generic\Functions;

use CodeStandards\Interfaces\Againstable;

class AgainstFunctionCallArgumentSpacing implements Againstable
{
    public function against(): void
    {
        $aVar = sprintf('%s %s', 'a' , 'b');
    }
}