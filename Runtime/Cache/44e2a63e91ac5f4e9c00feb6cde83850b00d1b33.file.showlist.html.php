<?php /* Smarty version Smarty-3.1.6, created on 2015-05-08 17:18:59
         compiled from "F:/wamp/www/localhost2/Admin/View\Movie\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:7685554c7f835efeb2-82922469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44e2a63e91ac5f4e9c00feb6cde83850b00d1b33' => 
    array (
      0 => 'F:/wamp/www/localhost2/Admin/View\\Movie\\showlist.html',
      1 => 1431054596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7685554c7f835efeb2-82922469',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'a1' => 0,
    'v' => 0,
    'a2' => 0,
    'res' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_554c7f839b053',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554c7f839b053')) {function content_554c7f839b053($_smarty_tpl) {?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="<?php echo @Admin_CSS;?>
common.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo @Admin_CSS;?>
main.css"/>
    <script type="text/javascript" src="<?php echo @Admin_JS;?>
modernizr.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href=<?php echo @__MODULE__;?>
/Index/index>首页</a></li>
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
            <div class="crumb-list"><i class="icon-font"></i><a href=<?php echo @__MODULE__;?>
/Index/index>首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">电影管理</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                <form action="<?php echo @__MODULE__;?>
/Movie/m_find" method="post">
                    <table class="search-tab">
                        <tr>
                            <th width="120">选择地区:</th>
                            <td>									
                                <select name="area" id="">  
                                <option value=null>不限</option><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['a1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                    <option value=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
><?php echo $_smarty_tpl->tpl_vars['v']->value['areaname'];?>
</option>
                                    <?php } ?>
                                </select> 
                           </td>
                             <th width="120">选择分类:</th>
                            <td>
                                <select name="cate" id="">
                                <option value=null>不限</option>
                                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['a2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                    <option value=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
><?php echo $_smarty_tpl->tpl_vars['v']->value['catename'];?>
</option>
                                    <?php } ?>
                                </select>
                            </td>
                            <th width="70">关键字:</th>
                            <td><input class="common-text" placeholder="关键字" name="name" value="" id="" type="text"></td>
                            <td><input class="btn btn-primary btn2"  value="查询" type="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post" action=<?php echo @__MODULE__;?>
/Movie/ldelmovie>
                <div class="result-title">
                    <div class="result-list">
                        <a href=<?php echo @__MODULE__;?>
/Movie/addmovie><i class="icon-font"></i>新增作品</a>
                        <input type="submit" value="批量删除"  style=background-color:transparent  border:0px     >
                        
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
                           
                            <th>ID</th>
                            <th>电影名称</th>
                            <th>地区</th>
                            <th>类别</th>
                            
                            <th>操作</th>
                        </tr>
                       <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['res']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                        <tr>
                            <td class="tc"><input name="id[]" value=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
 type="checkbox"></td>
                            <td>
                                <input name="ids[]" value=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
 type="hidden">
                                <?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>

                            </td>
                            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
                            <td title="movie"><a><?php echo $_smarty_tpl->tpl_vars['v']->value['areaname'];?>
</a>
                            </td>
                            
                            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['catename'];?>
</td>
                         
                            
                            <td>
                                <a class="link-update" href=<?php echo @__MODULE__;?>
/Movie/editmovie/id/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
>修改</a>
                                <a class="link-del" href=<?php echo @__MODULE__;?>
/Movie/delmovie/id/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
>删除</a>
                            </td>
                        </tr>
                      <?php } ?>
                    </table>
                   <!--  <div class="list-page"> <?php echo @$_smarty_tpl->tpl_vars['pagelist']->value;?>
</div> -->
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html><?php }} ?>