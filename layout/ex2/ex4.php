<?php include "header.php";?>
<style>
    body{
      color: white !important;
      text-align: center !important;
    }
  </style>
<h3>1. Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not:</h3>
<?php
$d = date("F");
if($d=="August"){
echo "<br>". "It's August, so it's still holiday.";
}
else{
    echo "<br>". "Not August, this is Month-name so I don't have any holidays";
}
?>
<?php include "footer.php" ?>