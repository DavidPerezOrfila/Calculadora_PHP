<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Product;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class ProductoController extends Controller
{
    /**
     * @Route("/", name="app_producto_index")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $m = $this->getDoctrine()->getManager();
        $repo = $m->getRepository('AppBundle:Product');
       /* $p = new Product();
        $p
            ->setName('Meizu MX5')
            ->setDescription('Chino con cierta garantía')
            ->setPrice('300')
            ;
        $m->persist($p);
        $m->flush();*/
        /*
         * busca un producto
         * */
        /*$p = $repo->findOneBy([
            'name' => 'Meizu MX5',
        ]);*/
        /*para buscar todos los productos*/
       /* $p = $repo->findAll();*/
       /*$p = $repo->find(3);

        $p->setPrice('1100');
        $p->setDescription('Black Friday, nos lo quitan de las manos!');
        $p1 = $repo->findOneBy([
            'name' => 'Meizu MX5'
        ]);

        $m->remove($p1);
        $m->flush();*/

        $products = $repo->findAll();

        return $this->render(':Producto:index.html.twig',
            [
                'producto'=> $products,
            ]
        );
    }

    /**
     * @Route("/insert", name="app_producto_insert")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function insertAction()
    {
        return $this->render(':Producto:insert.html.twig',
            [
                "action" =>'app_producto_doInsert'
            ]

            );
    }

    /**
     * @Route("/doInsert", name="app_producto_doInsert")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function doInsertAction(Request $request)
    {

        $m= $this->getDoctrine()->getManager();
        $product = new Product();
        $name = $request->request->get('Nombre');
        $desc= $request->request->get('Descripcion');
        $price= $request->request->get('Precio');

        $product
            ->setName($name)
            ->setDescription($desc)
            ->setPrice($price)
            ;



        $m->persist($product);
        $m->flush();

        return $this->redirectToRoute('app_producto_index');
    }

    public function removeAction()
    {
        return $this->render('Producto/update.html.twig',
        [
            "action"=> 'app_producto_doUpdateAction'
        ]);
    }

    public function doRemoveAction()
    {

    }
}
