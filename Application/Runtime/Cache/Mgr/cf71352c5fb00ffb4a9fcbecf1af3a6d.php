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
		<li class="menu" id="handbooks" onclick="href('/jishubang/index.php/mgr/geren/handbooks')"><i class="ico icon-sitemap"></i> <span class="txt">手册</span></li>
		<li class="menu" onclick="href('#')"><i class="ico icon-tasks"></i><span class="txt">文章列表</span></li>
	</ul>
</div>

<!-- 主体部分，显示频道列表 -->
<div class="main">
	<table class="tbl_form" cellpadding="0" cellspacing="0" width="98%">
		<tr>
			<td colspan="3" class="head">新增手册</td></tr>
		
		<tr>
			<td class="title" width="140" height="40">所属频道：</td>
			<td width="200">
				<select >
					<option value="1">Java基础</option>
					<option value="1">Spring</option>
					<option value="1">Hibernate</option>
				</select>
			</td>
			<td class="info">&nbsp;</td>
		</tr>
		<tr>
			<td class="title" width="140" height="40">手册名称：</td>
			<td width="200"><input type="text" class="textbox1" placeholder="手册名称"></td>
			<td class="info">&nbsp;</td>
		</tr>
		<tr>
			<td class="title" width="140" height="40">排序：</td>
			<td width="200"><input type="text" class="textbox1" placeholder="填写整数"></td>
			<td class="info">&nbsp;排序值是为了确定手册之间的显示顺序，默认最小的数显示在前面，即以正序排序</td>
		</tr>
		<tr>
			<td class="title" width="140" height="40">管理员：</td>
			<td width="200"><input type="text" class="textbox1" placeholder="管理员的帐号"></td>
			<td class="info">请填写注册用户的登录帐号</td>
		</tr>
		<tr>
			<td class="title" width="140" height="40">描述：</td>
			<td colspan="2"><textarea cols="60" rows="4"></textarea></td>
		</tr>
		<tr>
			<td width="140" height="40"></td>
			<td colspan="2">
				<button class="btn2 btn_green1">保存并返回</button>&nbsp;&nbsp;&nbsp;&nbsp;
				<button class="btn2 btn_green1">保存并继续</button>&nbsp;&nbsp;&nbsp;&nbsp;
				<button class="btn2 btn_red1" onclick="history.back();">返回</button>
			</td>
		</tr>
	
	</table>

</div>

	

</body>
</html>

<script type="text/javascript">

$(window).load(function(){
	left_menu_actived();
	textareaHeight();
});

function textareaHeight(){
	$("textarea").textareaAutoHeight();
}

</script>