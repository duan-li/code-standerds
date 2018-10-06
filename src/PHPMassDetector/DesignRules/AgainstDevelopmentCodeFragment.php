<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: Duan
 * Date: 5/10/18
 * Time: 4:14 PM
 */

namespace CodeStandards\PHPMassDetector\DesignRules;


use CodeStandards\Interfaces\Againstable;

class AgainstDevelopmentCodeFragment implements Againstable
{

    public function against(): void
    {
        $iVal = 1;
        for($jVal=0;$jVal<$iVal;$jVal++) {
            if($iVal == 1) \var_dump($iVal);

//        print_r($i);
        }
    }
}