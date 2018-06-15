<?php 	

$con = mysqli_connect("localhost","id6193560_mutiara123","mutiara123","id6193560_db_parking");

$nama = $_POST["nama"];
$username = $_POST["username"];
$password = $_POST["password"];

$statement = mysqli_prepare($con, "INSERT INTO tb_user (nama,username,password) VALUES (?,?,?)");
mysqli_stmt_bind_param($statement, "siss", $name, $username, $password);
mysqli_stmt_execute($statement);

$response = array();
$response["success"] = true;

echo json_encode($response);

 ?>