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
<link type='text/css' href="/jishubang/Public/css/mgr/index.css"  rel='stylesheet'  media="screen"/>

<link href="//cdn.bootcss.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">

<script src="/jishubang/Public/js/jquery.js"></script>
<script src="/jishubang/Public/js/jquery.form.js"></script>

<!-- 自定义常用方法 -->
<script src="/jishubang/Public/js/common.js"></script>
<script src="/jishubang/Public/js/mgr.js"></script>

<link rel="shortcut icon" href="/jishubang/Public/images/favicon.png" type="image/icon" />

<!--[if lt IE 9]>
<script src="/jishubang/Public/js/html5.js"></script>
<script src="/jishubang/Public/js/respond.js"></script>
<![endif]-->

	<link type='text/css' href="/jishubang/Public/css/mgr/index.css"  rel='stylesheet'  media="screen"/>

</head>
<body>
<div class="bx_head">
	
	<div class="fl">
		<a href="/jishubang/index.php/mgr"><img src="/jishubang/Public/images/logo.png" class="img_logo"></a>
	</div>
	<div class="fl">
		<a href="/jishubang/index.php/mgr" class="a_logo">技术帮</a>
	</div>
	
	<div class="fr">
		<div class="btn_head" onclick="href('/jishubang/index.php/mgr/gonggong')">公共</div>
		<div class="btn_head" onclick="href('/jishubang/index.php/mgr/geren')">我的</div>
		<div class="btn_head">您好，崔鹏宇</div>
		<div class="btn_head">退出</div>
	</div>
</div>

<div class="box_left">
	<ul >
		<li class="title" onclick="href('/jishubang/index.php/mgr/geren')"><i class="ico icon-cog"></i><span class="txt">我的</span></li>
		<li class="menu" id="topics" onclick="href('/jishubang/index.php/mgr/geren/topics')"><i class="ico icon-sitemap"></i> <span class="txt">专题</span></li>
		<li class="menu" onclick="href('#')"><i class="ico icon-tasks"></i><span class="txt">文章列表</span></li>
	</ul>
</div>

<!-- 主体部分，显示分类列表 -->
<div class="main">
	<table >
		<thead>
		<tr><td ></td></tr>
		</thead>
	</table>

</div>

	

</body>
</html>

<script type="text/javascript">

$(window).load(function(){
	left_menu_actived();
});

</script>