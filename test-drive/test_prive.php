<?php

$server = "localhost";
$username = "root";
$password = "";
$databasename = "car_reselling";

$con = mysqli_connect($server, $username, $password, $databasename);

if (!$con) {
    echo 'not connected';
}

$name = $_POST['name'];
$address = $_POST['address'];
$place = $_POST['place'];
$z_code = $_POST['z_code'];
$city = $_POST['city'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$car_company = $_POST['car_company'];
$car_model = $_POST['car_model'];
$test_date = $_POST['test_date'];
$test_time = $_POST['test_time'];

$sql = "INSERT INTO `test_drive`(`NAME`, `ADDRESS`, `PLACE`, `Z_CODE`, `CITY`, `EMAIL`, `PHONE`, `CAR_COMPANY`, `CAR_MODEL`, `TEST_DATE`, `TEST_TIME`) VALUES ('$name','$address','$place','$z_code','$city','$email','$phone','$car_company','$car_model','$test_date','$test_time')";

$result = mysqli_query($con, $sql);

if ($result) {
    echo 'data submitted';
} else {
    echo 'data is not submitted';
}
