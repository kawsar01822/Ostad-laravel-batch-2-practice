<?php
    
                // for loop single stepping

    // for($i =0; $i<10; $i++){
    //     echo "$i\n";
    // }

                // for loop multiple stepping

    // for($i = 0,$j = 9;$i<10,$j>=0;$i++, $j--){
    //     echo "$i -- $j\n";
    // }

                // while loop

    // $i = 0;
    // while($i++ <10){    // condition and increment/decrement together
    //     echo "$i\n";
    //     // $i++;
    // }

                // break
    // for($i=20;$i<30;$i++){
    //     if($i == 25):
    //         break;
    //     endif;

    //     echo $i;
    //     echo PHP_EOL;
    // }


                // continue
    // for($i=20;$i<30;$i++){
    //     if($i < 25):
    //         continue;
    //     endif;
    //     echo $i;
    //     echo PHP_EOL;
    // }

                // fibonacci series

    // $veruOld = 0;
    // $old = 1;
    // $new = 1;

    // for($i = 0; $i < 10; $i++){
    //     echo "$veruOld\n";
    //     $veruOld = $old;
    //     $old = $new;
    //     $new = $veruOld + $old;
    // }

                // function

    // function sayHello(){
    //     echo "Hello World\n";
    // }

    // sayHello();

    // function evenOrOdd($n){
    //     if($n%2 == 0):
    //         echo "$n is even\n";
    //     else:
    //         echo "$n is odd\n";
    //     endif;
    // }

    // evenOrOdd(5);

    // function evenOrOdd($n){
    //     if($n%2 == 0):
    //         return "$n is even\n";
    //     else:
    //         return "$n is odd\n";
    //     endif;
    // }

    // echo evenOrOdd(5);

    // function factorial($n){
    //     if($n == 0):
    //         return 1;
    //     else:
    //         return $n * factorial($n-1);
    //     endif;
    // }

    // echo factorial(0);

                // type hinting  - php 5.6+

    // function factorial(int $n){
    //     if($n == 0):
    //         return 1;
    //     else:
    //         return $n * factorial($n-1);
    //     endif;
    // }

    // echo factorial(5);      // 120
    // echo factorial(abcd);   // wrong data type

                // default value of function
    // function serve($foodType="Coffee",$numberOfItems="1 cup"){
    //     echo "$numberOfItems of $foodType have been served\n";
    // }

    // $foodType = "Coffee";
    // $items = "2 cups";
    // serve($foodType,$items);
    // serve();

                // fixing function return type

    // function sum(int $x,int $y,int $z):int{
    //     return $x+$y+$z;
    // }

    // echo sum(5,6,7);

                // accepting unlimited number of arguments: php 7

    // function sum(int ...$numbers):int{
    //     $result = 0;
    //     for($i = 0; $i < count($numbers); $i++){
    //         $result += $numbers[$i];
    //     }
    //     return $result;
    // }

    // echo sum(4,5,6,7,8);

    // function sum($x,$y,int ...$numbers):int{    // special variable with unlimited variable
    //     $result = 0;
    //     for($i = 0; $i < count($numbers); $i++){
    //         $result += $numbers[$i];
    //     }
    //     return $result;
    // }

    // echo sum(4,5,6,7,8);


    // Better to do a single task in a function
    // Dividing a large function into smaller functions

                // recursive function - recursion

    // function printN($i){
    //     if($i>=10){
    //         return;
    //     }

    //     echo "$i \n";
    //     $i++;
    //     printN($i);
    // }

    // printN(0);

    // function printNumber($counter,$end){
    //     if($counter>$end){
    //         return;
    //     }
    //     echo "$counter \n";
    //     $counter++;
    //     printNumber($counter,$end);
    // }

    // printNumber(21,37);

    // fibonacci series with recursive function
    
    // function fibonacci($old,$new,$start,$end){
    //     if($start>$end){
    //         return;
    //     }
    //     $start++;

    //     echo "$old ";
    //     $temp = $old+$new;
    //     $old = $new;
    //     $new = $temp;
    //     fibonacci($old,$new,$start,$end);
    // }

    // fibonacci(0,1,1,10);



    // function fibonacci($old,$new,$end){
    //     static $start;
    //     $start = $start ?? 1;
        
    //     if($start>$end){
    //         return;
    //     }
    //     $start++;

    //     echo "$old ";
    //     $temp = $old+$new;
    //     $old = $new;
    //     $new = $temp;
    //     fibonacci($old,$new,$end);
    // }

    // fibonacci(0,1,10);

                // variable scope (local , global, static)

    // $name = "Earth";    // global scope

    // function doSomething(){
    //     global $name; // by using global variable name, you can use global scope inside function
    //     echo $name; // can't access inside the function directtly, will generate error
    // }

    // doSomething();


    // function doSomething(){
    //     global $name;   // global keyword makes $name variable global
    //     $name = "Earth";    
    // }

    // doSomething();
    // echo $name;     // can't access without making local scope global

    // function doSomething(){
    //     static $i;  // static scope - will keep previous value : static variable applicable only for this function
    //     $i = $i??0;

    //     $i++;
    //     echo "$i \n";
    // }

    // doSomething();
    // doSomething();

    // function test($x=5){
    //     return $x*$x;
    // }

    // echo test();

                // =========   callback function   ========= //

                // calculator using callback function
    
    // function add($x,$y){
    //     return $x+$y;
    // }
    
    // function sub($x,$y){
    //     return $x-$y;
    // }

    // function mul($x,$y){
    //     return $x*$y;
    // }

    // function div($x,$y){
    //     return $x/$y;
    // }
    
    // function mod($x,$y){
    //     return $x%$y;
    // }

    // function math($x,$y,$cb){   // callback function
    //     if(is_callable($cb))
    //     {
    //         return $cb($x,$y);
    //     }
    //     else
    //     {
    //         return "Invalid callback function";
    //     }
        
    // }

    // echo math(2,3,"add").PHP_EOL;   // valid
    // echo math(5,2,"sub").PHP_EOL;   // valid
    // echo math(2,3,"mul").PHP_EOL;   // valid
    // echo math(6,3,"div").PHP_EOL;   // valid
    // echo math(32,15,"mod").PHP_EOL; // valid
    // echo math(32,15,"sayHello").PHP_EOL;    // valid

    
                // find even number using callback function   -- array_filter() function

    // function isEven($x){
    //     return $x%2==0;
    // }

    // $numbers = [2,5,7,8,12,34,54,77,1,4,56,33];

    // $evens = array_filter($numbers,"isEven");

    // print_r($evens);


                // find male or female using callback function   -- array_filter() function

    // function isMale($x){
    //     return $x["gender"] == "male";
    // }

    // function isFemale($x){
    //     return $x["gender"] == "female";
    // }

    // $person = [
    //     ["name"=>"Ali","gender"=>"male"],
    //     ["name"=>"Vahid","gender"=>"male"],
    //     ["name"=>"Reza","gender"=>"female"],
    //     ["name"=>"Maryam","gender"=>"female"],
    //     ["name"=>"Sara","gender"=>"female"],
    //     ["name"=>"Zahra","gender"=>"female"],
    //     ["name"=>"Mohammad","gender"=>"male"]
    // ];

    // $males = array_filter($person,"isMale");
    // $females = array_filter($person,"isFemale");

    // print_r($males);
    // print_r($females);


                // square or cube using callback function   -- array_map() function

    // function cube($x){
    //     return $x*$x*$x;
    // }

    // function square($x){
    //     return $x*$x;
    // }

    // $numbers = [2,5,7,8,12];

    // $cubes = array_map("cube",$numbers);
    // $squares = array_map("square",$numbers);

    // print_r($cubes);
    // print_r($squares);

                // usort using custom callback function

    // $books = [
    //     ["id" => 1, "title" => "Harry Potter 1", "author" => "J.K. Rowling"],
    //     ["id" => 1, "title" => "Harry Potter 2", "author" => "J.K. Rowling"],
    //     ["id" => 2, "title" => "Lord of the Rings", "author" => "J.R.R. Tolkien"],
    //     ["id" => 3, "title" => "Catch-22", "author" => "Joseph Heller"],
    //     ["id" => 4, "title" => "Imaginary", "author" => "AB"],
    //     ["id" => 5, "title" => "Harry Potter 3", "author" => "J.K. Rowling"],
    //     ["id" => 6, "title" => "Harry Potter 4", "author" => "WXYZ"],       
    // ];

    // function sortByAuthor($a,$b){
    //     //return strcmp($a["author"],$b["author"]);

    //     if(strlen($a['author']) == strlen($b['author'])){
    //         return 0;
    //     }else if(strlen($a['author']) > strlen($b['author'])){
    //         return 1;                                                   // reverse value will change the sort direction
    //     }else{
    //         return -1;                                                  // reverse value will change the sort direction
            
    //     }
    // }

    // usort($books,"sortByAuthor");

    // print_r($books);
