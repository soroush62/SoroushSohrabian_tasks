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
$num = count(($courses1));
echo "<ul>";
for ($i = 0; $i < $num; $i++)
    echo "<li>" . $courses1[$i+1] . "</li>"; 
    echo "</ul>";  
?>
<h4>Sort the following array :</h4>
<?php
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
sort($courses3);
$num = count(($courses3));
echo "<ul>";
for ($i = 0; $i < $num; $i++)
    echo "<li>" . $courses3[$i] . "</li>"; 
    echo "</ul>";  
?>
<h4> a.ascending order sort by value:</h4>
<?php
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
asort($courses3);
$num = count(($courses3));
echo "<ul>";
for ($i = 0; $i < $num; $i++)
    echo "<li>" . $courses3[$i] . "</li>"; 
    echo "</ul>";  
?>
<h4>b.ascending order sort by Key</h4>
<?php
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
ksort($courses3);
$num = count(($courses3));
echo "<ul>";
for ($i = 0; $i < $num; $i++)
    echo "<li>" . $courses3[$i] . "</li>"; 
    echo "</ul>";  
?>
<h4>c.descending order sort by Value</h4>
<?php
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
arsort($courses3);
$num = count(($courses3));
echo "<ul>";
for ($i = 0; $i < $num; $i++)
    echo "<li>" . $courses3[$i] . "</li>"; 
    echo "</ul>";  
?>
<h4>d.descending order sort by Key</h4>
<?php
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
krsort($courses3);
$num = count(($courses3));
echo "<ul>";
for ($i = 0; $i < $num; $i++)
    echo "<li>" . $courses3[$i] . "</li>"; 
    echo "</ul>";  
?>







<?php include "footer.php" ?>