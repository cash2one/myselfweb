<?php /* Smarty version Smarty-3.1.6, created on 2015-11-03 10:00:41
         compiled from "C:/wamp/www/mymovie/Admin/View\manager\login.html" */ ?>
<?php /*%%SmartyHeaderCode:1770056381549322173-46047837%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61d08c8facaaf645e94e9ab159d1a710f7e48217' => 
    array (
      0 => 'C:/wamp/www/mymovie/Admin/View\\manager\\login.html',
      1 => 1431076696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1770056381549322173-46047837',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56381549415d7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56381549415d7')) {function content_56381549415d7($_smarty_tpl) {?>﻿<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>私人电影-后台</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="viewport" content="width=device-width">
<link href="<?php echo @Admin_CSS;?>
base.css" rel="stylesheet" type="text/css">
<link href="<?php echo @Admin_CSS;?>
login.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="login">
<form action="<?php echo @__MODULE__;?>
/Manager/login" method="post" id="form">
	<div class="logo"></div>
    <div class="login_form">
    
    	<div class="user">
    	
        	<input class="text_value" value="" name="username" type="text" id="username">
            <input class="text_value" value="" name="password" type="password" id="password">
        </div>
        <button class="button" id="submit" type="submit">登录</button>
    </div>
    
    <div id="tip"></div>
    
    </form>
</div>
<script>var basedir='<?php echo @Admin_JS;?>
';</script>
<script src="<?php echo @Admin_JS;?>
do.js"></script>
<script src="<?php echo @Admin_JS;?>
config.js"></script>
<script>
Do.ready('form', function() {
	$("#form").Validform({
			ajaxPost:true,
			postonce:true,
			tiptype:function(msg,o,cssctl){
				if(!o.obj.is("form")){
					var objtip=o.obj.siblings(".Validform_checktip");
					cssctl(objtip,o.type);
					objtip.text(msg);
				}else{
					var objtip=o.obj.find("#tip");
					cssctl(objtip,o.type);
					if(o.type==2){
						window.location.href='index.php?r=admin/index/index';
					}else{
						objtip.text(msg);
					}
				}
			}
	});
});

</script>
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='utf-8'></script></div>
</body>
</html><?php }} ?>