<?php /* Smarty version Smarty-3.1.6, created on 2015-11-03 18:02:20
         compiled from "C:/wamp/www/mymovie/Home/View\Manager\regedit.html" */ ?>
<?php /*%%SmartyHeaderCode:32135638862ce762d5-66838864%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b60d6ce390ab02a008ca430f812da3c710a33280' => 
    array (
      0 => 'C:/wamp/www/mymovie/Home/View\\Manager\\regedit.html',
      1 => 1446543889,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32135638862ce762d5-66838864',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5638862d33b3c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5638862d33b3c')) {function content_5638862d33b3c($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title></title>
		<meta name="description" content="Fullscreen Form Interface: A distraction-free form concept with fancy animations" />
		<meta name="keywords" content="fullscreen form, css animations, distraction-free, web design" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="<?php echo @Home_CSS;?>
regedit/normalize.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo @Home_CSS;?>
regedit/demo.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo @Home_CSS;?>
regedit/component.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo @Home_CSS;?>
regedit/cs-select.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo @Home_CSS;?>
regedit/cs-skin-boxes.css" />
		<script src="<?php echo @Home_JS;?>
regedit/modernizr.custom.js"></script>

	
	</head>
	<body>
		<div class="container">

			<div class="fs-form-wrap" id="fs-form-wrap">
				<div class="fs-title">
					<h1>用户注册</h1>
					
				</div>
				<form id="myform" class="fs-form fs-form-full" autocomplete="off" method="post" action="<?php echo @__SELF__;?>
">
					<ol class="fs-fields">
						<li>
							<label class="fs-field-label fs-anim-upper" for="q1">请输入您的用户名?</label>
							<input class="fs-anim-lower" id="q1" name="username" type="text" placeholder="您的名字" required/>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper"  for="q2" data-info="尽可能加符号,提高安全度">请输入密码?</label>
							<input class="fs-anim-lower" id="q2" name="password" type="password"   required/>
		
          
							
							
						</li>
							<li>
							<label class="fs-field-label fs-anim-upper"  for="q3" data-info="如果有 激活码就输入激活码能立刻创建账号,没有激活码注册账号需要管理员审核">请输入激活码</label>
							<input class="fs-anim-lower" id="q3" name="impnum" type="text"  value='0' required/>
		
          
							
							
						</li>
						<!-- <li data-input-trigger>
							<label class="fs-field-label fs-anim-upper" data-info="We'll make sure to use it all over">Choose a color for your website.</label>
							<select class="cs-select cs-skin-boxes fs-anim-lower">
								<option value="" disabled selected>Pick a color</option>
								<option value="#588c75" data-class="color-588c75">#588c75</option>
								<option value="#b0c47f" data-class="color-b0c47f">#b0c47f</option>
								<option value="#f3e395" data-class="color-f3e395">#f3e395</option>
								<option value="#f3ae73" data-class="color-f3ae73">#f3ae73</option>
								<option value="#da645a" data-class="color-da645a">#da645a</option>
								<option value="#79a38f" data-class="color-79a38f">#79a38f</option>
								<option value="#c1d099" data-class="color-c1d099">#c1d099</option>
								<option value="#f5eaaa" data-class="color-f5eaaa">#f5eaaa</option>
								<option value="#f5be8f" data-class="color-f5be8f">#f5be8f</option>
								<option value="#e1837b" data-class="color-e1837b">#e1837b</option>
								<option value="#9bbaab" data-class="color-9bbaab">#9bbaab</option>
								<option value="#d1dcb2" data-class="color-d1dcb2">#d1dcb2</option>
								<option value="#f9eec0" data-class="color-f9eec0">#f9eec0</option>
								<option value="#f7cda9" data-class="color-f7cda9">#f7cda9</option>
								<option value="#e8a19b" data-class="color-e8a19b">#e8a19b</option>
								<option value="#bdd1c8" data-class="color-bdd1c8">#bdd1c8</option>
								<option value="#e1e7cd" data-class="color-e1e7cd">#e1e7cd</option>
								<option value="#faf4d4" data-class="color-faf4d4">#faf4d4</option>
								<option value="#fbdfc9" data-class="color-fbdfc9">#fbdfc9</option>
								<option value="#f1c1bd" data-class="color-f1c1bd">#f1c1bd</option>
							</select>
						</li> -->
						<!-- <li>
							<label class="fs-field-label fs-anim-upper" for="q4">Describe how you imagine your new website</label>
							<textarea class="fs-anim-lower" id="q4" name="q4" placeholder="Describe here"></textarea>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q5">What's your budget?</label>
							<input class="fs-mark fs-anim-lower" id="q5" name="q5" type="number" placeholder="1000" step="100" min="100"/>
						</li> -->
					</ol><!-- /fs-fields -->
					<button class="fs-submit" type="submit">提交</button>
				</form><!-- /fs-form -->
			</div><!-- /fs-form-wrap -->

		

		</div><!-- /container -->
		<script src="<?php echo @Home_JS;?>
regedit/classie.js"></script>
		<script src="<?php echo @Home_JS;?>
regedit/selectFx.js"></script>
		<script src="<?php echo @Home_JS;?>
regedit/fullscreenForm.js"></script>
		<script>
			(function() {
				var formWrap = document.getElementById( 'fs-form-wrap' );

				[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
					new SelectFx( el, {
						stickyPlaceholder: false,
						onChange: function(val){
							document.querySelector('span.cs-placeholder').style.backgroundColor = val;
						}
					});
				} );

				new FForm( formWrap, {
					onReview : function() {
						classie.add( document.body, 'overview' ); // for demo purposes only
					}
				} );
			})();
		</script>
	</body>
</html><?php }} ?>