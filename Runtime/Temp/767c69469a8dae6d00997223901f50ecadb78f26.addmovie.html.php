<?php /*%%SmartyHeaderCode:27840554c1f7d0201b7-18461658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '767c69469a8dae6d00997223901f50ecadb78f26' => 
    array (
      0 => 'F:/wamp/www/www/Admin/View\\Movie\\addmovie.html',
      1 => 1431051915,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27840554c1f7d0201b7-18461658',
  'variables' => 
  array (
    'arr' => 0,
    'a1' => 0,
    'v' => 0,
    'a2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_554c1f7d2ec10',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554c1f7d2ec10')) {function content_554c1f7d2ec10($_smarty_tpl) {?><!doctype html>
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
            <div class="crumb-list"><i class="icon-font"></i><a href=<li><a class="on" href=/www/index.php/Admin/Index/index>首页</a></li></a><span class="crumb-step">&gt;</span><a class="crumb-name" href=/www/index.php/Admin/Movie/showlist>电影管理</a><span class="crumb-step">&gt;</span><span>新增电影</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action=/www/index.php/Admin/Movie/addmovie method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                                <th><i class="require-red">*</i>电影名称：</th>
                                <td>
                                    <input class="common-text required" id="title" name="name" size="50" value="" type="text">
                                </td>
                            </tr>
                              <tr>
                                <th><i class="require-red">*</i>主演名称：</th>
                                <td>
                                    <input class="common-text required" id="title" name="actor" size="50" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>下载地址：</th>
                                <td>
                                    <input class="common-text required" id="title" name="download_url" size="50" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>下载密码：</th>
                                <td>
                                    <input class="common-text required" id="title" name="download_pwd" size="50" value="" type="text">
                                </td>
                            </tr>
                            <tr>
									<th width=5<?php echo '%>'; ?><i class="require-red" >*</i>电影简介：</th>
									<td width=20<?php echo '%>'; ?>
									<textarea rows="8" cols="63" name='remark' ></textarea>
									</td>
									
								</tr>
                            </table>
                            <table class="insert-tab" width="100%">
                            <tr>
                            <th width="164">选择地区:</th>
                            <td >									
                                <select name="area" id="">  
                                                                    <option value=1>大陆</option>
                                                                        <option value=2>香港</option>
                                                                        <option value=3>台湾</option>
                                                                        <option value=13>美国</option>
                                                                        <option value=14>韩国</option>
                                                                    </select> 
                           </td>
                           </tr><tr>
                             <th width="50">选择分类:</th>
                            <td>
                                <select name="kind" id="">
                                
                                                                    <option value=1>喜剧片</option>
                                                                        <option value=2>剧情片</option>
                                                                        <option value=3>动作片</option>
                                                                        <option value=6>战争片</option>
                                                                    </select>
                            </td>
                            </tr>
                            <tr>
                    <td>剧照</td>
                    <td><input type="file" name="f_pic" /></td>
                </tr>
                        <tr>
                    <td>集锦</td>
                    <td><input type="file" name="big_pic" /></td>
                </tr>
                            <tr>
                                
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                                </td>
                            </tr>
                        </tbody></table>
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
</div>
</body>
</html><?php }} ?>