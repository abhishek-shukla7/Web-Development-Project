<?php
$host="localhost";
$username="root";
$password="";
$database="ddl";
$conn=mysqli_connect($host,$username,$password);
if(!$conn)
    {
        die("connection failed: ".mysqli_connect_error());
    }
mysqli_query($conn,"create database if not exists $database");
mysqli_select_db($conn,$database);
mysqli_query($conn,"create table if not exists student(
    id int auto_increment primary key,
    name varchar(50),
    course varchar(50),
    semester int 
)");

$sql2="alter table student add column if not exists email varchar(90)";
if(mysqli_query($conn,$sql2))
{
    echo "column 'email' added successfully <br>";
}
else{
    echo "error adding column: ".mysqli_error($conn)."<br>";

}
$sql3="insert into student(name,course,semester,email) values
('Abhishek','BCA',6,'abhishekshukla@gmail.com'),
('Rahul','BCA',6,'rahul@gmail.com'),
('Rohit','BCA',6,'rohit@gmail.com'),
('Satyarth','BCA',6,'satyarth@gmail.com'),
('Nihal','BCA',6,'nihal@gmail.com')";

if(mysqli_query($conn,$sql3))
{
    echo "record inserted successfully <br>";
}
else{
    echo "error inserting record: ".mysqli_error($conn)."<br>";
}



$sql_update="UPDATE student SET semester=7 WHERE name='Rahul'";

if(mysqli_query($conn,$sql_update))
{
    echo "Rahul's semester updated successfully <br>";
}
else{
    echo "Error updating record: ".mysqli_error($conn)."<br>";
}

$sql_delete="DELETE FROM student WHERE id=3";

if(mysqli_query($conn,$sql_delete))
{
    echo "Record with ID 3 deleted successfully <br>";
}
else{
    echo "Error deleting record: ".mysqli_error($conn)."<br>";
}

$sql4="SELECT * FROM student";
$result=mysqli_query($conn,$sql4);

echo "<h2>Student Records</h2>";
echo "<table border='1' cellpadding='10'>";
echo "<tr>
        <th>ID</th>
        <th>Name</th>
        <th>Course</th>
        <th>Semester</th>
        <th>Email</th>
      </tr>";

if(mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_assoc($result))
    {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['course']."</td>";
        echo "<td>".$row['semester']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "</tr>";
    }
}
else
{
    echo "<tr><td colspan='5'>No records found</td></tr>";
}

echo "</table>";
mysqli_close($conn);

?>