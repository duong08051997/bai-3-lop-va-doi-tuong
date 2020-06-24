
<?php
include "fan.php";


$fan1 = new Fan();
$fan1->setOn(true);
$fan1->setSpeed(1);
$fan1->setColor("red");
$fan1->setRadius(10);
echo $fan1->toString();
echo "<br>";
$fan2 = new Fan();
$fan2->setOn(false);
echo $fan2->toString();

