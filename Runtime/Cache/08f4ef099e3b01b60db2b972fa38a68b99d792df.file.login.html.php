<?php /* Smarty version Smarty-3.1.6, created on 2015-05-06 17:02:55
         compiled from "F:/wamp/www/movie/i_movie/Home/View\Manager\login.html" */ ?>
<?php /*%%SmartyHeaderCode:90525549cbd38dd572-46928721%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08f4ef099e3b01b60db2b972fa38a68b99d792df' => 
    array (
      0 => 'F:/wamp/www/movie/i_movie/Home/View\\Manager\\login.html',
      1 => 1430902846,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90525549cbd38dd572-46928721',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5549cbd39e5f2',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5549cbd39e5f2')) {function content_5549cbd39e5f2($_smarty_tpl) {?>﻿<html>
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
              <table  width="100%">
                        <tr>
								<th  width="5%">
									<input type="Captcha" class="Captcha" name="Captcha" placeholder="请输入验证码！"/></th>

								<th><img src=<?php echo @__MODULE__;?>
/Manager/verifyImg height=40></th>
                            
                        </tr>
                
                </table>
                <button type="submit" class="submit_button">登录</button>
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