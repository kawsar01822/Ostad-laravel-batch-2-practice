<?php

// Conversion   ASCII to String and Vice-Versa

// $number1 = [84,104,97,110,107,32,121,111,117,33];
// $number2 = [87,101,108,99,111,109,101];

// function convertString($number)       // ASCII to String
// {
//     $count = count($number);
//     $string = "";

//     for($i=0;$i<$count;$i++){
//         $number[$i] = chr($number[$i]);
//         $string.= $number[$i];
//     }

//     echo $string.PHP_EOL;   // Thank you!
// }

// convertString($number1);
// convertString($number2);




// Conversion

// $string1 = "Hello, How Are You?";
// $string2 = "I am fine, thank you.";

// function convertAscii($string)       // String to ASCII
// {
//     $len = strlen($string);
//     $number = "";

//     for($i=0;$i<$len;$i++){
//         $string[$i] = ord($string[$i]);
//         $number.= $string[$i];
//     }

//     echo $number.PHP_EOL;   // Thank you!
// }

// convertAscii($string1);
// convertAscii($string2);




// encrypting with numeric key

// $text = "Assiment a sobai ke help korben sobai";
// $key = 8;
// $len = strlen($text);
// $plainText = "";

// for($i=0;$i<$len;$i++){
//     $ascii = ord($text[$i]);
//     $chr = chr($ascii+$key);
//     $plainText.= $chr;
// }

// echo $plainText.PHP_EOL;



// decrypting with numeric key

// $plainText = "I{{qumv|(i({wjiq(sm(pmtx(swzjmv({wjiq";
// $key = 8;
// $len = strlen($plainText);
// $string = "";

// for($i=0;$i<$len;$i++){
//     $ascii = ord($plainText[$i]);
//     $chr = chr($ascii-$key);
//     $string.= $chr;
// }

// echo $string;




// encrypting with shuffled key

// $string = "Good News!";
// $key = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789(!@#$%^&*()_+). ";
// $shuffledKey = str_shuffle($key);
// $newKey = $shuffledKey;
// echo "Original String = $string\n\n";
// print_r("Key = $key\n\n");
// print_r("New Key = $newKey\n\n");
// $len = strlen($string); // string length
// $encryptedString = "";
// for($i=0;$i<$len;$i++){
//     $letter = $string[$i];
//     $currentPosition = strpos($key, $letter);
//     $replacement = $newKey[$currentPosition];
//     $encryptedString.= $replacement;
// }

// echo "Encrypted String = $encryptedString\n\n";




// // decrypting with shuffled key

// $string = $encryptedString;
// $len = strlen($string);
// $decryptedString = "";
// for($i=0;$i<$len;$i++){
//     $letter = $string[$i];
//     $currentPosition = strpos($newKey, $letter);
//     $replacement = $key[$currentPosition];
//     $decryptedString.= $replacement;
// }

// echo "Decrypted String = $decryptedString\n\n";




// Hashing - one way

// $password = "12345";
// $userPass = "12345";

// echo $hashedString = MD5($string);      // 32 charcacter
// echo $hashedString = SHA1($string);     // 40 character
// echo $hashedString = password_hash($string, PASSWORD_DEFAULT);      // 60 character

// $hashedString = password_hash(SHA1(MD5($password)), PASSWORD_BCRYPT);   // complex

// if(password_verify(SHA1(MD5($userPass)),$hashedString)){
//     echo "Password Matched";
// }else{
//     echo "Password Not Matched";
// }

// Can be done in more complex way with more than one condition check



