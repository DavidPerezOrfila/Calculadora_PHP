<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 18/10/16
 * Time: 18:28
 */

namespace controllers;


class RacionalController
{
    public function multiRacAction()
    {
        $action ='doMultiRac';
        require 'application/views/form.phtml';
    }
    public function doMultiRacAction()
    {
        $model = new RacionalModel($_POST['den1'], $_POST['den2'], $_POST['nume1'], $_POST['nume2']);
        $model->multiply();
        $result = $model->getResult();
        require 'application/views/result.phtml';
    }
}