<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: Duan
 * Date: 8/10/18
 * Time: 12:36 PM
 */

namespace CodeStandards\PHPCodeSniffer\MySource\PHP;


use CodeStandards\Interfaces\Againstable;

class AgainstGetRequestData implements Againstable
{
    public function against(): void
    {
        $aVar = $_POST['a'];
    }
}