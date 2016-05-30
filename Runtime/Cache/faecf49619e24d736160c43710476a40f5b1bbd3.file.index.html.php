<?php /* Smarty version Smarty-3.1.6, created on 2015-05-06 17:51:10
         compiled from "F:/wamp/www/movie/i_movie/Home/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:89055544a5d8223792-08149381%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'faecf49619e24d736160c43710476a40f5b1bbd3' => 
    array (
      0 => 'F:/wamp/www/movie/i_movie/Home/View\\Index\\index.html',
      1 => 1430905814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89055544a5d8223792-08149381',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5544a5da60499',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5544a5da60499')) {function content_5544a5da60499($_smarty_tpl) {?><html lang="en"><head>
	<meta charset="UTF-8">
	<title>找电影</title>
	<link href="http://localhost/movie/i_movie/public/Home/css/common.css" rel="stylesheet">
	<script src="http://localhost/movie/i_movie/public/Home/js/jquery.min.js"></script>
</head>
<body>
	<div id="wrapper">
		<div style="background-image: url('http://localhost/movie/i_movie/public/Home/img/65.jpg');" class="skinBg"></div>
		<header id="header">
			<!-- <div class="weather fl">
				<span class="cityW">
					<span>苏州：</span>
					<span>
						<span class="weatherIcon wI1"></span>
						<span>35 ~ 24℃</span>
					</span>
				</span>
				<span class="sp">|</span>
				<span class="pollution">
					<span>空气质量：83</span>
					<span class="polutionLevel">良</span>
				</span>
				<div class="cityWeather">
					
				</div>
			</div> -->
			<nav class="headNavs fr tr">
				<a href="#"><span class="s-icon s-icon-treasure"></span><span></span></a>
				<a href="#"><span class="s-icon s-icon-skin"></span><span></span></a>
				<a href="#"><span class="s-icon s-icon-msg"></span><span></span></a>
				<a><span class="s-icon s-icon-line"></span></a>
				<a href="#"><span></span></a>
				<a class="uname" href="javascript:;"><span>尊敬的: <?php echo $_SESSION['fusername'];?>
</span><span class="user-arrow"></span></a>
				<div class="topMenus dn">
					<span class="arrowTop"></span>
					<a href="#">个人中心</a>
					<a href="#">帐号设置</a>
					<a href="#">搜索设置</a>
					<a href="#">意见反馈</a>
					<a href="#">首页教程</a>
					<a href="#">安全退出</a>
				</div>
			</nav>
		</header>
		<div class="content tc">
			<p class="logo"><img width="270" height="129" alt="logo" src="http://localhost/movie/i_movie/public/Home/img/logo_white.png"></p>
			 <nav class="mainNavs">
				<a href="#"></a>
				<a href="#"></a>
				<a href="#"></a>
				<a href="#"></a>
				<a href="#"></a>
				<a href="#"></a>
				<a href="#"></a>
				<a href="#"></a>
				<a href="#"></a>
				<a href="#"></a>
				<a href="#"></a>
			</nav> 
			<div class="searchBox">
				<form action=<?php echo @__MODULE__;?>
/Index/search method="post">
					<input type="text" autocomplete="off" maxlength="100" name="movie_name" class="searchIpt f14">
					<input type="submit" value="寻找" class="btn cp">
				</form>
			</div>
			
		</div>
		
	</div>
	<script src="http://localhost/movie/i_movie/public/Home/js/jquery.min.js"></script>
	<script src="http://localhost/movie/i_movie/public/Home/js/jquery.autocomplete.min.js"></script>
	
<div style="text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';">


</div>

<div style="position: fixed;bottom:0;right:0;font-size:14px;width:100%;z-index: 999999;color: #000;text-align:left;font-family:'微软雅黑';" id="think_page_trace">
<div style="display: none;background:white;margin:0;height: 250px;" id="think_page_trace_tab">
<div style="height:30px;padding: 6px 12px 0;border-bottom:1px solid #ececec;border-top:1px solid #ececec;font-size:16px" id="think_page_trace_tab_tit">
	    <span style="color: rgb(0, 0, 0); padding-right: 12px; height: 30px; line-height: 30px; display: inline-block; margin-right: 3px; cursor: pointer; font-weight: 700;">基本</span>
        <span style="color: rgb(153, 153, 153); padding-right: 12px; height: 30px; line-height: 30px; display: inline-block; margin-right: 3px; cursor: pointer; font-weight: 700;">文件</span>
        <span style="color: rgb(153, 153, 153); padding-right: 12px; height: 30px; line-height: 30px; display: inline-block; margin-right: 3px; cursor: pointer; font-weight: 700;">流程</span>
        <span style="color: rgb(153, 153, 153); padding-right: 12px; height: 30px; line-height: 30px; display: inline-block; margin-right: 3px; cursor: pointer; font-weight: 700;">错误</span>
        <span style="color: rgb(153, 153, 153); padding-right: 12px; height: 30px; line-height: 30px; display: inline-block; margin-right: 3px; cursor: pointer; font-weight: 700;">SQL</span>
        <span style="color: rgb(153, 153, 153); padding-right: 12px; height: 30px; line-height: 30px; display: inline-block; margin-right: 3px; cursor: pointer; font-weight: 700;">调试</span>
    </div>
<div style="overflow:auto;height:212px;padding: 0; line-height: 24px" id="think_page_trace_tab_cont">
		    <div style="display: block;">
    <ol style="padding: 0; margin:0">
	<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">请求信息 : 2015-05-03 09:37:47 HTTP/1.1 GET : /movie/i_movie/index.php/Home/Index/index.html</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">运行时间 : 0.0952s ( Load:0.0121s Init:0.0024s Exec:0.0208s Template:0.0598s )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">吞吐率 : 10.50req/s</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">内存开销 : 2,248.73 kb</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">查询信息 : 0 queries 0 writes </li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">文件加载 : 34</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">缓存信息 : 0 gets 0 writes </li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">配置加载 : 126</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">会话信息 : SESSION_ID=8o9l46gps3fclm82ui7m0kmd70</li>    </ol>
    </div>
        <div style="display:none;">
    <ol style="padding: 0; margin:0">
	<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">F:\wamp\www\movie\i_movie\index.php ( 0.44 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">F:\wamp\www\movie\ThinkPHP\ThinkPHP.php ( 5.77 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">F:\wamp\www\movie\ThinkPHP\Library\Think\Think.class.php ( 11.60 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">F:\wamp\www\movie\ThinkPHP\Library\Think\Storage.class.php ( 1.60 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">F:\wamp\www\movie\ThinkPHP\Library\Think\Storage\Driver\File.class.php ( 3.56 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">F:\wamp\www\movie\ThinkPHP\Conf\Mode\common.php ( 3.04 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">F:\wamp\www\movie\ThinkPHP\Common\functions.php ( 43.47 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">F:\wamp\www\movie\ThinkPHP\Library\Think\Hook.class.php ( 4.19 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">F:\wamp\www\movie\ThinkPHP\Library\Think\App.class.php ( 12.63 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">F:\wamp\www\movie\ThinkPHP\Library\Think\Dispatcher.class.php ( 14.48 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">F:\wamp\www\movie\ThinkPHP\Library\Think\Route.class.php ( 12.80 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">F:\wamp\www\movie\ThinkPHP\Library\Think\Controller.class.php ( 10.85 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">F:\wamp\www\movie\ThinkPHP\Library\Think\View.class.php ( 7.44 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">F:\wamp\www\movie\ThinkPHP\Library\Think\Behavior.class.php ( 1.62 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">F:\wamp\www\movie\ThinkPHP\Library\Behavior\ReadHtmlCacheBehavior.class.php ( 5.84 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">F:\wamp\www\movie\ThinkPHP\Library\Behavior\ShowPageTraceBehavior.class.php ( 5.47 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">F:\wamp\www\movie\ThinkPHP\Library\Behavior\ParseTemplateBehavior.class.php ( 6.01 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">F:\wamp\www\movie\ThinkPHP\Library\Behavior\ContentReplaceBehavior.class.php ( 2.09 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">F:\wamp\www\movie\ThinkPHP\Library\Behavior\WriteHtmlCacheBehavior.class.php ( 1.05 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">F:\wamp\www\movie\ThinkPHP\Conf\convention.php ( 9.08 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">F:\wamp\www\movie\i_movie\Common\Conf\config.php ( 0.89 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">F:\wamp\www\movie\ThinkPHP\Lang\zh-cn.php ( 2.58 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">F:\wamp\www\movie\ThinkPHP\Conf\debug.php ( 1.53 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">F:\wamp\www\movie\i_movie\Home\Controller\IndexController.class.php ( 0.21 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">F:\wamp\www\movie\ThinkPHP\Library\Think\Template\Driver\Smarty.class.php ( 1.55 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">F:\wamp\www\movie\ThinkPHP\Library\Vendor\Smarty\Smarty.class.php ( 43.88 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">F:\wamp\www\movie\ThinkPHP\Library\Vendor\Smarty\sysplugins\smarty_internal_data.php ( 17.24 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">F:\wamp\www\movie\ThinkPHP\Library\Vendor\Smarty\sysplugins\smarty_internal_templatebase.php ( 31.94 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">F:\wamp\www\movie\ThinkPHP\Library\Vendor\Smarty\sysplugins\smarty_internal_template.php ( 27.54 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">F:\wamp\www\movie\ThinkPHP\Library\Vendor\Smarty\sysplugins\smarty_resource.php ( 27.47 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">F:\wamp\www\movie\ThinkPHP\Library\Vendor\Smarty\sysplugins\smarty_internal_resource_file.php ( 2.76 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">F:\wamp\www\movie\ThinkPHP\Library\Vendor\Smarty\sysplugins\smarty_cacheresource.php ( 11.48 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">F:\wamp\www\movie\ThinkPHP\Library\Vendor\Smarty\sysplugins\smarty_internal_cacheresource_file.php ( 10.34 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">F:\wamp\www\movie\i_movie\Runtime\Cache\faecf49619e24d736160c43710476a40f5b1bbd3.file.index.html.php ( 12.50 KB )</li>    </ol>
    </div>
        <div style="display:none;">
    <ol style="padding: 0; margin:0">
	<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ app_init ] --START--</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ app_init ] --END-- [ RunTime:0.000069s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ path_info ] --START--</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ path_info ] --END-- [ RunTime:0.000083s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ app_begin ] --START--</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">Run Behavior\ReadHtmlCache [ RunTime:0.000187s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ app_begin ] --END-- [ RunTime:0.000349s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ action_begin ] --START--</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ action_begin ] --END-- [ RunTime:0.000116s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ view_begin ] --START--</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ view_begin ] --END-- [ RunTime:0.000074s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ view_parse ] --START--</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">Run Behavior\ParseTemplate [ RunTime:0.056757s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ view_parse ] --END-- [ RunTime:0.056952s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ view_filter ] --START--</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">Run Behavior\WriteHtmlCache [ RunTime:0.000053s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ view_filter ] --END-- [ RunTime:0.000202s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ view_end ] --START--</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ view_end ] --END-- [ RunTime:0.000087s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ app_end ] --START--</li>    </ol>
    </div>
        <div style="display:none;">
    <ol style="padding: 0; margin:0">
	    </ol>
    </div>
        <div style="display:none;">
    <ol style="padding: 0; margin:0">
	    </ol>
    </div>
        <div style="display:none;">
    <ol style="padding: 0; margin:0">
	    </ol>
    </div>
    </div>
</div>
<div style="display:none;text-align:right;height:15px;position:absolute;top:10px;right:12px;cursor: pointer;" id="think_page_trace_close"><img src="data:image/gif;base64,R0lGODlhDwAPAJEAAAAAAAMDA////wAAACH/C1hNUCBEYXRhWE1QPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS4wLWMwNjAgNjEuMTM0Nzc3LCAyMDEwLzAyLzEyLTE3OjMyOjAwICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M1IFdpbmRvd3MiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MUQxMjc1MUJCQUJDMTFFMTk0OUVGRjc3QzU4RURFNkEiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MUQxMjc1MUNCQUJDMTFFMTk0OUVGRjc3QzU4RURFNkEiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDoxRDEyNzUxOUJBQkMxMUUxOTQ5RUZGNzdDNThFREU2QSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDoxRDEyNzUxQUJBQkMxMUUxOTQ5RUZGNzdDNThFREU2QSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PgH//v38+/r5+Pf29fTz8vHw7+7t7Ovq6ejn5uXk4+Lh4N/e3dzb2tnY19bV1NPS0dDPzs3My8rJyMfGxcTDwsHAv769vLu6ubi3trW0s7KxsK+urayrqqmop6alpKOioaCfnp2cm5qZmJeWlZSTkpGQj46NjIuKiYiHhoWEg4KBgH9+fXx7enl4d3Z1dHNycXBvbm1sa2ppaGdmZWRjYmFgX15dXFtaWVhXVlVUU1JRUE9OTUxLSklIR0ZFRENCQUA/Pj08Ozo5ODc2NTQzMjEwLy4tLCsqKSgnJiUkIyIhIB8eHRwbGhkYFxYVFBMSERAPDg0MCwoJCAcGBQQDAgEAACH5BAAAAAAALAAAAAAPAA8AAAIdjI6JZqotoJPR1fnsgRR3C2jZl3Ai9aWZZooV+RQAOw==" style="vertical-align:top;"></div>
</div>
<div style="height:30px;float:right;text-align: right;overflow:hidden;position:fixed;bottom:0;right:0;color:#000;line-height:30px;cursor:pointer;" id="think_page_trace_open"><div style="background:#232323;color:#FFF;padding:0 6px;float:right;line-height:30px;font-size:14px">0.0952s </div><img width="30" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyBpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBXaW5kb3dzIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjVERDVENkZGQjkyNDExRTE5REY3RDQ5RTQ2RTRDQUJCIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjVERDVENzAwQjkyNDExRTE5REY3RDQ5RTQ2RTRDQUJCIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NURENUQ2RkRCOTI0MTFFMTlERjdENDlFNDZFNENBQkIiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NURENUQ2RkVCOTI0MTFFMTlERjdENDlFNDZFNENBQkIiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5fx6IRAAAMCElEQVR42sxae3BU1Rk/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" title="ShowPageTrace" style=""></div>
<script type="text/javascript">
(function(){
var tab_tit  = document.getElementById('think_page_trace_tab_tit').getElementsByTagName('span');
var tab_cont = document.getElementById('think_page_trace_tab_cont').getElementsByTagName('div');
var open     = document.getElementById('think_page_trace_open');
var close    = document.getElementById('think_page_trace_close').childNodes[0];
var trace    = document.getElementById('think_page_trace_tab');
var cookie   = document.cookie.match(/thinkphp_show_page_trace=(\d\|\d)/);
var history  = (cookie &amp;&amp; typeof cookie[1] != 'undefined' &amp;&amp; cookie[1].split('|')) || [0,0];
open.onclick = function(){
	trace.style.display = 'block';
	this.style.display = 'none';
	close.parentNode.style.display = 'block';
	history[0] = 1;
	document.cookie = 'thinkphp_show_page_trace='+history.join('|')
}
close.onclick = function(){
	trace.style.display = 'none';
this.parentNode.style.display = 'none';
	open.style.display = 'block';
	history[0] = 0;
	document.cookie = 'thinkphp_show_page_trace='+history.join('|')
}
for(var i = 0; i &lt; tab_tit.length; i++){
	tab_tit[i].onclick = (function(i){
		return function(){
			for(var j = 0; j &lt; tab_cont.length; j++){
				tab_cont[j].style.display = 'none';
				tab_tit[j].style.color = '#999';
			}
			tab_cont[i].style.display = 'block';
			tab_tit[i].style.color = '#000';
			history[1] = i;
			document.cookie = 'thinkphp_show_page_trace='+history.join('|')
		}
	})(i)
}
parseInt(history[0]) &amp;&amp; open.click();
(tab_tit[history[1]] || tab_tit[0]).click();
})();
</script>
</body></html><?php }} ?>