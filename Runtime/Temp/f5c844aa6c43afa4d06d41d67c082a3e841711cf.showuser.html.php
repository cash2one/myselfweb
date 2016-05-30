<?php /*%%SmartyHeaderCode:28413554c1f4ea89465-31370579%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5c844aa6c43afa4d06d41d67c082a3e841711cf' => 
    array (
      0 => 'F:/wamp/www/www/Admin/View\\User\\showuser.html',
      1 => 1431051916,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28413554c1f4ea89465-31370579',
  'variables' => 
  array (
    'arr' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_554c1f4ed9c9e',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554c1f4ed9c9e')) {function content_554c1f4ed9c9e($_smarty_tpl) {?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="/public/Admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/public/Admin/css/main.css"/>
    <script type="text/javascript" src="/public/Admin/js/modernizr.min.js"></script>
  

</script> 
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
							<li><a href=/www/index.php/Admin/User/showcate><i class="icon-font">&#xe008;</i>分类管理</a></li>
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
            <div class="crumb-list"><i class="icon-font"></i><a href=/www/index.php/Admin/Index/index>首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">用户管理</span></div>
        </div>
       
        <div class="result-wrap">
            <form name="myform" id="myform" method="post" action=/www/index.php/Admin/User/ldeluser >
                <div class="result-title">
                    <div class="result-list">
                        <a href=/www/index.php/Admin/User/adduser><i class="icon-font"></i>新增用户</a>
                         <input type="submit" value="批量删除"  style=background-color:transparent  border:0px     >
                       
						</div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
								<th class="tc" width="5%">
									<input type="checkbox" class="allChoose" group="id" /></th>

								<th>ID</th>
                            <th>用户名</th>
                            <th>密码</th>
                            <th>操作</th>
                        </tr>
                                                <tr>
                            <td class="tc"><input name="id[]" value=1 type="checkbox" ></td>
                            
                            <td>1</td>
                            <td>admin</td>
                           <td>admin</td>
                            <td>
                                <a class="link-update" href=/www/index.php/Admin/User/edituser/id/1>修改</a>
                                
                                <a class="link-del" href=/www/index.php/Admin/User/deluser/id/1>删除</a>
                            </td>
                        </tr>
                         
                                               <tr>
                            <td class="tc"><input name="id[]" value=2 type="checkbox" ></td>
                            
                            <td>2</td>
                            <td>yzc</td>
                           <td>yzc</td>
                            <td>
                                <a class="link-update" href=/www/index.php/Admin/User/edituser/id/2>修改</a>
                                
                                <a class="link-del" href=/www/index.php/Admin/User/deluser/id/2>删除</a>
                            </td>
                        </tr>
                         
                                               <tr>
                            <td class="tc"><input name="id[]" value=3 type="checkbox" ></td>
                            
                            <td>3</td>
                            <td>administra</td>
                           <td>administra</td>
                            <td>
                                <a class="link-update" href=/www/index.php/Admin/User/edituser/id/3>修改</a>
                                
                                <a class="link-del" href=/www/index.php/Admin/User/deluser/id/3>删除</a>
                            </td>
                        </tr>
                         
                                           </table>
                    <div class="list-page"> &nbsp;&nbsp;共有<b>3</b>个记录&nbsp;&nbsp;&nbsp;&nbsp;每页显示<b>3</b>条，本页<b>1-3</b>条&nbsp;&nbsp;&nbsp;&nbsp;<b>1/1</b>页&nbsp;&nbsp;&nbsp;1&nbsp;&nbsp;&nbsp;<input type="text" onkeydown="javascript:if(event.keyCode==13){var page=(this.value>1)?1:this.value;location='/www/index.php/Admin/User/showuser?&page='+page+''}" value="1" style="width:25px"><input type="button" value="GO" onclick="javascript:var page=(this.previousSibling.value>1)?1:this.previousSibling.value;location='/www/index.php/Admin/User/showuser?&page='+page+''">&nbsp;&nbsp;</div>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html><?php }} ?>