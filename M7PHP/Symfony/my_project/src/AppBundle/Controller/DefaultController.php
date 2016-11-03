<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }


    /**
     * @Route("/name/{name}", name="app_default_index");
     **/
    public function pruebaAction($name)
    {
        return new Response('Hola'. $name);

    }


    /**
     * @Route("prueba1", name="app_default_pruebaVista")
     */
    public function pruebaVistaAction()
    {
        return $this->render(':default:vista1.html.twig', [
            'titulo'    =>'Mi página',
            'Resultado' => '3',
        ]);
    }

}