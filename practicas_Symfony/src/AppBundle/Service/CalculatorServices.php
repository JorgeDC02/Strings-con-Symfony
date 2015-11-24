<?php
/**
 * Created by PhpStorm.
 * User: jorge
 * Date: 18/11/15
 * Time: 18:00
 */

namespace AppBundle\Service;


class CalculatorServices
{
    private $campo1;
    private $campo2;
    private $result;

    /**
     * @return mixed
     */
    public function getCampo1()
    {
        return $this->campo1;
    }

    /**
     * @param mixed $campo1
     */
    public function setCampo1($campo1)
    {
        $this->campo1 = $campo1;
    }

    /**
     * @return mixed
     */
    public function getCampo2()
    {
        return $this->campo2;
    }

    /**
     * @param mixed $campo2
     */
    public function setCampo2($campo2)
    {
        $this->campo2 = $campo2;
    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param mixed $result
     */
    public function setResult($result)
    {
        $this->result = $result;
    }

    //Operacion sumar
    public function sum()
    {
        $this->setResult($this->getCampo1()+$this->getCampo2());
    }

    //Operacion restar
    public function restar()
    {
        $this->setResult($this->getCampo1()-$this->getCampo2());
    }

    //Operacion multiplicar
    public function multiplicar()
    {
        $this->setResult($this->getCampo1()*$this->getCampo2());
    }

    //Operacion dividir
    public function dividir()
    {
        $this->setResult($this->getCampo1()/$this->campo2);
    }

    public function contarCAdenas()
    {
        $this->setResult('Cadena 1 tiene: '.strlen($this->getCampo1()).'carcateres, cadena2 tiene: '.strlen($this->getCampo2()));
    }


    public function invertirCadena()
    {
        $this->setResult('Cadena 1 invertida: '.strrev($this->getCampo1()).', cadena 2 invertida: '.strrev($this->getCampo2()));
    }

    public function convertirMauscula()
    {
        $this->setResult('Cadena 1 invertida: '.strtoupper($this->getCampo1()).', cadena 2 invertida: '.strtoupper($this->getCampo2()));
    }

    public function juntar()
    {
        $this->setResult('Cadenas juntadas: '.$this->getCampo1().$this->getCampo2());
    }

}