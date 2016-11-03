<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CalculatorController extends Controller
{

    /**
     * @Route("/", name="app_calculator_index")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        return $this->render(':Calculator:index.html.twig');
    }

    /**
     * @return mixed
     */
    public function sumAction(){
        $action = 'doSum';
        return require '/app/Resources/view/Calculator/index.html.twig';
    }

    public function doSumAction(){


    }

    public function multiAction(){

    }

    public function doMultiAction(){

    }
}
