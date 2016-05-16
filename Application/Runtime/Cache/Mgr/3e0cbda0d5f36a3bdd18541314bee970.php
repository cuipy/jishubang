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
	<title>技术帮</title>
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

	<link type='text/css' href="/jishubang/Public/css/mgr/page1.css"  rel='stylesheet'  media="screen"/>

</head>
<body>
<div class="bx_head">
	
	<div class="fl">
		<a href="/jishubang/index.php/mgr"><img src="/jishubang/Public/images/logo.png" class="img_logo"></a>
	</div>
	<div class="fl">
		<a href="/jishubang/index.php/mgr" class="a_logo">技术帮管理后台</a>
	</div>
	
	<div class="fr">
		<div class="btn_head" onclick="href('/jishubang/index.php/mgr/gonggong')">公共</div>
		<div class="btn_head" onclick="href('/jishubang/index.php/mgr/geren')">我的</div>
		<div class="btn_head">您好，崔鹏宇</div>
		<div class="btn_head"><a href="/jishubang/index.php/mgr/index/login" class="cover">退出</a></div>
	</div>
</div>

<div class="box_left">
	<ul >
		<li class="title" onclick="href('/jishubang/index.php/mgr/gonggong')"><i class="ico icon-cog"></i><span class="txt">公共</span></li>
		<li class="menu" id="channels" onclick="href('/jishubang/index.php/mgr/gonggong/channels')"><i class="ico icon-sitemap"></i> <span class="txt">频道</span></li>
		
	</ul>
</div>

<script type="text/javascript">

$(window).load(function(){
	left_menu_actived();
});

</script>
	

<div class="bx_foot">
&copy;2016 jishubang.com 版权所有
</div>


	
</body>
</html>

<script type="text/javascript">


</script>