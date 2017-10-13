<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="../css/tiao.css">
</head>
<body>
<div>
	<?php     #注册
@$jobnum = $_REQUEST['jobnum'];
@$upwd = $_REQUEST['upwd'];
@$phone = $_REQUEST['phone'];
if($jobnum===""){
	echo '用户名没有写<br>';
	echo "
	<script>
	setTimeout(function(){window.location.href='../register.html';},2000);
	</script>";
	die();
}
if($upwd===""){
	echo '密码没有写<br>';
	echo "
	<script>
	setTimeout(function(){window.location.href='../register.html';},2000);
	</script>";
	die();
}
if($phone===""){
	echo '电话没有写<br>';
		echo "
		<script>
		setTimeout(function(){window.location.href='../register.html';},2000);
		</script>";
		die();
}

require('init.php');

$sql = "INSERT INTO et_user(upwd,jobnum,phone) VALUES('$upwd','$jobnum','$phone');";
$result = mysqli_query($conn,$sql);

if($result){
	echo "注册成功<br>稍后在登录界面输入工号密码登录<br>";
	echo "新用户的自增编号为：".mysqli_insert_id($conn);
	echo "
	<script>
	setTimeout(function(){window.location.href='../login.html';},2000);
	</script>";
	
}else{
	echo '注册失败';
}



?>
!!!</div>

</body>
</html>