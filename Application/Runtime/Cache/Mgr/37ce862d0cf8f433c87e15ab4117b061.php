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

<!-- 主体部分 -->
<div class="main2">
	<ul class="cascade1">
		<li class="head">手册</li>
		<li><a href="#" class="item">JAVA理论基础</a></li>
		<li><a href="#" class="item" actived>JAVA理论基础</a></li>
		<li><a href="#" class="item">JAVA理论基础</a></li>
	</ul>
	
	<ul class="cascade2">
		<li class="head"></li>
		<li><a href="#" class="item">JAVA逻辑语法</a></li>
		<li><a href="#" class="item" actived>JAVA常见类</a></li>
		<li><a href="#" class="item" >网络篇</a></li>
		<li><a href="#" class="item">JAVA逻辑语法</a></li>
		<li><a href="#" class="item" >JAVA常见类</a></li>
	</ul>
	
	<ul class="cascade3">
		
		<table class="main_list" cellpadding="0" cellspacing="0" width="100%">
			<tr class="head"><td>节名称</td>
				<td width="140" align="center"><a href="handbooks_section2_add" class="btn1 btn_blue1">
			<i class="icon-plus-sign"></i> 新增</a></td></tr>
			<tr class="body"><td >if语法</td>
				<td class="operate"><a href="handbooks_section2_edit" class="btn1 btn_green1">
				<i class="icon-ok-sign"></i> 编辑</a>&nbsp;&nbsp;
			<a href="#" class="btn1 btn_red1"><i class="icon-remove-sign"></i> 删除</a> </td>
			</tr>
			<tr class="body"><td >while语法</td>
				<td class="operate"><a href="handbooks_section2_edit" class="btn1 btn_green1">
				<i class="icon-ok-sign"></i> 编辑</a>&nbsp;&nbsp;
			<a href="#" class="btn1 btn_red1"><i class="icon-remove-sign"></i> 删除</a> </td>
			</tr>
			<tr class="body"><td >switch</td>
				<td class="operate"><a href="handbooks_section2_edit" class="btn1 btn_green1">
				<i class="icon-ok-sign"></i> 编辑</a>&nbsp;&nbsp;
			<a href="#" class="btn1 btn_red1"><i class="icon-remove-sign"></i> 删除</a> </td></tr>
			<tr class="body"><td >remove</td>
				<td class="operate"><a href="handbooks_section2_edit" class="btn1 btn_green1">
				<i class="icon-ok-sign"></i> 编辑</a>&nbsp;&nbsp;
			<a href="#" class="btn1 btn_red1"><i class="icon-remove-sign"></i> 删除</a> </td>
			</tr>
			<tr class="body"><td >while语法</td>
				<td class="operate"><a href="handbooks_section2_edit" class="btn1 btn_green1">
				<i class="icon-ok-sign"></i> 编辑</a>&nbsp;&nbsp;
			<a href="#" class="btn1 btn_red1"><i class="icon-remove-sign"></i> 删除</a> </td>
			</tr>
			<tr class="body"><td >switch</td>
				<td class="operate"><a href="handbooks_section2_edit" class="btn1 btn_green1">
				<i class="icon-ok-sign"></i> 编辑</a>&nbsp;&nbsp;
			<a href="#" class="btn1 btn_red1"><i class="icon-remove-sign"></i> 删除</a> </td></tr>
			<tr class="body"><td >remove</td>
				<td class="operate"><a href="handbooks_section2_edit" class="btn1 btn_green1">
				<i class="icon-ok-sign"></i> 编辑</a>&nbsp;&nbsp;
			<a href="#" class="btn1 btn_red1"><i class="icon-remove-sign"></i> 删除</a> </td>
			</tr>
		</table>
		
	</ul>

</div>

	

<div class="bx_foot">
&copy;2016 jishubang.com 版权所有
</div>

</body>
</html>