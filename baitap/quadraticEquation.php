<?php

class QuadraticEquation
{
    private $a;
    private $b;
    private $c;

    /**
     * @return mixed
     */
    public function getA()
    {
        return $this->a;
    }

    /**
     * @param mixed $a
     */
    public function setA($a)
    {
        $this->a = $a;
    }

    /**
     * @return mixed
     */
    public function getB()
    {
        return $this->b;
    }

    /**
     * @param mixed $b
     */
    public function setB($b)
    {
        $this->b = $b;
    }

    /**
     * @return mixed
     */
    public function getC()
    {
        return $this->c;
    }

    /**
     * @param mixed $c
     */
    public function setC($c)
    {
        $this->c = $c;
    }


    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getDelta()
    {
        return ($this->b ** 2 - 4 * $this->a * $this->c);
    }

    public function getRoot1()
    {
        if ($this->getDelta() > 0) {
            return (-$this->b + sqrt($this->getDelta())) / (2 * $this->a);
        }
    }

    public function getRoot2()
    {
        if ($this->getDelta() > 0) {
            return (-$this->b - sqrt($this->getDelta())) / (2 * $this->a);
        }
    }

    public function getRoot()
    {
        if ($this->getDelta() == 0) {
            return -$this->b / 2 * $this->a;
        }
    }

    public function voNghiem()
    {
        if ($this->getDelta() < 0) {
            echo "phương trình vô nghiệm";
        }
    }


    public function display()
    {
        if ($this->getDelta() == 0) {
            echo "phương trình có nghiệm kép : " . $this->getRoot();
        } else if ($this->getDelta() > 0) {
            echo " phương trình có 2 nghiệm : x1 = u" . $this->getRoot1() . " và x2 = " . $this->getRoot2();
        }else {
            echo $this->voNghiem();
        }
    }

}
