<?php /* Smarty version Smarty-3.1.6, created on 2016-03-03 18:06:55
         compiled from "E:\myweb/Home/View\weather\weather_index.html" */ ?>
<?php /*%%SmartyHeaderCode:332956d7db929d4db3-65008503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c961ae2626c786cbe8d855bc1aece881d275807d' => 
    array (
      0 => 'E:\\myweb/Home/View\\weather\\weather_index.html',
      1 => 1456999614,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '332956d7db929d4db3-65008503',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56d7db92a03bb',
  'variables' => 
  array (
    'weather' => 0,
    'value' => 0,
    'time' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d7db92a03bb')) {function content_56d7db92a03bb($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en" class="no-js">

<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>天气预报-关注每一天</title>

<!--可无视-->
 <link rel="stylesheet" type="text/css" href="<?php echo @Home_CSS;?>
normalize.css" />
<link href='http://fonts.useso.com/css?family=Roboto:400,100,300,700,500,900' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="<?php echo @Home_CSS;?>
demo.css" /> 

<!--必要样式-->
<link rel="stylesheet" type="text/css" href="<?php echo @Home_CSS;?>
weather_style1.css" />
<!-- [if IE]
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
[endif] -->
</head>

<body class="demo-1">

	<div class="image-preload">
		<img src="<?php echo @Home_IMG;?>
drop-color.png" alt="">
		<img src="<?php echo @Home_IMG;?>
drop-alpha.png" alt="">
		<img src="<?php echo @Home_IMG;?>
weather/texture-rain-fg.png" />
		<img src="<?php echo @Home_IMG;?>
weather/texture-rain-bg.png" />
		<img src="<?php echo @Home_IMG;?>
weather/texture-sun-fg.png" />
		<img src="<?php echo @Home_IMG;?>
weather/texture-sun-bg.png" />
		<img src="<?php echo @Home_IMG;?>
weather/texture-fallout-fg.png" />
		<img src="<?php echo @Home_IMG;?>
weather/texture-fallout-bg.png" />
		<img src="<?php echo @Home_IMG;?>
weather/texture-drizzle-fg.png" />
		<img src="<?php echo @Home_IMG;?>
weather/texture-drizzle-bg.png" />
	</div>
	<div class="container">
		<header class="codrops-header">
			<h1>天气预报-关注每一天^_^123</h1>
		<!-- 	<nav class="codrops-demos">
				<a class="current-demo" href="index.html">Weather</a>
				<a href="index2.html">Water</a>
				<a href="index3.html">Video</a>
			</nav> -->
		</header>
		<div class="slideshow">
			<canvas width="1" height="1" id="container" style="position:absolute"></canvas>
			<!-- Heavy Rain -->
			<?php if ($_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][0]["cond"]["code_d"]==100){?><div class="slide" id="slide-1" data-weather="sunny">
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][0]["cond"]["code_d"]==101||$_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][0]["cond"]["code_d"]==102||$_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][0]["cond"]["code_d"]==103||$_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][0]["cond"]["code_d"]==104){?><div class="slide" id="slide-1" data-weather="sunny">
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][0]["cond"]["code_d"]==305){?><div class="slide" id="slide-1" data-weather="rain">
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][0]["cond"]["code_d"]==306){?><div class="slide" id="slide-1" data-weather="sunny">
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][0]["cond"]["code_d"]==307){?><div class="slide" id="slide-1" data-weather="storm">
				<?php }?>
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['weather']->value['hourly_forecast']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
		
			<?php if ($_smarty_tpl->tpl_vars['value']->value['date']<$_smarty_tpl->tpl_vars['time']->value&&$_smarty_tpl->tpl_vars['weather']->value['hourly_forecast'][$_smarty_tpl->tpl_vars['key']->value+1]['date']>$_smarty_tpl->tpl_vars['time']->value||$_smarty_tpl->tpl_vars['weather']->value['hourly_forecast'][$_smarty_tpl->tpl_vars['key']->value+1]['date']=='null'){?>
				<div class="slide__element slide__element--date"><?php echo $_smarty_tpl->tpl_vars['weather']->value['hourly_forecast'][$_smarty_tpl->tpl_vars['key']->value]["date"];?>
&nbsp;&nbsp;&nbsp;相对湿度:<?php echo $_smarty_tpl->tpl_vars['weather']->value["now"]["hum"];?>
%&nbsp;&nbsp;&nbsp;&nbsp;降水概率:<?php echo $_smarty_tpl->tpl_vars['weather']->value['hourly_forecast'][$_smarty_tpl->tpl_vars['key']->value]["pop"];?>
%<?php }?><?php } ?></div>
				<div class="slide__element slide__element--date"><?php if ($_smarty_tpl->tpl_vars['weather']->value['hourly_forecast']['0']["pop"]<20){?>一般来说不用带伞 *★,°*:.☆\(￣▽￣)/$:*.°★*<?php }elseif($_smarty_tpl->tpl_vars['weather']->value['hourly_forecast']['0']["pop"]>20&&$_smarty_tpl->tpl_vars['weather']->value['hourly_forecast']['0']["pop"]<60){?>有可能会下雨哦╰(*°▽°*)╯<?php }elseif($_smarty_tpl->tpl_vars['weather']->value['hourly_forecast']['0']["pop"]>60&&$_smarty_tpl->tpl_vars['weather']->value['hourly_forecast']['0']["pop"]<90){?>非常有可能了!你就带伞吧!(┙>∧<)┙へ┻┻<?php }else{ ?>肯定会下雨,不信你问我(°□°；) <?php }?></div>

				<div class="slide__element slide__element--temp"><?php echo $_smarty_tpl->tpl_vars['weather']->value['now']["tmp"];?>
°<small>C</small></div>
			</div>
			<!-- Drizzle -->
			<?php if ($_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][1]["cond"]["code_d"]==100){?><div class="slide" id="slide-2" data-weather="sunny">
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][1]["cond"]["code_d"]==101||$_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][1]["cond"]["code_d"]==102||$_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][1]["cond"]["code_d"]==103||$_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][1]["cond"]["code_d"]==104){?><div class="slide" id="slide-2" data-weather="sunny">
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][1]["cond"]["code_d"]==305){?><div class="slide" id="slide-2" data-weather="rain">
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][1]["cond"]["code_d"]==306){?><div class="slide" id="slide-2" data-weather="drizzle">
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][1]["cond"]["code_d"]==307){?><div class="slide" id="slide-2" data-weather="storm">
				<?php }?>
				<div class="slide__element slide__element--date"><?php echo $_smarty_tpl->tpl_vars['weather']->value['daily_forecast']['1']["date"];?>
</div>

				<div class="slide__element slide__element--temp"><?php echo $_smarty_tpl->tpl_vars['weather']->value['daily_forecast']['1']["tmp"]["max"]+$_smarty_tpl->tpl_vars['weather']->value['daily_forecast']['1']["tmp"]["min"]/2;?>
°<small>C</small></div>
			</div>
			<!-- Sunny -->
			<?php if ($_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][2]["cond"]["code_d"]==100){?><div class="slide" id="slide-3" data-weather="sunny">
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][2]["cond"]["code_d"]==101||$_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][2]["cond"]["code_d"]==102||$_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][2]["cond"]["code_d"]==103||$_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][2]["cond"]["code_d"]==104){?><div class="slide" id="slide-3" data-weather="sunny">
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][2]["cond"]["code_d"]==305){?><div class="slide" id="slide-3" data-weather="rain">
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][2]["cond"]["code_d"]==306){?><div class="slide" id="slide-3" data-weather="drizzle">
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][2]["cond"]["code_d"]==307){?><div class="slide" id="slide-3" data-weather="storm">
				<?php }?>
				<div class="slide__element slide__element--date"><?php echo $_smarty_tpl->tpl_vars['weather']->value['daily_forecast']['2']["date"];?>
</div>

				<div class="slide__element slide__element--temp"><?php echo $_smarty_tpl->tpl_vars['weather']->value['daily_forecast']['2']["tmp"]["max"]+$_smarty_tpl->tpl_vars['weather']->value['daily_forecast']['2']["tmp"]["min"]/2;?>
°<small>C</small></div>
			</div>
			<!-- Heavy rain -->
			<?php if ($_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][3]["cond"]["code_d"]==100){?><div class="slide" id="slide-4" data-weather="sunny">
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][3]["cond"]["code_d"]==101||$_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][3]["cond"]["code_d"]==102||$_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][3]["cond"]["code_d"]==103||$_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][3]["cond"]["code_d"]==104){?><div class="slide" id="slide-4" data-weather="sunny">
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][3]["cond"]["code_d"]==305){?><div class="slide" id="slide-4" data-weather="rain">
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][3]["cond"]["code_d"]==306){?><div class="slide" id="slide-4" data-weather="drizzle">
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][3]["cond"]["code_d"]==307){?><div class="slide" id="slide-4" data-weather="storm">
				<?php }?>
				<div class="slide__element slide__element--date"><?php echo $_smarty_tpl->tpl_vars['weather']->value['daily_forecast']['3']["date"];?>
</div>

				<div class="slide__element slide__element--temp"><?php echo $_smarty_tpl->tpl_vars['weather']->value['daily_forecast']['3']["tmp"]["max"]+$_smarty_tpl->tpl_vars['weather']->value['daily_forecast']['3']["tmp"]["min"]/2;?>
°<small>C</small></div>
			</div>
			<!-- Fallout (greenish overlay with slightly greenish/yellowish drops) -->
			<?php if ($_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][4]["cond"]["code_d"]==100){?><div class="slide" id="slide-5" data-weather="sunny">
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][4]["cond"]["code_d"]==101||$_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][4]["cond"]["code_d"]==102||$_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][4]["cond"]["code_d"]==103||$_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][4]["cond"]["code_d"]==104){?><div class="slide" id="slide-5" data-weather="sunny">
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][4]["cond"]["code_d"]==305){?><div class="slide" id="slide-5" data-weather="rain">
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][4]["cond"]["code_d"]==306){?><div class="slide" id="slide-5" data-weather="drizzle">
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][4]["cond"]["code_d"]==307){?><div class="slide" id="slide-5" data-weather="storm">
				<?php }?>
				<div class="slide__element slide__element--date"><?php echo $_smarty_tpl->tpl_vars['weather']->value['daily_forecast']['4']["date"];?>
</div>

				<div class="slide__element slide__element--temp"><?php echo $_smarty_tpl->tpl_vars['weather']->value['daily_forecast']['4']["tmp"]["max"]+$_smarty_tpl->tpl_vars['weather']->value['daily_forecast']['4']["tmp"]["min"]/2;?>
°<small>C</small></div>
			</div>
			<nav class="slideshow__nav">

				<a class="nav-item" href="#slide-1">
				<?php if ($_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][0]["cond"]["code_d"]==100){?><i class="icon icon--sun"></i>
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][0]["cond"]["code_d"]==101||$_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][0]["cond"]["code_d"]==102||$_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][0]["cond"]["code_d"]==103||$_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][0]["cond"]["code_d"]==104){?><i class="icon icon--radioactive"></i>
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][0]["cond"]["code_d"]==305){?><i class="icon icon--rainy"></i>
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][0]["cond"]["code_d"]==306){?><i class="icon icon--drizzle"></i>
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][0]["cond"]["code_d"]==307){?><i class="icon icon--storm"></i>
				<?php }?><span><?php echo $_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][0]["cond"]["txt_d"];?>
</span>
				<span><?php echo $_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][0]["tmp"]["min"];?>
°<small>C</small>&nbsp;/&nbsp;<?php echo $_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][0]["tmp"]["max"];?>
°<small>C</small></span></a>

				<a class="nav-item" href="#slide-2">
				<?php if ($_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][1]["cond"]["code_d"]==100){?><i class="icon icon--sun"></i>
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][1]["cond"]["code_d"]==101||$_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][1]["cond"]["code_d"]==102||$_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][1]["cond"]["code_d"]==103||$_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][1]["cond"]["code_d"]==104){?><i class="icon icon--radioactive"></i>
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][1]["cond"]["code_d"]==305){?><i class="icon icon--rainy"></i>
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][1]["cond"]["code_d"]==306){?><i class="icon icon--drizzle"></i>
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][1]["cond"]["code_d"]==307){?><i class="icon icon--storm"></i>
				<?php }?><span><?php echo $_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][1]["cond"]["txt_d"];?>
</span><span><?php echo $_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][1]["tmp"]["min"];?>
°<small>C</small>&nbsp;/&nbsp;<?php echo $_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][1]["tmp"]["max"];?>
°<small>C</small></span></a>

<a class="nav-item" href="#slide-3">
				<?php if ($_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][2]["cond"]["code_d"]==100){?><i class="icon icon--sun"></i>
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][2]["cond"]["code_d"]==101||$_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][2]["cond"]["code_d"]==102||$_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][2]["cond"]["code_d"]==103||$_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][2]["cond"]["code_d"]==104){?><i class="icon icon--radioactive"></i>
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][2]["cond"]["code_d"]==305){?><i class="icon icon--rainy"></i>
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][2]["cond"]["code_d"]==306){?><i class="icon icon--drizzle"></i>
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][2]["cond"]["code_d"]==307){?><i class="icon icon--storm"></i>
				<?php }?><span><?php echo $_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][2]["cond"]["txt_d"];?>
</span><span><?php echo $_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][2]["tmp"]["min"];?>
°<small>C</small>&nbsp;/&nbsp;<?php echo $_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][2]["tmp"]["max"];?>
°<small>C</small></span></a>

				<a class="nav-item" href="#slide-4">
				<?php if ($_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][3]["cond"]["code_d"]==100){?><i class="icon icon--sun"></i>
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][3]["cond"]["code_d"]==101||$_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][3]["cond"]["code_d"]==102||$_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][3]["cond"]["code_d"]==103||$_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][3]["cond"]["code_d"]==104){?><i class="icon icon--radioactive"></i>
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][3]["cond"]["code_d"]==305){?><i class="icon icon--rainy"></i>
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][3]["cond"]["code_d"]==306){?><i class="icon icon--drizzle"></i>
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][3]["cond"]["code_d"]==307){?><i class="icon icon--storm"></i>
				<?php }?><span><?php echo $_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][3]["cond"]["txt_d"];?>
</span><span><?php echo $_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][3]["tmp"]["min"];?>
°<small>C</small>&nbsp;/&nbsp;<?php echo $_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][3]["tmp"]["max"];?>
°<small>C</small></span></a>

				<a class="nav-item" href="#slide-5">
				<?php if ($_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][4]["cond"]["code_d"]==100){?><i class="icon icon--sun"></i>
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][4]["cond"]["code_d"]==101||$_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][4]["cond"]["code_d"]==102||$_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][4]["cond"]["code_d"]==103||$_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][4]["cond"]["code_d"]==104){?><i class="icon icon--radioactive"></i>
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][4]["cond"]["code_d"]==305){?><i class="icon icon--rainy"></i>
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][4]["cond"]["code_d"]==306){?><i class="icon icon--drizzle"></i>
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][4]["cond"]["code_d"]==307){?><i class="icon icon--storm"></i>
				<?php }?><span><?php echo $_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][4]["cond"]["txt_d"];?>
</span><span><?php echo $_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][4]["tmp"]["min"];?>
°<small>C</small>&nbsp;/&nbsp;<?php echo $_smarty_tpl->tpl_vars['weather']->value['daily_forecast'][4]["tmp"]["max"];?>
°<small>C</small></span></a>



			</nav>
		</div>
		<p class="nosupport">对不起，您的浏览器不支持WebGL！</p>
	</div>
	<!-- /container -->
	<script src="<?php echo @Home_JS;?>
weather_index.min.js"></script>

</body>
</html>
<?php }} ?>