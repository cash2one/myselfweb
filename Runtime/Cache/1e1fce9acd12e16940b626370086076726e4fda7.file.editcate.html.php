<?php /* Smarty version Smarty-3.1.6, created on 2015-11-03 12:15:08
         compiled from "C:/wamp/www/mymovie/Admin/View\Cate\editcate.html" */ ?>
<?php /*%%SmartyHeaderCode:5202563831ce0127b4-48642319%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e1fce9acd12e16940b626370086076726e4fda7' => 
    array (
      0 => 'C:/wamp/www/mymovie/Admin/View\\Cate\\editcate.html',
      1 => 1446524072,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5202563831ce0127b4-48642319',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_563831ce1f9fb',
  'variables' => 
  array (
    'arr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563831ce1f9fb')) {function content_563831ce1f9fb($_smarty_tpl) {?><!doctype html>
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
					<li><a class="on" href=<?php echo @__MODULE__;?>
/Index/index>首页</a></li>
					<li><a href=<?php echo @__APP__;?>
/Home/Index/index
						target="_blank">网站首页</a></li>
				</ul>
			</div>
			<div class="top-info-wrap">
				<ul class="top-info-list clearfix">
					<li><a href="#"><?php echo $_SESSION['mg_username'];?>
</a></li>
					<li><a
						href=<?php echo @__APP__;?>
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
/Cate/showcate><i
									class="icon-font">&#xe008;</i>分类管理</a></li>
							<li><a href=<?php echo @__MODULE__;?>
/Movie/showlist><i
									class="icon-font">&#xe005;</i>电影管理</a></li>
							<li><a href=<?php echo @__MODULE__;?>
/Area/showarea><i
									class="icon-font">&#xe006;</i>地区管理</a></li>
							<li><a href=<?php echo @__MODULE__;?>
/User/showuser><i
									class="icon-font">&#xe004;</i>用户管理</a></li>
							<li><a
								href=<?php echo @__MODULE__;?>
/Adminuser/showadminuser><i
									class="icon-font">&#xe012;</i>管理员用户管理</a></li>
						</ul></li>

				</ul>
			</div>
		</div>
		<!--/sidebar-->
		<div class="main-wrap">

			<div class="crumb-wrap">
				<div class="crumb-list">
					<i class="icon-font"></i><a href=<li><a class="on"
							href=<?php echo @__MODULE__;?>
/Index/index>首页</a></li></a><span
						class="crumb-step">&gt;</span><a class="crumb-name"
						href=<?php echo @__MODULE__;?>
/Cate/showcate>分类管理</a><span class="crumb-step">&gt;</span><span>新增分类</span>
				</div>
			</div>
			<div class="result-wrap">
				<div class="result-content">
					<form action=<?php echo @__MODULE__;?>
/Cate/editcate method="post"
						id="myform" name="myform" enctype="multipart/form-data">
						<table class="insert-tab" width="100%">
							<tbody>
								<tr>
									<th><i class="require-red">*</i>类名：</th>
									<td><input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
" /> <input
										class="common-text required" id="title" name="catename"
										size="50" value=<?php echo $_smarty_tpl->tpl_vars['arr']->value['catename'];?>
 type="text"></td>
								</tr>

								<tr>
									<th></th>
									<td><input class="btn btn-primary btn6 mr10" value="提交"
										type="submit"> <input class="btn btn6"
										onclick="history.go(-1)" value="返回" type="button"></td>
								</tr>
							</tbody>
						</table>
					</form>
				</div>
			</div>

		</div>
		<!--/main-->
	</div>
</body>
</html><?php }} ?>