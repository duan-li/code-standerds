<?php
declare(strict_types=1);

namespace CodeStandards\PHPCodeSniffer\Generic\CodeAnalysis;

use CodeStandards\Interfaces\Againstable;

/**
 * Created by PhpStorm.
 * User: Duan
 * Date: 6/10/18
 * Time: 10:30 PM
 */
class AgainstEmptyStatement implements Againstable
{

    public function against(): void
    {
        if (true) {

        }
    }
}