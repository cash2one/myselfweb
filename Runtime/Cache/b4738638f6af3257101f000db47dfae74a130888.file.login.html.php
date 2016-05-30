<?php /* Smarty version Smarty-3.1.6, created on 2016-01-18 16:59:02
         compiled from "E:\wamp\mymovie/Home/View\Manager\login.html" */ ?>
<?php /*%%SmartyHeaderCode:27299569ca9560e2ec2-04481168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4738638f6af3257101f000db47dfae74a130888' => 
    array (
      0 => 'E:\\wamp\\mymovie/Home/View\\Manager\\login.html',
      1 => 1446543889,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27299569ca9560e2ec2-04481168',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_569ca956134f4',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569ca956134f4')) {function content_569ca956134f4($_smarty_tpl) {?>﻿<html>
<!DOCTYPE html>
<html lang="en" class="no-js">

    <head>

        <meta charset="utf-8">
        <title>登录</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel="stylesheet" href="<?php echo @Home_CSS;?>
reset.css">
        <link rel="stylesheet" href="<?php echo @Home_CSS;?>
supersized.css">
        <link rel="stylesheet" href="<?php echo @Home_CSS;?>
style.css">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="<?php echo @Home_JS;?>
html5.js"></script>
        <![endif]-->

    </head>

    <body>

        <div class="page-container">
            <h1>登录(Login)</h1>
            <form action=<?php echo @__MODULE__;?>
/Manager/login method="post">
                <input type="text" name="username" class="username" placeholder="请输入您的用户名！">
                <input type="password" name="password" class="password" placeholder="请输入您的用户密码！">
             
                <button type="submit" class="submit_button">登录</button>
                <button type="button" class="regedit_button" onclick="window.open('<?php echo @__MODULE__;?>
/Manager/regedit')">注册</button>
                
                <div class="error"><span>+</span></div>
            </form>
            
        </div>
		
        <!-- Javascript -->
        <script src=<?php echo @Home_JS;?>
jquery-1.8.2.min.js ></script>
        <script src=<?php echo @Home_JS;?>
supersized.3.2.7.min.js ></script>
        <script src=<?php echo @Home_JS;?>
supersized-init.js ></script>
        <script src=<?php echo @Home_JS;?>
scripts.js ></script>

    </body>

</html>

<?php }} ?>