<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: Duan
 * Date: 8/10/18
 * Time: 10:26 AM
 */

namespace CodeStandards\PHPCodeSniffer\Generic\CodeAnalysis;


use CodeStandards\Interfaces\Againstable;

class AgainstUnconditionalIfStatement implements Againstable
{
    public function against(): void
    {
        if(true) {

        }
    }
}