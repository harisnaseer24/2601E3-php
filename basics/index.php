<?php
// echo "Welcome to PHP";
// echo "<h1>Welcome to PHP</h1>";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <?php 
    
// let,var,const
 // case sensitive
$a= -10;
$name ="Haris";
$Name="Haris Naseer";
$str="hello world! welcome to php programming";




// echo $a;
// echo "<br>";

// echo "sdhfsdfsdfhsdfhsdjf"."234234234234324";
// echo "<br>";
// echo $str."<br>";

//  print($Name);
//  print($Name);

//  echo $Name;


// "h"."a"."r"  ;//ha

//  echo "<p>Hello ".$name." How are you?</p>";
//  echo "<p>lksdjfksjdfksd</p>";





//  echo "<h1>Hello this is $Name </h1>";
//  echo "<h1>Hello this is ".( $a+100 )."</h1>";


// echo  "hi $name";
// echo  "the price of this product is $ $ a";

// negative to positive
// echo abs($a)."<br>"; // 10

// echo round(6.4); // 6

// // echo "<br>";
// echo ceil(9.1); // 10
// // echo "<br>";
// echo floor(9.8); // 9
// // echo "<br>";
// echo sqrt(729);// 27
// // echo "<br>";
// echo sqrt(25);// 5
// // echo "<br>";
// echo pow(5,3);// 125
// echo "<br>";
// echo rand(1,100);// random number between 1 and 100


// echo (ucwords($str));

// echo (strrev("how are you?"));
// echo (str_word_count("we are having the grand test tommorrow."));
// practice more string methods


// number
// $a=10;//int
// $b=10.65;//float
// $c=1.216545645445456454545445445454;//double

//string
// $str1="hello how are you";//string

//boolean
// $istrue=true;
// $istrue=false;

//arrays
//indexed array
// $students=array("Anas","afaq","ahmed",44,"Yahya",true);

// $names= ["Umair", "Omar","Owais"] ; // length = 3, indexes=2

// echo $names[1];


// echo $students[4]."<br>";


//associative array (keys/values)

// $employee= [
// "Name"=> "Haris",
// "Designation"=>"Manager",
// "Experience"=>"4+ Years",

// ];

// echo $employee['Designation'];
// echo $employee['sdfsdf'];

// echo $employee;
// echo "<pre>";
// print_r($names);
// echo "</pre>";


// echo "<pre>";
// print_r($employee);
// echo "</pre>";






//functions
// function add(){
//     echo 10+20;
// }
// // // // calling a function

// add();

//Parameterized function

// function add($a=0,$b=0)//parameters
// {
//     echo $a+$b;//0+0
// }
// // calling a function
// add(5,6);  //11      //arguments
// add();  //0 + 0 = 0     //arguments
// add(5);  //5 + 0 =5      //arguments
// add(589+2 , 1);  // 591 + 1 = 592     //arguments

//Returning function
// function add($a=0,$b=0)//parameters
// {
//    return $a+$b;
// }
// // // calling a function
// $c= add(50,40);//90
// echo $c;


//conditional statements
// $age=18;

// if ($age > 18) {
//    echo "you can vote";
// }
// elseif ($age == 18) {
  
//     echo '<script>alert("you can vote but get cnic first")</script>';
// }
// else {
//     echo "you can't vote";
// }

// $day="sunday";
// switch ($day) {
//     case 'monday':
//        echo "today is monday";
//         break;
//     case 'sunday':
//        echo "today is sunday";
//         break;
//     case 'friday':
//        echo "today is friday";
//         break;
//     case 'wednesday':
//        echo "today is wednesday";
//         break;
  
//     default:
//     echo "mjhe nahi pata";
//         break;
// }



// loop


// for( $i = 1; $i <=10 ; $i++){
//       echo $i."<br>"; 

// }


//     $num=250;
// for( $i = 1; $i <=100 ; $i++){
//         // "25 X 1  =  25"  
// echo " $num X $i = ".$num*$i."<br>";
// }

// $student = ["Haris","Shakeel","Zaroon","Furqan","Musab"];


// create an array and print the details using for loop.




$student = ["Haris","Shakeel","Zaroon","Furqan","Musab"]; //length =5 index=4



// echo $student[3];



print("<ol> <h1>Our Students</h1>");

for ($i=0; $i < count($student) ; $i++) { 
 
    echo "<li><h2>".$student[$i]."</h2></li>";
}

echo "</ol>";






// 
// echo $student;

// for debugging purpose

// print_r($student);
// var_dump($num);

// associative arrays
// multidimesional indexed arrays
// multidimesional associative arrays

//types of arrays
//loops





?>