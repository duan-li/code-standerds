<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: Duan
 * Date: 8/10/18
 * Time: 10:22 AM
 */

namespace CodeStandards\PHPCodeSniffer\Generic\CodeAnalysis;


use CodeStandards\Interfaces\Againstable;

class AgainstForLoopWithTestFunctionCall implements Againstable
{

    public function against(): void
    {
        $array = [1,2,3,4];
        for ($i=0;$i<count($array);$i++) {

        }
    }
}