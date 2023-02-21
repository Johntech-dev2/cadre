<?php

$connection = mysqli_connect('localhost','root');

mysqli_select_db($connection,"registrationdata");
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phonenumber = $_POST['phonenumber'];
$Unit = $_POST['Unit'];
$Gender =$_POST['Gender'];

$query = "INSERT INTO 'cadrecorps'('firstname','lastname','phonenumber','Unit','Gender') VALUES ('$firstname','$lastname','$phonenumber','$Unit','$Gender') ";

mysqli_query($connection,$query);

echo"see you there rugged";
?>