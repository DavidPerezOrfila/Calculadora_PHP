<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 20/10/16
 * Time: 15:46
 */

namespace models;
require_once 'Racional.php';

class CalculatorRacional
{
    private $op1;
    private $op2;

    public function __construct(Racional $r1 = null, Racional $r2 = null)
    {
        $this->setOp1($r1);
        $this->setOp2($r2);
    }

    /**
     * @return mixed
     */
    public function getOp1()
    {
        return $this->op1;
    }


    /**
     * @return Racional
     */
    public function getOp2()
    {
        return $this->op2;
    }

    /**
     * @param mixed $op1
     */
    public function setOp1(Racional $r1)
    {
        $this->op1 = $r1;
    }
    public function setOp2(Racional $r2)
    {
        $this->op2 = $r2;
    }
    public function multiply(Racional $r){

        $resultado= new Racional();
        $resultado= $this->setNumerador(getNumerador() * $r->getNumerador());
        $resultado= $this->setDenominador(getDenominador() * $r->getDenominador());

        return $resultado;
    }

    public function division(Racional $r){
        $resultado= new Racional();
        $resultado= $this->setNumerador($this->getNumerador() * $r->getDenominador());
        $resultado= $this->setDenominador($this->getDenominador() * $r->getNumerador());

        return $resultado;

    }
}