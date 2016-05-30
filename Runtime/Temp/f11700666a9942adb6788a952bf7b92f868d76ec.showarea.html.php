<?php /*%%SmartyHeaderCode:12116554c1f4dd5ae60-23486418%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f11700666a9942adb6788a952bf7b92f868d76ec' => 
    array (
      0 => 'F:/wamp/www/www/Admin/View\\Area\\showarea.html',
      1 => 1431051916,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12116554c1f4dd5ae60-23486418',
  'variables' => 
  array (
    'arr' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_554c1f4e0d04a',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554c1f4e0d04a')) {function content_554c1f4e0d04a($_smarty_tpl) {?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="/public/Admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/public/Admin/css/main.css"/>
    <script type="text/javascript" src="/public/Admin/js/modernizr.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
               <li><a class="on" href=/www/index.php/Admin/Index/index>首页</a></li>
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
            <div class="crumb-list"><i class="icon-font"></i><a href=/www/index.php/Admin/Index/index>首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">地区管理</span></div>
        </div>
       
        <div class="result-wrap">
            <form name="myform" id="myform" method="post" action=/www/index.php/Admin/Area/ldelarea >
                <div class="result-title">
                    <div class="result-list">
                        <a href=/www/index.php/Admin/Area/addarea><i class="icon-font"></i>新增地区</a>
                        <input type="submit" value="批量删除"  style=background-color:transparent  border:0px     >
                       
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
                            
                            <th>ID</th>
                            <th>地区</th>
                           
                            <th>操作</th>
                        </tr>
                        <tr>
                            <td class="tc"><input name="id[]" value=1 type="checkbox" ></td>
                            <td>
                                <input name="ids[]" value=1 type="hidden">
                                1
                            </td>
                            <td>大陆</td>
                            
                           
                           
                            <td>
                                <a class="link-update" href=/www/index.php/Admin/Area/editarea/id/1>修改</a>
                                <a class="link-del" href=/www/index.php/Admin/Area/delarea/id/1>删除</a>
                            </td>
                        </tr>   <tr>
                            <td class="tc"><input name="id[]" value=2 type="checkbox" ></td>
                            <td>
                                <input name="ids[]" value=2 type="hidden">
                                2
                            </td>
                            <td>香港</td>
                            
                           
                           
                            <td>
                                <a class="link-update" href=/www/index.php/Admin/Area/editarea/id/2>修改</a>
                                <a class="link-del" href=/www/index.php/Admin/Area/delarea/id/2>删除</a>
                            </td>
                        </tr>   <tr>
                            <td class="tc"><input name="id[]" value=3 type="checkbox" ></td>
                            <td>
                                <input name="ids[]" value=3 type="hidden">
                                3
                            </td>
                            <td>台湾</td>
                            
                           
                           
                            <td>
                                <a class="link-update" href=/www/index.php/Admin/Area/editarea/id/3>修改</a>
                                <a class="link-del" href=/www/index.php/Admin/Area/delarea/id/3>删除</a>
                            </td>
                        </tr>   <tr>
                            <td class="tc"><input name="id[]" value=13 type="checkbox" ></td>
                            <td>
                                <input name="ids[]" value=13 type="hidden">
                                13
                            </td>
                            <td>美国</td>
                            
                           
                           
                            <td>
                                <a class="link-update" href=/www/index.php/Admin/Area/editarea/id/13>修改</a>
                                <a class="link-del" href=/www/index.php/Admin/Area/delarea/id/13>删除</a>
                            </td>
                        </tr>   <tr>
                            <td class="tc"><input name="id[]" value=14 type="checkbox" ></td>
                            <td>
                                <input name="ids[]" value=14 type="hidden">
                                14
                            </td>
                            <td>韩国</td>
                            
                           
                           
                            <td>
                                <a class="link-update" href=/www/index.php/Admin/Area/editarea/id/14>修改</a>
                                <a class="link-del" href=/www/index.php/Admin/Area/delarea/id/14>删除</a>
                            </td>
                        </tr>                        
                    </table>
                    <div class="list-page">&nbsp;&nbsp;共有<b>5</b>个记录&nbsp;&nbsp;&nbsp;&nbsp;每页显示<b>5</b>条，本页<b>1-5</b>条&nbsp;&nbsp;&nbsp;&nbsp;<b>1/1</b>页&nbsp;&nbsp;&nbsp;1&nbsp;&nbsp;&nbsp;<input type="text" onkeydown="javascript:if(event.keyCode==13){var page=(this.value>1)?1:this.value;location='/www/index.php/Admin/Area/showarea?&page='+page+''}" value="1" style="width:25px"><input type="button" value="GO" onclick="javascript:var page=(this.previousSibling.value>1)?1:this.previousSibling.value;location='/www/index.php/Admin/Area/showarea?&page='+page+''">&nbsp;&nbsp;</div>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html><?php }} ?>