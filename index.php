<?php
include_once ('MovablePoint.php');
$test_Point = new Point(7.1,8.2);
 $test_Point->setXY(5,6);
var_dump($test_Point->getXY());
 echo $test_Point->toString();
$move = new MovablePoint(3,3,1,1);
$move->set_Speed(4,6);
$move->setXY(10,10);
var_dump($move->getXY());
echo $move->toString();
echo $move->move();