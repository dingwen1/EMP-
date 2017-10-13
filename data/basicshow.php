<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>个人信息</title>
	<link rel="stylesheet" href="../css/comm.css" />
	<link rel="stylesheet" href="../css/basicshow.css" />
</head>
<body>
	<header><a href="courseinfo.php">返回</a></header>
	<section>
		<p>个人信息</p><hr>
		<ol>
			<?php
				session_start();
				$uid = $_SESSION['uid'];
				require('init.php');
				$sql = "select * from et_user where uid='$uid';";
				$result = mysqli_query($conn,$sql);
				$row = mysqli_fetch_all($result,1);
				#var_dump($row);
				$row=$row[0];
				#var_dump($row);
				echo "<li><a>用户ID：</a><span>".$row['uid']."</span></li>";
				echo "<li><a> 账号：</a><span>".$row['jobnum']."</span></li>";
				echo "<li><a> 姓名：</a><span>".$row['user_name']."</span></li>";
				echo "<li><a> 身份证号：</a><span>".$row['IDcard']."</span></li>";
				echo "<li><a>电话：</a><span>".$row['phone']."</span></li>";
				echo "<li><a> 邮箱：</a><span>".$row['email']."</span></li>";

			?>
		</ol>
		<div>
			<a href="../update_basic.html">修改基本信息</a>
			<a href="../password_update.html">修改密码</a>
		</div>
	</section>
</body>
</html>