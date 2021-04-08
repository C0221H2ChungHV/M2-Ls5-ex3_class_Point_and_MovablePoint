<?php
include_once('Point.php');

class MovablePoint extends Point
{
    public float $xSpeed;
    public float $ySpeed;
    public $speed = [];

    public function __construct($x, $y, $xSpeed, $ySpeed)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    public function set_xSpeed($xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }

    public function set_ySpeed($ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }

    public function get_xSpeed()
    {
        return $this->xSpeed;
    }

    public function get_ySpeed()
    {
        return $this->ySpeed;
    }

    public function set_Speed($xSpeed, $ySpeed)
    {
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    public function get_Speed()
    {
    array_push($this->speed,$this->xSpeed,$this->ySpeed);
    }
    public function toString()
    {
        echo "(".$this->x.",".$this->y."), Speed=(".$this->xSpeed.",".$this->ySpeed.") <br/>";
    }
    public function move()
    {
        $this->x += $this->xSpeed;
        $this->y +=$this->ySpeed;
        return "toa do sau di chuyen".$this->x.",".$this->y;
    }
}
