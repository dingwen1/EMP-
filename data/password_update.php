<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>密码修改</title>
	<link rel="stylesheet" href="../css/tiao.css">
</head>
<body>
	<div>
		<?php
session_start();
@$uid=$_SESSION['uid'];
@$oldpwd=$_REQUEST['oldpwd'];
@$newpwd=$_REQUEST['newpwd'];
if($uid===null){die('输入ID啊');}
if($oldpwd===null){die('输入旧密码啊');}
if($newpwd===null){die('输入新密码啊');}

$conn=mysqli_connect('127.0.0.1','root','','emptrain','3306');
$sql="SET NAMES UTF8;";
mysqli_query($conn,$sql);

$sql="SELECT * FROM et_user WHERE uid='$uid' AND upwd='$oldpwd';";
$result=mysqli_query($conn,$sql);
if($result===false){
	echo 'SQL中的SELECT语句出错';
}else{
	$row=mysqli_fetch_row($result);
	if($row===null){
		echo "原始密码或UID错误";
		echo "
				<script>
					setTimeout(function(){window.location.href='../password_update.html';},2000);
				</script>";
	}else{
		$sql="UPDATE et_user SET upwd='$newpwd' WHERE uid='$uid';";
		$result=mysqli_query($conn,$sql);
		if($result){
			echo "修改成功";
			echo mysqli_affected_rows($conn);
			echo "
				<script>
					setTimeout(function(){window.location.href='courseinfo.php';},2000);
				</script>";
		}else{echo "修改失败，SQL语句update命令出错";}
	}
}

?>
	</div>
</body>
</html>