<?php
// Variables

// $name = "Kawsar Ahmed";
// echo $name;

// echo "\n";

// define("NAME","KAWSAR AHMED");

// echo constant("NAME");
// $constant = "constant";
// echo "\n";

// echo "My name is {$$constant('NAME')}";
// echo "\n";

// printf("My name is %s",NAME);
// echo "\n";

// $var = sprintf("My name is %s",$name);
// echo $var;

// Numbers

// $binary_number = 0b110;    // Binary assign starts with 0b
// $octal_number = 016;       // Octal assign starts with 0
// $decimal_number = 10;      // Decimal assign starts with 0
// $hexadecimal_number = 0x1B;      // Decimal assign starts with 0x


// printf("Number in binary is %b \n", $binary_number);
// printf("Number in octal is %o \n", $octal_number);
// printf("Number in octal is %d \n", $decimal_number);
// printf("Number in hexadecimal is %x \n", $hexadecimal_number);  // identifier can be x or X

// echo base_convert($hexadecimal_number, 16, 2); // 100111 in binary
// echo "\n";
// echo base_convert($hexadecimal_number, 16, 8); // 47 in octal
// echo "\n";
// echo base_convert($hexadecimal_number, 16, 10); // 39 in decimal

// Variable swaping

// $fname = "Kawsar";
// $lname = "Ahmed";
// $nickname = "Limon";

// printf("My name is %s %s and my nickname is %s \n", $fname, $lname, $nickname);
// printf('My name is %2$s %3$s and my nickname is %1$s', $nickname, $fname, $lname);

// Digit COntrol - Numbers

// $number = 123;
// printf("Number is %08d \n", $number);   // any number will be 8 digited number      00000123


// $number = 12.12;
// printf("Number is %08.2f \n", $number); // any number will be 8 digited number with 2 digit after decimal    00012.12

// sprintf();

// echo sprintf("Number is %08.2f \n", $number);   // hold value in it andecho wherever user wants

// Logic

// $number1 = 12;
// $number2 = 5;

// if($number1<$number2){
//     echo "$number2 is largest between $number1 and $number2";
// }else{
//     echo "$number1 is largest between $number1 and $number2";
// }

// $number1 = 12;  // if else

// if(10 == $number1){             // better to keep variable in the right side while checking
//     echo "$number1 is equal to 10";
// }else{
//     echo "$number1 is not equal to 10";
// }


// $marks = 80; // if else if

// if($marks >= 80){
//     echo "You got A+";
// }else if($marks >= 70){
//     echo "You got A";
// }else if($marks >= 60){
//     echo "You got A-";
// }else if($marks >= 50){
//     echo "You got B";
// }else if($marks >= 40){
//     echo "You got C";
// }else if($marks >= 33){
//     echo "You got D";
// }else{
//     echo "You failed";
// }

// Ternery Operator
// $number = 80;

// echo $number%2 == 0? "Even": "Odd";

// Switch case

// $text = "8balls";
// switch($text){
//     case "9balls":
//         echo "Nine balls";
//         break;
//     case 8:
//         echo "8";
//         break;
//     case "8balls":
//         echo "Eight balls";
//         break;
// }

// operator presidence

// $e = false || true;     // || run before =
// $f = false or true;     // or run after =

// var_dump($e,$f);        // true false
// var_dump($e,$f);        // true false
// var_dump($e,$f);        // true false

