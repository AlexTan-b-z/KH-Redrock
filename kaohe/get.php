<?php
session_start();
include('conn.php');
$name = $_POST['name'];
$address = $_POST['address'];
if (empty($address)) {
	echo "地址栏不能为空";
}
else{
	$sql = "insert into daohang (name, address) values('$name', '$address')";
	$dbh->exec($sql);
	if ($dbh) {
		echo "推荐成功，请返回导航界面并刷新";
		$_SESSION['number'] = 0; 
		$_SESSION['number']++;
	}
	else{
		echo "推荐失败！";
	}
}
?>