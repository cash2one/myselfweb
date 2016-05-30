<?php /* Smarty version Smarty-3.1.6, created on 2016-04-02 15:51:49
         compiled from "D:\localuser\ftp483451\Web/Home/View\empty\404.html" */ ?>
<?php /*%%SmartyHeaderCode:2807256ff7a159c7a04-48511441%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d81212dfb718a0ad92d568923e3f8e6745570d7' => 
    array (
      0 => 'D:\\localuser\\ftp483451\\Web/Home/View\\empty\\404.html',
      1 => 1456492732,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2807256ff7a159c7a04-48511441',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56ff7a15ac29e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ff7a15ac29e')) {function content_56ff7a15ac29e($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<link rel="stylesheet" href="<?php echo @Home_CSS;?>
/404/main.css" type="text/css" media="screen, projection" /> <!-- main stylesheet -->
<link rel="stylesheet" type="text/css" media="all" href="<?php echo @Home_CSS;?>
/404/tipsy.css" /> <!-- Tipsy implementation -->

<!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" href="<?php echo @Home_CSS;?>
/404/ie8.css" />
<![endif]-->

<script type="text/javascript" src="<?php echo @Home_JS;?>
/404/jquery-1.7.2.min.js"></script> <!-- uiToTop implementation -->
<script type="text/javascript" src="<?php echo @Home_JS;?>
/404/custom-scripts.js"></script>
<script type="text/javascript" src="<?php echo @Home_JS;?>
/404/jquery.tipsy.js"></script> <!-- Tipsy -->

<script type="text/javascript">

$(document).ready(function(){
			
	universalPreloader();
						   
});

$(window).load(function(){

	//remove Universal Preloader
	universalPreloaderRemove();
	
	rotate();
    dogRun();
	dogTalk();
	
	//Tipsy implementation
	$('.with-tooltip').tipsy({gravity: $.fn.tipsy.autoNS});
			   
});

</script>


<title>404 - Not found</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>

<!-- Universal preloader -->
<div id="universal-preloader">
    <div class="preloader">
        <img src="<?php echo @Home_IMG;?>
/404/universal-preloader.gif" alt="universal-preloader" class="universal-preloader-preloader" />
    </div>
</div>
<!-- Universal preloader -->

<div id="wrapper">
<!-- 404 graphic -->
	<div class="graphic"></div>
<!-- 404 graphic -->
<!-- Not found text -->
	<div class="not-found-text">
    	<h1 class="not-found-text">404(最终还是丢失了!-_-!!)</h1>
    </div>
<!-- Not found text -->

<!-- search form -->

<!-- search form -->

<!-- top menu -->
<div class="top-menu">
	<a href="<?php echo @__MODULE__;?>
/Index/index" class="with-tooltip" title="Return to the home page">返回首页</a> 
</div>
<!-- top menu -->

<div class="dog-wrapper">
<!-- dog running -->
	<div class="dog"></div>
<!-- dog running -->
	
<!-- dog bubble talking -->
	<div class="dog-bubble">
    	
    </div>
    
    <!-- The dog bubble rotates these -->
    <div class="bubble-options">
    	<p class="dog-bubble">
        	丢失了?或者你进错地方了^-^
        </p>
    	<p class="dog-bubble">
	        <br />
        	汪~汪~
        </p>
        <p class="dog-bubble">
        	<br />
        	真好~
        </p>
        <p class="dog-bubble">
        	我想要一个大饼干<br /><img style="margin-top:8px" src="<?php echo @Home_IMG;?>
/404/cookie.png" alt="cookie" />
        </p>
        <p class="dog-bubble">
        	<br />
        	我想你不该看到我.
        </p>
        <p class="dog-bubble">
        	<br />
        	还是关掉重新来吧~
        </p>
        <p class="dog-bubble">
        	你确定你没有进错地方?
        </p>
        <p class="dog-bubble">
        	<br />
            貌似好像真的丢失了.
        </p>
        <p class="dog-bubble">
        	我好像看到了 <br /><img style="margin-top:8px" src="<?php echo @Home_IMG;?>
/404/cat.png" alt="cat" />
        </p>
        <p class="dog-bubble">
        	世界这么打,为何不去看看~ @_@
        </p>
    </div>
    <!-- The dog bubble rotates these -->
<!-- dog bubble talking -->
</div>

<!-- planet at the bottom -->
	<div class="planet"></div>
<!-- planet at the bottom -->
</div>

<!-- <div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='utf-8'></script></div> -->
</body>
</html><?php }} ?>