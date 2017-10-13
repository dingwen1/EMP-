<?php
session_start();
$uid=$_SESSION['uid'];
$cname=$_REQUEST['cname'];
 require('init.php');
 $sql = "delete  from et_train where user_id=$uid and course_id=(select cid from et_course where cname='$cname');";
var_dump($cname);
var_dump($uid);
 $result = mysqli_query($conn,$sql);

if($result){
	echo"
		<script>
	location.href='courseinfo.php';
	</script>";
	
}else{
	echo '错误';
}


?>