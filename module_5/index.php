<?php

// write json formatted data in file 

// $fp = fopen("data.txt", "w");

// $student = [[
//             "name" => "Kawsar",
//             "age" => 20,
//             "address" => "Dhaka",
//             "marks" => [
//                 "bangla" => 80,
//                 "english" => 70,
//                 "math" => 90,
//                 "science" => 80,
//                 "social" => 70,
//                 "religion" => 80
//                 ]
//             ],
//             [
//             "name" => "Khair",
//             "age" => 22,
//             "address" => "Chittagong",
//             "marks" => [
//                 "bangla" => 40,
//                 "english" => 30,
//                 "math" => 70,
//                 "science" => 90,
//                 "social" => 85,
//                 "religion" => 100
//                 ]
//             ],
//         ];

// fwrite($fp, json_encode($student));
// fclose($fp);

// read json formatted data in file 

// $fp = fopen("data.txt", "r");

// $data = fread($fp, filesize("data.txt"));
// $data = json_decode($data,true);   // use second parameter true to convert json to array | use second parameter false to convert json to object


// apend json formatted data in file 

// $fp = fopen("data.txt", "a");

// $student = [
//             "name" => "Khair",
//             "age" => 22,
//             "address" => "Chittagong",
//             "marks" => [
//                 "bangla" => 40,
//                 "english" => 30,
//                 "math" => 70,
//                 "science" => 90,
//                 "social" => 85,
//                 "religion" => 100
//                 ]
//             ];

// fwrite($fp, json_encode($student));

// But these wont combine with previous data


// Working with json_decode and json_encode to store data n efficient way in file

// $student = [
//             "name" => "Khair",
//             "age" => 22,
//             "address" => "Chittagong",
//             "marks" => [
//                 "bangla" => 40,
//                 "english" => 30,
//                 "math" => 70,
//                 "science" => 90,
//                 "social" => 85,
//                 "religion" => 100
//                 ]
//             ];

// $data = file_get_contents("data.txt");
// $data = json_decode($data,true);
// $data[] = $student;
// $data = json_encode($data);
// file_put_contents("data.txt", $data);


// sesson name to get access of sesson in domain\

// session_name("ostad");
// session_start({
//     "cookie_lifetime" => 86400,
//     "cookie_domain" => ".domain.com",
//     "cookie_path" => "/",
// });



// unset and destroy session to logout

// session_unset();
// session_destroy();


// session && cookie




// Date and time 

// echo microtime(false);
// echo microtime(true);
// echo date('d/m/y');
// unix epoch
// unix timestamp



// How many time need to get factorial of a number

// $start = microtime(true);
// factorial(10000000);
// $end = microtime(true);
// $executionTime = $end - $start;
// printf("%10.8f\n",$executionTime);

// function factorial($n){
//     $factorial = 1;
//     for ($i = 1; $i <= $n; $i++) {
//         $factorial *= $i;
//     }
//     return $factorial;
// }


// echo strtotime("12 December, 1980");     // convert string to time
// echo strtotime("now");
// echo strtotime("tomorrow");
// echo strtotime("+3days");
// echo strtotime("+3months");


// default timezone set
// date_default_timezone_set("Asia/Dhaka");
// echo $birthDay = mktime(0,0,0,12,8,1993);


// $birthDay = new DateTime("1993-12-08");
// $time = new DateTime("now");

// or

// $birthDay = date_create("1993-12-08");
// $time = date_create("now");

// $diff = date_diff($birthDay,$time);
// echo $diff->format("%y years %m months %d days");


//  Exceptions

// class Student{
//     public $name;
//     public $age;

//     public function __construct($name, $age){
//         $this->name = $name;
//         if($age<4){
//             throw new Exception("Too Young.", 101);
//         }elseif($age>35){
//             throw new Exception("Too Old.", 102);
//         }
//         $this->age = $age;
//     }
// }

// try{
// $student = new Student("Kawsar", 50);
// }catch(Exception $e){
//     echo $e->getCode().": ".$e->getMessage();
// }

// echo time();

