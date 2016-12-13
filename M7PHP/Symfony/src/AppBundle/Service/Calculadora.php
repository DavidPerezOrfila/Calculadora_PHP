<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 28/10/16
 * Time: 17:26
 */

namespace AppBundle\Service;


class Calculadora
{
    /**
     * @var int
     */
    private $op1;

    /**
     * @var int
     */
    private $op2;

    /**
     * @var int
     */
    private $resultado;


    /**
     * Calculadora constructor.
     * @param $op1
     * @param $op2
     * @param $resultado
     */
    public function __construct($op1=null, $op2=null, $resultado=null)
    {
        $this
            ->setOp1($op1)
            ->setOp2($op2)
            ->setResultado($resultado);

    }

    /**
     * @return int
     */
    public function getOp1()
    {
        return $this->op1;
    }

    /**
     * @param int $op1
     */
    public function setOp1($op1)
    {
        $this->op1 = (int) $op1;
        return $this;
    }

    /**
     * @return int
     */
    public function getOp2()
    {
        return $this->op2;
    }

    /**
     * @param int $op2
     */
    public function setOp2($op2)
    {
        $this->op2 = (int) $op2;
        return $this;
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

    /**
     *
     */
    public function sum()
    {

        $this->setResultado($this->getOp1() + $this->getOp2());

        return $this->getResultado();

    }

    /**
     *
     */
    public function multi()
    {

        $this->setResultado($this->getOp1() * $this->getOp2());

        return $this->getResultado();
    }

    /**
     *
     */
    public function restar()
    {
        $this->setResultado($this->getOp1() - $this->getOp2());

        return $this->getResultado();
    }

    /**
     *
     */
    public function dividir()
    {
        if($this->getOp2() !== 0) {
            $this->setResultado($this->getOp1()/ $this->getOp2());
            return $this->getResultado();
        }else{

            return $this->setResultado(0);
        }
    }

}