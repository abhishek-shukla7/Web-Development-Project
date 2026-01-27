<?php
for ($roll = 1; $roll <= 20; $roll++) {
    if ($roll % 5 == 0) {
        continue;
    }
    echo $roll . "<br>";
}
?>
