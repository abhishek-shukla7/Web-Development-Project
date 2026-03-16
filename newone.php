<?php
$name=$_POST['x1'];
$class=$_POST['x2'];
$roll=$_POST['x3'];
$mob=$_POST['x4'];
$servername="localhost";
$username="root";
$password="";
$dbname="abc";
$conn=new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    echo "successful";
}
$a="insert into info(name,class,rollno,mobile)";
if(mysqli_query($conn,$a))
{
    echo "record Inserted";
}
    else{
        echo " not inserted";
    }

$conn->close();

?>