<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>教师评价界面</title>
		<link rel="stylesheet" href="../css/demo.css">
		<link rel="stylesheet" href="../css/sky-forms.css">
		<script src="../js/jquery-1.9.1.min.js"></script>
		<script src="../js/jquery.validate.min.js"></script>
</head>
<body class="bg-cyan">
	<?php
		$tid = $_REQUEST['tid'];
		session_start();
		$_SESSION['tid']=$tid;
		
	//require('init.php');
	//$sql = "update et_train set grade=$grade other=$other exam_date=$exam_date where tid=$tid;";
//	$resule = mysqli_query($conn,$sql);
	?>
	<div id="div" style="height:360px">
	<form   id="sky-form" action="evaeva.php">
		<header>EMP&nbsp;&nbsp;Update&nbsp;&nbsp;Grade</header>
		<fieldset style="height:220px">

		<section>
		<laber class="input">
		成绩：<input type="text" name='grade' id="i1" placeholder="您给的分数"><br>
		</laber>
		</section>

		<section>
		<laber class="input">
		评价：<input type="text" name='other' id="i2" placeholder="您对该学生的评价"><br>
		</laber>
		</section>

		<section>
		<laber class="input">
		时间：<input type="date" name='exam_date' id="i3" placeholder="格式如：1995年5月5日"><br>
		</laber>
		</section>

		</fieldset>
		<footer>
		<input type="submit" class="button" value="确定">
		<a href="teacher_eva.php">取消</a></footer>
	</form>
	</div>
</body>
</html>