<?php

// Array

// Indexed array

$names = ["ali", "reza", "mohammad"];
// echo $names[0];
// var_dump($names);

// for ($i = 0; $i < count($names); $i++) {
//     echo $names[$i].PHP_EOL;
// }

// foreach($names as $name){
//     echo $name.PHP_EOL;
// }



// Array pop -- remove one item from last side of an array

// array_pop($names);

// foreach($names as $name){
//     echo $name.PHP_EOL;
// }



// Array shift -- remove one item from first side of an array

// array_shift($names);

// foreach($names as $name){
//     echo $name.PHP_EOL;
// }




// Array push -- add one item to last side of an array

// array_push($names,"rahim");

// foreach($names as $name){
//     echo $name.PHP_EOL;
// }



// different way to add data to array

// $names[] = "karim";

// foreach($names as $name){
//     echo $name.PHP_EOL;
// }



// Array unshift -- add one item to first side of an array

// array_unshift($names,"salam","salma");

// foreach($names as $name){
//     echo $name.PHP_EOL;
// }




// Associative array

$foods = [
    "vegetables" => "brinjal, brocoli, carrot, capsicam",
    "fruits" => "orange, banana, apple",
    "drinks" => "water, milk"
];



// $foods["drinks"] .= ", orange juice";     // add iem to associative array

// echo $foods["drinks"];



// echo $foods['vegetables'];           // get value from associative array

// foreach($foods as $key => $value){   // foreach loop to get all itme from associative array
//     echo $key." => ".$value.PHP_EOL;
// }



// unset($foods['drinks']);    // remove item from associative array

// foreach($foods as $key => $value){
//     echo $key." => ".$value.PHP_EOL;
// }



// $keys = array_keys($foods);           // get all keys from associative array

// foreach($keys as $key){
//     echo $foods[$key].PHP_EOL;
// }



// $values = array_values($foods);      // get all values from associative array

// foreach($values as $value){
//     echo $value.PHP_EOL;
// }



// explode() && implode()

$vegetables_array = explode(", ", $foods["vegetables"]);     // convert string to array

// var_dump($vegetables_array);

// $vegetables = implode(", ",$vegetables_array);      // convert array to string   // you can use join() instead of implode(). there are no issue in case of performance or memory

// var_dump($vegetables);


// $vegetables = join(", ",$vegetables_array);             // convert array to string

// var_dump($vegetables);

// $foods["vegetables"] .= "sweet potato,potato,eggplant,tomato";
// $vegetables_array = preg_split("/(, |,)/",$foods["vegetables"]);    // multiple string seperators can be set by preg_split , use instead of explode() where you can't set multiple seperators

// var_dump($vegetables_array);

// $parts = strtok($foods["vegetables"],",");          // use multiple seperator  | iterator      
// while($parts != false){
//     echo $parts.PHP_EOL;
//     $parts = strtok(", ");
// }


// Multidimensional array

$foods = [
    "vegetables" => explode(", ","brinjal, brocoli, carrot, capsicam"),
    "fruits" => explode(", ","orange, banana, apple"),
    "drinks" => explode(", ","water, milk")
];

// var_dump($foods);

array_push($foods["drinks"],"orange juice");        // add item to multidimensional array

// var_dump($foods);

// foreach($foods as $key => $values){                 // foreach loop to get all itme from multidimensional array
//     foreach($values as $value){
//         echo $value.PHP_EOL;
//     }
// }

// echo $foods['vegetables'][2];       // carrot                // get value from multidimensional array

// $numbers = [
//     [1,2,3,4],
//     [11,22,33,44],
//     [111,222,333,444],
//     [1111,2222,3333,[5,6,7]],
//     [11111,22222,[4444,5555,6666],44444]
// ];

// echo $numbers[3][3][2];     // 7
// echo $numbers[4][2][1];     // 5555



// multidimensional array to string and string to multidimansional array

$student= [
    "fname" => "Kawsar",
    "lname" => "Ahmed",
    "Class" => "Bsc",
    "Subject" => "CSE",
    "Roll" => "CSE00905611",
];

// var_dump($student);

// $student_string = implode(", ", $student);
// var_dump($student_string);      // We don't have the keys of multidimensional array, so we can't use it later



// serialize() && unserialize()

// $new_student = serialize($student);      // convert multidimensional array to string
// var_dump($new_student);     // wired string but php knows how to convert it to multidimensional array

// $student = unserialize($new_student);      // convert string to multidimensional array
// var_dump($student);



// json encode() && json decode()

// $new_student = json_encode($student);      // convert multidimensional array to string
// var_dump($new_student);     // json formatted string , js can use it directly or we can decode it to php object or array

// $student = json_decode($new_student);      // convert string to multidimensional array but as a object
// var_dump($student);

// $student = json_decode($new_student,true);  // true as second arameter to treat it as multidimensional array
// var_dump($student);



// copy by value and copy by reference

$person = [
    "fname" => "Kawsar",
    "lname" => "Ahmed",
];

// $new_person = $person;  // copy by value -- deep copy
// $new_person = &$person;  // copy by reference -- shallow copy    & to pass reference

// $new_person['lname'] = "Hamid";

// var_dump($person);
// var_dump($new_person);

// function person($person){       // function to copy by value
//     $person['lname'] = "Rahman";
//     var_dump($person);
// }

// function person2(&$person){       // function to copy by reference
//     $person['lname'] = "Hamid";
//     var_dump($person);
// }
 
// person($person);
// person2($person);
// var_dump($person);



// check if variable is set or empty

// $name = 0;

// if(isset($name)){       // if variable is set
//     echo "Name is set";
// }else{
//     echo "Name is not set";
// }

// echo "\n";

// if(empty($name)){       // if variable is empty
//     echo "Name is empty";
// }else{
//     echo "Name is not empty";
// }

// echo "\n";

// if(isset($name) && (is_numeric($name) || $name != '')){       // proper way to check if variable is set and not empty
//     echo "Name is set and not empty";
// }else{
//     echo "Name is not set and not empty";
// }



// array slice()        -- data extract without changing the original array

// $fruits = ["apple","banana","orange","plum","dates","mango"];
// $some_fruits = array_slice($fruits,3);      // slice all data from index 3   
// $some_fruits = array_slice($fruits,3,2);      // slice 2 data from index 3   
// $some_fruits = array_slice($fruits,3,-1);      // slice all data without last one from index 3   
// $some_fruits = array_slice($fruits,-5,-1);      // slice all data without last one from last 5 data   
// $some_fruits = array_slice($fruits,-4,-1,true);      // slice data with original array keys   
// print_r($some_fruits);

// $random = ["a"=>23,"b"=>12,"c"=>6,"d"=>29,"e"=>44,3=>34,1=>31];
// $some_random = array_slice($random,2,null,true);    
// print_r($some_random);



// array_splice()        -- data extract with changing the original array

// $fruits = ["apple","banana","orange","plum","dates","mango"];
// // $some_fruits = array_splice($fruits,2,-1);     // remove data from original array and make new array with removed data
// $new_fruits = ["jackfruit","tamarind","guava"];
// $some_fruits = array_splice($fruits,2,2,$new_fruits);   // remove data from original array then add new data to the original array and make new array with removed data
// print_r($some_fruits);
// print_r($fruits);



// array_merge()        -- combine two or more arrays
// array concatanation  -- key will play vital role
// can't be done with arraay_splice as array_splice won't preserve int keys and replace those with 0,1,2 index

$fruits = ["apple","banana","orange","plum","dates","mango"];
$random = ["a"=>23,"b"=>12,"c"=>6,"d"=>29,"e"=>44,3=>34,1=>31];

// $some_fruits1 = array_slice($fruits,0,3);  // preserve keys while slice
// $some_fruits2 = array_slice($fruits,3,);   // preserve keys while slice

// $some_fruits1 = array_slice($fruits,0,2);  // preserve keys while slice
// $some_fruits2 = array_slice($fruits,2,);   // preserve keys while slice
// By this we will get two fruit from $some_fruits1 index o,1 and two value from $some_fruits2 index 2,3 . index 0,1 from $some_fruits2 will be ignored

// $new_fruits = array_merge($some_fruits1,$some_fruits2);    // two array will be merged in a new array
// $new_fruits = $some_fruits1 + $some_fruits2;    // two array won't be merged in a new array as previous keys are not preserved and overlap keys


// $some_fruits1 = array_slice($fruits,0,3,true);  // preserve keys while slice
// $some_fruits2 = array_slice($fruits,3,null,true);   // preserve keys while slice
// // $new_fruits = array_merge($some_fruits1,$some_fruits2);    // two array will be merged in a new array
// $new_fruits = $some_fruits1 + $some_fruits2;    // two array will be merged in a new array as previous keys preserved and no overlap keys

// print_r($some_fruits1);
// print_r($some_fruits2);
// print_r($new_fruits);



// array sorting        -- sort and rsort || asort and arsort || ksort and krsort  (SORT_STRING | SORT_FLAG_CASE)

$fruits = ["a"=>"apple","b"=>"banana","f"=>"orange","g"=>"plum","d"=>"dates","c"=>"mango"];

// sort($fruits);   // sort the array by value and doesn't keep previous key - in ascending order
// rsort($fruits);     // sort the array by value and doesn't keep previous key - in descending order

// asort($fruits);       // sort the array by value and keep previous key - in ascending order
// arsort($fruits);      // sort the array by value and keep previous key - in descending order

// ksort($fruits);         // sort the array by key - in ascending order
// krsort($fruits);        // sort the array by key - in descending order

// print_r($fruits);

// $numbers = [1,32,14,52,6,17,81,69,9];
// sort($numbers, SORT_STRING);         // sort the array by string value
// print_r($numbers);

// $fruits = ["a"=>"apple","b"=>"Apple","f"=>"orange","g"=>"Orange","d"=>"dates","c"=>"mango"];
// sort($fruits,SORT_STRING|SORT_FLAG_CASE);                   // sort the array by string value and case sensitive
// print_r($fruits);




// array search     -- array_search() | in_array() | key_exists()

$fruits = ["a"=>"apple","b"=>"banana","f"=>"orange","g"=>"plum","d"=>"dates","c"=>"mango"];

// if(in_array("apple",$fruits)){              // loosely check either the data present or absent
//     echo "apple is present";
// }else{
//     echo "apple is not present";
// }

// if(in_array("apple",$fruits,true)){         // strict check by type either the data present or absent
//     echo "apple is present";
// }else{
//     echo "apple is not present";
// }

// echo array_search("banana",$fruits);    // loosely check , return the key of the data
// echo array_search("banana",$fruits,true);   // strict check , return the key of the data

// echo key_exists("b",$fruits);    // return true or false
// echo key_exists("b",$fruits,true);    // strict check , return true or false

// if(key_exists("b",$fruits)){
//     echo "b is present";
// }else{
//     echo "b is not present";
// }



// difference and intersection of two arrays -- array_intersect() | array_diff() | array_intersect_assoc() | array_diff_assoc()

$fruits1 = ["a"=>"apple","b"=>"banana","f"=>"orange","g"=>"plum"];
$fruits2 = ["a"=>"dates","b"=>"mango","c"=>"orange"];

// $common = array_intersect($fruits1,$fruits2);     // return the common data from both arrays [value check only]
// $common = array_intersect_assoc($fruits1,$fruits2);     // return the common data from both arrays [key and value both check]
// print_r($common);

// $diff = array_diff($fruits1,$fruits2);     // return the difference data from both arrays [value check only]
// $diff = array_diff_assoc($fruits1,$fruits2);     // return the difference data from both arrays [key and value both check]
// print_r($diff);



// array_walk(), array_map(), array_filter()

// $numbers = [2,5,61,6,18,67,43,56,98,32,19,45,66];

// function square($n){
//     printf("Square of %d is %d\n",$n,$n*$n);
// }

// function cube($n){
//     return $n*$n*$n;
// }

// function isEven($n){
//     return $n%2 == 0;
// }

// function isOdd($n){
//     return $n%2 != 0;
// }

// // $walk = array_walk($numbers,"square");       // array_walk() is used to call a function for each element of the array     //does return only true or false
// // $map = array_map("cube",$numbers);                         // array_map() is used to call a function for each element of the array     //return an array

// // print_r($walk);
// // print_r($map);

// $even_numbers = array_filter($numbers,"isEven");       // array_filter() is used to filter value from the array     //return an array
// $odd_numbers = array_filter($numbers,"isOdd");       

// print_r($even_numbers);
// print_r($odd_numbers);



// array_reduce()     -- reduce the array to single value

// $numbers = [4,7,56,12,34,87,9];
// function sum($n1,$n2){
//     return $n1+$n2;
// }

// function sum_if_even($n1,$n2){
//     if($n2%2 == 0){
//         return $n1+$n2;
//     }
//     return $n1;
// }

// // $sum = array_reduce($numbers,"sum");    // reduce the array to single value
// // print_r($sum);

// $sum = array_reduce($numbers,"sum_if_even");    // reduce the array to single value
// print_r($sum);



// list()    

// $color = [255,132,65];
// list($red,$green,$blue) = $color;
// echo $red;



// range

// $number = range(12,20);
// print_r($number);                    // 12,13,14,15,16,17,18,19,20

// foreach(range(0,20,2) as $number){
//     if($number > 0){
//         echo "$number ";
//     }
    
// }




// array shuffle    -- shuffle()    -- mt_rand()

$numbers = range(0,30);
$random = mt_rand(0,30);

// echo $numbers[$random];       // will show you random number from the $numbers array

// echo $random%2 == 0?"Head":"Tail";      // random Head or Tail will be shown

// $random = mt_rand(0,30);
// echo $numbers[$random] %2 == 0?"Head":"Tail";      // random Head or Tail will also be shown there

// shuffle($numbers);
// echo $numbers[3];       // will show you random number from the $numbers array
// echo $numbers[3]%2 == 0?"Head":"Tail";      // random Head or Tail will also be shown there -- different way by shuffling the numbers. it will take more time than using rand() function


$fruits = ["a"=>"apple","b"=>"banana","f"=>"orange","g"=>"plum"];
// shuffle($fruits);                       // we will loose the keys completely.
// print_r($fruits);

// echo $key = array_rand($fruits);        // array_rand() function will return random key from the array
// echo $fruits[$key];




//============  String  ============//

// '' won't parse anything like variable or string literal like \n \t
// "" will parse everything like variable or string literal like \n \t

// $name = "Kawsar Ahmed";

// echo 'My name is $name \n \t';     // doesn't parse variable and string literal
// echo "My name is $name \n \t";     // parse variable and string literal

// // heredoc : same as ""

// $heredoc = <<<EOD
// new line
// another new line
// \n \t $name
// EOD;
// echo $heredoc;

// // nowdoc : same as ''

// $nowdoc = <<<'EOD'
// new line 
// another new line
// \n \t $name
// EOD;

// echo $nowdoc;



// ASCII

// echo ord('A');       // 65      // to get ASCII of a character
// echo PHP_EOL;
// echo chr(65);        // A       // to get character of ASCII
// echo PHP_EOL;
// echo ord('a');       // 97
// echo PHP_EOL;
// echo chr(97);        // a



// Accessing data from string

// $name = "Kawsar Ahmed";

// echo $name[5];        // r
// echo PHP_EOL;
// echo $name[9];        // m
// echo PHP_EOL;

// echo substr($name,7);   // Ahmed
// echo PHP_EOL;
// echo substr($name,7,2);   // Ah
// echo PHP_EOL;
// echo substr($name,-5);   // Ahmed
// echo PHP_EOL;
// echo substr($name,-5,-2);   // Ahm
// echo PHP_EOL;


// string reverse

// $string = "Hello World";
// $length = strlen($string)-1;

// for($i=$length;$i>=0;$i--){
//     echo $string[$i];
// }

// echo PHP_EOL;

// $length = strlen($string);
// for($i=1;$i<=$length;$i++){
//     echo $string[$i * -1];
// }

// echo PHP_EOL;
// echo strrev($string);



//  strpos();       // returns the position of the first occurrence of the needle in the haystack
//  strrpos();      // returns the position of the last occurrence of the needle in the haystack
//  stripos();      // case insensitive
//  strripos();     // case insensitive

// strpos($string,$find,$checkStartFrom($optional));    // case sensitive
// echo stripos($string,$find,$checkStartFrom($optional));    // case insensitive

// $string = "The quick brown fox jumps over the lazy dog.";

// $pos = stripos($string,"the");       // returns the position of the first occurrence of the needle in the haystack
// $pos = strripos($string,"the");       // returns the position of the last occurrence of the needle in the haystack
// if($pos !== false){
//     echo "found at position $pos";
// }else{
//     echo "not found";
// }




// str_replace()     // replaces all occurrences of the search string with the replacement string
// str_ireplace()    // case insensitive

// $string = "Quick brown Brown fox jumps over the lazy dog.";
// $replaced_string1 = str_replace("brown","red",$string);  // case sensitive
// $replaced_string2 = str_ireplace("brown","red",$string);  // case insensitive
// print_r($replaced_string1);     // only small brown will replaced with red
// echo PHP_EOL;
// print_r($replaced_string2);     // both small and capital brown will replaced with red
// echo PHP_EOL;

// $string = "Quick brown Brown fox jumps over the lazy dog.";
// $replaced_string1 = str_replace("brown","red",$string,$count);  // count how many replace done by this function
// print_r("Replaced $count times");
// echo PHP_EOL;

// $replaced_string1 = str_replace(array("Brown","fox"),array("red","dog"),$string,$count);    // multiple replace can be done by using array
// print_r($replaced_string1);
// echo PHP_EOL;



// trim(),  // both side clear
// ltrim(), // left side clear
// rtrim()  // right side clear

// $string = "       Hello \n ,";
// print_r(trim($string, ' \n,'));   // what to clear bt second parameter
// print_r("world");




// wordwrap()     // word wrap      nl2br()     --  new line to break

$string = "Loren Ipsum Dolor Sit Amet \n, Consectetur Adipisicing Elit. Ut, Sunt? Lorem \n Ipsum wordwithmorethantwentysixcharacters Lorem Dolor \n Sit Amet Consectetur Adipisicing Elit. Ut, Sunt? \nLorem Ipsum Dolor Sit Amet \nConsectetur Adipisicing Elit. Ut, Sunt?";

// echo wordwrap($string, 25);    // word wrap
// echo wordwrap($string, 25,"\n",true);    // last two arguments if you want to break word more than the given length - here 26

// echo nl2br($string);        // nl2br()



// sscanf();     // string into array

$name = "Kawsar Ahmed 01515680903";
// $parts = sscanf($name, "%s %s %11s");    // extract string
// print_r($parts);


// sscanf($name, "%s %s %11s", $fname, $lname, $mobile);   // extract and assign
// echo $lname;


// $hexColor = "#FF2F44";
// sscanf($hexColor, "#%2x%2x%2x", $red, $green, $blue);
// echo $green;


// $name = "Kawsar Ahmed 01515680903 kaws.med@gmail.com";
// sscanf($name,"%s %s %11s %s",$fname,$lname,$mobile,$email);
// echo $email;


