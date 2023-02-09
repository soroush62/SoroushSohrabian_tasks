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
$num = count(($courses));
echo "<ul>";
for ($i = 0; $i < $num; $i++)
    echo "<li>" . $courses[$i] . "</li>";
    echo "</ul>";
?>
  <h3>1. The unset() function is used to remove element from the array. The var_dump() function is used to dump information about a variable.  array_values() is an inbuilt function that returns all the values of an array and not the keys.
</h3>
<h4>Delete an element from the array below:</h4>
<?php
$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
unset($courses1[0]);
echo implode(",", $courses1); 
?>
<h4>Sort the following array :</h4>
<?php
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
sort($courses3);
echo implode(",", $courses3); 
?>
<h4> a.ascending order sort by value:</h4>
<?php
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
asort($courses3);
echo implode(",", $courses3); 
?>
<h4>b.ascending order sort by Key</h4>
<?php
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
ksort($courses3);
echo implode(",", $courses3); 
?>
<h4>c.descending order sort by Value</h4>
<?php
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
arsort($courses3);
echo implode(",", $courses3); 
?>
<h4>d.descending order sort by Key</h4>
<?php
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
krsort($courses3);
echo implode(",", $courses3); 
?>
<h3>4.Change the following array's all values to upper case.</h3>
<?php
$courses4=array("php", "html", "javascript", "cms", "project");
$num = count(($courses));
for ($i = 0; $i < $num; $i++)
    echo "<li>" . strtoupper($courses[$i]) . "</li>";
    echo "</ul>";
?>
<h3>5.List all your favorite colors and their hexadecimal equivalents.</h3>
<?php
$favcolors = array (  
      'Orange ' => "#FFA500",
      'red' => "#FF0000",
      'blue' => "	#0000FF",
      'black' => "	#000000",
      'yellow' => "	#FFFF00",
  );
  foreach ($favcolors as $color => $hexadecimalequivalent){ 
  echo "<br>". "Color is $color and its hexadecimal equivalents is $hexadecimalequivalent"; } 
?>







<?php include "footer.php" ?>