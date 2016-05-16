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
		<li class="title" onclick="href('/jishubang/index.php/mgr/geren')">
			<i class="ico icon-cog"></i><span class="txt">手册</span></li>
		<li class="menu" id="handbooks" onclick="href('/jishubang/index.php/mgr/geren/handbooks')">
			<i class="ico icon-sitemap"></i><span class="txt">手册管理</span></li>
		<li class="menu" id="hbsections2" onclick="href('/jishubang/index.php/mgr/geren/hbsections2')">
			<i class="ico icon-tasks"></i><span class="txt">章节内容</span></li>
	</ul>
</div>

<script type="text/javascript">

$(window).load(function(){
	left_menu_actived();
});

</script>

<!-- 主体部分，显示分类列表 -->
<div class="main">
	<div class="bx_search">
		<input class="textbox1" type="text" placeholder="手册名称">  <div class="btn2 btn_blue1"><i class="icon-search"></i> 查找</div>
		<div class="fr btn1 btn_green1" onclick="history.back();">返回</div>
	</div>
	
	<table class="main_list" cellpadding="0" cellspacing="0" width="100%">
		<tr class="head">
			<td width="140">手册名称</td>
			<td width="80">所属频道</td>
			<td width="100">章名</td>
			<td width="80">节名</td>
			<td>简介</td>
			<td width="140" align="center"><a href="handbooks_section2_add" class="btn1 btn_blue1"><i class="icon-plus-sign"></i> 新增</a></td>
		</tr>
		<tr class="body"><td>Java常用类</td><td>Java基础</td>
		<td>Java基本语法</td>
		<td class="green1">if语句</td>
		<td>将JAVA中经常使用的功能进行总结整理，包括字符串处理、文件上传下载、加密解密、图片处理等</td>
		<td class="operate"><a href="handbooks_section2_edit" class="btn1 btn_green1"><i class="icon-ok-sign"></i> 编辑</a>&nbsp;&nbsp;
		<a href="#" class="btn1 btn_red1"><i class="icon-remove-sign"></i> 删除</a> </td></tr>
	</table>

</div>

	

<div class="bx_foot">
&copy;2016 jishubang.com 版权所有
</div>

</body>
</html>

<script type="text/javascript">

$(window).load(function(){
	
});

</script>