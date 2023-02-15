<?php
$title="Reading Data drom database";
include '../layout/ex2/header.php';
include 'db.php';
$sql="select * from studentinfo";
$result=$conn->query($sql);
if($result->num_rows > 0){    //to check if there is any record in the table or not
    echo "    <table class='table'>
       <tr><th>ID</th><th>First Name</th><th>Last Name</th><th>City</th><th>Group Id</th><tr>";    
    while($row=$result ->fetch_assoc()){
        echo"
    <tr>
    <td><a href='updatesingle.php?id=$row[id]'>$row[id]</a></td>
    <td>$row[fname]</td>
    <td>$row[lname]</td>
    <td>$row[city]</td>
    <td>$row[groupid]</td>   
    <tr>";
}
echo "</table>";
}
else
{
    echo "No Results";
}
$conn->close();
include '../layout/ex2/footer.php';
?>
<style>
    body{
      color: white !important;
      text-align: center !important;
    }
</style>










