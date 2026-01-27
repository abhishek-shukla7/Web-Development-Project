<!-- Yo have a list of roll number from 1 to 20,but only the even roll number will get snacks in an event
Task:
Use a for loop with an if condition inside to print only even numbers from 1 to 20. 
-->

<?php
for ($roll = 1; $roll <= 20; $roll++) {
    if ($roll % 2 == 0) {
        echo "Roll Number $roll gets snacks<br>";
    }
}
?>




