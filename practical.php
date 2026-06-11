<?php

function add($a, $b)
{
    return $a + $b;
}

function sub($a, $b)
{
    return $a - $b;
}

function mul($a, $b) 
{
    return $a * $b;
}

function div($a, $b) 
{
    return $a / $b;
}

$a = 10;
$b = 2;
$result = "+";



if ($result == "+") 
    {
    echo "Addition of numbers: " . add($a, $b);
    }

elseif ($result == "-") 
    {
    echo "Subtraction of numbers: " . sub($a, $b);
    } 

elseif ($result == "*") 
    {
    echo "Multiplication of numbers: " . mul($a, $b);
    } 

elseif ($result == "/") 
    {
    echo "Division of numbers: " . div($a, $b);
    } 


?>

