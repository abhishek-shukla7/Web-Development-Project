<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "ddl";

$conn = mysqli_connect($host, $username, $password);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS $database");
mysqli_select_db($conn, $database);

mysqli_query($conn, "CREATE TABLE IF NOT EXISTS library(
    Book_id INT AUTO_INCREMENT PRIMARY KEY,
    book_name VARCHAR(50),
    author VARCHAR(50),
    price FLOAT(10,2)
)");

$sql2 = "ALTER TABLE library ADD publisher VARCHAR(50)";
if (mysqli_query($conn, $sql2)) {
    echo "column 'publisher' added successfully <br>";
} else {
    echo "error adding column: " . mysqli_error($conn) . "<br>";
}

$sql3 = "ALTER TABLE library RENAME TO library_books";
if (mysqli_query($conn, $sql3)) {
    echo "table renamed to 'library_books' successfully <br>";
} else {
    echo "error renaming table: " . mysqli_error($conn) . "<br>";
}

$sql4 = "ALTER TABLE library_books DROP COLUMN price";
if (mysqli_query($conn, $sql4)) {
    echo "column 'price' deleted successfully <br>";
} else {
    echo "error deleting column: " . mysqli_error($conn) . "<br>";
}

mysqli_close($conn);
