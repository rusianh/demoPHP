
<?php
//Provide your php answer for each of the question below
//You can write all of your answers in this file and run it on browser to see results



//print the following 02 lines on screen using only 1 echo statement
/*
Tomorrow I'll learn "PHP" and xampp is installed on c:\xampp\ 
I will have a lot of <$>.
*/


//print the following rectangle on screen
/*

*************
*           *
*           *
*           *
*           *
*           *
*           *
*           *
*           *
*************

*/
echo ("**********<br>");
for ($x = 0; $x <=7; $x++) {
    echo "*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*<br>";
}
echo ("**********<br>");




//let radius = 5, find the circumference and area of the circle
$cv = 2*5*3.14;
$dt = 3.14 * 5**2;
echo ("Chu vi hinh tron la = ".$cv."<br>");
echo ("Dien tich hinh tron la &nbsp;".$dt."<br>");

//On 1st-Jan-2018, I open a bank account of 50,000,000 VND with interest rate = 7.13% for 12 months. How much money do I have after 3 years?
$tongtien3nam = 50000000 * 1.073**3;
echo ("tong tien sau 3 nam co duoc ".$tongtien3nam."VND <br>");


//temperature now is 12 Celsius degrees, find the Fahrenheit degree?
// 12 C = ?? F
$f = 12*1.8 + 32;
echo "do F hien tai la ".$f." do F<br>";



//initiate an array of 7 numbers. Find the sum and the average.
$mang7 = [2,4,6,4,7,5,8];
$tbc7so = 0;
foreach ($mang7 as $value){
    $tbc7so = $tbc7so + $value;
}
echo ("tbc cua 7 so trong mang 7 la: ".$tbc7so."<br>");

//write code to swap values of 2 variables
//$a=5, $b=7 ----> $a=7, $b=5
$a = 5;
$b = 7;
$sotrunggian = $a;
$a = $b;
$b = $sotrunggian;
echo (" so a = 5 va b = 7 hien tai la "."a = ".$a."va b = ".$b);


//in this question, you have to work on file lab1_embed.php


?>
