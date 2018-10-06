<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: Duan
 * Date: 5/10/18
 * Time: 4:47 PM
 */

namespace CodeStandards\PHPMassDetector\NamingRules;


class AgainstConstantNamingConventions
{
    const MY_NUM = 0; // ok
    const myTest = ""; // fail
}