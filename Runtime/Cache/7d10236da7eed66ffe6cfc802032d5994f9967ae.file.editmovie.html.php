<?php /* Smarty version Smarty-3.1.6, created on 2015-05-08 20:20:32
         compiled from "F:/wamp/www/localhost_movie_final/Admin/View\Movie\editmovie.html" */ ?>
<?php /*%%SmartyHeaderCode:403554caa107d6406-43170312%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d10236da7eed66ffe6cfc802032d5994f9967ae' => 
    array (
      0 => 'F:/wamp/www/localhost_movie_final/Admin/View\\Movie\\editmovie.html',
      1 => 1431054596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '403554caa107d6406-43170312',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'arr' => 0,
    'a1' => 0,
    'v' => 0,
    'a2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_554caa10a97ba',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554caa10a97ba')) {function content_554caa10a97ba($_smarty_tpl) {?><!doctype html>
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
/Movie/showlist>电影管理</a><span
						class="crumb-step">&gt;</span><span>新增电影</span>
				</div>
			</div>
			<div class="result-wrap">
				<div class="result-content">
					<form action=<?php echo @__SELF__;?>
 method="post" id="myform"
						name="myform" enctype="multipart/form-data">
						<table class="insert-tab" width="100%">
							<tbody><input type="hidden" name="id" value=<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
 />
								<tr>
									<th><i class="require-red">*</i>电影名称：</th>
									<td><input class="common-text required" id="title"
										name="name" size="50" value=<?php echo $_smarty_tpl->tpl_vars['arr']->value['name'];?>
 type="text"></td>
								</tr>
								 <tr>
                                <th><i class="require-red">*</i>主演名称：</th>
                                <td>
                                    <input class="common-text required" id="title" name="actor" size="50" value=<?php echo $_smarty_tpl->tpl_vars['arr']->value['actor'];?>
 type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>下载地址：</th>
                                <td>
                                    <input class="common-text required" id="title" name="download_url" size="50" value=<?php echo $_smarty_tpl->tpl_vars['arr']->value['download_url'];?>
 type="text">
                                </td>
                            </tr>
                             <tr>
                                <th><i class="require-red">*</i>下载密码：</th>
                                <td>
                                    <input class="common-text required" id="title" name="download_pwd" size="50" value=<?php echo $_smarty_tpl->tpl_vars['arr']->value['download_pwd'];?>
 type="text">
                                </td>
                            </tr>
								</table><table class="insert-tab" width="100%">
								<tr>
									<th width=16%<?php ?>><i class="require-red" >*</i>电影简介：</th>
									<td width=20%<?php ?>>
									<textarea rows="8" cols="63" name='remark' ><?php echo $_smarty_tpl->tpl_vars['arr']->value['remark'];?>
</textarea>
									</td>
									<th><i class="require-red">*</i>剧照：</th>
									<td>
									<img src=<?php echo @SITE_URL;?>
<?php echo $_smarty_tpl->tpl_vars['arr']->value['sf_pic'];?>
   />
									</td>
								</tr>
						</table>
						<table class="insert-tab" width="100%">
							<tr>
								<th width="164">修改地区:</th>
								<td><select name="area" id=""> <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['a1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
										<option value=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
><?php echo $_smarty_tpl->tpl_vars['v']->value['areaname'];?>
</option> <?php } ?>
								</select></td>
							</tr>
							<tr>
								<th width="50">修改分类:</th>
								<td><select name="kind" id=""> <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['a2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
										<option value=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
><?php echo $_smarty_tpl->tpl_vars['v']->value['catename'];?>
</option> <?php } ?>
								</select></td>
							</tr>
							<tr>
								<td>剧照</td>
								<td><input type="file" name="f_pic" /></td>
							</tr>
							
							<tr>

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