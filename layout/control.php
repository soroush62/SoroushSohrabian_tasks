<?php
$a = 6;
if($a==5){
    echo "the condition is true";
}
else {
    echo "the condition is false";
}

//if else statement with date function
// $d = date("D");
// if($d=="sat" or $d=="sun"){
// echo "<br>". "Today is  $d, it is weekend";
// }
// else {
//     echo "<br> Today is $d, it is a working day";
// }
//if else if statement
$d = date("D");
if($d=="sat" or $d=="sun"){
echo "<br>". "Today is  $d, it is weekend";
}
elseif($d=="Mon") {
    echo "<br> Today is $d, it is the first working day of the week";
}
elseif($d=="Tue") {
    echo "<br> Today is $d, it is the second working day of the week";
}
else{
    echo "<br>". "have e nice day";
}
//switch
echo "<hr> <h1> Switch statement example</h1>";
$num = 5;
switch($num){
    case 5:
        echo  "<br>". "this is 5";
        break;
    case 6:
        echo  "<br>". "this is 6";
        break;
    case 7:
        echo  "<br>". "this is 7";
        break;
    default:
        echo  "<br>". "this is neither 5, nor 6 nor 7";
        break;

}

$grade = "very good";
switch($grade){
    case "Excellent":
        echo "<br>".  "your grade is 5";
        break;
        case "very good":
        echo "<br>".  "your grade is 4";
        break;
        default: 
        echo  "<br>". "you have faild";
        break;

      
      
}
  //while loop
echo "<hr> <h1> while loop </h1>";
$a = 5;
while ($a<=10) {
    echo "The number is $a <br>";
    $a++;
}

//Do while
echo "<hr> <h1> Do While Loop</h1>";
$num = 10;
do {
    echo "the number is $num <br>";
    $num++;
}while ($num<=15);

 //For loop
 echo "<hr> <h1> For loop </h1>";
 for($c=5; $c<=10; $c++){
    echo "*<br>";
 }

 //Foreach loop
 echo "<hr> <h1> Foreach loop </h1>";
$x = array("Good", "very good", "Excellent");
    foreach($x as $value){
        echo $value. "<br>";    
 }
?>