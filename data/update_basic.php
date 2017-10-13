<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>修改信息</title>
	<link rel="stylesheet" href="../css/tiao.css">
</head>
<body>
	<div>
		<?php


@ $phone=$_REQUEST['phone'];
@ $email=$_REQUEST['email'];
@ $user_name= $_REQUEST['user_name'];
@ $IDcard = $_REQUEST['IDcard'];
session_start();
@ $uid=$_SESSION['uid'];
require('init.php');
$sql = "select * from et_user where uid = $uid;";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_all($result,1);
$user = $row[0];
#var_dump($user);

if($phone===""){
	$phone = $user['phone'];
}

if($user_name===""){
	$user_name = $user['user_name'];
}


if($email===""){
	$email = $user['email'];
}

if($IDcard===""){
	$IDcard = $user['IDcard'];
}




$sql="update et_user set user_name='$user_name',phone='$phone',email='$email',IDcard='$IDcard' where uid=$uid;";

$result=mysqli_query($conn,$sql);

if($result){
	echo "Update Success";
	echo "
	<script>
	setTimeout(function(){window.location.href='basicshow.php';},2000);
	</script>";
}else{
	echo "Update error";
}


?>
	</div>
</body>
</html>