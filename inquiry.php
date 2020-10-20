<?php

$full_name = $_POST['full_name'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];
$company_name = $_POST['company_name'];
$message = $_POST['comments'];

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'jpca';

$link = mysqli_connect($servername, $username, $password, $database);
if(!$link){
	die('Could not connect to MySQL: ' . mysqli_connect_error());
}
$sql = "INSERT INTO clients (full_name, phone_number, email, company_name, message) VALUES
('".$full_name."', '".$phone_number."', '".$email."', '".$company_name."', '".$message."')";

$result = mysqli_query($link,$sql);

echo '<script>';

echo 'alert("We will get back to you within 24 hours. Thank you for inquring!");';

echo '</script>';

?>
