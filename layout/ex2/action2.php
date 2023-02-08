<?php include "header.php";

$fname = $_POST['fname'];
$age = $_POST['age'];

switch($age){
    case $age >= 18:
        echo  "<br>". "Your name is $fname and you are eligible for voting";
    break;
    default:
    echo  "<br>". "Your name is $fname and you are not eligible for voting";
    break;   
}


?>
<style>
    body{
      color: white !important;
      text-align: center !important;
    }
  </style>
<?php include "footer.php" ?>