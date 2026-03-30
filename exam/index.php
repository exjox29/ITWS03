<?php

// 1. COMMENTS
// THIS IS SINGLE LINE COMMENT

/* 
    THIS
    IS
    MULTI-LINE
    COMMENT
*/

// 2. VARIABLLES
// $name = "John Vincent";
// $age = 21;
// echo "NAME: $name AGE: $age <br>";
// print "$name $age";

// 3. STRING VARIABLES
// $name = "John Vincent";
// echo $name;

// 4. CONCATENATION (.)
// $name1 = "John Vincent";
// $name2 = "Herrera";

// echo $name1 . " " . $name2;

// 5. STRLEN FUNCTION
// echo strlen("WASSUP, HELLO WORLD");

// 6. STRPOS FUNCTION
// echo strpos("HELLO WORLD", "O");

// 7. STRREV FUNCTION
// echo strrev("Hello Worlds!");

//EXERCISE 1

// $name = "John Vincent Herrera";
// $age = 31;
// $address = "San Bartolome, San Leonardo, Nueva Ecija";

// echo $name . "<br>";
// echo $age . "<br>";
// echo $address;

//EXCERCISE 2
// $original = "ABCDE";
// $reverse = strrev($original);

// echo "The String is $original <br> The output is $original$reverse";

// echo "<br> <br>";

// echo "The String is " . $original . "<br>";
// echo "The output is " . "$original$reverse"

// OPERATORS
// $x = 10;
// echo $x-7;

// for ($i = 0; $i < 9; $i++) {
//     echo "I love you <br>";
// }

//ADDITION
// $baon = 100;
// $pagkain = 60;
// $pamasahe = 30;

// $gastos = $pamasahe + $pagkain;
// $natitiraPa = $baon - $gastos;

// echo "Ang total gastos mo ay: " . $gastos . "<br>";
// echo "Ang natitira mo pang pera ay: " . $natitiraPa;

// echo "The total gastos is: $gastos <br> Ang natitira pa ay: $natitiraPa ";

//MULTIPLICATION
// $chicken = 500;
// $damiNgManok = 6;

// $total = $chicken * $damiNgManok;
// $paghahatianNgAnim = $total / 6;

// echo "ANG TOTAL NA GAGASTUSIN AY: $total <br> AT ANG SHARE SHARE AY: $paghahatianNgAnim";

//MODULUS
// $itlog = 27;
// $capacity = 5;

// $remainder = $itlog % $capacity;
// echo "ANG RERMAINDER AY: $remainder";    


//INCREMENT OR DECREMENT
// $life = 10;

// $life++;
// echo "$life <br>";

// $lives = 10;
// $lives--;
// echo "$lives";

// IF ELSE STATEMENT
// $a = 20;
// $b = 30;

// if ($a > $b) 
//     echo "a is greater than b";
// else 
//     echo "b is greater than a";

// ELSEIF STATEMENT

// $a = 30;
// $b = 30;

// if ($a > $b) {
//     echo "A is bigger than B";
// } elseif ($a < $b) {
//     echo "B is bigger than A";
// } else {
//     echo "A is equal to B";
// }


// function myname() {
//     echo "John Vincent <br>";
// }

// echo "Hello ";
// myname();
// echo "How are you ";
// myname();

// function name($fname) {
//     echo $fname . " Herrera <br>";
// }

// echo "Hello ";
// name("Marian");
// echo "Hello ";
// name("Recelyn");
// echo "Hello ";
// name("Gemma");
// echo "Hello ";
// name("Pauline");

// function name($fname,$lname) {
//     echo "$fname $lname <br>";
// }

// echo "Hello ";
// name("Pauline", "De Leon");
// echo "Hello ";
// name("Marian", "Dela Cruz");
// echo "Hello ";
// name("Recelyn", "Mabalay");
// echo "Hello ";
// name("Gemma", "Manzon");

// function add($x, $y) {
//     return $x + $y;
// }

// echo "1 + 10 = " . add(1,10);

// function add($num1, $num2) {
//     $total = $num1 + $num2;
//     return $total;
// }

// echo "10 + 15 = " . add(10,15);

// function output() {
//     echo "Hello World";
// }

// output();

// function output($message) {
//     echo $message;
// }

// output("Hello Worldssss");

// function getSum($num1, $num2) {
//     return $num1 + $num2;
// }

// $result = getSum(50,10);
// echo $result;

// echo date("Y.m.d");
// echo"<br>";
// echo date("Y/m/d");
// echo"<br>";
// echo date("Y-m-d");

// $tomorrow = mktime(0,0,0,date("m"),date("d")+1,date("Y"));
// echo "Tomorrow is ".date("Y/m/d", $tomorrow);

// $names = ["Joan", "Aaron", "Princess", "Julius"];

// echo "$names[1] $names[2] $names[3] are $names[0]'s Friends ";

// $names = ["Anna"=>21, "Gwen"=>15, "Marian"=>25];
// echo $names["Anna"];
// echo $names["Gwen"];
// echo $names["Marian"];
?>