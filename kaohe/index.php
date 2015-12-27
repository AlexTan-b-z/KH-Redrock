<!DOCTYPE html>
<html>
<head>
	<title>我的导航</title>
	<style type="text/css">
    .dingbu{
    	position: absolute;
    	left: 560px;
    	font-size: 30px;
    	font-style: italic;
    	color: #00BFFF;
    }
    .dizhi{
    	position:relative;
    	top: 120px; 
    	font-size: 30px;
    }
    .more{
    	position: relative;
    	top: 130px;
    }
    .tj,.sc{
    	width: 70px;
    	height:50px;
    	border: none;
        background: #00BFFF;
        font-size: 15px;
        color: white;
        font-weight: bold;
    }
    .theme{
    	background: #00BFFF;
    	color: white;
    }
    .delete{
    	position: relative;
        top: 140px;
    }
	</style>
</head>
<body>
<div class="dingbu">
	<h1>我的导航</h1>
</div>
<div class="dizhi">
	<a href="http://www.baidu.com" class="theme" target="_blank">百度</a>
	<a href="http://www.google.com" class="theme" target="_blank">谷歌</a>
	<a href="http://www.php.net" class="theme" target="_blank">PHP学习</a>
    <?php include('put.php'); 
    for ($i=0; $i < $number ; $i++) { 
		$name = $message[$i]['name'];
	    $address = $message[$i]['address'];
    	echo "<a href='{$address}'>$name</a>";
    	echo " ";
    }
    ?>
<div class="more">
	<form action="more.php">
		<input type="submit" value="我来推荐" class="tj">
	</form>
</div>

<div class="delete">
	<form action="scnr.php">
		<input type="submit" value="删除" class="sc">
	</form>
</div>
</body>
</html>