<?php /* Smarty version Smarty-3.1.6, created on 2016-04-21 10:06:03
         compiled from "D:\localuser\ftp483451\Web/Home/View\index\persional_homepage.html" */ ?>
<?php /*%%SmartyHeaderCode:2268656d80cf08e1629-99661470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42d0b9c534ae7e1753083c1635237504d4c99b73' => 
    array (
      0 => 'D:\\localuser\\ftp483451\\Web/Home/View\\index\\persional_homepage.html',
      1 => 1461051268,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2268656d80cf08e1629-99661470',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56d80cf0cea85',
  'variables' => 
  array (
    'arr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d80cf0cea85')) {function content_56d80cf0cea85($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo $_smarty_tpl->tpl_vars['arr']->value['username'];?>
的个人首页</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="<?php echo @Home_CSS;?>
per_ie/html5shiv.js"></script><![endif]-->
		
		<script type="text/javascript" src="http://code.ciphertrick.com/demo/jquerysession/js/jquerysession.js"></script>
		<script src="<?php echo @Home_JS;?>
jquery.min.js"></script>
		<script src="<?php echo @Home_JS;?>
jquery.scrollzer.min.js"></script>
		<script src="<?php echo @Home_JS;?>
jquery.scrolly.min.js"></script>
		<script src="<?php echo @Home_JS;?>
skel.min.js"></script>
		<script src="<?php echo @Home_JS;?>
skel-layers.min.js"></script>
		<script src="<?php echo @Home_JS;?>
init.js"></script>
		<script>
		
$(function(){
	var $el = $('.dialog');
	$el.hDialog();
	
	//带标题的
	$('#demo0').hDialog({title: '个人签名修改',height: 400});
	
	
	
	//错误文字提示
	$('#demo10').click(function(){
		$.tooltip('My God, 出错啦！！！');
	});
	
	//正确文字提示
	$('#demo11').click(function(){
		$.tooltip('OK, 操作成功！', 2500, true);
	});
	

	
	
	
	
});
</script>

<script>

function btn(){
	var a=$("#userid").val();
	

			$.ajax({
				type:"POST",
  			url: "<?php echo @__MODULE__;?>
/index/getuserinfo",
  			dataType: 'json',
  			data: "b="+a,
  			success: function(data){

  				var info = eval("("+data+")");  
  				$("#username").val(info.username);
  				$("#email").val(info.email);
  				document.getElementById("signature").value=info.signature;
  				
  			},
  			
});

		}



	/*	function submitBtn(){
		var a = new Array();
		a[0]=$("#userid").val();
		a[1]=$("#username").val();
		a[2]=$("#email").val();
		a[3]=document.getElementById("signature").value;
		$.ajax({
			type:"POST",
  			url: "<?php echo @__MODULE__;?>
/index/update_user_info",
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
		}*/
		
	
</script>


<script src="<?php echo @Home_JS;?>
jquery.hDialog.min.js"></script>
			<link rel="stylesheet" href="<?php echo @Home_CSS;?>
common.css"/><!-- 基本样式 -->
	<link rel="stylesheet" href="<?php echo @Home_CSS;?>
animate.min.css"/> <!-- 动画效果 -->
			<link rel="stylesheet" href="<?php echo @Home_CSS;?>
per_skel.css" />
			<link rel="stylesheet" href="<?php echo @Home_CSS;?>
per_style.css" />
			<link rel="stylesheet" href="<?php echo @Home_CSS;?>
per_style-xlarge.css" />
		
		<!--[if lte IE 8]><link rel="stylesheet" href="<?php echo @Home_CSS;?>
per_ie/v8.css" /><![endif]-->
	</head>
	<body>
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
  <!-- <div class='card-wrapper'>
    <a href='<?php echo @__MODULE__;?>
/kiosk/myweb_kiosk'>
      <div class='card bg-03'>
        <span class='card-content'>今日资讯</span>
      </div>
    </a>
  </div> -->
  <div class='card-wrapper'>
    <a href='<?php echo @__MODULE__;?>
/movie/index'>
      <div class='card bg-04'>
        <span class='card-content'>电影观看</span>
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

<div id="HBox">
			<form id="a1" method="post" action="<?php echo @__MODULE__;?>
/index/update_user_info">
				<ul class="list" style="padding-top: 5px;">
				<input type="hidden" name="id" id="userid" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['id'];?>
" class="ipt nickname" />
					<li>
						<strong >昵 称  </strong>
						<div class="fl"><input type="text" name="username" id="username" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['username'];?>
" class="ipt nickname" /></div>
					</li>
					
					<li>
						<strong >邮 箱 </strong>
						<div class="fl"><input type="text" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['email'];?>
" class="ipt email" /></div>
					</li>
					<li>
						<strong >个人签名 </strong>

						 <div class="fl"><textarea style="resize:none;height: 136px; font-size: 13px;" name="signature" id="signature" class="ipt nickname" ><?php echo $_smarty_tpl->tpl_vars['arr']->value['signature'];?>
</textarea></div>
					 </li>
					
					<!-- <li>
						<strong>爱 好 <font color="#ff0000">&nbsp;</font></strong>
						<div class="fl">
							<label class="mr10"><input type="checkbox" name="like" value="男" />男</label>
							<label class="mr10"><input type="checkbox" name="like" value="女"/>女</label>
							<label><input type="checkbox" name="like" value="都喜欢"/>都喜欢</label>
						</div>
					</li> -->
					<li style="width: 300px;"><input type="submit" value="确认提交" class="submitBtn"  style="margin-left: 50px; width: 200px;" /></li>
				</ul>
			</form>
		</div>
		<div id="wrapper">

			<!-- Header -->
				<section id="header" class="skel-layers-fixed">
					<header>
					<a href="<?php echo @__MODULE__;?>
/index/loginout"><img id="loginout" src="<?php echo @Home_IMG;?>
loginout.png"  style="width: 30px; height: 30px; margin-top: 25px;" align="right"/></a>
						<span class="image avatar"><img src="<?php echo @Home_IMG;?>
avatar.jpg" alt="" /></span>
						<h1 id="logo"><a href="#"><?php echo $_smarty_tpl->tpl_vars['arr']->value['username'];?>
</a></h1>
						<div><img id="demo0" onclick="btn()" src="<?php echo @Home_IMG;?>
paint_brush.png"  style="width: 30px; height: 30px; margin-top: 25px;" align="right"/><p style="width: 250px;" ><?php echo $_smarty_tpl->tpl_vars['arr']->value['signature'];?>
</p></div>
					</header>
					<nav id="nav">
						<ul>
							<li><a href="#one" class="active">欢迎首页</a></li>
							<!-- <li><a href="#two">Things I Can Do</a></li>
							<li><a href="#three">A Few Accomplishments</a></li>
							<li><a href="#four">Contact</a></li> -->
						</ul>
					</nav>
					<footer>



						<!-- <ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
							<li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
						</ul> -->
					</footer>
				</section>

			<!-- Main -->
				<div id="main">

					<!-- One -->
						<section id="one">
							<div class="container">
								<header class="major">
									<h2><?php echo $_smarty_tpl->tpl_vars['arr']->value['username'];?>
,在这里就是你的首页</h2>
									<p>这里有很多东西<br />
									等着你的发现 <a href="http://html5up.net">-_-</a>.</p>
								</header>
								<p>哈哈哈哈哈哈哈哈哈哈</p>
							</div>
						</section>
						
					<!-- Two -->
						<!-- <section id="two">
							<div class="container">
								<h3>Things I Can Do</h3>
								<p>Integer eu ante ornare amet commetus vestibulum blandit integer in curae ac faucibus integer non. Adipiscing cubilia elementum integer lorem ipsum dolor sit amet.</p>
								<ul class="feature-icons">
									<li class="fa-code">Write all the code</li>
									<li class="fa-cubes">Stack small boxes</li>
									<li class="fa-book">Read books and stuff</li>
									<li class="fa-coffee">Drink much coffee</li>
									<li class="fa-bolt">Lightning bolt</li>
									<li class="fa-users">Shadow clone technique</li>
								</ul>
							</div>
						</section> -->
                        
                       <!--  <div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >企业网站模板</a></div> -->
						
					<!-- Three -->
					<!-- 	<section id="three">
							<div class="container">
								<h3>A Few Accomplishments</h3>
								<p>Integer eu ante ornare amet commetus vestibulum blandit integer in curae ac faucibus integer non. Adipiscing cubilia elementum integer. Integer eu ante ornare amet commetus.</p>
								<div class="features">
									<article>
										<a href="#" class="image"><img src="<?php echo @Home_IMG;?>
pic01.jpg" alt="" /></a>
										<div class="inner">
											<h4>Possibly broke spacetime</h4>
											<p>Integer eu ante ornare amet commetus vestibulum blandit integer in curae ac faucibus integer adipiscing ornare amet.</p>
										</div>
									</article>
									<article>
										<a href="#" class="image"><img src="<?php echo @Home_IMG;?>
pic02.jpg" alt="" /></a>
										<div class="inner">
											<h4>Terraformed a small moon</h4>
											<p>Integer eu ante ornare amet commetus vestibulum blandit integer in curae ac faucibus integer adipiscing ornare amet.</p>
										</div>
									</article>
									<article>
										<a href="#" class="image"><img src="<?php echo @Home_IMG;?>
pic03.jpg" alt="" /></a>
										<div class="inner">
											<h4>Snapped dark matter in the wild</h4>
											<p>Integer eu ante ornare amet commetus vestibulum blandit integer in curae ac faucibus integer adipiscing ornare amet.</p>
										</div>
									</article>
								</div>
							</div>
						</section> -->
						
					<!-- Four -->
						<!-- <section id="four">
							<div class="container">
								<h3>Contact Me</h3>
								<p>Integer eu ante ornare amet commetus vestibulum blandit integer in curae ac faucibus integer non. Adipiscing cubilia elementum integer. Integer eu ante ornare amet commetus.</p>
								<form method="post" action="#">
									<div class="row uniform">
										<div class="6u 12u(3)"><input type="text" name="name" id="name" placeholder="Name" /></div>
										<div class="6u 12u(3)"><input type="email" name="email" id="email" placeholder="Email" /></div>
									</div>
									<div class="row uniform">
										<div class="12u"><input type="text" name="subject" id="subject" placeholder="Subject" /></div>
									</div>
									<div class="row uniform">
										<div class="12u"><textarea name="message" id="message" placeholder="Message" rows="6"></textarea></div>
									</div>
									<div class="row uniform">
										<div class="12u">
											<ul class="actions">
												<li><input type="submit" class="special" value="Send Message" /></li>
												<li><input type="reset" value="Reset Form" /></li>
											</ul>
										</div>
									</div>
								</form>
							</div>
						</section> -->
				
					<!-- Five -->
					
				<!-- 		<section id="five">
							<div class="container">
								<h3>Elements</h3>

								<section>
									<h4>Text</h4>
									<p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
									This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
									This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.</p>
									<hr />
									<header>
										<h4>Heading with a Subtitle</h4>
										<p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
									</header>
									<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
									<header>
										<h5>Heading with a Subtitle</h5>
										<p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
									</header>
									<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
									<hr />
									<h2>Heading Level 2</h2>
									<h3>Heading Level 3</h3>
									<h4>Heading Level 4</h4>
									<h5>Heading Level 5</h5>
									<h6>Heading Level 6</h6>
									<hr />
									<h5>Blockquote</h5>
									<blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
									<h5>Preformatted</h5>
									<pre><code>i = 0;

while (!deck.isInOrder()) {
    print 'Iteration ' + i;
    deck.shuffle();
    i++;
}

print 'It took ' + i + ' iterations to sort the deck.';</code></pre>
								</section> -->

							<!-- 	<section>
									<h4>Lists</h4>
									<div class="row">
										<div class="6u 12u(3)">
											<h5>Unordered</h5>
											<ul>
												<li>Dolor pulvinar etiam magna etiam.</li>
												<li>Sagittis adipiscing lorem eleifend.</li>
												<li>Felis enim feugiat dolore viverra.</li>
											</ul>
											<h5>Alternate</h5>
											<ul class="alt">
												<li>Dolor pulvinar etiam magna etiam.</li>
												<li>Sagittis adipiscing lorem eleifend.</li>
												<li>Felis enim feugiat dolore viverra.</li>
											</ul>
										</div>
										<div class="6u 12u(3)">
											<h5>Ordered</h5>
											<ol>
												<li>Dolor pulvinar etiam magna etiam.</li>
												<li>Etiam vel felis at lorem sed viverra.</li>
												<li>Felis enim feugiat dolore viverra.</li>
												<li>Dolor pulvinar etiam magna etiam.</li>
												<li>Etiam vel felis at lorem sed viverra.</li>
												<li>Felis enim feugiat dolore viverra.</li>
											</ol>
											<h5>Icons</h5>
											<ul class="icons">
												<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
												<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
												<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
												<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
												<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
												<li><a href="#" class="icon fa-tumblr"><span class="label">Tumblr</span></a></li>
											</ul>
										</div>
									</div>
									<h5>Actions</h5>
									<ul class="actions">
										<li><a href="#" class="button special">Default</a></li>
										<li><a href="#" class="button">Default</a></li>
										<li><a href="#" class="button alt">Default</a></li>
									</ul>
									<ul class="actions small">
										<li><a href="#" class="button special small">Small</a></li>
										<li><a href="#" class="button small">Small</a></li>
										<li><a href="#" class="button alt small">Small</a></li>
									</ul>
									<div class="row">
										<div class="3u 6u(2) 12u$(3)">
											<ul class="actions vertical">
												<li><a href="#" class="button special">Default</a></li>
												<li><a href="#" class="button">Default</a></li>
												<li><a href="#" class="button alt">Default</a></li>
											</ul>
										</div>
										<div class="3u 6u$(2) 12u$(3)">
											<ul class="actions vertical small">
												<li><a href="#" class="button special small">Small</a></li>
												<li><a href="#" class="button small">Small</a></li>
												<li><a href="#" class="button alt small">Small</a></li>
											</ul>
										</div>
										<div class="3u 6u(2) 12u$(3)">
											<ul class="actions vertical">
												<li><a href="#" class="button special fit">Default</a></li>
												<li><a href="#" class="button fit">Default</a></li>
												<li><a href="#" class="button alt fit">Default</a></li>
											</ul>
										</div>
										<div class="3u 6u$(2) 12u$(3)">
											<ul class="actions vertical small">
												<li><a href="#" class="button special small fit">Small</a></li>
												<li><a href="#" class="button small fit">Small</a></li>
												<li><a href="#" class="button alt small fit">Small</a></li>
											</ul>
										</div>
									</div>
								</section>

								<section>
									<h4>Table</h4>
									<h5>Default</h5>
									<div class="table-wrapper">
										<table>
											<thead>
												<tr>
													<th>Name</th>
													<th>Description</th>
													<th>Price</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Item One</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Two</td>
													<td>Vis ac commodo adipiscing arcu aliquet.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Three</td>
													<td> Morbi faucibus arcu accumsan lorem.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Four</td>
													<td>Vitae integer tempus condimentum.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Five</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td colspan="2"></td>
													<td>100.00</td>
												</tr>
											</tfoot>
										</table>
									</div>
									
									<h5>Alternate</h5>
									<div class="table-wrapper">
										<table class="alt">
											<thead>
												<tr>
													<th>Name</th>
													<th>Description</th>
													<th>Price</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Item One</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Two</td>
													<td>Vis ac commodo adipiscing arcu aliquet.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Three</td>
													<td> Morbi faucibus arcu accumsan lorem.</td>
													<td>29.99</td>
												</tr>
												<tr>
													<td>Item Four</td>
													<td>Vitae integer tempus condimentum.</td>
													<td>19.99</td>
												</tr>
												<tr>
													<td>Item Five</td>
													<td>Ante turpis integer aliquet porttitor.</td>
													<td>29.99</td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<td colspan="2"></td>
													<td>100.00</td>
												</tr>
											</tfoot>
										</table>
									</div>
								</section>

								<section>
									<h4>Buttons</h4>
									<ul class="actions">
										<li><a href="#" class="button special">Special</a></li>
										<li><a href="#" class="button">Default</a></li>
										<li><a href="#" class="button alt">Alternate</a></li>
									</ul>
									<ul class="actions">
										<li><a href="#" class="button special big">Big</a></li>
										<li><a href="#" class="button">Default</a></li>
										<li><a href="#" class="button alt small">Small</a></li>
									</ul>
									<ul class="actions fit">
										<li><a href="#" class="button special fit">Fit</a></li>
										<li><a href="#" class="button fit">Fit</a></li>
										<li><a href="#" class="button alt fit">Fit</a></li>
									</ul>
									<ul class="actions fit small">
										<li><a href="#" class="button special fit small">Fit + Small</a></li>
										<li><a href="#" class="button fit small">Fit + Small</a></li>
										<li><a href="#" class="button alt fit small">Fit + Small</a></li>
									</ul>
									<ul class="actions">
										<li><a href="#" class="button special icon fa-download">Icon</a></li>
										<li><a href="#" class="button icon fa-download">Icon</a></li>
										<li><a href="#" class="button alt icon fa-check">Icon</a></li>
									</ul>
									<ul class="actions">
										<li><span class="button special disabled">Special</span></li>
										<li><span class="button disabled">Default</span></li>
										<li><span class="button alt disabled">Alternate</span></li>
									</ul>
								</section>

								<section>
									<h4>Form</h4>
									<form method="post" action="#">
										<div class="row uniform">
											<div class="6u 12u(3)">
												<input type="text" name="demo-name" id="demo-name" value="" placeholder="Name" />
											</div>
											<div class="6u 12u(3)">
												<input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />
											</div>
										</div>
										<div class="row uniform">
											<div class="12u">
												<div class="select-wrapper">
													<select name="demo-category" id="demo-category">
														<option value="">- Category -</option>
														<option value="1">Manufacturing</option>
														<option value="1">Shipping</option>
														<option value="1">Administration</option>
														<option value="1">Human Resources</option>
													</select>
												</div>
											</div>
										</div>
										<div class="row uniform">
											<div class="4u 12u(2)">
												<input type="radio" id="demo-priority-low" name="demo-priority" checked>
												<label for="demo-priority-low">Low Priority</label>
											</div>
											<div class="4u 12u(2)">
												<input type="radio" id="demo-priority-normal" name="demo-priority">
												<label for="demo-priority-normal">Normal Priority</label>
											</div>
											<div class="4u 12u(2)">
												<input type="radio" id="demo-priority-high" name="demo-priority">
												<label for="demo-priority-high">High Priority</label>
											</div>
										</div>
										<div class="row uniform">
											<div class="6u 12u(2)">
												<input type="checkbox" id="demo-copy" name="demo-copy">
												<label for="demo-copy">Email me a copy of this message</label>
											</div>
											<div class="6u 12u(2)">
												<input type="checkbox" id="demo-human" name="demo-human" checked>
												<label for="demo-human">I am a human and not a robot</label>
											</div>
										</div>
										<div class="row uniform">
											<div class="12u">
												<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
											</div>
										</div>
										<div class="row uniform">
											<div class="12u">
												<ul class="actions">
													<li><input type="submit" value="Send Message" /></li>
													<li><input type="reset" value="Reset" class="alt" /></li>
												</ul>
											</div>
										</div>
									</form>
								</section>

								<section>
									<h4>Image</h4>
									<h5>Fit</h5>
									<span class="image fit"><img src="<?php echo @Home_IMG;?>
banner.jpg" alt="" /></span>
									<div class="box alt">
										<div class="row 50% uniform">
											<div class="4u"><span class="image fit"><img src="<?php echo @Home_IMG;?>
pic01.jpg" alt="" /></span></div>
											<div class="4u"><span class="image fit"><img src="<?php echo @Home_IMG;?>
pic02.jpg" alt="" /></span></div>
											<div class="4u"><span class="image fit"><img src="<?php echo @Home_IMG;?>
pic03.jpg" alt="" /></span></div>
										</div>
										<div class="row 50% uniform">
											<div class="4u"><span class="image fit"><img src="<?php echo @Home_IMG;?>
pic02.jpg" alt="" /></span></div>
											<div class="4u"><span class="image fit"><img src="<?php echo @Home_IMG;?>
pic03.jpg" alt="" /></span></div>
											<div class="4u"><span class="image fit"><img src="<?php echo @Home_IMG;?>
pic01.jpg" alt="" /></span></div>
										</div>
										<div class="row 50% uniform">
											<div class="4u"><span class="image fit"><img src="<?php echo @Home_IMG;?>
pic03.jpg" alt="" /></span></div>
											<div class="4u"><span class="image fit"><img src="<?php echo @Home_IMG;?>
pic01.jpg" alt="" /></span></div>
											<div class="4u"><span class="image fit"><img src="<?php echo @Home_IMG;?>
pic02.jpg" alt="" /></span></div>
										</div>
									</div>
									<h5>Left &amp; Right</h5>
									<p><span class="image left"><img src="<?php echo @Home_IMG;?>
avatar.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
									<p><span class="image right"><img src="<?php echo @Home_IMG;?>
avatar.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
								</section>
 -->
							</div>
						</section>
					
				
				</div>

			<!-- Footer -->
				<!-- <section id="footer">
					<div class="container">
						<ul class="copyright">
							<li>&copy; Untitled. All rights reserved.</li><li>More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></li>
						</ul>
					</div>
				</section> -->
			
		</div>
	</body>
</html><?php }} ?>