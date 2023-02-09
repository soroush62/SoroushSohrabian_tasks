<?php include "header.php";?>
<style>
    body{
      color: white !important;
      text-align: center !important;
    }
  </style>
  <h3>1. Write a php script to display courses as list. Use <li></h3>
<?php
$courses=array("PHP", "HTML", "JavaScript", "CMS", "Project");
echo "<ul>";
echo "<li>";
echo $courses[0];
echo "</li>\n";
echo "<li>";
echo $courses[1];
echo "</li>\n";
echo "<li>";
echo $courses[2];
echo "</li>\n";
echo "<li>";
echo $courses[3];
echo "</li>\n";
echo "<li>";
echo $courses[4];
echo "</li>\n";
echo "</ul>";
?>








<?php include "footer.php" ?>