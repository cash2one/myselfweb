<?php /* Smarty version Smarty-3.1.6, created on 2016-02-26 21:20:10
         compiled from "C:/wamp/www/myweb/Home/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1498056d0510a642c14-64813017%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25d5d0566925f47ecbc1d57e34d17429f9de45f9' => 
    array (
      0 => 'C:/wamp/www/myweb/Home/View\\Index\\index.html',
      1 => 1456492730,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1498056d0510a642c14-64813017',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'c' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56d0510a8f66c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d0510a8f66c')) {function content_56d0510a8f66c($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
<head>
<title>YZC的个人网站</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="http://www.777moban.com/Preview/4_424/css/style.css" media="all" type="text/css">
<script type="text/javascript" language="javascript" src="<?php echo @Home_JS;?>
jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	var theDaysBox  = $("#numdays");
	var theHoursBox = $("#numhours");
	var theMinsBox  = $("#nummins");
	var theSecsBox  = $("#numsecs");
	
	var refreshId = setInterval(function() {
	  var currentSeconds = theSecsBox.text();
	  var currentMins    = theMinsBox.text();
	  var currentHours   = theHoursBox.text();
	  var currentDays    = theDaysBox.text();
	  
	  if(currentSeconds == 0 && currentMins == 0 && currentHours == 0 && currentDays == 0) {
	  	// if everything rusn out our timer is done!!
	  	// do some exciting code in here when your countdown timer finishes
	  	
	  } else if(currentSeconds == 0 && currentMins == 0 && currentHours == 0) {
	  	// if the seconds and minutes and hours run out we subtract 1 day
	  	theDaysBox.html(currentDays-1);
	  	theHoursBox.html("23");
	  	theMinsBox.html("59");
	  	theSecsBox.html("59");
	  } else if(currentSeconds == 0 && currentMins == 0) {
	  	// if the seconds and minutes run out we need to subtract 1 hour
	  	theHoursBox.html(currentHours-1);
	  	theMinsBox.html("59");
	  	theSecsBox.html("59");
	  } else if(currentSeconds == 0) {
	  	// if the seconds run out we need to subtract 1 minute
	  	theMinsBox.html(currentMins-1);
	  	theSecsBox.html("59");
	  } else {
      	theSecsBox.html(currentSeconds-1);
      }
   }, 1000);
   $("#liuyan").click(function(){
		var a=$("#hua").val();//alert(a);
		$("#hua").attr("value","");
		//var address = "<?php echo @__MODULE__;?>
/index/send_email";
		//console.log(address);return false;  
	if(a==""){
	 alert("留言内容不能为空");
	}else{
		$.ajax({    
	        type:"POST",        
	        url:"<?php echo @__MODULE__;?>
/index/send_email",    
	        data:"text="+a,    
	        dataType:'text',    
	        success:function(){
	        	alert("邮件发送成功")
	        },
	        error:function(){
	        	alert("邮件发送失败")
	        },
	    });
	}        
      });
});
</script>

</head>
<body>
<div class="wrap">
	<h1>BEST YZC</h1>
<div class="main">
	<h2>网站正在建设中...</h2>
	<div class="banner">
		<img src="<?php echo @Home_IMG;?>
banner.png" alt="" />
	</div>
	<div class="text">
		<h3>我的网站即将上线...敬请期待&nbsp;<span>(妈拉个屯,我也不知道什么时候上线)</span></h3>
		<div class	="clock-ticker" class="clearfix">
			<div class="block">
				<span class="flip-top" id="numdays"><?php echo $_smarty_tpl->tpl_vars['c']->value['day'];?>
</span>
				<span class="flip-btm"></span>
				<footer class="label">天</footer>
			</div>
			<div class="block">
				<span class="flip-top" id="numhours"><?php echo $_smarty_tpl->tpl_vars['c']->value['hour'];?>
</span>
				<span class="flip-btm"></span>
				<footer class="label">小时</footer>
			</div>
			<div class="block">
				<span class="flip-top" id="nummins"><?php echo $_smarty_tpl->tpl_vars['c']->value['minute'];?>
</span>
				<span class="flip-btm"></span>
				<footer class="label">分钟</footer>
			</div>
			<div class="block">
				<span class="flip-top" id="numsecs"><?php echo $_smarty_tpl->tpl_vars['c']->value['second'];?>
</span>
				<span class="flip-btm"></span>
				<footer class="label">秒</footer>
			</div>
		</div>
			<form class="searchbox">
		
	    <input class="search" type="text" id="hua" placeholder="">
	    <input class="submit" type="button" id="liuyan" value="留言" >
 </form>
	</div>
	<div class="clear"></div>
	<div class="content">
	<div class="icons">
		
	<ul class="left">
	
	</ul>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
	</div>
</div>
<div class="footer">
	
</div>
</div>

</body>
</html>
<?php }} ?>