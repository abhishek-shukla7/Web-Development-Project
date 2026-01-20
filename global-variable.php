<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$a=10;
$b=20;

function add()
{
    global $a,$b;
    $c=$a+$b;;
    echo "result" .$c;
}

add();
?>




</body>
</html>