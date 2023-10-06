<?php

//==========  PHP OOP  ==========//

// Class

// class Human
// {
//     public $name;
//     function sayHi()
//     {
//         echo "Salam\n";
//     }

//     function sayName(){
//         echo "My name is {$this->name}\n";
//     }
// }

// class Cat
// {
//     function sayHi()
//     {
//         echo "Meow\n";
//     }
// }

// class Dog
// {
//     function sayHi()
//     {
//         echo "Woof\n";
//     }
// }

// $human = new Human();
// $cat = new Cat();
// $dog = new Dog();

// $human->sayHi();
// $cat->sayHi();
// $dog->sayHi();

// $human->name = "Kawsar";
// echo $human->name;  // Kawsar
// $human->sayName();     // My name is Kawsar
// $human->age = 18;
// echo $human->age;   //18 result will be there but we won't use like this




// Class constructor

// class Human
// {
//     public $name;
//     public $age;

//     function __construct($personName, $personAge = 0){
//         $this->name = $personName;
//         $this->age = $personAge;
//         $this->sayHi();
//     }

//     function sayHi()
//     {
//         echo "Salam\n";
//         $this->sayName();
//     }

//     function sayName(){
//         if($this->age){
//             echo "My name is {$this->name}, I am {$this->age} years old\n";
//         }else{
//             echo "My name is {$this->name} and I don't know hy old I am\n";
//         }
//     }
// }

// $human = new Human("Kawsar");


// Class inheritance
// Calling parent method from child method

// class ParentClass{
//     protected $name;
//     function __construct($name)
//     {
//         $this->name = $name;
//         $this->sayHi();
//     }

//     function sayHi(){
//         echo "Hi from {$this->name}\n";
//     }
// }

// class ChildClass extends ParentClass{
//     function sayHi(){
//         parent::sayHi();
//         echo "Hello";
//     }
// }

// $child = new ChildClass("Kawsar");



// abstract keyword
// Final keyword

// abstract class OurClass{
//     public function sayHi(){
//         echo "Hi";
//     }

//     abstract function eat();
// }

// class MyClass extends OurClass{
//     public function eat(){
//         echo "I am eating";
//     }
// }

// $eat = new MyClass;
// $eat->eat();



// abstract class OurClass{
//     final function doSomething(){
//         echo "I am doing something";
//     }
// }

// class MyClass extends OurClass{
    // function doSomething(){      // can't override final method abstract or normal both
    //     echo "I am doing something else";
    // }
// }

// $mc = new MyClass();
// $mc->doSomething();




// Interfaces    - polymorphism

// interface BaseAnimal{
//     function isAlive();
//     function canEat($param1, $param2);
//     function breed();
// }

// class Animal implements BaseAnimal{
//     function isAlive(){}
//     function canEat($param1, $param2){}
//     function breed(){}
// }

// interface BaseHuman extends BaseAnimal{
//     function canTalk();
// }

// class Human implements BaseHuman{
//     function isAlive(){}
//     function canEat($param1,$param2){}
//     function breed(){}
//     function canTalk(){}
// }


// $cat = new Animal();
// echo $cat instanceof Human; // false
// $h = new Human();
// // echo $h instanceof BaseHuman; // true


// abstract Class AbstractHuman implements BaseHuman{
//     abstract public function run();
//     function eat(){
//         echo "I am eating";
//     }
// }

// class Human2 extends AbstractHuman{
//     function isAlive(){}
//     function canEat($param1,$param2){}
//     function breed(){}
//     function canTalk(){}
//     function run(){
//         echo "I am running";
//     }
// }




// Static methods and properties of classes

// class MathCalculator{
//     private $number;
//     static $name;
//     static function fibonacci($n){
//         self::$number = $n;
//         echo "Fibonacci series up to $n\n";
//         self::doSomething();
//     }

//     static function doSomething(){
//         echo "I am doing something";
//     }

//     function factorial($n){
//         self::$name = "ABCD";
//         $this->number = $n;
//         echo "Calculating factorial of $n\n";
//         $this->doSomething();
//         self::doSomething();
//     }
// }

// $math = new MathCalculator();
// $math->factorial(7);

// MathCalculator::fibonacci(8);
// echo MathCalculator::$name;



// static method override

// class A{
//     static function sayHi(){
//         echo "Hi from A\n";
//     }
// }

// class B extends A{
//     static function sayHi(){
//         echo "Hello from B\n";
//         parent::sayHi();
//     }
// }

// B::sayHi();



// Static Scope

// class A{
//     // private static $name;    // can't be accessed from child class
//     // protected static $name;     // can be accessed from child class but can't be accessed from object
//     public static $name;
//     static function sayHi(){
//         self::$name = "Name Here";
//         echo "Hi from A\n";
//     }
// }

// class B extends A{
//     static function sayHi(){
//         echo "Hello from B\n";
//         parent::sayHi();
//         echo parent::$name;
//     }
// }

// B::sayHi();
// echo B::$name;      // can't be accessed as it is private property,  can be accessed if $name is public static only




// constants in class

// class Myclass{
//     const CITY = "Dhaka";   // constant create

//     function sayHi(){
//         echo "Hi from ".self::CITY."\n";
//         echo "Hi from ".$this::CITY;
//     }
// }

// echo Myclass::CITY.PHP_EOL;     // constant access

// $m = new Myclass();
// // $m->CITY;             // constant can't be accessed by this way
// $m->sayHi();        // Hi from Dhaka    // constant can be accessed by this way



// get set magic method

// class Person{
//     private $name;
//     private $age;
//     private $gender;

//     public function __construct($name="", $age="", $gender=""){
//         $this->name = $name;
//         $this->age = $age;
//         $this->gender = $gender;
//     }

//     public function __set($prop, $value){
//         $this->$prop = $value;
//     }

//     public function __get($prop){
//         return $this->$prop;
//     }
// }

// $kawsar = new Person("Kawsar",28,"Male");
// $kawsar->age = 22;
// echo $kawsar->age;




// practical use of interface

// class DistrictCollection implements IteratorAggregate,Countable{
//     private $districts;

//     function __construct()
//     {
//         $this->districts = array();
//     }
//     public function add($districts){
//         array_push($this->districts, $districts);
//     }

//     // public function getDistricts(){
//     //     return $this->districts;
//     // }

//     function getIterator()
//     {
//         return new ArrayIterator($this->districts);
//     }

//     function count(){
//         return count($this->districts);
//     }
// }

// $districts = new DistrictCollection();
// $districts->add("Chittagong");
// $districts->add("Dhaka");
// $districts->add("Patuakhali");
// $districts->add("Sitakundu");

// // $_districts = $districts->getDistricts();
// foreach($districts as $district){
//     echo $district."\n";
// }

// echo count($districts);



// Object Cloning

// class FavColor{
//     public $data;

//     function __construct($data){
//         $this->data = $data;
//     }

//     function setData($data){
//         $this->data = $data;
//     }
// }

// $fc1 = new FavColor('Some Data');
// $fc2 = clone $fc1;

// print_r($fc1);
// print_r($fc2);

// $fc2->setData("More Data");
// print_r($fc1);
// print_r($fc2);


// class Color{
//     public $color;

//     public function __construct($color){
//         $this->color = $color;
//     }

//     public function setColor($color){
//         $this->color = $color;
//     }
// }

// class FavColor{
//     public $data;
//     public $color;

//     function __construct($data,$color){
//         $this->data = $data;
//         $this->color = new Color("$color");
//     }

//     function setData($data,$color){
//         $this->data = $data;
//         $this->color->setColor($color);
//     }

//     function __clone(){
//         $this->color = clone $this->color;
//     }
// }

// $fc1 = new FavColor('Some Data','red');
// $fc2 = clone $fc1;

// print_r($fc1);
// print_r($fc2);

// $fc2->setData("More Data",'green');
// print_r($fc1);
// print_r($fc2);



// __toString()    // to echo object

// class Color{
//     public $color;

//     public function __construct($color){
//         $this->color = $color;
//     }

//     public function setColor($color){
//         $this->color = $color;
//     }

//     function __toString(){
//         return "The color is $this->color";
//     }
// }

// $c = new Color("red");
// echo $c;



// comparing object 

// class Planet{
//     public $name;

//     function __construct($name){
//         $this->name = $name;
//     }
// }

// $e = new Planet("Earth");
// $e1 = new Planet("Earth");
// $e2 = $e1;  // reference
// $m = new Planet("Mars");

// if($e == $m){                // Not Similar
//     echo "Similar Planets";
// }else{
//     echo "Not Similar";
// }

// if($e == $e1){                // Similar
//     echo "Similar Planets";
// }else{
//     echo "Not Similar";
// }

// if($e === $e1){                // Not Similar
//     echo "Similar Planets";
// }else{
//     echo "Not Similar";
// }

// if($e1 === $e2){                // Similar as e2 holds e1 reference
//     echo "Similar Planets";
// }else{
//     echo "Not Similar";
// }



// Early vs Late Static Binding

// class Planet{
//     static function echoName(){
//         // echo self::getName();   //  self will call own class function first though it called from child class
//         // echo static::getName();     //  static will call from where the method called. ie: echoName called from child class, so it will run child class function.
//     }

//     static function getName(){
//         return "Planet";
//     }
// }

// class Earth extends Planet{
//     // static function echoName(){
//     //     echo self::getName();
//     // }

//     static function getName(){
//         return "Earth";
//     }
// }

// $e = new Earth();
// $e->echoName();



// property overloading, __isset() and __unset() and __call and __callStatic magic methods
// __isset()  -- to check if method or property is there in the class
// __unset()  -- to remove property or method
// __call() -- to check if method exists
// __callStatic() -- to call static method

// class MotorCycle{
//     private $parameters;
//     public function __construct($displacement,$capacity,$milage){
//         $this->parameters = [];
//         $this->parameters['displacement'] = $displacement;
//         $this->parameters['capacity'] = $capacity;
//         $this->parameters['milage'] = $milage;
//     }

//     public function getDisplacement(){
//         return $this->parameters['displacement']."\n";
//     }

//     // public function setDisplacement($displacement){
//     //     $this->parameters['displacement'] = $displacement;
//     // }

//     function __get($name){
//         // echo $this->$name;
//         echo $this->parameters[$name];
//     }

//     function __set($name,$value){
//         // echo $this->$name;
//         $this->parameters[$name] = $value;
//     }

//     function __isset($name){
//         if(!isset($this->parameters[$name])){
//             echo "$name not found\n";
//             return false;
//         }
//         echo $this->parameters[$name];
//     }

//     function __unset($name){
//         unset($this->parameters[$name]);
//     }

//     function __call($name,$arguments){
//         echo $name; // method name
//         if($arguments):
//             echo $arguments[0];
//         endif;
//     }

//     static function __callStatic($name,$arguments ){
//         echo "$name not exists\n"; // method name
//         if($arguments):
//             echo $arguments[0];
//         endif;
//     }
// }

// $pulsar = new MotorCycle("150CC","10L","45Kmph");

// echo $pulsar->getDisplacement();

// // if(isset($pulsar->tireSize)){
// //     echo "Found\n";
// // }else{
// //     echo "not found\n";
// // }

// isset($pulsar->displacement);
// // unset($pulsar->capacity);
// // isset($pulsar->capacity);
// echo $pulsar->getDisplacement();
// $pulsar->run("100kmph");

// MotorCycle::run();




// Autoloading
// same page class autoload && class inside a folder autoload

// function autoload($class){
//     if(strpos($class,"Solar_") !== false){
//         $fileName = str_replace("Solar_","",$class);
//         include "solar/$fileName.php";
//     }else{
//         include $class.".php";
//     } 
// }

// spl_autoload_register('autoload');

// $planet = new Planets("Mars");
// echo $planet->getName();

// $solar = new Solar_solar("Earth");
// echo $solar->getName();

