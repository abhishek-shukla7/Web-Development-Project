<!-- You are developing an online bookstore application in PHP
 You need to store the name of the book ,its price,and the quantity available.
 Write the PHP code to declare and initialize these variables. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Online Book Store</title>
</head>
<body>

<?php
$book_name = "Clean Code";
$book_price = 450.50;
$quantity_available = 20;

echo "Book Name: " . $book_name . "<br>";
echo "Price: ₹" . $book_price . "<br>";
echo "Quantity Available: " . $quantity_available;
?>

</body>
</html>
