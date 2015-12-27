<?php
session_start();
include('conn.php');
$name = $_POST['name'];
$sql = "DELETE FROM daohang WHERE name LIKE '$name'";
$sc = $dbh->prepare($sql);
$sc->execute();
if ($sc) {
	echo "删除成功";
	$_SESSION['number']--;
}
else{
	echo "删除失败";
}
?>