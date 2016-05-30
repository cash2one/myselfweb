<?php /* Smarty version Smarty-3.1.6, created on 2015-11-04 17:34:12
         compiled from "C:/wamp/www/mymovie/Home/View\Index\show.html" */ ?>
<?php /*%%SmartyHeaderCode:1783656388d4e060ea9-79529601%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd42964c0ce6c8e0c82004d0eecfa0cbe65591e22' => 
    array (
      0 => 'C:/wamp/www/mymovie/Home/View\\Index\\show.html',
      1 => 1446629595,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1783656388d4e060ea9-79529601',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56388d4e9cf1d',
  'variables' => 
  array (
    'a' => 0,
    'arr' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56388d4e9cf1d')) {function content_56388d4e9cf1d($_smarty_tpl) {?><html><head>
<title><?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>
在线播放</title>
<link media="all" type="text/css" rel="stylesheet" href="<?php echo @Home_CSS;?>
show/bootstrap.min.css">
<!-- //bootstrap -->
<link rel="stylesheet" href="<?php echo @Home_CSS;?>
show/dashboard.css">
<!-- Custom Theme files -->
<link media="all" type="text/css" rel="stylesheet" href="<?php echo @Home_CSS;?>
show/style.css">
<script src="<?php echo @Home_JS;?>
show/jquery-1.11.1.min.js"></script>
<!--start-smoth-scrolling-->
<!-- fonts -->
<link type="text/css" rel="stylesheet" href="http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
<link type="text/css" rel="stylesheet" href="http://fonts.useso.com/css?family=Poiret+One">
<!-- //fonts -->

  <!-- Chang URLs to wherever Video.js files will be hosted -->
  <link href="<?php echo @Home_CSS;?>
show/video-js.css" rel="stylesheet" type="text/css">
  <!-- video.js must be in the <head> for older IEs to work. -->
  <script src="<?php echo @Home_JS;?>
show/video.js"></script>
  <script src="<?php echo @Home_JS;?>
show/jquery-1.4.2.min.js"></script>
  <script type="text/javascript">
	function fasong(){
		var message=$("#message").val();
		$.ajax({
type: "post",
url: "<?php echo @__MODULE__;?>
/Index/comment",
dataType: "text",
data: "text="+message,
 success: function(msg){

        $("#message").val('');
           $("#comment").empty();

           $("#comment").append(msg);
         }
});

	}

</script>



</head>
  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          
          <a href="index.html" class="navbar-brand"><h1><img alt="" src="<?php echo @Home_IMG;?>
logo.png"></h1></a>
        </div>
        <div class="navbar-collapse collapse" id="navbar">
			  
			<div class="header-top-right">
				<div class="file">
					
				</div>	
				<div class="signin">
					<a class="play-icon popup-with-zoom-anim" href="#small-dialog2"><?php echo $_SESSION['fusername'];?>
</a>
					<!-- pop-up-box -->
									    

									<link media="all" type="text/css" rel="stylesheet" href="<?php echo @Home_CSS;?>
show/popuo-box.css">
									
									<!--//pop-up-box -->
										
										
										
									
									
									

										
				</div>
				<div class="signin">
					<a class="play-icon popup-with-zoom-anim" href="<?php echo @__APP__;?>
/Home/manager/logout">Sign out</a>
					
				</div>
				<div class="clearfix"> </div>
			</div>
        </div>
		<div class="clearfix"> </div>
      </div>
    </nav>
        
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="margin-left: 390px;">
			<div class="show-top-grids">
				<div class="col-sm-8 single-left">
					<div class="song">
						<div class="song-info">
							<h3><?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>
</h3>	
					</div>
						<div class="video-grid" style="width: 1000px;height: 500px;">
							 <video id="example_video_1" class="video-js vjs-default-skin" controls preload="none" width="1000px" height="500px"
      poster="<?php echo @Home_IMG;?>
backgroud.png"
      data-setup="{}">
    <source src="<?php echo $_smarty_tpl->tpl_vars['a']->value['movie_file'];?>
" type='video/mp4' />

  </video>







							
						</div>
					</div>
					
					<div class="clearfix"> </div>
					<div class="published">
						
							
							<div class="load_more">	
								<ul id="myList">
									<li style="display: list-item;">
										<h4><?php echo $_smarty_tpl->tpl_vars['a']->value['catename'];?>
&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['a']->value['areaname'];?>
</h4>
										<p><?php echo $_smarty_tpl->tpl_vars['a']->value['remark'];?>
</p>
									</li>
									
								</ul>
							</div>
					</div>
					<div class="all-comments" style="width: 1000px;">
					
						<div class="media-grids" style="margin-top: 0px;" id="comment">
							<?php if ($_smarty_tpl->tpl_vars['arr']->value[0]['id']>0){?>
							<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
							
							<div class="media">
						
                <h5><?php echo $_smarty_tpl->tpl_vars['value']->value['username'];?>
</h5>
               
                <div class="media-body">
                  <p><?php echo $_smarty_tpl->tpl_vars['value']->value['text'];?>
</p>
                  <span>评论时间： <a><?php echo $_smarty_tpl->tpl_vars['value']->value['time'];?>
</a></span>
                </div>
              </div>
							<?php } ?><?php }?>
				
						</div>
					</div>

						<div class="all-comments-info" style="width: 1000px;">
					
							<div class="box">
								
									
									<textarea required=" " placeholder="Message" style="width: 1000px;" name="text" id="message"></textarea>
									<input type="submit" onclick="fasong()" value="发送">
									<div class="clearfix"> </div>
								
							</div>
						
						</div>
				</div>
				
				<div class="clearfix"> </div>
			</div>
		
		</div>
		<div class="clearfix"> </div>
	
 
  
</body></html><?php }} ?>