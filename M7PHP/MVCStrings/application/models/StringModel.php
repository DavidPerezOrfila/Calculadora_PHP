<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 11/10/16
 * Time: 19:40
 */

namespace models;


class StringModel
{
    private $cad1;
    private $cad2;
    private $resultado;

    public function __construct($cad1, $cad2)
    {
        $this->getCad1($cad1);
        $this->getCad2($cad2);
    }

    /**
     * @return mixed
     */
    public function getCad1()
    {
        return $this->cad1;
    }

    /**
     * @param mixed $cad1
     */
    public function setCad1($cad1)
    {
        $this->cad1 = $cad1;
    }

    /**
     * @return cad2
     */
    public function getCad2()
    {
        return $this->cad2;
    }

    /**
     * @param mixed $cad2
     */
    public function setCad2($cad2)
    {
        $this->cad2 = $cad2;
    }

    /**
     * @return mixed
     */
    public function getResultado()
    {
        return $this->resultado;
    }

    /**
     * @param mixed $resultado
     */
    public function setResultado($resultado)
    {
        $this->resultado = $resultado;
    }

    /**
     *
     */
    public  function  concat()
    {
        $this->resultado =$this->getCad1() . " " . $this->getCad2();
    }

    /**
     * Compara la longitud de dos cadenas y devuelve la mayor
     */
    public function long()
    {
        $this->resultado = ($this->getCad1()); ($this->getCad2());

    }


}