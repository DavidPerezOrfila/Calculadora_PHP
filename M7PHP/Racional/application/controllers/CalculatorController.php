<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 11/10/16
 * Time: 19:57
 */

namespace controllers;
use models\CalculatorModel;
use models\CalculatorRacional;

require 'application/models/CalculatorModel.php';
require 'application/models/CalculatorRacional.php';
class CalculatorController
{
    public function sumAction()
    {
        $action = 'doSum';
        return require 'application/views/form.phtml';
    }

    public function doSumAction()
    {
        $model = new CalculatorModel($_POST['op1'], $_POST['op2']);
        $model->sum();
        $result = $model->getResult();
        return require 'application/views/result.phtml';
    }
    public function subtractAction()
    {
        $action = 'doSubtract';
        return require 'application/views/form.phtml';
    }

    public function doSubtractAction()
    {
        $model = new CalculatorModel($_POST['op1'], $_POST['op2']);
        $model->subtract();
        $result = $model->getResult();
        return require 'application/views/result.phtml';
    }

    public function multiplyAction()
    {
        $action = 'doMultiply';
        return require 'application/views/form.phtml';
    }

    public function doMultiplyAction()
    {
        $model = new CalculatorModel($_POST['op1'], $_POST['op2']);
        $model->multiply();
        $result = $model->getResult();
        return require 'application/views/result.phtml';
    }

    public function divisionAction(){

        $action= 'doDivision';
        return require 'application/views/form.phtml';
    }
    public function doDivision(){

        $model = new CalculatorModel($_POST['op1'], $_POST['op2']);
        $model->division();
        $result = $model->getResult();
        return require  'application/views/result.phtml';
    }
}