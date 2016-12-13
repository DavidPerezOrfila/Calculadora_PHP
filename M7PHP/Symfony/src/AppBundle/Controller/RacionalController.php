<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 15/11/16
 * Time: 21:03
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Service\Racional;
use AppBundle\Service\CalculadoraRacional;





class RacionalController extends Controller
{
    /**
     * @Route("/", name="app_Racional_index")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        return $this->render(':Racional:index.html.twig');
    }

    /**
     * @Route("/multiplyRac", name= "app_Racional_multiRac")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function multiplyRacAction()
    {
        return $this->render( ':Racional:form.html.twig',
            [
                'action' => 'app_racional_doMultiRac'
            ]
        );

    }

    /**
     * @Route("/domultiRac", name="app_racional_doMultiRac")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function doMultiRac(Request $request)
    {
        $r1 = $request->request->get('op1num', 'op1den');
        $r2= $request->request->get('op2num', 'op2den');
        $calRac = $this->get('racional');
        $result = $calRac->getResultado();
        return $this->render(':Racional:result.html.twig',
            [
                'result'=>$result
            ]
        );
    }


    /**
     * @Route("/divRac", name="app_Racional_divRac")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function divRacAction()
    {
        return $this->render( ':Racional:form.html.twig',
            [
                'action' => 'app_Racional_doDivRac'
            ]
        );
    }

    /**
     * @param Request $request
     * @Route("/doDivRac", name="app_Racional_doDivRac")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function doDivRac(Request $request)
    {
        $r1 = $request->request->get('op1num', 'op1den');
        $r2= $request->request->get('op2num', 'op2den');
        $calRac = $this->get('CalculadoraRacional');
        $result = $calRac->getResultado();
        return $this->render(':Racional:result.html.twig',
            [
                'result'=>$result
            ]
        );
    }

}