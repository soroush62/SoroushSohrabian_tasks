<?php
//array indexed array
$course = array("Databases", "PHP", "HTMLS");
// to retrieve value
echo "<br>".  $course[1];

//looping thtough an index array
$num = count(($course));
for ($i = 0; $i < $num; $i++)
    echo "<br> $i:course[$i] <br>"; 
//associative arrays
$coursel = array("C1" => "Databases", "C2" => "HTML", "C3" => "PHP");
echo "<hr>" . $coursel['C2'];

//looping through associative arrays
foreach ($coursel as $x => $x_value)
    echo "<br>". "The course id is $x  and the name is $x_value";

//multi demensional arrays
$array = array(
    array(1,2,3),
    array(4,5,6)
);
echo "<br>" . $array[0][0];
echo "<br>" . $array[1][2];
echo "<br>" . $array[0][1];


//loop through multi demensional arrays
$products = array (
    'laptops' =>array(
        'Acer' => "Acer 1234",
        'HP' => "HP 2020 Series",
        'Sony' => "Sony 2020"),
    'mobiles' =>array(
        'Samsung' => "S12 galaxy", 
        'Apple' => "Iphone 10",
        'Nokia' => 'Nokia 9899')
    );
    foreach ($products as $type => $items){
    foreach ($items as $key => $value)
    echo "<br>". "$type: \t $key \t $value <br>";
    } 
//array functions
//is_array
echo "<br>" . (is_array($products) ? "it is an array" : "it is not an array");
?>

