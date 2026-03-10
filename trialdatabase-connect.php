<?php
$servername="localhost";
$username="root";
$password="";
$dbname="trial";
$com=new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error)
    {
        die("connection failed: ".$conn->connect_error);
    }

else{
    echo "successfully connected no problem";
}


