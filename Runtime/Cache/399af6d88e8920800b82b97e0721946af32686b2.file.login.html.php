<?php /* Smarty version Smarty-3.1.6, created on 2015-05-08 20:20:19
         compiled from "F:/wamp/www/localhost_movie_final/Admin/View\Manager\login.html" */ ?>
<?php /*%%SmartyHeaderCode:30564554caa039bf928-76677592%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '399af6d88e8920800b82b97e0721946af32686b2' => 
    array (
      0 => 'F:/wamp/www/localhost_movie_final/Admin/View\\Manager\\login.html',
      1 => 1431076695,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30564554caa039bf928-76677592',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_554caa03c68a4',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554caa03c68a4')) {function content_554caa03c68a4($_smarty_tpl) {?>﻿<!DOCTYPE html>
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