<?php
$title="Reading Data drom database";
include '../layout/ex2/header.php';
include 'db.php';
$sql="select * from studentinfo";
$result=$conn->query($sql);
if($result->num_rows > 0){    //to check if there is any record in the table or not
    echo "
    
    
    
    
    ";
}
?>
<style>
    body{
      color: white !important;
      text-align: center !important;
    }
  </style>








<?php
include '../layout/ex2/footer.php';
?>