<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tính nghiệm phương trình bậc 2</title>
</head>
<body>
<form action="" method="post">
    a: <input name="a" type="number" value="a"/>
    b: <input name="b" type="number" value="b"/>
    c: <input name="c" type="number" value="c"/>
    <input type="submit" name="submit" value="enter">
</form>
<?php

include "quadraticEquation.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a =$_POST["a"];
    $b =$_POST["b"];
    $c =$_POST["c"];
$cc = new QuadraticEquation($a,$b,$c);
$cc->display();
}


?>
</body>
</html>

