<?php

/**
 * Created by PhpStorm.
 * User: david
 * Date: 14/10/16
 * Time: 17:36
 */
namespace models;

class RacionalModel
{
    private $nume1;
    private $nume2;
    private $den1;
    private $den2;
    private $resultado;

    public function __construct($den1, $den2, $nume1, $nume2)
    {
        $this->setDen1($den1);
        $this->setDen2($den2);
    }
    /**
     * @return mixed
     */
    public function getNume1()
    {
        return $this->nume1;
    }

    /**
     * @param mixed $nume1
     */
    public function setNume1($nume1)
    {
        $this->nume1 = $nume1;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNume2()
    {
        return $this->nume2;
    }

    /**
     * @param mixed $nume2
     */
    public function setNume2($nume2)
    {
        $this->nume2 = $nume2;
        return $this;
    }


    /**
     * @return mixed
     */
    public function getDen1()
    {
        return $this->den1;
    }

    /**
     * @param mixed $rac1
     */
    public function setDen1($den1)
    {
        $this->den1 = $den1;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDen2()
    {
        return $this->den2;
    }

    /**
     * @param mixed $rac2
     */
    public function setDen2($den2)
    {
        $this->den2 = $den2;
        return $this;
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
        return $this;
    }


}