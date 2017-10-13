<?php
/*
根据用户编号uid，从数据库中删除指定的用户,返回delete succ或者 delete err
*/
#1 接收客户端提交的uid请求数据，若未提交则终止执行
@$i = $_REQUEST['uid'];
if($i===NULL){
	die('uid required');
}
#2 连接数据库，向数据库发送SQL语句并执行   SET... 
require('init.php'); //包含初始化页面

#3 向数据库发送SQL语句并执行DELETE ...
$sql = "DELETE FROM et_user WHERE uid=$i";
$result = mysqli_query($conn, $sql);

#4 查看执行结果  DML: false/true
if($result===true){
	echo "delete succ<br>";
	//读取刚刚执行的DML(insert/delete/update)语句操作影响的记录数
	echo "删除操作影响的行数：" . mysqli_affected_rows($conn);
}else {
	echo "delete err<br>";
	echo $sql;
}


