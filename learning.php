<?php
$conn=mysqli_connect("localhost","root","","learning");
if(!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)) {
    echo "ID: " . $row["id"] . "<br>";
    echo "Name: " . $row["name"] . "<br>";
    echo "Marks: " . $row["marks"] . "<br>";
    echo "Email: " . $row["email"] . "<br><br>";
}
?>