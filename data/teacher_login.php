<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录成功</title>
	<link rel="stylesheet" href="../css/tiao.css">
</head>
<body>
	<div>
		<?php   #登录
@$tname = $_REQUEST['tname'];
@$tpwd = $_REQUEST['tpwd'];
if($tname===null){die('用户名没有写');}
if($tpwd===null){die('密码没有写');}

require('init.php');//链接数据库使用初始化PHP

$sql = "SELECT * FROM et_teacher WHERE tname='$tname' AND tpwd='$tpwd';";
$result = mysqli_query($conn,$sql);//将查询语句命令发送到数据库

if($result===false){
	echo '查询失败，sql语句出错';
}else{
	$row = mysqli_fetch_row($result);
	if($row=== null){
		echo '用户名或者密码出错';
		echo "
	<script>
	setTimeout(function(){window.location.href='../teacher_login.html';},1500);
	</script>"; 
	}else{
		session_start();
		$_SESSION['eid']=$row[0];
		echo '登录成功 <br>';
		echo '用户编号：'.$row[0];
		echo "
	<script>
	setTimeout(function(){window.location.href='teacher_eva.php';},1000);
	</script>"; 
		
		#echo "<script>location.href='courseinfo.php'</script>";
		
	}
}


?>
	</div>
</body>
</html>