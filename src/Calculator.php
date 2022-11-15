<?php

namespace SpeedDigit\Localization;

class Calculator
{
    public $result = 0;

    public function add($number)
    {
        $this->result += $number;
        return $this;
    }
    public function subtract($number)
    {
        $this->result -= $number;
        return $this;
    }
    
    public function multiply($number)
    {
        $this->result *= $number;
        return $this;
    }
    public function clear()
    {
        $this->result = 0;
        return $this;
    }
    public function getResult()
    {
        return $this->result;
    }

}
