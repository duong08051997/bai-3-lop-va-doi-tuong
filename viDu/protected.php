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
class DiscountCustomer extends Customer{
    private $discount;

    public function setData($name,$discount)
    {
           // $this->name = $name;
            $this->discount = $discount;
    }
}
$dc = new DiscountCustomer();
$dc->setData("duong",10);
//echo $dc->name;
echo $dc->getName();