<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
<title>主页</title>

<link rel="stylesheet" type="text/css" href="../css/index.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" href="../css/footer_f.css">
<link rel="stylesheet" href="../css/animate.css">
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


$sql = "select * from et_course limit 6,5;";
$result = mysqli_query($conn,$sql);
$ec = mysqli_fetch_all($result,1);
$ec1 = $ec[0];
$ec2 = $ec[1];
$ec3 = $ec[2];
$ec4 = $ec[3];
$ec5 = $ec[4];

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
				<dl class="case_info">
					<dd></dd>
				</dl>
			</li>
		</ul>
	</div>
</div>
			<div id="well">
				<h6>丨课程推荐</h6>
			
			<a href="course_select.php?cname=<?php echo $ec1['cname'] ?>">
				<div class="well-item">
					<div class="correct"><img  class="" src="<?php echo $ec1['courseImg']; ?>" /></div>
					<div class="opposite">
						<div class="">
							<div class="opposite-content">
								<div class="opposite-content-text">
									<div class="courseName"><?php echo $ec1['cname']; ?></div>
									<div class="open">开课时间：<span class="time"><?php echo $ec1['openTime']; ?></span></div>
									<div class="courseInfo">&nbsp;&nbsp;&nbsp;<?php echo $ec1['info']; ?></div>
									<div class="studyTime">总学时：<?php echo $ec1['studytime']; ?></div>
								</div>
							</div>
						</div>
					</div>
				</div></a>

			<a href="course_select.php?cname=<?php echo $ec2['cname'] ?>">
				<div class="well-item">
					<div class="correct"><img  class="" src="<?php echo $ec2['courseImg']; ?>" /></div>
					<div class="opposite">
						<div class="">
							<div class="opposite-content">
								<div class="opposite-content-text">
									<div class="courseName"><?php echo $ec2['cname']; ?></div>
									<div class="open">开课时间：<span class="time"><?php echo $ec2['openTime']; ?></span></div>
									<div class="courseInfo">&nbsp;&nbsp;&nbsp;<?php echo $ec2['info']; ?></div>
									<div class="studyTime">总学时：<?php echo $ec2['studytime']; ?></div>
								</div>
							</div>
						</div>
					</div>
				</div></a>

			<a href="course_select.php?cname=<?php echo $ec3['cname'] ?>">
				<div class="well-item">
					<div class="correct"><img  class="" src="<?php echo $ec3['courseImg']; ?>" /></div>
					<div class="opposite">
						<div class="">
							<div class="opposite-content">
								<div class="opposite-content-text">
									<div class="courseName"><?php echo $ec3['cname']; ?></div>
									<div class="open">开课时间：<span class="time"><?php echo $ec3['openTime']; ?></span></div>
									<div class="courseInfo">&nbsp;&nbsp;&nbsp;<?php echo $ec3['info']; ?></div>
									<div class="studyTime">总学时：<?php echo $ec3['studytime']; ?></div>
								</div>
							</div>
						</div>
					</div>
				</div></a>
			
			<a href="course_select.php?cname=<?php echo $ec4['cname'] ?>">
				<div class="well-item">
					<div class="correct"><img  class="" src="<?php echo $ec4['courseImg']; ?>" /></div>
					<div class="opposite">
						<div class="">
							<div class="opposite-content">
								<div class="opposite-content-text">
									<div class="courseName"><?php echo $ec4['cname']; ?></div>
									<div class="open">开课时间：<span class="time"><?php echo $ec4['openTime']; ?></span></div>
									<div class="courseInfo">&nbsp;&nbsp;&nbsp;<?php echo $ec4['info']; ?></div>
									<div class="studyTime">总学时：<?php echo $ec4['studytime']; ?></div>
								</div>
							</div>
						</div>
					</div>
				</div></a>

			<a href="course_select.php?cname=<?php echo $ec5['cname'] ?>">
				<div class="well-item">
					<div class="correct"><img  class="" src="<?php echo $ec5['courseImg']; ?>" /></div>
					<div class="opposite">
						<div class="">
							<div class="opposite-content">
								<div class="opposite-content-text">
									<div class="courseName"><?php echo $ec5['cname']; ?></div>
									<div class="open">开课时间：<span class="time"><?php echo $ec5['openTime']; ?></span></div>
									<div class="courseInfo">&nbsp;&nbsp;&nbsp;<?php echo $ec5['info']; ?></div>
									<div class="studyTime">总学时：<?php echo $ec5['studytime']; ?></div>
								</div>
							</div>
						</div>
					</div>
				</div></a>

				<!--
				<?php
					foreach($ec as $key=>$value){
						$tup = $value['cname'];
						$tdo_1 = $value['openTime'];
						$tdo_2 = $value['info'];
						$tdo_3 = $value['studytime'];
						echo "<div class='tui'><a href='course_select.php?cname=".$tup."'><div class='tup'>";
						echo $tup;
						echo "</div></a><div class='tdo'><span class='tdo_1'>";
						echo "开课时间：<br>";
						echo $tdo_1;
						echo "</span><br><br><span class='tdo_2'>";
						echo $tdo_2;
						echo "</span><br><br><br><span class='tdo_3'>";
						echo "总学时：".$tdo_3;
						echo "</span></div></div>";
					}
				
				
			/*	<div class="tui">
					<a href="#"><div class="tup">危机公关学</div></a>
					<div class="tdo">
						<span class="tdo_1">BAT大咖助力 全面升级公关面试</span><br><br>
						<span class="tdo_2">2017最先进的学科，祝你走上人生巅峰</span><br><br><br>
						<span class="tdo_3">456人在学</span>
					</div>	
				</div>
				*/
				
				?>-->

				<div class="clear"></div>
			</div>
		</div>

		<div id="footer"></div>
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
	<li><a href="#" class="home"><span>首页</span></a></li>
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
<script>
$(function(){
	var $animate = $('#animate');
	var $opposite = $('#opposite');
	$(".wrap").hover(function(){
		$animate.removeClass();
		$opposite.removeClass();
		$animate.addClass("test");
		$opposite.addClass('test2');
	},function(){
		$animate.removeClass();
		$opposite.removeClass();
		$animate.addClass("test2");
		$opposite.addClass('test');
	});

	$(".well-item").hover(function(){
		$(this).find(".correct").children().removeClass();
		$(this).find(".opposite").children().removeClass();
		$(this).find(".correct").children().addClass("test");
		$(this).find(".opposite").children().addClass('test2');
	},function(){
		$(this).find(".correct").children().removeClass();
		$(this).find(".opposite").children().removeClass();
		$(this).find(".correct").children().addClass("test2");
		$(this).find(".opposite").children().addClass('test');
	});

});
</script>
</body>
</html>
