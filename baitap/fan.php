<?php
class Fan{
     const SLOW = 1;
     const MEDIUM = 2;
     const FAST = 3;
     private $speed = 0;

    /**
     * @return int
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @param int $speed
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    /**
     * @return bool
     */
    public function isOn()
    {
        return $this->on;
    }

    /**
     * @param bool $on
     */
    public function setOn($on)
    {
        $this->on = $on;
    }

    /**
     * @return int
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param int $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }
     private $on =false;
     private $radius =5;
     private $color = "blue";

     public function __construct()
     {
     }
public function toString(){
    if ($this->isOn()===true) {
        echo "fan is on";
        echo"<br>";
        echo $this->speed;
        echo"<br>";
        echo $this->color;
        echo"<br>";
        echo $this->radius;
    }else{
        echo "fan is off";
        echo"<br>";
        echo $this->speed;
        echo"<br>";
        echo $this->color;
        echo"<br>";
        echo $this->radius;

    }
}
}
