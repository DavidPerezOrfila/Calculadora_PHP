<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 22/11/16
 * Time: 20:32
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Usuario;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UsuarioController extends Controller
{
    /**
     * @Route("/Usuario", name="app_usuario_index")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $m = $this->getDoctrine()->getManager();

        $user1= new Usuario();

        $user1->setEmail('user1@prueba.com');
        $user1->setUsername('paco');
        $user1->setPassword('1234');

        $m->persist($user1);

        $user2= new Usuario();

        $user2->setEmail('user2@prueba.com');
        $user2->setUsername('miguel');
        $user2->setPassword('1234');

        $m->persist($user2);

        $user3 = new Usuario();
        $user3
            ->setEmail('user3@prueba.com')
            ->setUsername('manolo')
            ->setPassword('1234');
        $m->persist($user3);

        $m->flush();

        return $this->render(':Usuario:index.html.twig');


    }
}