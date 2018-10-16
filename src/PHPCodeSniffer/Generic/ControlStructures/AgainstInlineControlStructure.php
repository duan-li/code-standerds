<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: Duan
 * Date: 8/10/18
 * Time: 10:33 AM
 */

namespace CodeStandards\PHPCodeSniffer\Generic\ControlStructures;


use CodeStandards\Interfaces\Againstable;

class AgainstInlineControlStructure implements Againstable
{
    public function against(): void
    {
        if(true) exit(0);
    }

}