<?php
include "lop.php";
$connguoi = new lop\ConNguoi\ConNguoi();
echo $connguoi->getName();

$nguoilon =new lop\NguoiLon\NguoiLon();
echo $nguoilon->getName();
