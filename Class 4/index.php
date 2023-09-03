<?php

// If-else & switch Statement


// $fevcolor = 'red';

// if ($fevcolor == 'red'){
//     echo "Your Favorite color is red";
// } elseif($fevcolor == 'green'){
//     echo "Your Favorite color is Green";
// } elseif($fevcolor == 'orange'){
//     echo "Your Favorite color is Orange";
// } else {
//     echo "Invalid Color";
// }

// Switch Statement
// switch($fevcolor){
//     case "red":
//         echo "Your Favorite Color is Red";
//         break;
//     case "yellow":
//         echo "Your Favorite Color is Yellow";
//         break;
//     case "orange":
//         echo "Your Favorite Color is Orange";
//         break;
//     default:
//     echo "Invalid Color"; 
// } 

// $studentname = "Azad";
// $studentemail = "monsurahmadazad@gmail.com";
// $studentphone = "01307888554";
// $studentbloodgroup = "A+";


$student = array ("Azad", "monsurahmadazad@gmail.com", '01307888554', "A+");
// $student = ["Azad", "monsurahmadazad@gmail.com", 1307888554, "A+"] ;
// echo $student;
// var_dump($student);
// echo "<pre>";
// var_dump($student);
// echo "</pre>";
// echo "<pre>";
// print_r($student);
// echo "</pre>";


// for loop statement with Abdur Rahman sir

for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
  }

$s = 0;
$num = 5;

for ($i = 0; $i <= $num; $i = $i=$i+2) {
    $s = $s + $i;
    echo "The number is : $s <br>";
}