<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: Duan
 * Date: 5/10/18
 * Time: 4:11 PM
 */

namespace CodeStandards\PHPMassDetector\DesignRules;


class AgainstDepthOfInheritance
{

}

class Class1 extends AgainstNumberOfChildren {}
class Class2 extends Class1 {}
class Class3 extends Class2 {}
class Class4 extends Class3 {}
class Class5 extends Class4 {}
class Class6 extends Class5 {}
class Class7 extends Class6 {}