<?php /* Smarty version Smarty-3.1.6, created on 2015-11-03 18:35:26
         compiled from "C:/wamp/www/mymovie/Home/View\Index\search.html" */ ?>
<?php /*%%SmartyHeaderCode:196385638811b023d78-00365787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd105553cf8652c4b4dc9df0dbb1a086a9600fa71' => 
    array (
      0 => 'C:/wamp/www/mymovie/Home/View\\Index\\search.html',
      1 => 1446546924,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196385638811b023d78-00365787',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5638811b73c5a',
  'variables' => 
  array (
    'arr' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5638811b73c5a')) {function content_5638811b73c5a($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- END OF DON'T TOUCH -->

<!-- Website Title -->
<title>Liquid Gem</title>
<!-- END OF Website Title -->

<!--  Website description - Change the 'content' section to whatever you want -->
<meta name="description" content="Replace this text with a summary of your website. i.e. John Smith - Web Developer and Photographer - Welcome to my portfolio website! Here you will find all of my latest work. Enjoy!">
<!-- END OF Website description -->

<!-- DON'T TOUCH THIS SECTION -->
<!-- <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700|Cookie' rel='stylesheet' type='text/css'> -->
<link rel="stylesheet" type="text/css" href="<?php echo @Home_CSS;?>
iii/style.css">
<script src="<?php echo @Home_JS;?>
iii/jquery.min.js"></script>
<script src="<?php echo @Home_JS;?>
iii/jquery.carouFredSel-5.5.2.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo @Home_JS;?>
iii/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo @Home_JS;?>
iii/jquery.form.js"></script> 
<script type="text/javascript" src="<?php echo @Home_JS;?>
iii/scripts.js"></script> 
</head>
<!-- END OF DON'T TOUCH -->

<body>
<div class="wrapper">
	<div id="top">
        <div id="logo">
            <!-- <img id="logoimage" src="<?php echo @Home_IMG;?>
logo_white.png" alt="logo"> -->	<!-- Logo image -->
            <h1 id="logotitle" href="<?php echo @__MODULE__;?>
/Index/index">Fmovie</h1> 	<!-- Logo text -->
        </div><!--/logo-->
    
        <nav>	<!-- Navigation Start -->
            <ul>
            	<li><a>&nbsp;</a></li>
                <li><a>&nbsp;</a></li>
                
            	<li><a href="<?php echo @__MODULE__;?>
/Index/index">首页</a></li>
                <li><a><?php echo $_SESSION['fusername'];?>
</a></li> </ul> 
                
        </nav>	<!-- Navigation End -->
    </div><!--/top-->
    
    
    <hr/><!-- Horizontal Line -->
    
    
   
    <section id="slideshow">	<!-- Slideshow Start -->
        <div class="html_carousel">
			<div id="slider">
            
				<div class="slide">
					<img src="<?php echo @Home_IMG;?>
iii/sliderimage1.jpg" width="3000" height="783" alt="image 1"/><!-- Replace these images with your own but make sure they are 3000px wide and 783px high or the same ration -->
				</div><!--/slide-->
                
				<div class="slide">
					<img src="<?php echo @Home_IMG;?>
iii/sliderimage2.jpg" width="3000" height="783" alt="image 2"/><!-- Replace these images with your own but make sure they are 3000px wide and 783px high or the same ration -->
				</div><!--/slide-->
                
                <div class="slide">
					<img src="<?php echo @Home_IMG;?>
iii/sliderimage3.jpg" width="3000" height="783" alt="image 3"/><!-- Replace these images with your own but make sure they are 3000px wide and 783px high or the same ration -->
				</div><!--/slide-->
                
			</div><!--/slider-->
			<div class="clearfix"></div>
		</div><!--/html_carousel-->
    </section>	<!-- Slideshow End -->
    
    
  
    <div class="clearfix"></div> <!-- Text Section End -->
    
    
    <section id="work"> <!-- Work Links Section Start -->
    	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
        <div class="item" href="<?php echo @__MODULE__;?>
/Index/show?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
        	
        	<a href="<?php echo @__MODULE__;?>
/Index/show?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><img src="../../../public/<?php echo $_smarty_tpl->tpl_vars['v']->value['sf_pic'];?>
" alt="image 4"></a><!-- Image must be 400px by 300px -->
        	<table>
        	<tbody>
        	<tr><td>&nbsp;</td><td><p>&nbsp;</p></td><!--Title--></tr>
        	<tr><td>片名:</td><td> &nbsp;&nbsp;<p><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</p></td><!--Title--></tr>
        	<tr><td>&nbsp;</td><td><p>&nbsp;</p></td><!--Title--></tr>
        	<tr><td>地区: </td><td><p><?php echo $_smarty_tpl->tpl_vars['v']->value['areaname'];?>
</p></td><!--Title--></tr>
        	<tr><td>&nbsp;</td><td><p>&nbsp;</p></td><!--Title--></tr>
        	<tr><td>类型: </td><td><p><?php echo $_smarty_tpl->tpl_vars['v']->value['catename'];?>
</p></td><!--Title--></tr>

        
        	</tbody>
        	</table>
        </div><!--/item-->
        <?php } ?>
        
        <div class="clearfix"></div>
    </section> <!-- Work Links Section End -->
    
    
   
 
   
</div>

<!-- TO MAKE THE PHP FORM WORK, ALL YOU NEED TO DO IS OPEN UP THE FILE CALLED 'submitemail.php' AND CHANGE WHERE IT SAYS 'your email goes here' -->

<!-- DON'T TOUCH THIS SECTION -->


<!-- SLIDESHOW SCRIPT START -->
<script type="text/javascript">
$("#slider").carouFredSel({
	responsive	: true,
	scroll		: {
		fx			: "crossfade",
		easing		: "swing",
		duration	: 1000,
		
	},
	items		: {
		visible		: 1,
		height		: "27%"
	}
});
</script>
<!-- SLIDESHOW SCRIPT END -->
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='utf-8'></script></div>
</body>
</html>

<!-- Thanks for looking at Liquid Gem! I hope you find it useful :) -->
<?php }} ?>