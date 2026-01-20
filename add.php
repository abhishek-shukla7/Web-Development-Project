<!DOCTYPE html>
<html>
<head>
    <title>Addition in PHP</title>
</head>
<body>

<form method="post">
    Enter first number: <input type="number" name="num1"><br><br>
    Enter second number: <input type="number" name="num2"><br><br>
    <input type="submit" name="submit" value="Add">
</form>

<?php
if (isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    $sum = $num1 + $num2;

    echo "Addition is: " . $sum;
}
?>

</body>
</html>
