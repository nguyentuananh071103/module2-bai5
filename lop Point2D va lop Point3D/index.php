<?php
include_once ('Point2D.php');
include_once ('Point3D.php');

$point = new Point2D(5, 6);
echo 'point:' .$point->toString()."<br/>";
echo 'point:' .$point->getX()."<br/>";
$point1 = new Point3D(3, 4, 5);
echo 'point1:'.$point1->toString()."<br/>";
echo 'point1:'.$point1->getXYZ();
