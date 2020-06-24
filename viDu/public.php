<?php
class Customer{
    public $name;
    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }
}
$c = new Customer();
$c->setName("duong");
echo $c->name;
$c->name ="new name";
echo $c->name;

