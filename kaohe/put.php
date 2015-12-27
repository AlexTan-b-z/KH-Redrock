<?php
session_start();
include('conn.php');
$sql = 'SELECT * FROM daohang';
$res = $dbh->prepare($sql);
$res->execute();
$message = $res->fetchAll(PDO::FETCH_ASSOC);
$number = $_SESSION['number']; //这个有BUG，只能推荐一个，并且第一次打开会报错，不知咋解决.我的想法是，没执行一次get.php，_SESSION['number']就加1，但是我这样写，每次它都会初始化为0，然后再加1...
?>