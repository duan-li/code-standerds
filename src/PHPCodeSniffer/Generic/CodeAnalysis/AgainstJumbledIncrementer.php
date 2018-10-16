<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: Duan
 * Date: 8/10/18
 * Time: 10:24 AM
 */

namespace CodeStandards\PHPCodeSniffer\Generic\CodeAnalysis;


use CodeStandards\Interfaces\Againstable;

class AgainstJumbledIncrementer implements Againstable
{
    public function against(): void
    {
        for($i=0;$i<10;$i++) {
            for($j=0;$j<10;$i++) {

            }
        }
    }
}