<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>课程详情</title>
	<!--<link rel="stylesheet" href="../css/courseinfo.css">
	<!--<link rel="stylesheet" href="../css/comm.css" />-->
	 <link rel="stylesheet" type="text/css" href="../css/index.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css"> 
	<link rel="stylesheet" href="../css/footer_f.css">
	<link rel="stylesheet" href="../css/course_select.css">
	<link rel="stylesheet" href="../css/search.css">
</head>
<body>

 <?php
session_start();
@$uid = $_SESSION['uid'];
require('init.php');

$sql = "select * from et_user where uid=$uid;";
$result = mysqli_query($conn,$sql);
@$row = mysqli_fetch_all($result,1);
@$user = $row[0];

$sql = "select * from course_classify;";
$result = mysqli_query($conn,$sql);
$cc = mysqli_fetch_all($result,1);

/*$sql = "select * from et_course;";
$result = mysqli_query($conn,$sql);
$ecall = mysqli_fetch_all($result,1);*/


$sql = "select * from et_course limit 0,5;";
$result = mysqli_query($conn,$sql);
$ec = mysqli_fetch_all($result,1);

?>

<div class="wrap">
	<div class="logo" id="all">
		<div id="header">
			<span id="emp">EMP</span>
			<div id="search">
			<form action="select_course.php">
				<input type="search" placeholder="请输入想要搜索的信息" name="kw" id="input1">
				<input type="submit" value="搜索" id="input2">
			</form>
			
			<span id="header_a" >
				<?php
				if($uid===null){
					echo "<a href='../login.html'> 登录 </a>  丨  <a href='../register.html'>注册</a>";
				}else{
					$user_name = $user['user_name'];
					echo "<a href='courseinfo.php?uid=" .$uid ."'>".$user_name ."的个人中心</a>";
				}
				?>
			</span>
			</div>
		</div>
		<div id="body">
			<div class="case">
			<div id="slider" class="case_box">
		<ul>
			<li class="case_1">
				<dl class="case_info">
					<dd></dd>
					
				</dl>
			</li>
			<li class="case_2">
				<dl class="case_info">
					<dd></dd>
				</dl>
			</li>
			<li class="case_3">
				<dl class="case_info">
					<dd></dd>
				</dl>
			</li>
			<li class="case_4">
				<dl class="case_info">
					<dd></dd>
				</dl>
			</li>
			<li class="case_5">
				<dl class="case_info">
					<dd></dd>
				</dl>
			</li>
			<li class="case_6">
				<dl class="case_info case_info_add">
					<dd></dd>
				</dl>
			</li>
		</ul>
	</div>
</div>
<!------------------------------------------------------------------->
	<div id="course_teacher">
	<?php
	$cname=$_REQUEST['cname'];
	require('init.php');
	$sql = "select * from et_course where cname='$cname';";
	$result = mysqli_query($conn,$sql);
	$course = mysqli_fetch_all($result,1);
	$course = $course[0];			//获取的单行课程信息
	
	$eid = $course['teacher_id'];
	$sql = "select * from et_teacher where eid=$eid;";
	$result = mysqli_query($conn,$sql);
	$teacher = mysqli_fetch_all($result,1);
	$teacher = $teacher[0];				//获取单行教师信息
	
	$clid = $course['course_classify_id'];
	$sql = "select title from course_classify where clid=$clid";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_all($result);
	$row = $row[0];
	$title = $row[0];  //获取的课程分类名
	?>
		<div id="cour">
			<h3 class="h">丨课程介绍</h3>
			<table>
				<tr class="table_h">
					<td>课程编号</td>
					<td>课程名</td>
					<td>所属分类</td>
					<td>老师</td>
					<td>书籍</td>
					<td>学时</td>
					<td>开课时间</td>
				</tr>
				<tr>
					<td><?php  echo $course['cid'];  ?></td>
					<td><?php  echo $course['cname']; ?></td>
					<td><?php  echo $title;  ?></td>
					<td><?php  echo $teacher['teacher_name']; ?></td>
					<td><?php  echo $course['book'];  ?></td>
					<td><?php  echo $course['studytime'];  ?></td>
					<td><?php  echo $course['openTime']; ?></td>
				</tr>
			</table>
			<p>
				<h4>课程信息</h4>
				<span id="cour_s">
					&nbsp;&nbsp;&nbsp;<?php echo $course['info'];  ?>
				</span>
			</p>
		</div>
<hr id="hr">
		<div id="teac">
			<h3 class="h">丨教师详情</h3>
			<img src="<?php echo $teacher['avatar']; ?>" alt="" style="float:right">
			<ol>
				<li><span class="table_h">姓名： </span> <?php echo $teacher['teacher_name']; ?></li>
				<li><span class="table_h">性别： </span> <?php echo $teacher['gender']; ?></li>
				<li><span class="table_h">电话： </span> <?php echo $teacher['phone']; ?></li>
				<li><span class="table_h">邮箱： </span> <?php echo $teacher['email']; ?></li>
				<li><span class="table_h">介绍： </span> <?php echo $teacher['info']; ?></li>
			</ol>
			<div class="clear"></div>
		</div>

	</div>
<!----------------------------------------------------------------------->
		</div>

		<div id="footer_f">
			<p class="zuozhe">作者：丁稳&&夏武</p>
			<p class="lianxi">
				<a href="#">企业合作</a>
				<a href="#">人才招聘</a>
				<a href="#">联系我们</a>
				<a href="#">教师招募</a>
				<a href="#">常见问题</a>
				<a href="#">意见反馈</a>
				<a href="#">友情链接</a>
			</p>	
			<hr>
			<span>© 2017 dingding.com  京ICP备 1334346642号-3</span>
		</div>

	</div>


</div>
<div class="nav-main">
<div class="nav-box">
<div class="nav">
  <ul class="nav-ul">
	<li><a href="index.php" class="home"><span>首页</span></a></li>
  	<?php
		foreach($cc as $key=>$value){
				$v = $value['title'];
				echo "<li><a href='#' class='develop'><span>" .$v ."</span></a></li>";
		}
	
?>
  	<li><a href="#" class="contact"><span>关于我们</span></a></li>
  </ul>
</div>
<div class="nav-slide">
    <div class="nav-slide-o"></div>
<?php
		foreach($cc as $key=>$value){
			echo "<div class='nav-slide-o'><ul>";

			$sql = "select * from et_course where course_classify_id=$value[clid];";
			$result = mysqli_query($conn,$sql);
			$row = mysqli_fetch_all($result,1);
			foreach($row as $k=>$v){
				$i = $v['cname'];
				
				echo "<li><a href='course_select.php?cname=".$i ."'><span>" .$i ."</span></a></li>";
			}		
			echo "</ul></div>";
		}
	?>
</div>
</div>
</div>

<script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript">
	$(function(){
	var thisTime;
	$('.nav-ul li').mouseleave(function(even){
			thisTime	=	setTimeout(thisMouseOut,1000);
	})

	$('.nav-ul li').mouseenter(function(){
		clearTimeout(thisTime);
		var thisUB	=	$('.nav-ul li').index($(this));
		if($.trim($('.nav-slide-o').eq(thisUB).html()) != "")
		{
			$('.nav-slide').addClass('hover');
			$('.nav-slide-o').hide();
			$('.nav-slide-o').eq(thisUB).show();
		}
		else{
			$('.nav-slide').removeClass('hover');
		}
		
	})
	
	function thisMouseOut(){
		$('.nav-slide').removeClass('hover');
	}
	 
	$('.nav-slide').mouseenter(function(){
		clearTimeout(thisTime);
		$('.nav-slide').addClass('hover');
	})
	$('.nav-slide').mouseleave(function(){
		$('.nav-slide').removeClass('hover');
	})

})
</script>


<!--
	<div id="header">
		<h4>Course</h4>
		<a href="courseinfo.php" id="a1">返回首页</a>
	</div>
	<div>
	<table>
	<tr id="table_h">
		<td>课程编号</td>
		<td>课程名</td>
		<td>教师</td>
		<td>教室</td>
		<td>课本</td>
		<td>开课时间</td>
	</tr>
	<?php
	session_start();
	$cname=$_REQUEST['cname'];
	require('init.php');
	$sql = "select * from et_course where cname='$cname';";
	$result = mysqli_query($conn,$sql);
	if($result===""){
		
	}else{
		$row = mysqli_fetch_all($result,1);
		foreach($row as $k=>$v){
			echo "<tr>";
			foreach($v as $key=>$value){
				echo "<td>".$value ."</td>";
			}
			echo "</tr>";
		}
	}
	
	
	?>
	</table>
	</div>
	-->
</body>
</html>