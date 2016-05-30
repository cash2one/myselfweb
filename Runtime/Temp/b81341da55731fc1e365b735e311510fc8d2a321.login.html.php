<?php /*%%SmartyHeaderCode:12456554c1f3d658647-39965834%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b81341da55731fc1e365b735e311510fc8d2a321' => 
    array (
      0 => 'F:/wamp/www/www/Admin/View\\Manager\\login.html',
      1 => 1431051916,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12456554c1f3d658647-39965834',
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_554c1f3d7e723',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554c1f3d7e723')) {function content_554c1f3d7e723($_smarty_tpl) {?>﻿<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>私人电影-后台</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="viewport" content="width=device-width">
<link href="/public/Admin/css/base.css" rel="stylesheet" type="text/css">
<link href="/public/Admin/css/login.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="login">
<form action="/www/index.php/Admin/Manager/login" method="post" id="form">
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
<script>var basedir='/public/Admin/js/';</script>
<script src="/public/Admin/js/do.js"></script>
<script src="/public/Admin/js/config.js"></script>
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