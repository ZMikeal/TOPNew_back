<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta http-equiv="x-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<head>
	<title>汽车研究计划管理信息系统</title>
	<link href="/topNew/Public/custom/css/bootstrap.min.css" rel="stylesheet">
</head>
<style type="text/css">
	#background{
		position: absolute;
		z-index: -1;
		width: 100%;
		height: 100%;
		top: 0px;
		left: 0px;
	}
</style>
<body>
<form action="<?php echo U('Login/dologin');?>" method="post" class="form-horizontal">
<div class="container-fluid">
<div id="background">
<img id="imageId" width="100%" height="100%">
</div>
<div class="col-lg-3 col-md-3 col-md-offset-8" style="opacity:0.89;">

<div class="panel panel-default panel-filter panel-primary" style="margin-top:70%;">
<div class="panel-heading"><h4><strong>北汽股份汽车研究院综合管理系统</strong></h4></div>
<div class="panel-body">
<div class="input-group input-group-lg"><span class="input-group-addon glyphicon glyphicon-user"></span>
<input class="form-control" id="username" name="username">
</div>
<br>
<div class="input-group input-group-lg"><span class="input-group-addon glyphicon glyphicon-pencil"></span>
<input class="form-control" type="password" id="password" name="password">
</div>
<br>
<br>
<button type="submit" value="登陆" class="btn btn-primary btn-block"><strong>登录</strong></button>
</div>
<div class="panel-footer">信息工程部 <br>注意：本系统支持IE8以上的浏览器</div>
</div>

</div>
</div>
</form>

</body>
</html>
<script type="text/javascript">
    
	window.onload=function(){
	var id=Math.round(Math.random()*11+1);
    document.getElementById("imageId").src = "/topNew/Public/custom/img/bg"+id+".jpg";
}
</script>
    <script src="/topNew/Public/custom/js/jquery.min.js"></script>
    <script src="/topNew/Public/custom/js/bootstrap.min.js"></script>