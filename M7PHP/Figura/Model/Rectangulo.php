<?php

namespace figura;
require_once 'Cuadrado.php';
require_once 'Punto.php';
class Rectangulo extends Cuadrado
{
    /**
     * @var int
     */
    private $_alto;
    /**
     * @param Punto $_origen
     * @param int   $_ancho
     * @param int   $_alto
     */
    public function __construct(Punto $_origen, $_ancho, $_alto)
    {
        parent::__construct($_origen, $_ancho);
        $this->_alto = $_alto;
    }
    /**
     * area
     *
     * Description
     *
     * @return int
     */
    public function area()
    {
        return $this->_ancho * $this->_alto;
    }
    /**
     * perimetro
     *
     * Description
     *
     * @return int
     */
    public function perimetro()
    {
        return 2 * $this->_ancho + 2 * $this->_alto;
    }
    /**
     * escalar
     *
     * Description
     *
     * @param int $dx
     */
    public function escalar($dx)
    {
        parent::escalar($dx); //$this->_ancho
        $this->_alto *= $dx / 100;
    }
    /**
     * __toString
     *
     * Description
     *
     * @return string
     */
    public function __toString()
    {
        $cuadradoToString = parent::__toString();
        return 'Rectangulo[' . $cuadradoToString . ', ' . $this->_alto . ']';
    }
} 