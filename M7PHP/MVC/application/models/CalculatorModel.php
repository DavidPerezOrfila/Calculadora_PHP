<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 11/10/16
 * Time: 19:40
 */

namespace models;


class CalculatorModel
{
    private $op1;
    private $op2;
    private $resultado;

    public function __construct($op1, $op2)
    {
        $this->getOp1($op1);
        $this->getOp2($op2);
    }

    /**
     * @return mixed
     */
    public function getOp1()
    {
        return $this->op1;
    }

    /**
     * @param mixed $op1
     */
    public function setOp1($op1)
    {
        $this->op1 = (int) $op1;
    }

    /**
     * @return mixed
     */
    public function getOp2()
    {
        return $this->op2;
    }

    /**
     * @param mixed $op2
     */
    public function setOp2($op2)
    {
        $this->op2 = (int) $op2;
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
    public function sum()
    {
        $this->resultado = $this->getOp1() + $this->getOp2();
    }

    /**
     *
     */
    public function substract()
    {
        $this->resultado = $this->getOp1() - $this->getOp2();
    }

    /**
     *
     */
    public function multiply()
    {
        $this->resultado = $this->getOp1() * $this->getOp2();
    }

    /**
     *
     */
    public function division()
    {
        $this->resultado = $this->getOp1() / $this->getOp2();
    }



}