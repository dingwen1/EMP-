<!doctype html>
<html>
 <head>
  <meta charset="UTF-8">
  <title>个人中心界面</title>
  <link rel="stylesheet" href="../css/courseinfo.css">
  <link rel="stylesheet" type="text/css" href="../css/index.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" href="../css/footer_f.css">
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
					echo "<a href='basicshow.php?uid=" .$uid ."'>".$user_name ."的基本信息</a>";
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
					<dd>❁</dd>
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
				<dl class="case_info">
					<dd></dd>
				</dl>
			</li>
		</ul>
	</div>
</div>
			<div id="courser">
				<div id="course_header">
 	<h4>您的已选课信息</h4>
	<a href="basicshow.php" id="a1">个人信息</a>
	<a href="select_course.php" id="a2">新增选课</a>
 </div>
<div>
	<?php
	if($uid===null){
		die("请先登录");
	}

	$sql="select cname,grade,other,exam_date from et_train,et_course where user_id=$uid and et_train.course_id=et_course.cid";

	$result=mysqli_query($conn,$sql);
	if($result===false){
		echo "sql查询语句出错";
	}else{
		$row=mysqli_fetch_all($result,1);
		#var_dump($row);
		if($row===null){
			echo "无此员工纪录";
		}else{
			echo "<table>";
			echo "<tr id='table_h'>
				<td colspan='2'>操作</td>
				<td>课程名</td>
				<td>分数</td>
				<td>备注</td>
				<td>评价时间</td>
			</tr>";
			foreach($row as $k=>$v){
				echo "<tr>";
			
				#$_SESSION[$k]=$v['cname'];

				echo "<td><a href='delete_train.php?cname=".$v['cname']."'>删除</a></td>";//此段代码相当变态

				echo "<td><a href='course_select.php?cname=".$v['cname']."'>课程详情</a></td>";
				foreach($v as $key=>$value){
					echo "<td>".$value."</td>";
				}
				echo "</tr>";
			}
			echo "</table>";
		}
	}


	//echo '<a href="select_course.php">新增选课</a>';
	

	?>
</div>
			</div>
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
 
 <!--<div id="header">
 	<h4>CourseInfo</h4>
	<a href="basicshow.php" id="a1">个人信息</a>
	<a href="select_course.php" id="a2">新增选课</a>
 </div>
<div>
	<?php
	session_start();

	@ $uid=$_SESSION['uid'];
	#@ $uid=$_REQUEST['uid'];
	if($uid===null){
		die("请先登录");
	}

	require('init.php');

	$sql="select cname,grade,other,exam_date from et_train,et_course where user_id=$uid and et_train.course_id=et_course.cid";

	$result=mysqli_query($conn,$sql);
	#var_dump($result);

	if($result===false){
		echo "sql查询语句出错";
	}else{
		$row=mysqli_fetch_all($result,1);
		#var_dump($row);
		if($row===null){
			echo "无此员工纪录";
		}else{
			echo "<table>";
			echo "<tr id='table_h'>
				<td colspan='2'>操作</td>
				<td>课程名</td>
				<td>分数</td>
				<td>备注</td>
				<td>评价时间</td>
			</tr>";
			foreach($row as $k=>$v){
				echo "<tr>";
			
				#$_SESSION[$k]=$v['cname'];

				echo "<td><a href='delete_train.php?cname=".$v['cname']."'>删除</a></td>";//此段代码相当变态

				echo "<td><a href='course_select.php?cname=".$v['cname']."'>课程详情</a></td>";
				foreach($v as $key=>$value){
					echo "<td>".$value."</td>";
				}
				echo "</tr>";
			}
			echo "</table>";
		}
	}


	//echo '<a href="select_course.php">新增选课</a>';
	

	?>
</div>-->

 </body>
</html>
