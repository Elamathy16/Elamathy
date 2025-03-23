<?php

$servername="localhost";
$username="root";
$password="";
$database="crude";

$con=mysqli_connect($servername,$username,$password,$database);
if(!$con)
{
    die(mysqli_connect_error($con));
}
?>