<?php
$name = "Soroush";
$number = 5;
$_age = 18;
// $fist name="Pekka"; we can not use spaces
// $last-name="KC";  we cane not use - just _
$last_name="KC";
$sub = "php";
$Sub = "Database";

echo $name;
?>
<?php
//Global scope
//$a = 10;

//function test(){
   // echo $a; //global variable is not accessable in function

//Global 
//}
// test();
?>
<?php
//Local scope
function test1(){
    $a = 20;
    echo "<br>". $a; 
}
test1();
echo "<br>" . $a;
?>

<?php
$name="Pekka";
//Local scope
function test2(){
    global $name; //global  keyword
    $b = 20;
    echo "<br>". $name; 
}
test2();
?>
<?php
//static  keyword
function test3(){
   static $num = 5;  //in this way on completion of function variables do not deleted   
    echo "<br>". $num ;
    $num++;
}
test3();
test3();
test3();
?>

<?php
$host = $_SERVER['DOCUMENT_ROOT'];
echo "<br>" . $host;
?>

<?php
$name="Pekka";
$lname = "HON";

echo "<br>". $name . " " .$lname;
//strlen built in function
echo  "<br>". "The length of " . $name . " is " . strlen(($name));
//strpos()
echo "<br>". strpos("Hello world this is interesting", "is");
//str_word_count()
echo "<br>". str_word_count("count the number of words");
?>