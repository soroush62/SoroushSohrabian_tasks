<?php
$title="A simple CRUD app";
include '../layout/ex2/header.php';
?>
<style>
    body{
      color: white !important;
      text-align: center !important;
    }
  </style>
<form action="" method="post" onsubmit="return crud()" name="form1">
    <input type="text" name="fname" placeholder="Fisrt Name" required onblur="fname()"><br><br>
    <input type="text" name="lname" placeholder="Last Name" required><br><br>
    <input type="text" name="city" placeholder="City" required><br><br>
    <select name="groupid">
        <option value="BBCAP22">BBCAP22</option>
        <option value="BBCAP21">BBCAP21</option>
        <option value="others">others</option>
    </select><br><br>
    <input type="submit" value="Submit" name="submit">        


</form>
<?php
if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $city=$_POST['city'];
    $groupid=$_POST['groupid'];
    include 'db.php';
    $sql = "insert into studentinfo (fname, lname, city, groupid)
    values('$fname', '$lname', '$city', '$groupid')";
    if ($conn ->query($sql)==TRUE){
        echo "Your information added successfully";
    }
    else {
        echo "Error:" .$conn->error;
    }
}
?>

<?php
include '../layout/ex2/footer.php';
?>