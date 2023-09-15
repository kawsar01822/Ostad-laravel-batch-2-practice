// "use strict";

// myName();

// function myName()
// {
//     name = "Kawsar Ahmed";
// }


            //  ES6 Spread Operator

// let seniors = ['Father','Mother'];
// let members = [...seniors,'son','daughter'];
// console.log(members);


            //  ES6 Array push

// let seniors = ['Father','Mother'];
// let members = ['son','daughter'];
// members.push(seniors);
// console.log(members);



            //  ES6 Rest Parameter (can take unlimited parameter)

// function show(...Parameters)
// {
//     let sum = 0;
//     for(let i of Parameters)
//     {
//         sum+=i;
//     }
//     console.log(sum);
// }
// show(4,7,2);



            //  ES6 Dynamic Function

// var name = function(nameValue)
// {
//     return nameValue;
// }

// console.log(name ("Kawsar Ahmed"));



            //  ES6 Variable

// var name = "Kawsar Ahmed";
// var name = "Lamia Rahman";   // Reassign.....         Redeclare.....

// let name = "Kawsar Ahmed";
// let name = "Kawsar Ahmed";   // Can not Redeclare
// name = "Lamia Rahman";       // Reassign.....

// const name = "Kawsar Ahmed";
// name = "Lamia Rahman";       // can not Reassign.....     

// console.log(name);



            //  ES6 Variable Scope

// global scope: can accessed from anywhere of the js file
// local scope: can be accessed within a function 

// var name = "Kawsar Ahmed";   // Global scope

// function myfun()
// {
//     var name = "ES6";    // Local Scope
//     console.log(name);
// }
// myfun();                // ES6
// console.log(name);      // Kawsar Ahmed
// myfun();                // ES6



            //  ES6 Variable Hoisting

// name = "Kawsar Ahmed";       // value assign before variable declare
// console.log(name);
// var name;



            //  ES6 simple for loop

// var i;

// for(i=0;i<=100;i++)
// {
//     console.log("Allah");
// }



            //  ES6 for of loop

// var names = ['Kawsar','Lamia','Emon','Limon','Mahib','Nesar','Ujjal'];

// for(name of names)
// {
//     console.log(name);
// }




            //  ES6 Object

// var billGates = {shirt:true,shirtColor:'offWhite',smiling:true,hairColor:'white'};

// var billGatesPro = {
//     shirt:{
//         color:'offfWhite',
//         quality:'best',
//         price:'200USD',
//     },

//     swatter:{
//         color:'gray',
//         quality:'best',
//         price:'250USD',
//     }
// }

// console.log(billGatesPro['shirt']['color']);



            //  ES6 for in loop

// for(let props in billGatesPro)
// {
//     console.log(props); // property
//     console.log(billGatesPro['props']); // property value
// }




            //  ES6 anonymous function


// var name = function(name){
//     return name;
// }

// console.log(name("Kawsar Ahmed"));




            //  ES6 arrow function

// var myArrow =(...x)=>{
//     console.log(x);
// }

// myArrow(2,6,5,3,4,8,9);



            //  ES6 Array

// var myArray = ["A","B","C","D","E"];
// var myArrayPro = new Array("A","B","C","D","E");
// // console.log(myArray);
// for(let item of myArray){
//     console.log(item);
// }



            //  ES6 multi-dimensional Array

// var Bangladesh = ["Dhaka","Rangpur","Chittagong"];
// var India = ["Mumbai","Chennai","Kolkata"];
// var China = ["Uhan","Shanghai","Hongkong"];
// var Asia = [Bangladesh,India,China];
// console.log(Asia[0][1]);



            //  ES6 Array de-structuring

// var countries = ["BAN","IND","CAN","PAK"];
// var[a,,,b] = countries;
// console.log(b); // PAK



            //  ES6 Map

// var myMap = new Map();
// myMap.set('key1','Bangladesh');
// myMap.set('key2','India');
// myMap.set('key3','Srilangka');
// myMap.set('key4','Maldiv');
// myMap.set('key5','Bhutan');
// myMap.set('key6','Nepal');
// myMap.set('key7','Thailand');

// console.log(myMap.values());    // Values array
// console.log(myMap.keys());       //Keys array

        // Map delete   => delete specific value by key
// myMap.delete("key1");
// myMap.delete("key2");

        // Map clear    => remove all data from map
// myMap.clear();

        // Map get      => Get specific value by key
// console.log(myMap.get("key6"));

        // Map has      => Check if specific key exist in the map
// if(myMap.has("key10")){
//     console.log("Yes");
// }else{
//     console.log("No");
// }

// for(let myval of myMap.values()){    // values by for loop
//     console.log(myval);
// }

// for(let mykey of myMap.keys()){         // keys by for loop
//     console.log(mykey);
// }




            //  ES6 Set         // Map can contain duplicate value , Set can't (if you keep duplicate value, set will avoid that duplicate value)

// var mySet = new Set(['A','B','C','D','B']);
// var mySet = new Set();

// mySet.add("Bangladesh");
// mySet.add("India");
// mySet.add("Nepal");
// mySet.add("Bhutan");
// mySet.add("India");
// mySet.add("Maldiv");
// mySet.add("India");
// mySet.add("China");

        // Set Clear
// mySet.clear();

         // Set delete
// mySet.delete("India");

        // Set Size
// console.log(mySet.size);

        // Set values
// console.log(mySet.values());

        // Set has
// if(mySet.has('Aus')){
//     console.log("Yes");
// }else{
//     console.log("No");
// }

// console.log(mySet);



            //  ES6 Class

// class MyClass{

//     myFun(name){
//         console.log(name);
//     }

//     myFun1(name){
//         console.log(name);
//     }

//     myFun2(name){
//         console.log(name);
//     }
// }

// var obj = new MyClass;

// obj.myFun("Bangladesh");
// obj.myFun1("Kawsar Ahmed");
// obj.myFun2("Lamia Rahman");



                //  ES6 Class Constructor               // constructor can't return

// class myClass{

//         constructor(a,b){
//                 // console.log(a+b);
//                 this.firstNum = a;
//                 this.secondNum = b;
//         }

//         add(){
//                 let result = this.firstNum + this.secondNum;
//                 console.log(result);
//         }
// }

// var obj = new myClass(10,20);
// obj.add();                      



                // ES6 static       

// class myClass{
//     hello(){
//         console.log("Hello World from normal method");
//     }

//     static helloStatic(){
//         console.log("Hello World from static method");
//     }
// }

// var obj = new myClass;
// obj.hello();                      // call method by this way without static keyword
// myClass.helloStatic();            // call method by this way with static keyword



            // ES6 inheritence

// class parent{
//     hello(){
//         console.log("Hello World from parent");
//     }

//     hello1(){
//         console.log("Hello World second time from parent");
//     }
// }

// class child extends parent{
//     hello(){
//         console.log("Hello World from child");      // method overriding
//     }

//     demo(){
//         super.hello1();     // calling method from parent class directly in child class
//     }
// }

// var obj = new child;
// obj.hello();            // Calling hello method from child class object
// obj.demo(); 




                // ES6 Module

// export 

// import

// named import
// default import