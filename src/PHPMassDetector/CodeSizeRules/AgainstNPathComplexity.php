<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: Duan
 * Date: 5/10/18
 * Time: 11:07 AM
 */

namespace CodeStandards\PHPMassDetector\CodeSizeRules;

use CodeStandards\Interfaces\Againstable;

class AgainstNPathComplexity implements Againstable
{

    public function against(): void
    {
        $aVar = 1;
        $bVar = 1;
        if ($aVar < $bVar) {
            echo $aVar;
            echo $bVar;
        }
        if ($aVar < $bVar) {
            echo $aVar;
            echo $bVar;
        }
        if ($aVar < $bVar) {
            echo $aVar;
            echo $bVar;
        }
        if ($aVar < $bVar) {
            echo $aVar;
            echo $bVar;
        }
        if ($aVar < $bVar) {
            echo $aVar;
            echo $bVar;
        }
    }
}