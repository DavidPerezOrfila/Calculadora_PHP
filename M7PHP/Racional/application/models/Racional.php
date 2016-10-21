<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 20/10/16
 * Time: 15:45
 */

namespace models;


class Racional
{
    private $numerador;
    private $denominador;

    /**
     * Racional constructor.
     * @param null $numerador
     * @param null $denominador
     */
    public function __construct($numerador=null, $denominador=null)
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
     * @return mixed
     */
    public function getDenominador()
    {
        return $this->denominador;
    }

    /**
     * @param mixed $numerador
     */
    public function setNumerador($numerador)
    {
        $this->numerador = $numerador;
    }

    /**
     * @param mixed $denominador
     */
    public function setDenominador($denominador)
    {
        if($denominador == 0){
            die;
        }
        $this->denominador = $denominador;
    }


}