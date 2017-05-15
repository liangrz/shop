<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		
		<title>博客后台管理系统</title>
		
		<!--                       CSS                       -->
	  
		<!-- Reset Stylesheet -->
		<link rel="stylesheet" href="Public/resources/css/reset.css" type="text/css" media="screen" />
	  
		<!-- Main Stylesheet -->
		<link rel="stylesheet" href="Public/resources/css/style.css" type="text/css" media="screen" />
		
		<!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
		<link rel="stylesheet" href="Public/resources/css/invalid.css" type="text/css" media="screen" />	
		
		<!-- Colour Schemes
	  
		Default colour scheme is green. Uncomment prefered stylesheet to use it.
		
		<link rel="stylesheet" href="Public/resources/css/blue.css" type="text/css" media="screen" />
		
		<link rel="stylesheet" href="Public/resources/css/red.css" type="text/css" media="screen" />  
	 
		-->
		
		<!-- Internet Explorer Fixes Stylesheet -->
		
		<!--[if lte IE 7]>
			<link rel="stylesheet" href="Public/resources/css/ie.css" type="text/css" media="screen" />
		<![endif]-->
		
		<!--                       Javascripts                       -->
  
		<!-- jQuery -->
		<script type="text/javascript" src="Public/resources/scripts/jquery-1.3.2.min.js"></script>
		
		<!-- jQuery Configuration -->
		<script type="text/javascript" src="Public/resources/scripts/simpla.jquery.configuration.js"></script>
		
		<!-- jQuery WYSIWYG Plugin -->
		<script type="text/javascript" src="Public/resources/scripts/jquery.wysiwyg.js"></script>
		
		<!-- jQuery Datepicker Plugin -->

		<!--[if IE]><script type="text/javascript" src="Public/resources/scripts/jquery.bgiframe.js"></script><![endif]-->

		
		<!-- Internet Explorer .png-fix -->
		
		<!--[if IE 6]>
			<script type="text/javascript" src="Public/resources/scripts/DD_belatedPNG_0.0.7a.js"></script>
			<script type="text/javascript">
				DD_belatedPNG.fix('.png_bg, img, li');
			</script>
		<![endif]-->
		
	</head>
  
	<body><div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->
		
		<div id="sidebar"><div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->
			
			<h1 id="sidebar-title"><a href="#">博客后台管理</a></h1>
		  
			<!-- Logo (221px wide) -->
			<a href="#"><img id="logo" src="Public/resources/images/logo.png" alt="Simpla Admin logo" /></a>
		  
			<!-- Sidebar Profile links -->
			<div id="profile-links">
				欢迎回来, <a href="#" title="Edit your profile">John Doe</a><br />
				<br />
				<a href="#" title="View the Site">查看网站</a> | <a href="#" title="登出">登出</a>
			</div>        
			
			<ul id="main-nav">  <!-- Accordion Menu -->
				
				<li>
					<a href="?m=Admin&c=Index&a=index" class="nav-top-item no-submenu current"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
						首页面板
					</a>       
				</li>
				
				<li>
					<a href="#" class="nav-top-item">
						商品管理
					</a>
					<!-- 列表功能，不过我觉得不需要-shasrm	-->
					<ul>
						<li><a href="?m=Admin&c=Index&goto=goods">商品查询</a></li>
						<li><a href="?m=Admin&c=Index&goto=goodsAdd">添加商品</a></li>
					</ul>
				</li>
				
				<li> 
					<a href="#" class="nav-top-item"> <!-- Add the class "current" to current menu item -->
						订单管理
					</a>
					<ul>
						<li><a href="?m=Admin&c=Index&goto=order">订单查询</a></li>
						<li><a href="?m=Admin&c=Index&goto=orderAdd">添加订单</a></li>
						<!-- Add class "current" to sub menu items also --> 
					</ul>
				</li>
				
				<li>
					<a href="#" class="nav-top-item">
						商品类型管理
					</a>
					<ul>
						<li><a href="?m=Admin&c=Index&goto=type">管理商品类别</a></li>
						<li><a href="?m=Admin&c=Index&goto=typeAdd">添加新的类别</a></li>
					</ul>
				</li>
				
				<li>
					<a href="?m=Admin&c=Index&a=user" class="nav-top-item">
						用户管理
					</a>
					<ul>
						<li><a href="?m=Admin&c=Index&goto=user">管理用户</a></li>
					</ul>
				</li>
				
				
				      
				
			</ul> <!-- End #main-nav -->
			
			
			
		</div></div> <!-- End #sidebar -->
		
		<div id="main-content"> <!-- Main Content Section with everything -->