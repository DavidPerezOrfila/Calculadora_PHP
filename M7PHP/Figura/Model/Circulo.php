<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 25/10/16
 * Time: 14:40
 */

namespace Model;
require_once 'Punto.php';
class Circulo
{
    private $origen;
    private $radio;
    /**
     * Circulo constructor.
     * @param $origen
     * @param $radio
     */
    public function __construct(Punto $origen, $radio)
    {
        $this->origen   = $origen;
        $this->radio    = $radio;
    }
    /**
     * @return Punto
     */
    public function getOrigen()
    {
        return $this->origen;
    }
    /**
     * @param Punto $origen
     * @return $this
     */
    public function setOrigen(Punto $origen)
    {
        $this->origen = $origen;
        return $this;
    }
    /**
     * @return int
     */
    public function getRadio()
    {
        return $this->radio;
    }
    /**
     * @param int $radio
     * @return $this
     */
    public function setRadio($radio)
    {
        $this->radio = (int) $radio;
        return $this;
    }
    function __toString()
    {
        return 'Circulo{' . $this->getOrigen() . ', ' . $this->getRadio() . '}';
    }
    public function desplazar($destino)
    {
        $this->getOrigen()->desplazar($destino);
    }
    public function esIgual(Circulo $circulo)
    {
        return $this->getOrigen()->esIgual($circulo->getOrigen()) &&
        $this->getRadio() == $circulo->getRadio();
    }
    public function area()
    {
        return M_PI * pow($this->getRadio(), 2);
    }
    public function perimetro()
    {
        return 2 * M_PI * $this->getRadio();
    }
    public function escalar($escala)
    {
        $this->setRadio($this->getRadio() * $escala);
    }
}

