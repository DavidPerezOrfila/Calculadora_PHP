<?php

namespace AppBundle\Controller;


use AppBundle\Service\Calculadora;
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
     * @Route("/doSum", name="app_calculator_doSum")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function doSumAction(Request $request)
    {
        $op1 = $request->request->get('op1');
        $op2 = $request->request->get('op2');
        $calculator = $this->get('calculadora');

        $calculator->setOp1($op1);
        $calculator->setOp2($op2);
        $calculator->sum();
        $result = $calculator->getResultado();


        return $this->render(':Calculator:result.html.twig',
            [
                'result'=>$result
            ]
        );
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
     * @Route("/doMulti", name="app_calculator_doMulti")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function doMultiAction(Request $request)
    {
        $op1 = $request->request->get('op1');
        $op2 = $request->request->get('op2');
        $calculator = $this->get('calculadora');
        $calculator->setOp1($op1);
        $calculator->setOp2($op2);
        $calculator->multi();
        $result = $calculator->getResultado();

        return $this->render(':Calculator:result.html.twig',
            [
                'result'=>$result
            ]
        );


    }

    /**
     * @Route("/div", name="app_calculator_div")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function divAction()
    {
        return $this->render(':Calculator:form.html.twig',
            [
                'action' => 'app_calculator_doDiv'
            ]
        );
    }

    /**
     * @Route("/doDiv", name="app_calculator_doDiv")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function doDivAction(Request $request)
    {
        $op1 = $request->request->get('op1');
        $op2 = $request->request->get('op2');
        $calculator = $this->get('calculadora');
        $calculator->setOp1($op1);
        $calculator->setOp2($op2);
        $calculator->dividir();
        $result=$calculator->getResultado();

        return $this->render(':Calculator:result.html.twig',
            [
                'result'=>$result
            ]
        );
    }

    /**
     * @Route("/restar", name="app_calculator_restar")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function restarAction()
    {
        return $this->render(':Calculator:form.html.twig',
            [
                'action' => 'app_calculator_doRestar'
            ]
        );
    }

    /**
     * @Route("/doRestar", name="app_calculator_doRestar")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function doRestarAction(Request $request)
    {
        $op1 = $request->request->get('op1');
        $op2 = $request->request->get('op2');
        $calculator = $this->get('calculadora');

        $calculator->setOp1($op1);
        $calculator->setOp2($op2);
        $calculator->restar();
        $result = $calculator->getResultado();


        return $this->render(':Calculator:result.html.twig',
            [
                'result'=>$result
            ]
        );
    }
}
