<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 23/09/2016
 * Time: 17:58
 */

namespace Figura;


use Modelo\Punto;
require_once '.../model/Punto.php';

class Index
{
    public static function run()
    {
        $p = new Punto();
    }
}
$app = new Index();
$app-> run();