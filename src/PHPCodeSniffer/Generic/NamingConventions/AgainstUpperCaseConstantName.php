<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: Duan
 * Date: 8/10/18
 * Time: 12:24 PM
 */

namespace CodeStandards\PHPCodeSniffer\Generic\NamingConventions;


use CodeStandards\Interfaces\Againstable;

class AgainstUpperCaseConstantName implements Againstable
{
    const bb = 1;
    public function against(): void
    {
        define('aa', 1);
    }
}