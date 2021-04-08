<?php

class Point
{
    public float $x;
    public float $y;
    public $XY=[];

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function setX($x)
    {
        $this->x = $x;
    }

    public function setY($y)
    {
        $this->y = $y;
    }

    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function setXY($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getXY()
    {
        array_push($this->XY,$this->x,$this->y);
        return $this->XY;
    }
    public function toString()
    {
        echo "(".$this->x.",".$this->y.") <br/>";
    }
}