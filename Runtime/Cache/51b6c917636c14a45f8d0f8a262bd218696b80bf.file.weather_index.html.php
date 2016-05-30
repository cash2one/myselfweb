<?php /* Smarty version Smarty-3.1.6, created on 2016-03-04 13:53:26
         compiled from "D:\localuser\ftp483451\Web/Home/View\weather\weather_index.html" */ ?>
<?php /*%%SmartyHeaderCode:2759556d80cfd09bab3-12254501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51b6c917636c14a45f8d0f8a262bd218696b80bf' => 
    array (
      0 => 'D:\\localuser\\ftp483451\\Web/Home/View\\weather\\weather_index.html',
      1 => 1457070912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2759556d80cfd09bab3-12254501',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56d80cfd6bb18',
  'variables' => 
  array (
    'weather' => 0,
    'rand' => 0,
    'time' => 0,
    'cid' => 0,
    'con' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d80cfd6bb18')) {function content_56d80cfd6bb18($_smarty_tpl) {?><!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>今日天气(^_^)</title>
<!-- for-mobile-apps -->

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?php echo @Home_CSS;?>
weather_style.css" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo @Home_CSS;?>
per_skel.css" />
			<link rel="stylesheet" href="<?php echo @Home_CSS;?>
per_style.css" />
			<link rel="stylesheet" href="<?php echo @Home_CSS;?>
per_style-xlarge.css" />
		
</head>
<?php if ($_smarty_tpl->tpl_vars['weather']->value["daily_forecast"]['0']["cond"]["code_d"]==100){?>
				<body style="background:url(<?php echo @Home_IMG;?>
weather/sun/<?php echo $_smarty_tpl->tpl_vars['rand']->value;?>
.jpg) no-repeat 0px 0px;background-size: cover;">
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value["daily_forecast"]['0']["cond"]["code_d"]>100&&$_smarty_tpl->tpl_vars['weather']->value["daily_forecast"]['0']["cond"]["code_d"]<104){?>
				<body style="background:url(<?php echo @Home_IMG;?>
weather/sun/<?php echo $_smarty_tpl->tpl_vars['rand']->value;?>
.jpg) no-repeat 0px 0px;background-size: cover;">
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value["daily_forecast"]['0']["cond"]["code_d"]==104){?>
				<body style="background:url(<?php echo @Home_IMG;?>
weather/overcast/1.jpg) no-repeat 0px 0px;background-size: cover;">
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value["daily_forecast"]['0']["cond"]["code_d"]>=200&&$_smarty_tpl->tpl_vars['weather']->value["daily_forecast"]['0']["cond"]["code_d"]<=213){?>
				<body style="background:url(<?php echo @Home_IMG;?>
weather/sun/<?php echo $_smarty_tpl->tpl_vars['rand']->value;?>
.jpg) no-repeat 0px 0px;background-size: cover;">
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value["daily_forecast"]['0']["cond"]["code_d"]>=300&&$_smarty_tpl->tpl_vars['weather']->value["daily_forecast"]['0']["cond"]["code_d"]<=304||$_smarty_tpl->tpl_vars['weather']->value["daily_forecast"]['0']["cond"]["code_d"]==308||$_smarty_tpl->tpl_vars['weather']->value["daily_forecast"]['0']["cond"]["code_d"]==310||$_smarty_tpl->tpl_vars['weather']->value["daily_forecast"]['0']["cond"]["code_d"]==311||$_smarty_tpl->tpl_vars['weather']->value["daily_forecast"]['0']["cond"]["code_d"]==312){?>
				<body style="background:url(<?php echo @Home_IMG;?>
weather/rain/<?php echo $_smarty_tpl->tpl_vars['rand']->value;?>
.jpg) no-repeat 0px 0px;background-size: cover;">
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value["daily_forecast"]['0']["cond"]["code_d"]>=305&&$_smarty_tpl->tpl_vars['weather']->value["daily_forecast"]['0']["cond"]["code_d"]<=307){?>
				<body style="background:url(<?php echo @Home_IMG;?>
weather/rain/<?php echo $_smarty_tpl->tpl_vars['rand']->value;?>
.jpg) no-repeat 0px 0px;background-size: cover;">
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value["daily_forecast"]['0']["cond"]["code_d"]>=404&&$_smarty_tpl->tpl_vars['weather']->value["daily_forecast"]['0']["cond"]["code_d"]<=406){?>
				<body style="background:url(<?php echo @Home_IMG;?>
weather/snow/<?php echo $_smarty_tpl->tpl_vars['rand']->value;?>
.jpg) no-repeat 0px 0px;background-size: cover;">
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value["daily_forecast"]['0']["cond"]["code_d"]>=400&&$_smarty_tpl->tpl_vars['weather']->value["daily_forecast"]['0']["cond"]["code_d"]<=403||$_smarty_tpl->tpl_vars['weather']->value["daily_forecast"]['0']["cond"]["code_d"]==407){?>
				<body style="background:url(<?php echo @Home_IMG;?>
weather/snow/<?php echo $_smarty_tpl->tpl_vars['rand']->value;?>
.jpg) no-repeat 0px 0px;background-size: cover;">
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value["daily_forecast"]['0']["cond"]["code_d"]>=501&&$_smarty_tpl->tpl_vars['weather']->value["daily_forecast"]['0']["cond"]["code_d"]<=502){?>
				<body style="background:url(<?php echo @Home_IMG;?>
weather/banner.jpg) no-repeat 0px 0px;background-size: cover;">
				<?php }?>
					<div class='card-holder'>
  <div class='card-wrapper'>
    <a href='<?php echo @__MODULE__;?>
/index/login?state=1'>
      <div class='card bg-01'>
        <span class='card-content'>首页</span>
      </div>
    </a>
  </div>
  <div class='card-wrapper'>
    <a href='<?php echo @__MODULE__;?>
/weather/weather_index'>
      <div class='card bg-02'>
        <span class='card-content'>天气预报</span>
      </div>
    </a>
  </div>
  <div class='card-wrapper'>
    <a href='#'>
      <div class='card bg-03'>
        <span class='card-content'>暂未开发</span>
      </div>
    </a>
  </div>
  <div class='card-wrapper'>
    <a href='#'>
      <div class='card bg-04'>
        <span class='card-content'>暂未开发</span>
      </div>
    </a>
  </div>
  <div class='card-wrapper'>
    <a href='#'>
      <div class='card bg-05'>
        <span class='card-content'>暂未开发</span>
      </div>
    </a>
  </div>
  <div class='card-wrapper'>
    <a href='#'>
      <div class='card bg-06'>
        <span class='card-content'>暂未开发</span>
      </div>
    </a>
  </div>
</div>
	<!-- main -->
		<div class="main">
			<h1>今日天气(^_^)</h1>
			<div class="main-grid1">
			<?php if ($_smarty_tpl->tpl_vars['weather']->value["daily_forecast"]['0']["cond"]["code_d"]==100){?>
				<div class="main-grid1-pos-sun">
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value["daily_forecast"]['0']["cond"]["code_d"]>100&&$_smarty_tpl->tpl_vars['weather']->value["daily_forecast"]['0']["cond"]["code_d"]<104){?>
				<div class="main-grid1-pos-cloudy">
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value["daily_forecast"]['0']["cond"]["code_d"]==104){?>
				<div class="main-grid1-pos-overcast">
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value["daily_forecast"]['0']["cond"]["code_d"]>=200&&$_smarty_tpl->tpl_vars['weather']->value["daily_forecast"]['0']["cond"]["code_d"]<=213){?>
				<div class="main-grid1-pos-wind">
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value["daily_forecast"]['0']["cond"]["code_d"]>=300&&$_smarty_tpl->tpl_vars['weather']->value["daily_forecast"]['0']["cond"]["code_d"]<=304||$_smarty_tpl->tpl_vars['weather']->value["daily_forecast"]['0']["cond"]["code_d"]==308||$_smarty_tpl->tpl_vars['weather']->value["daily_forecast"]['0']["cond"]["code_d"]==310||$_smarty_tpl->tpl_vars['weather']->value["daily_forecast"]['0']["cond"]["code_d"]==311||$_smarty_tpl->tpl_vars['weather']->value["daily_forecast"]['0']["cond"]["code_d"]==312){?>
				<div class="main-grid1-pos-storm">
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value["daily_forecast"]['0']["cond"]["code_d"]>=305&&$_smarty_tpl->tpl_vars['weather']->value["daily_forecast"]['0']["cond"]["code_d"]<=307){?>
				<div class="main-grid1-pos-rain">
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value["daily_forecast"]['0']["cond"]["code_d"]>=404&&$_smarty_tpl->tpl_vars['weather']->value["daily_forecast"]['0']["cond"]["code_d"]<=406){?>
				<div class="main-grid1-pos-sleet">
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value["daily_forecast"]['0']["cond"]["code_d"]>=400&&$_smarty_tpl->tpl_vars['weather']->value["daily_forecast"]['0']["cond"]["code_d"]<=403||$_smarty_tpl->tpl_vars['weather']->value["daily_forecast"]['0']["cond"]["code_d"]==407){?>
				<div class="main-grid1-pos-snow">
				<?php }elseif($_smarty_tpl->tpl_vars['weather']->value["daily_forecast"]['0']["cond"]["code_d"]>=501&&$_smarty_tpl->tpl_vars['weather']->value["daily_forecast"]['0']["cond"]["code_d"]<=502){?>
				<div class="main-grid1-pos-haze">
				<?php }?>
					<span> </span>
			
				</div>
				<h2><?php echo $_smarty_tpl->tpl_vars['weather']->value["now"]['tmp'];?>
<sup class="degree">°</sup><span>C</span></h2>
				<p><?php echo $_smarty_tpl->tpl_vars['weather']->value["basic"]['city'];?>
</p>
				<div class="main-grid1-grids">
					<div class="main-grid1-grid-left">
						<p><?php echo $_smarty_tpl->tpl_vars['weather']->value["daily_forecast"]['0']["tmp"]["min"];?>
<sup class="degree">°C-</sup> <?php echo $_smarty_tpl->tpl_vars['weather']->value["daily_forecast"]['0']["tmp"]["max"];?>
<sup class="degree">°C</sup></p>
						<h3>天气状况:<?php echo $_smarty_tpl->tpl_vars['weather']->value["daily_forecast"]['0']["cond"]["txt_d"];?>
</h3>
					</div>
					<div class="main-grid1-grid-right">
						<p>PM2.5:<?php echo $_smarty_tpl->tpl_vars['weather']->value["aqi"]['city']['pm25'];?>
&nbsp;&nbsp;&nbsp;空气质量:<?php echo $_smarty_tpl->tpl_vars['weather']->value["aqi"]['city']['qlty'];?>
<span style="font-size: 20px;"><?php echo $_smarty_tpl->tpl_vars['time']->value;?>
</span></p>
					</div>
					<div class="clear"> </div>
				</div>
			</div>
			<div class="main-grid2">
			<?php  $_smarty_tpl->tpl_vars['con'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['con']->_loop = false;
 $_smarty_tpl->tpl_vars['cid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['weather']->value['daily_forecast']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['con']->key => $_smarty_tpl->tpl_vars['con']->value){
$_smarty_tpl->tpl_vars['con']->_loop = true;
 $_smarty_tpl->tpl_vars['cid']->value = $_smarty_tpl->tpl_vars['con']->key;
?>
			<?php if ($_smarty_tpl->tpl_vars['cid']->value>0&&$_smarty_tpl->tpl_vars['cid']->value<5){?>
				<div class="main-grid2-left">
				<?php if ($_smarty_tpl->tpl_vars['con']->value["cond"]["code_d"]==100){?>
				<img src="<?php echo @Home_IMG;?>
weather/sun_s.png" alt=" " class="img-responsive" style="width: 50px; height: 50px;"/>
				<?php }elseif($_smarty_tpl->tpl_vars['con']->value["cond"]["code_d"]>100&&$_smarty_tpl->tpl_vars['con']->value["cond"]["code_d"]<104){?>
				<img src="<?php echo @Home_IMG;?>
weather/most_cloudy_s.png" alt=" " class="img-responsive" style="width: 50px; height: 50px;"/>
				<?php }elseif($_smarty_tpl->tpl_vars['con']->value["cond"]["code_d"]==104){?>
				<img src="<?php echo @Home_IMG;?>
weather/overcast_s.png" alt=" " class="img-responsive" style="width: 50px; height: 50px;"/>
				<?php }elseif($_smarty_tpl->tpl_vars['con']->value["cond"]["code_d"]>=200&&$_smarty_tpl->tpl_vars['con']->value["cond"]["code_d"]<=213){?>
				<img src="<?php echo @Home_IMG;?>
weather/wind_s.png" alt=" " class="img-responsive" style="width: 50px; height: 50px;"/>
				<?php }elseif($_smarty_tpl->tpl_vars['con']->value["cond"]["code_d"]>=300&&$_smarty_tpl->tpl_vars['con']->value["cond"]["code_d"]<=304||$_smarty_tpl->tpl_vars['con']->value["cond"]["code_d"]==308||$_smarty_tpl->tpl_vars['con']->value["cond"]["code_d"]==310||$_smarty_tpl->tpl_vars['con']->value["cond"]["code_d"]==311||$_smarty_tpl->tpl_vars['con']->value["cond"]["code_d"]==312){?>
				<img src="<?php echo @Home_IMG;?>
weather/storm_s.png" alt=" " class="img-responsive" style="width: 50px; height: 50px;"/>
				<?php }elseif($_smarty_tpl->tpl_vars['con']->value["cond"]["code_d"]>=305&&$_smarty_tpl->tpl_vars['con']->value["cond"]["code_d"]<=307){?>
				<img src="<?php echo @Home_IMG;?>
weather/rain_s.png" alt=" " class="img-responsive" style="width: 50px; height: 50px;"/>
				<?php }elseif($_smarty_tpl->tpl_vars['con']->value["cond"]["code_d"]>=404&&$_smarty_tpl->tpl_vars['con']->value["cond"]["code_d"]<=406){?>
				<img src="<?php echo @Home_IMG;?>
weather/sleet_s.png" alt=" " class="img-responsive" style="width: 50px; height: 50px;"/>
				<?php }elseif($_smarty_tpl->tpl_vars['con']->value["cond"]["code_d"]>=400&&$_smarty_tpl->tpl_vars['con']->value["cond"]["code_d"]<=403||$_smarty_tpl->tpl_vars['con']->value["cond"]["code_d"]==407){?>
				<img src="<?php echo @Home_IMG;?>
weather/snow_s.png" alt=" " class="img-responsive" style="width: 50px; height: 50px;"/>
				<?php }elseif($_smarty_tpl->tpl_vars['con']->value["cond"]["code_d"]>=501&&$_smarty_tpl->tpl_vars['con']->value["cond"]["code_d"]<=502){?>
				<img src="<?php echo @Home_IMG;?>
weather/haze_s.png" alt=" " class="img-responsive" style="width: 50px; height: 50px;"/>
				<?php }?>
					<p><?php echo $_smarty_tpl->tpl_vars['con']->value["date"];?>
<span><?php echo $_smarty_tpl->tpl_vars['con']->value["tmp"]['min'];?>
°C / <?php echo $_smarty_tpl->tpl_vars['con']->value["tmp"]['max'];?>
°C<sup class="degree">°</sup></span></p>
				</div><?php }?>
				<?php } ?>
				<div class="clear"> </div>
			</div>
			<div class="footer">
				
			</div>
		</div>
</body>
</html><?php }} ?>