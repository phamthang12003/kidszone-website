<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "form";

$con = new mysqli($host, $user, $pass, $db);
if (!$con) {
    echo "There are some problem while connecting the database"; // gap su co khi ket noi csdl
}
//there are no errors so let's get data from the form -- không có lỗi nên hãy lấy dữ liệu từ biểu mẫu
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$msg = $_POST['msg'];
//Now we have collected the form data in Variables -- thu thập dữ liệu biểu mẫu trong Biến
//let's insert them to table -- chen vao bang
$sql = "INSERT INTO `table`(`name`, `email`, `subject`, `msg`) VALUES ('$name', '$email', '$subject', '$msg')";
$insert = mysqli_query($con, $sql);
if (!$insert) {
    echo "There are some problem while inserting data"; // gap van de khi chen du lieu
} else {
    echo "Data Inserted";
}
