<?php /*%%SmartyHeaderCode:24554c1ef2e894f6-68302124%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa8f9ec074f15007bbe996e95e204e6c212558c9' => 
    array (
      0 => 'F:/wamp/www/www/Home/View\\Manager\\login.html',
      1 => 1431051918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24554c1ef2e894f6-68302124',
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_554c1ef325a55',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554c1ef325a55')) {function content_554c1ef325a55($_smarty_tpl) {?>﻿<html>
<!DOCTYPE html>
<html lang="en" class="no-js">

    <head>

        <meta charset="utf-8">
        <title>登录</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel="stylesheet" href="/public/Home/css/reset.css">
        <link rel="stylesheet" href="/public/Home/css/supersized.css">
        <link rel="stylesheet" href="/public/Home/css/style.css">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="/public/Home/js/html5.js"></script>
        <![endif]-->

    </head>

    <body>

        <div class="page-container">
            <h1>登录(Login)</h1>
            <form action=/www/index.php/Home/Manager/login method="post">
                <input type="text" name="username" class="username" placeholder="请输入您的用户名！">
                <input type="password" name="password" class="password" placeholder="请输入您的用户密码！">
              <table  width="100%">
                        <tr>
								<th  width="5%">
									<input type="Captcha" class="Captcha" name="Captcha" placeholder="请输入验证码！"/></th>

								<th><img src=/www/index.php/Home/Manager/verifyImg height=40></th>
                            
                        </tr>
                
                </table>
                <button type="submit" class="submit_button">登录</button>
                <div class="error"><span>+</span></div>
            </form>
            
        </div>
		
        <!-- Javascript -->
        <script src=/public/Home/js/jquery-1.8.2.min.js ></script>
        <script src=/public/Home/js/supersized.3.2.7.min.js ></script>
        <script src=/public/Home/js/supersized-init.js ></script>
        <script src=/public/Home/js/scripts.js ></script>

    </body>

</html>

<?php }} ?>