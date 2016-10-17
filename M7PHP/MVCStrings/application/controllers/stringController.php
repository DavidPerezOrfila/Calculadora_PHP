<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 11/10/16
 * Time: 19:57
 */

namespace controllers;
use models\StringModel;
require 'application/models/StringModel.php';

class StringController
{
    public function concatenarAction()
    {
        $action = 'doConcatenar';
        return require 'application/views/form.phtml';
    }

    public function doConcatenarAction()
    {
        $model = new StringModel($_POST['cad1'], $_POST['cad2']);
        $model->concat();
        $resultado = $model->getResultado();
        return require 'application/views/result.phtml';
    }

    public function longitudAction()
    {
        $action = 'doLongitud';
        return require 'application/views/form.phtml';
    }

    public function doLongitudAction()
    {
        $model = new StringModel($_POST['cad1'], $_POST['cad2']);
        $model->long();
        $resultado =$model->getResultado();
        return require 'application/views/result.phtml';
    }

}