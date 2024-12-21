<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "car_reselling";
$con = mysqli_connect($server, $username, $password, $database);

if (!$con) {
    echo 'not connected';
}

$name = $_POST['name'];
$email  = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$sql = "INSERT INTO meetup(`NAME`, `MOBILE_NO`, `EMAIL`, `MESSAGE`) VALUES ('$name','$phone','$email','$message')";

$result = mysqli_query($con, $sql);

if ($result) {
    echo 'data is submitted';
} else {
    echo  'data is not submitted';
}
