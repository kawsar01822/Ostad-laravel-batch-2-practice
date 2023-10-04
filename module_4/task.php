<?php

//Task 1
// Instantiate another object
// Assign values to properties(name, username, followerCount)
// Print the object


// class User
// {
//     // Create Properties
//     public $name;
//     public $username;
//     public $followerCount;
// }

// $obj = new User();

// $obj->name = "Kawsar";
// $obj->username = "@kawsar";
// $obj->followerCount = "2306";

// print_r($obj);



// Task
// Create a discount property
// Then calculate the subtotal using the calculateTotal() method

// class Cart
// {
//     public $itemsTotal;
//     public $shippingCost;
//     public $discount;

//     public function calculateTotal()
//     {
//         $subTotal = $this->itemsTotal + $this->shippingCost - $this->discount;
//         return $subTotal;
//     }
// }

// $cart = new Cart();

// $cart->itemsTotal   = 100;
// $cart->shippingCost = 20;
// $cart->discount = 10;

// $subTotal = $cart->calculateTotal();
// echo "Subtotal: $subTotal";
// print_r( $cart );



//Task
//Create your favorite song
//Set songId and title
//Add song to the playlist
//Print the song

// class Song{
//     public $songId;
//     public $title;
// }

// class Playlist{
//     public $name;
//     public $songs = [];
// }

// $numb = new Song();
// $numb->songId = 1;
// $numb->title = "Numb";

// $rongila = new Song();
// $rongila->songId = 2;
// $rongila->title = "Rongila";

// $myPlayList = new Playlist();
// $myPlayList->name = "My Playlist";
// $myPlayList->songs[] = $numb;
// $myPlayList->songs[] = $rongila;

// print_r($myPlayList);



// abstract class Vehicle{
//     abstract public function baseFare();
//     abstract public function perKilo();
//     private $distance;

//     function fare($distance){
//         $this->distance = $distance;
//         return $this->baseFare() + $this->perKilo()*$this->distance;
//     }
// }

// class Bike extends Vehicle{
//     public function baseFare(){
//         return 30;
//     }

//     public function perKilo(){
//         return 20;
//     }
// }

// class Car extends Vehicle{
//     public function baseFare(){
//         return 50;
//     }

//     public function perKilo(){
//         return 30;
//     }
// }

// $car = new Car();
// print_r("Car Fare: ".$car->fare(2).PHP_EOL);

// $bike = new Bike();
// print_r("Bike Fare: ".$bike->fare(5).PHP_EOL);



