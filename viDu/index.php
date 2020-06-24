<?php include ("class_lib.php");?>
<?php
$stefan = new person();
$jimmy =new person;
$stefan->set_name("duong");
$jimmy->set_name("bui xuan");
echo "full name ".$stefan->get_name();
echo "full ".$jimmy->get_name();
?>