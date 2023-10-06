<?php

class Shape
{
    protected $name;
    protected $area;

    public function __construct($name)
    {
        $this->name = $name;
        $this->calculateArea();
    }

    public function getArea()
    {
        printf("This %s's area is %.2f\n",$this->name,$this->area);
    }

    public function calculateArea(){}   
}

class Triangle extends Shape{
    private $a;
    private $b;
    private $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        parent::__construct("Triangle");
    }

    public function calculateArea(){
        $perimeter = ($this->a + $this->b + $this->c) / 2;
        $this->area = sqrt($perimeter * ($perimeter - $this->a) * ($perimeter - $this->b) * ($perimeter - $this->c));
    }
}

class Rectangle extends Shape{
    private $a;
    private $b;
    public function __construct($a, $b){
        $this->a = $a;
        $this->b = $b;
        parent::__construct("Rectengle");
    }

    public function calculateArea()
    {
        $this->area = $this->a * $this->b;
    }
}

$r = new Rectangle(2,3);
$r->getArea();

$t = new Triangle(2,3,4);
$t->getArea();