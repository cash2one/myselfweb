<?php /*%%SmartyHeaderCode:28327554c1f4caa70c1-55052114%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '765fb0f76057bc0a2cc3c6f161d4e1d730294c5e' => 
    array (
      0 => 'F:/wamp/www/www/Admin/View\\Movie\\showlist.html',
      1 => 1431051915,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28327554c1f4caa70c1-55052114',
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
  'unifunc' => 'content_554c1f4ce62d2',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554c1f4ce62d2')) {function content_554c1f4ce62d2($_smarty_tpl) {?><!doctype html>
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
            <div class="crumb-list"><i class="icon-font"></i><a href=/www/index.php/Admin/Index/index>首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">电影管理</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                <form action="/www/index.php/Admin/Movie/m_find" method="post">
                    <table class="search-tab">
                        <tr>
                            <th width="120">选择地区:</th>
                            <td>									
                                <select name="area" id="">  
                                <option value=null>不限</option>                                    <option value=1>大陆</option>
                                                                        <option value=2>香港</option>
                                                                        <option value=3>台湾</option>
                                                                        <option value=13>美国</option>
                                                                        <option value=14>韩国</option>
                                                                    </select> 
                           </td>
                             <th width="120">选择分类:</th>
                            <td>
                                <select name="cate" id="">
                                <option value=null>不限</option>
                                                                    <option value=1>喜剧片</option>
                                                                        <option value=2>剧情片</option>
                                                                        <option value=3>动作片</option>
                                                                        <option value=6>战争片</option>
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
            <form name="myform" id="myform" method="post" action=/www/index.php/Admin/Movie/ldelmovie>
                <div class="result-title">
                    <div class="result-list">
                        <a href=/www/index.php/Admin/Movie/addmovie><i class="icon-font"></i>新增作品</a>
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
                                           </table>
                   <!--  <div class="list-page"> </div> -->
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html><?php }} ?>