<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$a=100;
function add()
{
    $a=20;
    echo "this is a local variable".$a;
}
add();

echo"<br>";
echo" how are you".$a;
?>



</body>
</html>
