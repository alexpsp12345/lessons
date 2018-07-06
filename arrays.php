<?php

$fruits = array("Яблоки","Бананы","Груши");

//echo $cars["AUDI"]["year"];

echo "<ul>";
foreach ($fruits as $key=>$value)
{
    echo "<ol>".$value."</ol>";
}
echo "</ul>";

$cars["BMW"]=array("скорость"=>250,"год выпуска"=>2003,"модель"=>"xt");
$cars["AUDI"]=array("скорость"=>210,"год выпуска"=>2015,"модель"=>"tt");

echo "<ul>";
foreach ($cars as $key=>$value)
{
    echo "<li>".$key."<li>";
    foreach ($value as $key1=>$value1)
    {
        echo $key1." ".$value1."<br>";
    }
}
echo "</ul>";

