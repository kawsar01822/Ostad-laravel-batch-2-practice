// =============      Access Object item with for in loop      ==============

// var person = {
//     name: "Kawsar",
//     age: 28,
//     designation: "Software Engineer",
//     city: "Chittagong",
//     height: "5.8 feet",
// };

// // document.write(person.name);

// for(item in person){
//     document.write(person[item]+"<br/>");
// }



// ==================       Array Form [ Convert string into array]      ===================

// var name = "Kawsar Ahmed";
// var nameArray = Array.from(name);
// document.write(nameArray[7]);




// =============     Array filter  [get every value satisfy the condition]   ==============

// var numArray = [23,43,56,12,87,54,67,39];
// var result = numArray.filter(function(item){
//     return item<50;
// })
// document.write(result);




// =============     Array find  [get first value satisfy the condition]   ==============

// var numArray = [23,43,56,12,87,54,67,39];
// var result = numArray.find(function(item){
//     return item>50;
// })
// document.write(result);




// =============     Array findIndex  [get first index of value satisfy the condition]   ==============

// var numArray = [23,43,56,12,87,54,67,39];
// var result = numArray.findIndex(function(item){
//     return item>50;
// })
// document.write(result);




// =============     Array forEach loop   ==============

// var numArray = [23,43,56,12,87,54,67,39];
// numArray.forEach(function(item){
//     document.write(item+"<br/>");
// })






// =============     Array includes [check if item exist in array]   ==============

// var numArray = [23,43,56,12,87,54,67,39];
// var result = numArray.includes(39);
// document.write(result);




// =============     Array includes [check index of item if item exist in array]   ==============

// var numArray = [23,43,56,12,87,54,67,39];
// var result = numArray.indexOf(39);
// document.write(result);




// =============     Array reverse [reverse the items of array]   ==============

// var numArray = [23,43,56,12,87,54,67,39];
// numArray = numArray.reverse();
// document.write(numArray);




// =============     Array push,pop [push to add item from array end, pop to remove item from array end]   ==============

// var numArray = [23,43,56,12,87,54,67,39];
// numArray.push(74);
// document.write(numArray);

// var numArray = [23,43,56,12,87,54,67,39];
// numArray.pop();
// document.write(numArray);




// =============     Date Object     ==============

// var date = new Date();

//document.write(date.getDay()); // Day of week
// document.write(date.getFullYear()); // Years
// document.write(date.getMonth()); // months
//document.write(date.getDate()); // Day of month
// document.write(date.getHours()); // hours
// document.write(date.getMinutes()); // minutes
// document.write(date.getSeconds()); // seconds
// document.write(date.getMilliseconds()); // minutes
// and many more




// =============     JS Math     ==============

// var num = -7;
// document.write(Math.abs(num));  // get porom man

// var num = 7.2;
// document.write(Math.ceil(num));  // get upper value

// var num = 7.2;
// document.write(Math.floor(num));  // get lower value

// document.write(Math.max(67,87,23,54,77));  // get maximum value

// document.write(Math.min(67,87,23,54,77));  // get minimum value

// document.write(Math.random());  // generate random number between 0 and 1

// var num = 7.5;
// document.write(Math.round(num));  // get closest integer value





// =============     JS Numbers     ==============

// var num = 7.6;

// document.write(Number.isFinite(num));   // check if finite
// document.write(Number.isInteger(num));  // check if integer
// document.write(Number.parseInt(num));   // convert into integer
// document.write(num.toFixed(2));     // To fix number after point
// document.write(num.toString());     // To convert number into string

// var num = 7;
// document.write(Number.parseFloat(num));     // convert into float




// =============     JS Window Object     ==============

// alert("Hellow World");       // alert to user
// confirm("Are you sure");        // confirmation from user
// prompt("Write your name");      // take input from user
// open();                         // Open the new tab
// close();                        // close the current tab

// setTimeout(function(){
//     alert("alert should show after 5 seconds");
// },5000)





// =============     JS Navigator Object     ==============

// document.write(navigator.appCodeName+"<br/>");
// document.write(navigator.appName+"<br/>");
// document.write(navigator.appVersion+"<br/>");
// document.write(navigator.cookieEnabled+"<br/>");
// document.write(navigator.language+"<br/>");
// document.write(navigator.userAgent+"<br/>");
// document.write(navigator.platform+"<br/>");

// navigator.geolocation.getCurrentPosition(function(position){
//     var altitude = position.coords.altitude;
//     var latitude = position.coords.latitude;
//     var longitude = position.coords.longitude;
//     var speed = position.coords.speed;

//     document.write(altitude+"<br/>"+latitude+"<br/>"+longitude+"<br/>"+speed+"<br/>");
// })



// =============     JS DOM     ==============
// ===========================================



// var info = document.cookie; // To See Cookie
// var info = document.domain; // To See domain
// var info = document.lastModified; // To See last modified time
// var info = document.title; // To See document title
// var info = document.URL; // To See document url
//document.write(info);
            


                // To replace document

// document.open('text/html','replace');
// document.write('<h2>Changed the document</h2>');
// document.close();



                // To open new window and write something

// var w = window.open();
// w.document.open();
// w.document.write("Hello New Window");
// w.document.close();



                //  To see how many same elements are there
// var par = document.getElementsByTagName('p').length;
// alert(par);



                //  To add / remove css style by DOM

// document.getElementById('pTag').classList.add("center");
// document.getElementById('pTag').classList.remove("remove");



                //  To create and append element by DOM

// function addItem()
// {
//     var itemValue = document.getElementById("myInput").value;

//     var listItem = document.createElement("li");
//     listItem.innerHTML = itemValue;

//     var myItems = document.getElementById("myItems");
//     myItems.appendChild(listItem);
// }



                //  To change attribute by DOM

// function changeAttr()
// {
//     var myImg = document.getElementById("myImg");
//     myImg.height = 700;
//     myImg.width = 700;
//     myImg.src = "https://scontent.fcgp28-1.fna.fbcdn.net/v/t1.6435-9/64679555_1098796843655666_6098371317097037824_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=174925&_nc_ohc=3PdRockUEv4AX9QijuA&_nc_ht=scontent.fcgp28-1.fna&oh=00_AfAWdEpy-EUD90y4CxoRTguX6NshKtn3XdmmMFpcQX3VVA&oe=650E5E54";
// }



            //   DOM Query Selector

// function domQuery()
// {
//     document.querySelector('h1').innerHTML = "H1 Manipulated";
//     document.querySelector('#h3Tag').innerHTML = "H3 Manipulated";
//     document.querySelector('.h5Tag').innerHTML = "H5 Manipulated";
//     document.querySelector('p[name="myName"]').innerHTML = "P Manipulated";
// }




                //   JS AJAX GET method

// function getData()
// {
//     var url = "https://crud.teamrabbil.com/api/v1/ReadProduct";
//     var option = {method:"GET"};

//     fetch(url,option)
//     .then(response => response.json())      // you can take this as text(), blob()
//     .then(result => console.log(result))
//     .catch(err => console.log(err));

// }



                //   JS AJAX POST method

// function postData()
// {
//     var url = "https://crud.teamrabbil.com/api/v1/CreateProduct";
//     var bodyData = {Img:'123',ProductCode:'123',Qty:'123',TotalPrice:'123',UnitPrice:'123'};
//     var option = {
//         method:"POST",
//         headers:{'Accept':'application/json','Content-Type':'application/json'},
//         body:JSON.stringify(bodyData)
//     };

//     fetch(url,option)
//     .then(response => response.json())      // you can take this as text(), blob()
//     .then(result => console.log(result))
//     .catch(err => console.log(err));

// }