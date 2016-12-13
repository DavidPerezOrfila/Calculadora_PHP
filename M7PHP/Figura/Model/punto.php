<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 23/09/2016
 * Time: 17:35
 */

namespace Modelo;


class Punto
{
    private $x;
    private $y;

    /**
     * Se crea el constructor de punto y como argumentos nos da el valor de $x y el valor de $y
     */
    public function __construct($x, $y)
    {
        $this->setX($x);
        $this->setY($y);
    }

    /**
     * método desplazar punto
     */
    public function desplazar(Punto $destino)
    {
        $this->x = ($destino->getX());
        $this->y = ($destino->getY());
    }

    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @return mixed
     */
    public function getY()
    {
        return $this->y;
    }


    public function setX($x)
    {
        $this->x = (int)$x;
        return $this;
    }

    /**
     * @param mixed $y
     */
    public function setY($y)
    {
        $this->y = (int)$y;
        return $this;
    }


    public function __toString(){
        return ('Punto { ' . $this->getX() . ',' . $this->getY() . '}<br>');
    }

    public function esIgual(Punto $p)
    {
        if($this->getX() == $p->getX() && $this->getY() == $p->getY()) {
            return true;
        }
        return false;
    }

    public function posCuadrante()
    {

                if($this->getX() > 0 && $this->getY() > 0) {
                    return ('Punto { ' . $this->getX() . ',' . $this->getY()
                        . '}<br> Pertenece al primer cuadrante');

                }elseif ($this->getX() < 0 && $this->getY() > 0) {
                    return ('Punto { ' . $this->getX() . ',' . $this->getY()
                        . '}<br> Pertenece al segundo cuadrante');

                }elseif ($this->getX() < 0 && $this->getY() < 0) {
                    return ('Punto { ' . $this->getX() . ',' . $this->getY()
                        . '}<br> Pertenece al tercer cuadrante');
                }elseif ($this->getX() > 0 && $this->getY() < 0) {
                    return ('Punto { ' . $this->getX() . ',' . $this->getY()
                        . '}<br> Pertenece al cuarto cuadrante');
                }
    }

}