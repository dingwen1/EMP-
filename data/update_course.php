<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>选课</title>
	<link rel="stylesheet" href="../css/tiao.css">
</head>
<body>
	
	<div>
		<?php
$course_id = $_REQUEST['course_id'];
session_start();
$uid = $_SESSION['uid'];

require('init.php');

$sql = "select * from et_train where user_id=$uid and course_id=$course_id;";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_all($result);
if($row){
	echo "你已经选了这门课程";
	echo "
		<script>
		setTimeout(function(){window.location.href='select_course.php';},700);
		</script>";
}else{
	$sql = "insert into et_train(user_id,course_id) values($uid,$course_id);";
	$result = mysqli_query($conn,$sql);
	if($result){
		echo "选课成功";
		echo "
		<script>
		setTimeout(function(){window.location.href='select_course.php';},700);
		</script>";
	}else{
		echo "错误";
	}
}

?>
	</div>
</body>
</html>