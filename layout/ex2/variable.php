<?php include "header.php"?>
<style>
    body{
      color: white !important;
      text-align: center !important;
    }
  </style>
<h3>Ex3 .In-class Task Variable & Operators 07.02.2023 (variable.php)</h3>
<h2>
    1.Create a simple html form to get Firstname and Lastname from the user and use echo echo statement to print using <h3> tag: Hello …., You are welcome to my site.  (Form Tutorial: https://www.youtube.com/watch?v=nLPlDHrsyYA  
</h2>
<form action="action.php" method="post">
    <div class="row">
        <div class="col">
            <input type="text" placeholder="First Name" name="fname" class="form-control" required>
        </div>
        <div class="col">
            <input type="text" placeholder="Last Name" name="lname" class="form-control" required>
        </div>
    </div>
            Birth Date: <input type="date" name="bdate"> <br>
            Select fav color: <input type="color" name="color"> <br>
            <input type="submit" value="submit">
        
   
</form>
<h3>3. Prepare a simple html table and apply bootstrap style to the table. You may use the same table that you did in 3.5.</h3>
    $g1 = 5;
    $g2 = 4;
    $g3 = 5;
    echo "
    <table class="table">
    <thead>
    <tr>
    <th scope="col"> S.N </th><th scope="col" style="color: white;"> Name </th><th scope="col"> Grade </th>
    </tr>
    <tr>
    <td style="color: white;"> 1</td><td style="color: white;"> Pekka </td><td style="color: white;"> $g1 </td>
    </tr>
    <tr>
    <td style="color: white;"> 2</td><td style="color: white;"> Johanna </td><td style="color: white;"> $g2 </td>
    </tr>
    <tr>
    <td style="color: white;"> 3</td style="color: white;"><td style="color: white;"> John </td><td style="color: white;"> $g3 </td>
    </tr>
    <thead>
    </table>  
    ";
    <h3>4.Write a PHP script with two string variables. Assign any text to these variables. Join them together.  Print the length of the string. (Hint: string function)
</h3>
    <?php
    $name = "Soroush";
    $familly = "Sohrabian";
    echo $name . " " . $familly;
    $lengthname = strlen($name);
    $lengthfname = strlen($familly);
    $length=$lengthname+$lengthfname;
    echo "<br>" . "The length of my full name is " . $length; 
    ?>

<h3>5.Write a script to add up the numbers: 298, 234, 46. Use variables to store these numbers and echo statement to output your answer.</h3>
    <?php
   echo "<br>". $value = 298+234+46; 
   ?>
   
   <h3>6.Write a PHP script to detect the browser being used to view your pages. (Use predefined variables: $_SERVER)</h3>
    <?php
    echo  "<br>". $_SERVER['HTTP_USER_AGENT'];
   ?>

<h3>7.Write a PHP script in the footer section of your universal footer just below the Copyright information to display the last modification time of a file.</h3>



 <?php include "footer.php" ?>