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

<script src="/jishubang/Public/js/jquery.js"></script>
<script src="/jishubang/Public/js/jquery.pseudo.js"></script>

<link rel="shortcut icon" href="/jishubang/Public/images/favicon.png" type="image/icon" />

<!--[if lt IE 9]>
<script src="/jishubang/Public/js/html5.js"></script>
<script src="/jishubang/Public/js/respond.js"></script>
<![endif]-->


<link type='text/css' href="/jishubang/Public/css/home/page.css"  rel='stylesheet'  media="screen"/>
<script src="/jishubang/Public/unslider/unslider-min.js"></script>
<link  rel='stylesheet' href="/jishubang/Public/unslider/unslider.css" />
<link  rel='stylesheet' href="/jishubang/Public/unslider/unslider-dots.css"/>
	
	
</head>
<style>

.sy_slider{
	float:left;
	width:60%;
	height:300px;
}

.sy_pics2{
	float:left;
	width:40%;
	padding-left:10px;
}
.sy_pics2 li{
	display:inline-block;
	width:48%;
	list-style:none;
	position:relative;
}
.sy_pics2 .pic2{
	width:100%;
	height:98px;
}
.sy_pics2 .title{
	position:absolute;
	left:18px;
	right:18px;
	bottom:18px;
	color:#fff;
}

.bx_pics3{
	float:left;

}

</style>
<body>
<div class="bx_head">
	
	<div class="fl">
		<a href="/jishubang/index.php"><img src="/jishubang/Public/images/logo.png" class="img_logo"></a>
	</div>
	<div class="fl">
		<a href="/jishubang/index.php" class="a_logo">技术帮</a>
	</div>
	<div class="fl">
		<a href="/jishubang/index.php/home/channel" class="a_channel">HTML</a>
		<a href="/jishubang/index.php/home/channel" class="a_channel">CSS</a>
		<a href="/jishubang/index.php/home/channel" class="a_channel">JavaScript</a>
		<a href="/jishubang/index.php/home/channel" class="a_channel">JQuery</a>
		<a href="/jishubang/index.php/home/channel" class="a_channel">Java</a>
		<a href="/jishubang/index.php/home/channel" class="a_channel">Spring</a>
		<a href="/jishubang/index.php/home/channel" class="a_channel">Struts2</a>
		<a href="/jishubang/index.php/home/channel" class="a_channel">Hibernate</a>
		<a href="/jishubang/index.php/home/channel" class="a_channel">SQL语言</a>
		<a href="/jishubang/index.php/home/channel" class="a_channel">MySQL</a>
		<a href="/jishubang/index.php/home/channel" class="a_channel">Oracle</a>
	</div>

</div>


<!-- 主区域 -->
<div class="bx_main">
	<div class="sy_slider">
		<div class="slider">
			<ul>
				<li><a href="http://www.baidu.com">
					<img src="/jishubang/Public/images/1.jpg" class="pic"></a></li>
				<li><a href="#"><img src="/jishubang/Public/images/2.jpg" class="pic"></a></li>
				<li><a href="#"><img src="/jishubang/Public/images/3.jpg" class="pic"></a></li>
			</ul>
		</div>
	</div>
	
	<ul class="sy_pics2">
		<li>
			<a href="#">
				<img src="/jishubang/Public/images/4.jpg" class="pic2">
				<div class="title">java基础理论</div>
			</a>
		</li>
		<li>
			<a href="#">
				<img src="/jishubang/Public/images/5.jpg" class="pic2">
				<div class="title">java基础理论</div>
			</a>
		</li>
		<li>
			<a href="#">
				<img src="/jishubang/Public/images/4.jpg" class="pic2">
				<div class="title">java基础理论</div>
			</a>
		</li>
		<li>
			<a href="#">
				<img src="/jishubang/Public/images/5.jpg" class="pic2">
				<div class="title">java基础理论</div>
			</a>
		</li>
		<li>
			<a href="#">
				<img src="/jishubang/Public/images/4.jpg" class="pic2">
				<div class="title">java基础理论</div>
			</a>
		</li>
		<li>
			<a href="#">
				<img src="/jishubang/Public/images/4.jpg" class="pic2">
				<div class="title">java基础理论</div>
			</a>
		</li>
	</ul>
	

	
	<div class="cl"></div>

</div>


<div class="bx_foot">
&copy;2016 jishubang.com 版权所有
</div>

	
</body>
</html>

<script type="text/javascript">

$(window).load(function(){
	var slider=$(".slider").unslider({ animation:'horizontal',pause:false, infinite:true,
	autoplay: true, delay: 4500 });
	data = slider.data('unslider');

	$(".slider").on("mouseenter",function(){
		data.stop();
	});
	$(".slider").on("mouseout",function(){
		data.start();
	});
	
});

</script>