<?php include "header.php";?>
<style>
    body{
      color: white !important;
      text-align: center !important;
    }
  </style>

//form
<form action="" method="get">
    <input type="number" placeholder="Enter your first number" name="num1" required >
    <input type="number" placeholder="Enter your second number" name="num2" required>
    <select name="operator">
    <option value="add">Add</option>
    <option value="sub">Subtract</option>
    <option value="mul">Multiply</option>
    <option value="div">Divide</option>
    </select>
    <input type="submit" name="cal" value="calculate">
</form>
<?php
if(isset($_GET["cal"])){
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $operator = $_GET["operator"];
    switch($operator){
        case "add":
            $result = $num1 + $num2;
        break;
        case "sub":
            $result = $num1 - $num2;
        break;
        case "mul":
            $result = $num1 * $num2;
        break;
        case "div":
            $result = $num1 / $num2;
        break;
        default:
            $result = "Err7ror : you have not selected the correct operator";
    }
}
if (isset($result)){
    echo "<h2> Result: $result</h2>";
}
?>
<?php include "footer.php"; ?>