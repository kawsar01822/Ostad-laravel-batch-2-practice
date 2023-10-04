<?php

//  object cloning

//     class Color{
//         public $color;

//         public function __construct($color){
//             $this->color = $color;
//         }

//         public function setColor($color){
//             echo $this->color = $color;
//         }
//     }
//     class FavColor {
//         public $data;
//         public $color;

//         public function __construct($data,$color){
//             $this->data = $data;
//             $this->color = new Color($color);
//         }

//         public function updateColor($color){
//             $this->color->setColor($color);
//         }

//         public function __clone(){
//             $this->color = clone $this->color;
//         }
//     }

// $fc1 = new FavColor('some data','blue');
// $fc2 = clone $fc1;
// print_r($fc1);
// print_r($fc2);

// $fc2->updateColor('green');
// print_r($fc1);
// print_r($fc2);


// Iterator & Countable Interface

// class Districts implements IteratorAggregate, Countable{
//     private $district;

//     public function __construct(){
//         $this->district = array();
//     }

//     public function setDistrict($district){
//         array_push($this->district, $district);
//     }

//     public function getDistrict(){
//         return $this->district;
//     }

//     public function getIterator(){
//         return new ArrayIterator($this->district);
//     }

//     public function count(){
//         return count($this->district);
//     }
// }

// $districts = new Districts();
// $districts->setDistrict("Chittagong");
// $districts->setDistrict("Dhaka");
// $districts->setDistrict("Pabna");
// $districts->setDistrict("Patuakhali");
// $districts->setDistrict("Rajshahi");

// foreach($districts as $district){
//     echo $district.PHP_EOL;
// }

// echo count($districts);



// 1. Write a PHP class 'Rectangle' that has properties for length and width. Implement methods to calculate the rectangle's area and perimeter.

// class Rectangle{
//     private $length;
//     private $width;
//     private $area;
//     private $perimeter;
    
//     public function __construct($length=0,$width=0){
//         $this->length = $length;
//         $this->width = $width;

//         $this->area = $this->length * $this->width;
//         $this->perimeter = 2 * ($this->length + $this->width);
//         $this->showData();
//     }

//     public function setLength($length){
//         $this->length = $length;
//     }

//     public function setWidth($width){
//         $this->width = $width;
//     }

//     public function getLength(){
//         return $this->length;
//     }

//     public function getWidth(){
//         return $this->width;
//     }

//     public function getArea(){
//         return $this->area = $this->length * $this->width;
//     }

//     public function getPerimeter(){
//         return $this->perimeter = 2 * ($this->length + $this->width);
//     }

//     public function showData(){
//         echo "Length: ".$this->length.PHP_EOL;
//         echo "Width: ".$this->width.PHP_EOL;
//         echo "Area: ".$this->getArea().PHP_EOL;
//         echo "Perimeter: ".$this->getPerimeter().PHP_EOL;
//     }
// }

// $reck = new Rectangle(4,5);
// $reck->setLength(5);
// $reck->setWidth(6);
// $reck->showData();



// 2. Write a PHP class called 'Circle' that has a radius property. Implement methods to calculate the circle's area and circumference.

// class Circle{
//     private $radius;
//     private $area;
//     private $circumference;

//     public function __construct($radius=0){
//         $this->radius = $radius;
//         $this->getArea();
//         $this->getCircumference();
//         $this->showData();
//     }

//     public function setRadius($radius){
//         $this->radius = $radius;
//     }

//     public function getRadius(){
//         return $this->radius;
//     }

//     public function getArea(){
//         return $this->area = number_format(pi() * $this->radius * $this->radius,2);
//     }

//     public function getCircumference(){
//         return $this->circumference = number_format(2 * pi() * $this->radius,2);
//     }

//     public function showData(){
//         echo "Radius: ".$this->radius.PHP_EOL;
//         echo "Area: ".$this->getArea().PHP_EOL;
//         echo "Circumference: ".$this->getCircumference().PHP_EOL;
//     }
// }

// $reck = new Circle(5);



// 3. Write a PHP class called 'Shape' with an abstract method 'calculateArea()'. Create two subclasses, 'Triangle' and 'Rectangle', that implement the 'calculateArea()' method.

// abstract class Shape{
//     abstract public function calculateArea();
// }

// class Triangle extends Shape{
//     private $base;
//     private $height;

//     public function __construct($base=0,$height=0){
//         $this->base = $base;
//         $this->height = $height;
//     }

//     public function calculateArea(){
//         return $this->base * $this->height / 2;
//     }
// }

// class Rectangle extends Shape{
//     private $length;
//     private $width;

//     public function __construct($length=0,$width=0){
//         $this->length = $length;
//         $this->width = $width;
//     }

//     public function calculateArea(){
//         return $this->length * $this->width;
//     }
// }

// $tri = new Triangle(4,5);
// echo $tri->calculateArea().PHP_EOL;

// $rect = new Rectangle(4,5);
// echo $rect->calculateArea().PHP_EOL;



// 4. Write a PHP interface called 'Resizable' with a method 'resize()'. Implement the 'Resizable' interface in a class called 'Square' and add functionality to resize the square.

// interface Resizable{
//     public function resize();
// }

// class Square implements Resizable{
//     private $side;
//     public function __construct($side=0){
//         $this->side = $side;
//     }

//     public function resize(){
//         return $this->side *= 2;
//     }
// }

// $sq = new Square(2);
// echo $sq->resize();



// 5. Write a PHP class called 'Vehicle' with properties like 'brand', 'model', and 'year'. Implement a method to display the vehicle details.

// class Vehicle{
//     private $brand;
//     private $model;
//     private $year;
    
//     public function __construct($brand="",$model="",$year=""){
//         $this->brand = $brand;
//         $this->model = $model;
//         $this->year = $year;
//         if($this->brand && $this->model && $this->year){
//             $this->display();
//         }
//     }

//     public function __SET($prop,$val){
//         $this->$prop = $val;
//     }

//     public function __GET($prop){
//         return $this->$prop;
//     }

//     public function display(){
//         echo $this->brand.PHP_EOL;
//         echo $this->model.PHP_EOL;
//         echo $this->year.PHP_EOL;
//     }
// }

// $bike = new Vehicle("Honda","Livo",2023);
// $bike->brand = "Yamaha";
// $bike->model = "YBR";
// $bike->year = "2018";
// $bike->display();



// 6. Write a PHP a class hierarchy for a library system, including classes like 'LibraryItem', 'Book', 'DVD', etc. Implement appropriate properties and methods for each class.