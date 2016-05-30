<?php /* Smarty version Smarty-3.1.6, created on 2015-05-06 14:19:05
         compiled from "F:/wamp/www/movie/i_movie/Admin/View\Manager\fale.html" */ ?>
<?php /*%%SmartyHeaderCode:94445549b23ae11051-35617432%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fe295447914386a7ec9f2ab7c2052f08b14c8ad' => 
    array (
      0 => 'F:/wamp/www/movie/i_movie/Admin/View\\Manager\\fale.html',
      1 => 1430893136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '94445549b23ae11051-35617432',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5549b23b056de',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5549b23b056de')) {function content_5549b23b056de($_smarty_tpl) {?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>404页面自动跳转</title>

<link href="<?php echo @Admin_CSS;?>
fale.css" rel="stylesheet" type="text/css">

<script type="text/javascript">
	var num=6;
	function redirect(){
		num--;
		document.getElementById("num").innerHTML=num;
		if(num<0){
			document.getElementById("num").innerHTML=0;
			location.href=<?php echo @__MODULE__;?>
/Index/index;
			}
		}
	setInterval("redirect()", 1000);
</script>
</head>

<body onLoad="redirect();">
<div class="whole">
	<img src="<?php echo @Admin_IMG;?>
back.jpg" />
    <div class="mask"></div>
</div>
<div class="b">
		<img src="<?php echo @Admin_IMG;?>
404.png" class="center"/>
		<p>
			暂时未能找到您查找的页面<br>
			可能输入的网址错误或此页面不存在<br>
            <span id="num"></span>秒后自动跳转到主页
		</p>
	</div>

</body>
</html>
<?php }} ?>