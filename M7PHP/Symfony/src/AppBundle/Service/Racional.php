<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 15/11/16
 * Time: 20:28
 */

namespace AppBundle\Service;


class Racional
{
    private $numerador;
    private $denominador;


    /**
     * Racional constructor.
     * @param null $numerador
     * @param null $denominador
     */
    public function __construct($numerador= null, $denominador= null)
    {
        $this->setNumerador($numerador);
        $this->setDenominador($denominador);
    }

    /**
     * @return mixed
     */
    public function getNumerador()
    {
        return $this->numerador;
    }

    /**
     * @param mixed $numerador
     */
    public function setNumerador($numerador)
    {
        $this->numerador = $numerador;
    }

    /**
     * @return mixed
     */
    public function getDenominador()
    {
        return $this->denominador;
    }

    /**
     * @param mixed $denominador
     */
    public function setDenominador($denominador)
    {
        $this->denominador = $denominador;
    }

    /**
     * @return int
     */
    public function getResultado()
    {
        return $this->resultado;
    }

    /**
     * @param int $resultado
     */
    public function setResultado($resultado)
    {
        $this->resultado = (int) $resultado;
        return $this;
    }


}