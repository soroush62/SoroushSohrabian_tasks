<?php include "header.php";?>


//form
<form action="" method="get">
    <input type="number" placeholder="Enter your first number" name="num1" required>
    <input type="number" placeholder="Enter your second number" name="num2" required>
    <select name="operator">
    <option value="add">Add</option>
    <option value="sub">Subtract</option>
    <option value="mul">Multiply</option>
    <option value="div">Divide</option>
    </select>
    <input type="submit" name="cal" value="calculate">
</form>
<?php include "footer.php" ?>