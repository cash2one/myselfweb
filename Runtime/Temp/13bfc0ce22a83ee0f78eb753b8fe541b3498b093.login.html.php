<?php /*%%SmartyHeaderCode:19858554c2b4d805e05-59472123%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13bfc0ce22a83ee0f78eb753b8fe541b3498b093' => 
    array (
      0 => 'F:/wamp/www/my/Home/View\\Manager\\login.html',
      1 => 1431054599,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19858554c2b4d805e05-59472123',
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_554c2b4dbe2f2',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554c2b4dbe2f2')) {function content_554c2b4dbe2f2($_smarty_tpl) {?>﻿<html>
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
            <form action=/my/index.php/Home/Manager/login method="post">
                <input type="text" name="username" class="username" placeholder="请输入您的用户名！">
                <input type="password" name="password" class="password" placeholder="请输入您的用户密码！">
              <table  width="100%">
                        <tr>
								<th  width="5%">
									<input type="Captcha" class="Captcha" name="Captcha" placeholder="请输入验证码！"/></th>

								<th><img src=/my/index.php/Home/Manager/verifyImg height=40></th>
                            
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