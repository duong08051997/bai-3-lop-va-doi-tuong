<?php
include "people.php";
//$connguoi = new ConNguoi\ConNguoi();
//echo $connguoi->getName();

use People\People;
$conNguoi = new People();
echo $conNguoi->getName();


//Định danh
use People as conNguoi;
$conNguoi = new conNguoi\People();
echo $conNguoi->getName();