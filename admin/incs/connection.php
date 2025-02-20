<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project_two";

//now ab hum connection ko creae karian guay
$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("connection failed");
}
?>