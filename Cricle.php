<?php
class Cricle{
    public $name;
    public $radius;
    public $color;
    public function __construct($name,$radius,$color)
    {
        $this->name=$name;
        $this->color=$color;
        $this->radius=$radius;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }
    public function calculateArea(){
        return pi()*pow($this->radius,2);
    }
    public  function calculatePerimeter(){
        return pi()*$this->radius*2;
    }
    public function Display(){
        return "Tên: ".$this->name."<br>"."Màu: ".$this->color."<br>"."Bán Kính: ".$this->radius."<br>"."Diện tích $this->name: ".$this->calculateArea()."<br>"."Chu vi $this->name: ".$this->calculatePerimeter();
    }
}