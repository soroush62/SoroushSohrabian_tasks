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
            <input type="text" placeholder="First Name" name="fname" class="form-control" required>  <br>
        </div>
        <div class="col">
            <input type="text" placeholder="Last Name" name="lname" class="form-control" required>  <br>
        </div>
            Birth Date: <input type="date" name="bdate"> <br>
            Select fav color: <input type="color" name="color"> <br>
            <input type="submit" value="submit">
        
    </div>
</form>


 <?php include "footer.php" ?>