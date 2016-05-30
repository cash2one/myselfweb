<?php /*%%SmartyHeaderCode:6081554c1f47e5bb59-25860453%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd242481a9699fede34aeb98647cca6fd589c499a' => 
    array (
      0 => 'F:/wamp/www/www/Admin/View\\Index\\index.html',
      1 => 1431051916,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6081554c1f47e5bb59-25860453',
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_554c1f480c485',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554c1f480c485')) {function content_554c1f480c485($_smarty_tpl) {?><!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>后台管理</title>
<link rel="stylesheet" type="text/css"
	href="/public/Admin/css/common.css" />
<link rel="stylesheet" type="text/css"
	href="/public/Admin/css/main.css" />
<script type="text/javascript"
	src="/public/Admin/js/modernizr.min.js"></script>
</head>
<body>
	<div class="topbar-wrap white">
		<div class="topbar-inner clearfix">
			<div class="topbar-logo-wrap clearfix">
				<h1 class="topbar-logo none">
					<a href="index.html" class="navbar-brand">后台管理</a>
				</h1>
				<ul class="navbar-list clearfix">
					<li><a class="on" href="/www/index.php/Admin/Index/index.html">首页</a></li>
					<li><a href=/www/index.php/Home/Index/index target="_blank">网站首页</a></li>
				</ul>
			</div>
			<div class="top-info-wrap">
				<ul class="top-info-list clearfix">
					<li><a href="#">yzc</a></li>
					<li><a href=/www/index.php/Admin/Adminuser/editadminuser/id/1>修改密码</a></li>
					<li><a href="/www/index.php/Admin/Manager/loginout">退出</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="container clearfix">
		<div class="sidebar-wrap">
			<div class="sidebar-title">
				<h1>菜单</h1>
			</div>
			<div class="sidebar-content">
				<ul class="sidebar-list">
					<li><a href="#"><i class="icon-font">&#xe003;</i>常用操作</a>
						<ul class="sub-menu">
							<li><a href=/www/index.php/Admin/Cate/showcate><i class="icon-font">&#xe008;</i>分类管理</a></li>
							<li><a href=/www/index.php/Admin/Movie/showlist><i class="icon-font">&#xe005;</i>电影管理</a></li>
							<li><a href=/www/index.php/Admin/Area/showarea><i class="icon-font">&#xe006;</i>地区管理</a></li>
							<li><a href=/www/index.php/Admin/User/showuser><i class="icon-font">&#xe004;</i>用户管理</a></li>
							<li><a href=/www/index.php/Admin/Adminuser/showadminuser><i class="icon-font">&#xe012;</i>管理员用户管理</a></li>
						</ul></li>
					
				</ul>
			</div>
		</div>
		<!--/sidebar-->
		<div class="main-wrap">
			<div class="crumb-wrap">
				<div class="crumb-list">
					<i class="icon-font">&#xe06b;</i><span>爱电影!</span>
				</div>
			</div>
			
				
			</div>
			
				
			
		
		
		<!--/main-->
	</div>
</body>
</html><?php }} ?>