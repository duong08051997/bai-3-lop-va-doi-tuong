<?php
class Customer{
    private $name;
    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }
}
$c = new Customer();
$c->setName("duong");
//echo $c->name;  //lỗi
echo $c->getName();

