<!DOCTYPE>
<?php 
//======================================================================
// Project Name:Get QQ Portrait
// Auther:		DoctorAlien
// Created Time:2015/12/13
//======================================================================
if(!empty($_POST['qq']))
{
	$qq=$_POST['qq'];
}
else
{
	$qq=10000;
}
?>
<html>
<head>
<link href="//cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
<div class="col-lg-8 col-lg-offset-2">
<form action="" method="post">
<h2 class="text-center">获取QQ头像</h2>
<div class="form-group">
<label for="qq">请输入QQ号</label>
<input class="form-control" id="qq" name="qq">
</div>
<div class="form-group">
<input class="btn btn-primary btn-lg btn-block" type="submit" value="查看头像">
</div>
</form>
<div>
<h3>Result:</h3>
<span class="col-lg-10" style="font-size:28px;line-height:100px;height:100px;">你当前所查询的QQ号是：<?php echo $qq;?></span>
<span class="col-lg-2"><?php echo '<img src="'.'http://q1.qlogo.cn/g?b=qq&nk='.$qq.'&s=100&t='.time().'">';?></span>
</div>
</div>
</div>
</body>
</html>