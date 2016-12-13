<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 15/11/16
 * Time: 20:34
 */

namespace AppBundle\Service;
require_once 'Racional.php';


class CalculadoraRacional
{
    private $op1;
    private $op2;
    private $resultado;

    public function __construct(Racional $r1 = null, Racional $r2= null)
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
     * @param Racional $r1
     */
    public function setOp1(Racional $r1)
    {
        $this->op1 = $r1;
    }

    /**
     * @return mixed
     */
    public function getOp2()
    {
        return $this->op2;
    }

    /**
     * @param Racional $r2
     */
    public function setOp2(Racional $r2)
    {
        $this->op2 = $r2;
    }

    /**
     * @param mixed $resultado
     */
    public function setResultado($resultado)
    {
        $this->resultado = $resultado;
    }

    public function multiplicar()
    {
        $this->setResultado($this->getOp1() * $this->getOp2());
    }

    public function multiply(Racional $r)
    {
        $resultado = $this->get('Racional');
        $resultado = $this->setNumerador($this->getNumerador() * $r->getNumerador());
        $resultado = $this->setDenominador($this->getDenominador() * $r->getDenominador());
        return $resultado;
    }

    public function division(Racional $r)
    {
        $resultado = new Racional();
        $resultado = $this->setNumerador($this->getNumerador() * $r->getDenominador());
        $resultado = $this->setDenominador($this->getDenominador() * $r->getNumerador());
        return $resultado;
    }








}