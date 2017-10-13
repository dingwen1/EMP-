<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>教师评价	</title>

	<link rel="stylesheet" href="../css/course_select.css">
	<link rel="stylesheet" href="../css/comm.css">
</head>
<body>
	
	<?php
	session_start();
	$teacher_id = $_SESSION['eid'];
	require('init.php');
	$sql = "select tid,uid,user_name,cname,grade,other,exam_date from et_user,et_train,et_course where course_id in (select cid from et_course where teacher_id=$teacher_id) and et_train.user_id=et_user.uid and et_train.course_id=et_course.cid;";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_all($result,1);
	echo "<table style='margin-top:50px'>";
echo"<tr>
			<td>选课代码</td>
			<td>学员编号</td>
			<td>学员姓名</td>
			<td>选课名</td>
			<td>成绩</td>
			<td>评价</td>
			<td>评价时间</td>
			<td>评价</td>
		</tr>";
	foreach($row as $key=>$value){
		
		echo "<tr>";
		
		foreach($value as $k=>$v){
			echo "<td> $v </td>";
		}
		$tid = $value['tid'];
		echo "<td><a href='eva.php?tid=".$tid."'>修改</a></td>";
		echo "</tr>";
	}
	echo "</table>";
	?>
</body>
</html>