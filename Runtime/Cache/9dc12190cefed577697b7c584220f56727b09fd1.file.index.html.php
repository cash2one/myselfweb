<?php /* Smarty version Smarty-3.1.6, created on 2015-11-03 11:49:02
         compiled from "C:/wamp/www/mymovie/Admin/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:628556382eaea048d6-61106108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9dc12190cefed577697b7c584220f56727b09fd1' => 
    array (
      0 => 'C:/wamp/www/mymovie/Admin/View\\Index\\index.html',
      1 => 1431054598,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '628556382eaea048d6-61106108',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56382eaeb722e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56382eaeb722e')) {function content_56382eaeb722e($_smarty_tpl) {?><!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>后台管理</title>
<link rel="stylesheet" type="text/css"
	href="<?php echo @Admin_CSS;?>
common.css" />
<link rel="stylesheet" type="text/css"
	href="<?php echo @Admin_CSS;?>
main.css" />
<script type="text/javascript"
	src="<?php echo @Admin_JS;?>
modernizr.min.js"></script>
</head>
<body>
	<div class="topbar-wrap white">
		<div class="topbar-inner clearfix">
			<div class="topbar-logo-wrap clearfix">
				<h1 class="topbar-logo none">
					<a href="index.html" class="navbar-brand">后台管理</a>
				</h1>
				<ul class="navbar-list clearfix">
					<li><a class="on" href="<?php echo @__SELF__;?>
">首页</a></li>
					<li><a href=<?php echo @__APP__;?>
/Home/Index/index target="_blank">网站首页</a></li>
				</ul>
			</div>
			<div class="top-info-wrap">
				<ul class="top-info-list clearfix">
					<li><a href="#"><?php echo $_SESSION['mg_username'];?>
</a></li>
					<li><a href=<?php echo @__APP__;?>
/Admin/Adminuser/editadminuser/id/<?php echo $_SESSION['mg_id'];?>
>修改密码</a></li>
					<li><a href="<?php echo @__MODULE__;?>
/Manager/loginout">退出</a></li>
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
							<li><a href=<?php echo @__MODULE__;?>
/Cate/showcate><i class="icon-font">&#xe008;</i>分类管理</a></li>
							<li><a href=<?php echo @__MODULE__;?>
/Movie/showlist><i class="icon-font">&#xe005;</i>电影管理</a></li>
							<li><a href=<?php echo @__MODULE__;?>
/Area/showarea><i class="icon-font">&#xe006;</i>地区管理</a></li>
							<li><a href=<?php echo @__MODULE__;?>
/User/showuser><i class="icon-font">&#xe004;</i>用户管理</a></li>
							<li><a href=<?php echo @__MODULE__;?>
/Adminuser/showadminuser><i class="icon-font">&#xe012;</i>管理员用户管理</a></li>
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