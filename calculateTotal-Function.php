<!-- A PHP Function calculate TOtal() is used to calculate the total marks of a student.Inside
 the function ,a variable $total is declared and used .After calling the function,the programmer
 tries to print $total outside the function  -->


<?php
function calculateTotal($m1, $m2, $m3) {
    $total = $m1 + $m2 + $m3;
    echo "Total inside function: " . $total . "<br>";
}

calculateTotal(70, 80, 90);
?>






