<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<!--[if IE 7]>
<html class="ie ie7" lang="zh-CN">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="zh-CN">
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html lang="zh-CN">
<!--<![endif]-->

<head>
	<title>技术帮--登录</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<link type="text/css" href="/jishubang/Public/css/common.css" rel="stylesheet"   media="screen"/>

<link href="//cdn.bootcss.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">

<script type="text/javascript" charset="utf-8"  src="/jishubang/Public/js/jquery.js"></script>
<script type="text/javascript" charset="utf-8"  src="/jishubang/Public/js/jquery.form.js"></script>

<!-- 自定义常用方法 -->
<script type="text/javascript" charset="utf-8"  src="/jishubang/Public/js/common.js"></script>
<script type="text/javascript" charset="utf-8"  src="/jishubang/Public/js/mgr.js"></script>

<link rel="shortcut icon" href="/jishubang/Public/images/favicon.png" type="image/icon" />

<!--[if lt IE 9]>
<script src="/jishubang/Public/js/html5.js"></script>
<script src="/jishubang/Public/js/respond.js"></script>
<![endif]-->

	<link type='text/css' href="/jishubang/Public/css/mgr/login.css"  rel='stylesheet'  media="screen"/>
	
</head>

<!-- 后台登录页面 -->
<body>
	<div class="bx_head">
		<div class="fl">
			<img src="/jishubang/Public/images/logo2.png" class="img_logo">
		</div>
		<div class="fl">
			<span class="txt_logo">技术帮管理后台</span>
		</div>
		
		<div class="fr">
			<a href="/jishubang/index.php" class="back">返回技术帮首页</a>
		</div>
	
	</div>
	
	<div class="bx_main">
		<div class="left_banner">
			<img src="/jishubang/Public/images/login-banner.png" width="100%">
		</div>
		<div class="right_login">
			<div class="form_login">
				<div class="title">登录</div>
				<div class="txt"><input class="txtbox" type="text" placeholder="登录帐号"></div>
				<div class="txt"><input class="txtbox" type="password" placeholder="登录密码"></div>
				<div class="btns">
					<button class="btn_login" onclick="href('/jishubang/index.php/mgr/index/index')">登&nbsp;&nbsp;&nbsp;&nbsp;录</button></div>
			</div>
		</div>
	</div>

</body>
</html>

<script type="text/javascript">

$(window).load(function(){
	
});


</script>