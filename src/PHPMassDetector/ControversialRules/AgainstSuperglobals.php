<?php
declare(strict_types=1);

namespace CodeStandards\PHPMassDetector\ControversialRules;

use CodeStandards\Interfaces\Againstable;

/**
 * Created by PhpStorm.
 * User: Duan
 * Date: 5/10/18
 * Time: 2:34 PM
 */
class AgainstSuperglobals implements Againstable
{

    public function against(): void
    {
        $aVal = $_POST['val'];
    }
}