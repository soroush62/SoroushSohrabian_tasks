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
    global $name;
    $b = 20;
    echo "<br>". $name; 
}
test2();
?>