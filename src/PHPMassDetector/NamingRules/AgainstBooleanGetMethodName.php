<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: Duan
 * Date: 5/10/18
 * Time: 4:48 PM
 */

namespace CodeStandards\PHPMassDetector\NamingRules;


class AgainstBooleanGetMethodName
{
    /**
     * @return bool
     */
    public function getFoo(): boolean
    {
        return true;
    }
}