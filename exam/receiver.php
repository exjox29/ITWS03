<?php
// $email = $_POST["email"];
// $password = $_POST["password"];



// $emailLength = strlen($email);
// $passwordLength = strlen($password);

// echo "LENGHT OF EMAIL IS: $emailLength <br>";
// echo "LENGHT OF PASSWORD IS: $passwordLength <br>";

// echo $email . " AND " . $password;

// $prelim = $_POST["prelim"];
// $midterm = $_POST["midterm"];
// $final = $_POST["final"];

// $total = $prelim + $midterm + $final;
// $average = $total/3;

// echo "You average score is: $average";

// if ($average<75){
// 	echo "Remarks: Failed";
// }
// else {
//  	echo "Remarks: Passed";

// }

// $num1 = $_POST["num1"];
// $num2 = $_POST["num2"];
// $operator = $_POST["operator"];


// if ($operator == "+") {
//     echo $num1 + $num2;
// } elseif ($operator == "-") {
//     echo $num1 - $num2;
// } elseif ($operator == "*") {
//     echo $num1 * $num2;
// } elseif ($operator == "/") {
//     echo $num1 / $num2;
// } else {
//     echo $num1 % $num2;
// }

// $num1 = $_POST["num1"];
// $num2 = $_POST["num2"];
// $operator = $_POST["operator"];

// switch ($operator) {
//     case "+":
//         echo $num1 + $num2;
//         break;
//     case "-":
//         echo $num1 - $num2;
//         break;
//     case "*":
//         echo $num1 * $num2;
//         break;
//     case "/":
//         echo $num1 / $num2;
//         break;
//     default:
//         echo $num1 % $num2;
// }

// $grade1 = $_POST["grade1"];
// $grade2 = $_POST["grade2"];
// $grade3 = $_POST["grade3"];
// $grade4 = $_POST["grade4"];
// $grade5 = $_POST["grade5"];
// $grade6 = $_POST["grade6"];
// $grade7 = $_POST["grade7"];
// $grade8 = $_POST["grade8"];

// $average = ($grade1 + $grade2 + $grade3 + $grade4 + $grade5 + $grade6 + $grade7 + $grade8) / 8;

// if ($average >= 91) {
//     $status = "Grade A";
// } elseif ($average >= 81) {
//     $status = "Grade B";
// } elseif ($average >= 71) {
//     $status = "Grade C";
// } elseif ($average >= 61) {
//     $status = "Grade D";
// } elseif ($average >= 51) {
//     $status = "Grade E";
// } elseif ($average >= 41) {
//     $status = "Grade F";
// } elseif ($average >= 31) {
//     $status = "Grade G";
// } else {
//     $status = "Grade H";
// }

// switch ($status) {
//     case "Grade A": 
//        echo "Grade A: Napakahusay! Ipagpatuloy ang iyong magandang performance.";
//        break;
//     case "Grade B": 
//        echo "Grade B: Napakahusay! Ipagpatuloy ang iyong magandang performance.";
//        break;
//     case "Grade C": 
//        echo "Grade C: Napakahusay! Ipagpatuloy ang iyong magandang performance.";
//        break;
//     case "Grade D": 
//        echo "Grade D: Napakahusay! Ipagpatuloy ang iyong magandang performance.";
//        break;
//     case "Grade E": 
//        echo "Grade E: Napakahusay! Ipagpatuloy ang iyong magandang performance.";
//        break;
//     case "Grade F": 
//        echo "Grade F: Napakahusay! Ipagpatuloy ang iyong magandang performance.";
//        break;
//     case "Grade G": 
//        echo "Grade G: Napakahusay! Ipagpatuloy ang iyong magandang performance.";
//        break;
//     default:
//         echo "Grade H: Napakahusay! Ipagpatuloy ang iyong magandang performance.";
       
// }

// $prelim = $_POST["prelim"];
// $midterm = $_POST["midterm"];
// $finals = $_POST["finals"];

// $total = $prelim + $midterm + $finals;
// $average = $total / 3;

// if ($average < 75) {
//     $remarks = "Failed <br> <br>";
// } else {
//     $reamarks = "Passed! <br> <br>";
// }

// echo "Your Prelim Grade is: $prelim <br>"; 
// echo "Your Midterm Grade is: $midterm <br>"; 
// echo "Your Finals Grade is: $finals <br>"; 

// echo "-------------------------------------- <br>";

// echo "Total: $total <br>";
// echo "Average " . round($average,2) . "<br>";
// echo "Remarks $remarks";


// $q1 = $_POST["q1"];
// $q2 = $_POST["q2"];
// $q3 = $_POST["q3"];
// $lab = $_POST["lab"];
// $exam = $_POST["exam"];

// $avg_quiz = (($q1+$q2+$q3)/30)*100;
// $final_grade = ($avg_quiz*0.25) + ($lab*0.25) + ($exam*0.50);

// echo "YOUR FINAL GRADE IS: " . round($final_grade,2) . "<br>";

// if ($final_grade >= 90) {
//     echo "YOUR GRADE IS: A";
// } elseif ($final_grade >=80) {
//     echo "YOUR GRADE IS B";
// } elseif ($final_grade >=70) {
//     echo "YOUR GRADE IS C";
// } else {
//     echo "YOUR GRADE IS F";
// }


// $prelim = $_POST["prelim"];
// $midterm = $_POST["midterm"];
// $finals = $_POST["finals"];

// $total = $prelim + $midterm + $finals;
// $average = $total / 3;

// if ($average < 75) {
//     $remarks = "Failed";
// } else {
//     $remarks = "Passed!";
// }

// echo "Your total grade is " . $total . "<br>";
// echo "Your Average grade is " . round($average,2) . "<br>";
// echo "Your Remarks is " . $remarks;

// $q1 = $_POST["q1"];
// $q2 = $_POST["q2"];
// $q3 = $_POST["q3"];
// $lab = $_POST["lab"];
// $exam = $_POST["exam"];

// $avg_quiz = (($q1+$q2+$q3)/30) *100;
// $final_grade = ($avg_quiz*0.25) + ($lab*0.25) + ($exam*0.50);

// echo "YOUR FINAL GRADE IS " . round($final_grade,2) . "<br>";

// if ($final_grade >= 90) {
//     echo "YOUR GRADE IS A";
// } elseif ($final_grade >=80) {
//     echo "YOUR GRADE IS B";
// } elseif ($final_grade >=70) {
//     echo "YOUR GRADE IS C";
// } else {
//     echo "YOUR GRADE IS F";
// }

// function computeSquare($side) {
//     return $side * $side;
// }

// function computeTriangle($base,$height) {
//     return 0.5 * $base * $height;
// }

// $choice = $_POST["choice"];
// $val1 = $_POST["val1"];
// $val2 = $_POST["val2"];

// if ($choice == "S" || $choice == "s") {
//     $area = computeSquare($val1);
//     echo "THE AREA OF SQUARE IS $area";
// } elseif ($choice == "T" || $choice == "t") {
//     $area = computeTriangle($val1,$val2);
//     echo "THE AREA OF TRIANGLE IS $area";
// } else {
//     echo "INVALID CHOICE";
// }


$fname = $_POST["fname"];
$lname = $_POST["lname"];
$gender = $_POST["gender"];
$subject = $_POST["subject"];
$education = $_POST["education"];
$quote = $_POST["quote"];


echo "YOUR NAME IS: " . $fname . " " . $lname . "<br>";
echo "YOUR GENDER IS: " . $gender . "<br>";
echo "YOUR FAVORITE SUBJECTS ARE: " . "<br>";
foreach($subject as $subj) {
    echo "$subj <br>";
}
echo "YOUR EDUCATION ATTAINMENT IS: " . $education . "<br>";
echo " OUR QUOTE IS: ". $quote . "<br>";







?>