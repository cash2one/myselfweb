<?php /* Smarty version Smarty-3.1.6, created on 2016-03-03 13:32:07
         compiled from "E:\myweb/Home/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2561956cfb8a8f38aa9-65210061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '253e0a05cdecfc10db1c79f478240dc270e95234' => 
    array (
      0 => 'E:\\myweb/Home/View\\Index\\index.html',
      1 => 1456975828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2561956cfb8a8f38aa9-65210061',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56cfb8a931356',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56cfb8a931356')) {function content_56cfb8a931356($_smarty_tpl) {?>﻿<!DOCTYPE html>
<html>	
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<meta name="keywords" content="Flat Dark Web Login Form Responsive Templates, Iphone Widget Template, Smartphone login forms,Login form, Widget Template, Responsive Templates, a Ipad 404 Templates, Flat Responsive Templates" />
<link href="<?php echo @Home_CSS;?>
style.css" rel='stylesheet' type='text/css' />
<!--webfonts-->
<link href='http://fonts.useso.com/css?family=PT+Sans:400,700,400italic,700italic|Oswald:400,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
<!--//webfonts-->
<script src="http://ajax.useso.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>


</head>
<body>

<script>
$(document).ready(function(c) {
	var url = 'http://chaxun.1616.net/s.php?type=ip&output=json&callback=?&_='+Math.random(); 
            $.getJSON(url, function(data){
            	$("#ip").val(data.Ip)});
	$('.close').on('click', function(c){
		$('.login-form').fadeOut('slow', function(c){
	  		$('.login-form').remove();
		});
	});
	$('.lbl-1').click(function(){
		$('.login-form').children().remove();
			$(".login-form").html('<input type="hidden" id="keyword"name="keyword" class="text" value="1"/><input type="text" id="username" name="username" class="text" value=""/><input type="text" name="email" id="email"class="text" value=""/><div class="key"><input type="password" id="password" name="password" value="" /></div><div class="signin"><input type="submit" id="btn" onclick="btn()" value="提交" /></div>');

			
			
		$("#keyword").val('1');});

	  

$('.lbl-2').click(function(){
		$('.login-form').children().remove();
			$(".login-form").html('<div class="avtar"><img src="<?php echo @Home_IMG;?>
avtar.png" /></div><input type="hidden" id="keyword"name="keyword" class="text" value="1"/><input type="hidden" class="text" id="ip" name="ip" value="" ><input type="text" class="text" id="username" name="username" value="" /><div class="key"><input type="password" id="password" name="password" value="" /></div><div class="signin"><input type="submit" id="btn"  value="登陆" /></div>');

			
			var url = 'http://chaxun.1616.net/s.php?type=ip&output=json&callback=?&_='+Math.random(); 
            $.getJSON(url, function(data){
            	$("#ip").val(data.Ip)});
		$("#keyword").val('2');});

	  
});
function btn(){
	var keyword=$("#keyword").val();
	var a = new Array();
	
	if(keyword==1){
		a[0]=keyword;
		a[1]=$("#username").val();
		a[2]=$("#email").val();
		a[3]=$("#password").val();
		if($("#username").val()==""||$("#email").val()==""||$("#password").val()==""){
			alert("信息填写不能为空");
		}else{
			$.ajax({
				type:"POST",
  			url: "<?php echo @__MODULE__;?>
/index/login",
  			dataType: 'text',
  			data: "b="+a,
  			success: function(){
  				alert("注册成功");
  				$('.login-form').children().remove();
			$(".login-form").html('<div class="avtar"><img src="<?php echo @Home_IMG;?>
avtar.png" /></div><form method="post" action="<?php echo @__MODULE__;?>
/index/login"><input type="hidden" id="keyword"name="keyword" class="text" value="1"/><input type="text" class="text" id="username" name="username" value="" /><div class="key"><input type="password" id="password" name="password" value="" /></div><div class="signin"><input type="submit" id="btn"  value="登陆" /></div></form>');

			
			
		$("#keyword").val('2');

  				
  			},
  			error: function(){
  				alert("注册失败");
  			},
});

		}
		//alert("注册");
	}/*else if(keyword==2){
		a[0]=keyword;
		a[1]=$("#username").val();
		a[2]=$("#password").val();

		if($("#username").val()==""||$("#password").val()==""){
			alert("信息填写不能为空");
		}else{
			$.ajax({
				type:"POST",
  			url: "<?php echo @__MODULE__;?>
/index/login",
  			dataType: 'text',//返回值类型
  			data: "b="+a,
  			success: function(){
  				alert("登陆成功");
  				//window.location.href="<?php echo @__MODULE__;?>
/index/persional_homepage";
  			},
  			error: function(){
  				alert("登陆失败");
  			},
});			
		}
		//alert("登陆");
	}*/
}
</script>
 <!--SIGN UP-->
 
<div class="login-form1">

		<div class="head-info">
			<label class="lbl-1" style="padding-top: 3px; padding-left: 3px;"><p align='center' style="padding-top: 3px; padding-right: 2px;">注册</p></label>
			<label class="lbl-2" style="padding-top: 3px; padding-left: 3px;"><p align='center' style="padding-top: 3px; padding-right: 2px;">登陆</p></label>
			<label class="lbl-3" style="padding-top: 3px; padding-left: 3px; "> </label>
		</div>
		</div>
<div class="login-form" style="margin-top: 0px;">			
	<div class="avtar">
		<img src="<?php echo @Home_IMG;?>
avtar.png" />
	</div>
			<form method="post" action="<?php echo @__MODULE__;?>
/index/login">
					<input type="hidden" id="keyword"name="keyword" class="text" value="2">
					<input type="hidden" class="text" id="ip" name="ip" value="" >
					<input type="text" class="text" id="username" name="username" value="" >
						<div class="key">
					<input type="password" id="password" name="password" value="" >
						</div>
			
	<div class="signin">
		<input type="submit" id="btn" value="登陆" >
	</div></form>
</div>
 <div class="copy-rights">

			</div>

</body>
</html><?php }} ?>