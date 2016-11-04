<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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
     *
     * @Route("/sum", name="app_calculator_sum")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function sumAction()
    {
        return $this->render(':Calculator:form.html.twig',
            [
                'action' => 'app_calculator_doSum'
            ]
        );
    }

    /**
     *
     */
    public function doSumAction(Request $request)
    {
        $op1= $request->get('op1');
        $op2= $request->get('op2');
        $calculator = $this->get('calculator');
        $calculator->setOp1($op1);
        $calculator->setOp2($op2);
        $calculator->sum();


        return $this->render(':Calculator:result.html.twig');
    }

    /**
     * @Route("/multiply", name="app_calculator_multi")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function multiAction()
    {
        return $this->render(':Calculator:form.html.twig',
            [
               'action' => 'app_calculator_doMulti'
            ]

            );

    }

    /**
     *
     */
    public function doMultiAction()
    {

    }

    /**
     * @Route("/div", name="app_calculator_div")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function divideAction()
    {
        return $this->render(':Calculator:form.html.twig',
        [
            'action' => 'app_calculator_doDivide'
        ]
        );
    }

    public function doDivideAction()
    {

    }

    public function restarAction()
    {
        return $this->render(':Calculator:form.html.twig',
            [
                'action' => 'app_calculator_doRestar'
            ]
        );
    }

    public function doRestarAction()
    {

    }
}
