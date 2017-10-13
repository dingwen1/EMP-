<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>提醒</title>
	<link rel="stylesheet" href="../css/tiao.css">
</head>
<body>
<div>
	<?php

session_start();
$tid = $_SESSION['tid'];
$grade = $_REQUEST['grade'];
$other = $_REQUEST['other'];
$exam_date = $_REQUEST['exam_date'];

require('init.php');
$sql = "update et_train set grade=$grade,other='$other',exam_date='$exam_date' where tid=$tid;";
$result = mysqli_query($conn,$sql);

if($result){
	echo "操作成功";
	echo "
	<script>
	setTimeout(function(){window.location.href='teacher_eva.php';},1000);
	</script>"; 
}else{
	echo "操作失败,请您写全";
	echo "
	<script>
	setTimeout(function(){window.location.href='teacher_eva.php';},1000);
	</script>"; 
}



?></div>
</body>
</html>