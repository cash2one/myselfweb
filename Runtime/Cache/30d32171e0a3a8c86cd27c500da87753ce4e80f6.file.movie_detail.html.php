<?php /* Smarty version Smarty-3.1.6, created on 2016-04-22 18:21:50
         compiled from "D:\localuser\ftp483451\Web/Home/View\Movie\movie_detail.html" */ ?>
<?php /*%%SmartyHeaderCode:234355719fb3e8b7a94-59522689%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30d32171e0a3a8c86cd27c500da87753ce4e80f6' => 
    array (
      0 => 'D:\\localuser\\ftp483451\\Web/Home/View\\Movie\\movie_detail.html',
      1 => 1461320442,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '234355719fb3e8b7a94-59522689',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'username' => 0,
    'level' => 0,
    'arr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5719fb3ea7b5e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5719fb3ea7b5e')) {function content_5719fb3ea7b5e($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en" class="app js no-touch no-android no-chrome firefox no-iemobile no-ie no-ie8 no-ie10 no-ie11 no-ios no-ios7 ipad js no-touch no-android no-chrome firefox no-iemobile no-ie no-ie8 no-ie10 no-ie11 no-ios no-ios7 ipad js no-touch no-android no-chrome firefox no-iemobile no-ie no-ie8 no-ie10 no-ie11 no-ios no-ios7 ipad js no-touch no-android no-chrome firefox no-iemobile no-ie no-ie8 no-ie10 no-ie11 no-ios no-ios7 ipad js no-touch no-android no-chrome firefox no-iemobile no-ie no-ie8 no-ie10 no-ie11 no-ios no-ios7 ipad js no-touch no-android no-chrome firefox no-iemobile no-ie no-ie8 no-ie10 no-ie11 no-ios no-ios7 ipad js no-touch no-android no-chrome firefox no-iemobile no-ie no-ie8 no-ie10 no-ie11 no-ios no-ios7 ipad js no-touch no-android no-chrome firefox no-iemobile no-ie no-ie8 no-ie10 no-ie11 no-ios no-ios7 ipad js no-touch no-android no-chrome firefox no-iemobile no-ie no-ie8 no-ie10 no-ie11 no-ios no-ios7 ipad js no-touch no-android no-chrome firefox no-iemobile no-ie no-ie8 no-ie10 no-ie11 no-ios no-ios7 ipad js no-touch no-android no-chrome firefox no-iemobile no-ie no-ie8 no-ie10 no-ie11 no-ios no-ios7 ipad"><head>  
  <meta charset="utf-8">
  <title>电影仓库</title>
  <meta content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" name="description">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
  
  <link type="text/css" href="<?php echo @Home_CSS;?>
bootstrap1.css" rel="stylesheet">
  <link type="text/css" href="<?php echo @Home_CSS;?>
movie_animate.css" rel="stylesheet">
  <link type="text/css" href="<?php echo @Home_CSS;?>
movie_font-awesome.min.css" rel="stylesheet">
  <link type="text/css" href="<?php echo @Home_CSS;?>
movie_simple-line-icons.css" rel="stylesheet">
  <link type="text/css" href="<?php echo @Home_CSS;?>
movie_font.css" rel="stylesheet">
  <link type="text/css" href="<?php echo @Home_CSS;?>
app1.css" rel="stylesheet">  
    <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->
</head>
<body class="">
<!-- /.侧边aside -->
  <section class="vbox">
    <header class="bg-white-only header header-md navbar navbar-fixed-top-xs">
      <div class="navbar-header aside bg-info nav-xs">
        <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html">
          <i class="icon-list"></i>
        </a>
        <a href="index.html" class="navbar-brand text-lt">
          <i class="icon-earphones"></i>
          <img src="<?php echo @Home_IMG;?>
logo.png" alt="." class="hide">
          <span class="hidden-nav-xs m-l-sm">个人影院</span>
        </a>
        <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user">
          <i class="icon-settings"></i>
        </a>
      </div>      <ul class="nav navbar-nav hidden-xs">
        <li>
           <a href="#nav,.navbar-header" data-toggle="class:nav-xs,nav-xs" class="text-muted">
            <i class="icon-arrow-right fa-indent text"></i>
            <i class="icon-arrow-left fa-dedent text-active"></i>
          </a>
        </li>
      </ul>
    
      <div class="navbar-right ">
        <ul class="nav navbar-nav m-n hidden-xs nav-user user">
          <li class="hidden-xs">
            <a href="#" class="dropdown-toggle lt" data-toggle="dropdown">
              <i class="icon-bell"></i>
              <span class="badge badge-sm up bg-danger count">2</span>
            </a>
            <section class="dropdown-menu aside-xl animated fadeInUp">
              <section class="panel bg-white">
                <div class="panel-heading b-light bg-light">
                  <strong>You have <span class="count">2</span> notifications</strong>
                </div>
                <div class="list-group list-group-alt">
                  <a href="#" class="media list-group-item">
                    <span class="pull-left thumb-sm">
                      <img src="<?php echo @Home_IMG;?>
a0.png" alt="..." class="img-circle">
                    </span>
                    <span class="media-body block m-b-none">
                      Use awesome animate.css<br>
                      <small class="text-muted">10 minutes ago</small>
                    </span>
                  </a>
                  <a href="#" class="media list-group-item">
                    <span class="media-body block m-b-none">
                      1.0 initial released<br>
                      <small class="text-muted">1 hour ago</small>
                    </span>
                  </a>
                </div>
                <div class="panel-footer text-sm">
                  <a href="#" class="pull-right"><i class="fa fa-cog"></i></a>
                  <a href="#notes" data-toggle="class:show animated fadeInRight">See all the notifications</a>
                </div>
              </section>
            </section>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle bg clear" data-toggle="dropdown">
              <span class="thumb-sm avatar pull-right m-t-n-sm m-b-n-sm m-l-sm">
                <img src="<?php echo @Home_IMG;?>
a0.png" alt="...">
              </span>
              <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
 <b class="caret"></b>
            </a>
            <ul class="dropdown-menu animated fadeInRight">            
              <!-- <li>
                <span class="arrow top"></span>
                <a href="#">Settings</a>
              </li>
              <li>
                <a href="profile.html">Profile</a>
              </li>
              <li>
                <a href="#">
                  <span class="badge bg-danger pull-right">3</span>
                  Notifications
                </a>
              </li>
              <li>
                <a href="docs.html">Help</a>
              </li>
              <li class="divider"></li> -->
              <li>
                <a href="<?php echo @__MODULE__;?>
/index/loginout"  >注销</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>      
    </header>
    <section>
      <section class="hbox stretch">
        <!-- .aside -->
        <aside class="bg-black dk nav-xs aside hidden-print" id="nav">          
          <section class="vbox">
            <section class="w-f-md scrollable">
              <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railOpacity="0.2">
                


                <!-- nav -->                 
                <nav class="nav-primary hidden-xs">
                  <ul class="nav bg clearfix">
                    <li class="hidden-nav-xs padder m-t m-b-sm text-xs text-muted">
                      Discover
                    </li>
                    <!-- <li>
                      <a href="index.html">
                        <i class="icon-disc icon text-success"></i>
                        <span class="font-bold">搜索结果</span>
                      </a>
                    </li> -->
                    
                  <!--   <li>
                      <a href="<?php echo @__MODULE__;?>
/movie/movie_xiangqing" data-target="#content" data-el="#bjax-el" data-replace="true">
                        <i class="icon-social-youtube icon  text-primary"></i>
                        <span class="font-bold">视频</span>
                      </a>
                    </li> --><?php if ($_smarty_tpl->tpl_vars['level']->value>=100){?>
                    <li>
                      <a href="<?php echo @__MODULE__;?>
/movie/add_movie">
                        <i class="icon-drawer icon text-primary-lter"></i>
                        <span class="font-bold">添加电影</span>
                      </a>
                    </li><?php }?>
                  </ul>
                
                  
                </nav>
                <!-- / nav -->
              </div>
            </section>
            
            <footer class="footer hidden-xs no-padder text-center-nav-xs">
              <div class="bg hidden-xs ">
                  <div class="dropdown dropup wrapper-sm clearfix">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <span class="thumb-sm avatar pull-left m-l-xs">                        
                        <img src="<?php echo @Home_IMG;?>
a3.png" class="dker" alt="...">
                        <i class="on b-black"></i>
                      </span>
                      <span class="hidden-nav-xs clear">
                        <span class="block m-l">
                          <strong class="font-bold text-lt"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</strong> 
                          <b class="caret"></b>
                        </span>
                        <span class="text-muted text-xs block m-l">Art Director</span>
                      </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight aside text-left">                      
                      <!-- <li>
                        <span class="arrow bottom hidden-nav-xs"></span>
                        <a href="#">Settings</a>
                      </li>
                      <li>
                        <a href="profile.html">Profile</a>
                      </li>
                      <li>
                        <a href="#">
                          <span class="badge bg-danger pull-right">3</span>
                          Notifications
                        </a>
                      </li>
                      <li>
                        <a href="docs.html">Help</a>
                      </li>
                      <li class="divider"></li> -->
                      <li>
                        <a href="<?php echo @__MODULE__;?>
/index/loginout"  >注销</a>
                      </li>
                    </ul>
                  </div>
                </div>            </footer>
          </section>
        </aside>
        <!-- /.侧边aside -->
        <section id="content">
          <section class="hbox stretch">
            <section>
              <section class="vbox">
                <section class="scrollable padder-lg w-f-md" id="bjax-target"><div id="yass_top_edge_dummy" style="width: 1px; height: 1px; padding: 0px; margin: -1px 0px 0px; border-width: 0px; display: block;"></div><div id="yass_top_edge" style="background-image: url(&quot;chrome://yass/content/edgebgtop.png&quot;); background-attachment: scroll; background-position: center bottom; padding: 0px; margin: 0px; border-width: 0px; height: 0px; display: block; width: 1px;"></div>
                  
                  <h2 class="font-thin m-b">影片详情</h2>
                  <div class="row row-sm" style="margin-left: 15%; width: 70%;">
                    
                    <div style="left: 30px; width: 30%; margin-top: 3%;" class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                      <div class="item">
                        <div class="pos-rlt">
                          
                          <img src=<?php echo $_smarty_tpl->tpl_vars['arr']->value['0']['douban_imgurl'];?>
 alt="" class="r r-2x img-full" style="width: 100%; height: 360px;">
                        </div>
						<div class="table-title">
                         <a class="text-ellipsis2">用法:将在线观看地址拷贝到potplayer中,用它进行在线观看.</a><a class="text-ellipsis2">具体用法</a>
                        </div>
						<div class="padder-v">
                          <a class="text-ellipsis1 text-xs text-muted">在线观看链接:</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="text-ellipsis2"><?php echo $_smarty_tpl->tpl_vars['arr']->value['0']['download_url'];?>
</a>
                        </div>
                        
                      </div>
                      
                      
                    </div><div class="col-xs-6 col-sm-4 col-md-3 col-lg-2" style="left:2%; width: 70%; margin-top: 3%;">
                      <div class="item">
                        <div class="pos-rlt">
                          
                       <div class="mydesign"><a class="text-ellipsis1 text-xs text-muted">片名:</a><a class="text-ellipsis2"><?php echo $_smarty_tpl->tpl_vars['arr']->value['0']['movie_name'];?>
</a></div>
						<div class="mydesign"><a class="text-ellipsis1 text-xs text-muted">地区:</a><a class="text-ellipsis2"><?php echo $_smarty_tpl->tpl_vars['arr']->value['0']['douban_area'];?>
</a></div>
						<div class="mydesign"><a class="text-ellipsis1 text-xs text-muted">类型:</a><a class="text-ellipsis2"><?php echo $_smarty_tpl->tpl_vars['arr']->value['0']['douban_type'];?>
</a></div>
								<div class="mydesign" style="height: 25px;"><a class="text-ellipsis1 text-xs text-muted">导演:</a><a class="text-ellipsis2"><?php echo $_smarty_tpl->tpl_vars['arr']->value['0']['douban_director'];?>
</a></div>
<div class="mydesign"><a class="text-ellipsis1 text-xs text-muted">主演:</a><a class="text-ellipsis2"><?php echo $_smarty_tpl->tpl_vars['arr']->value['0']['douban_actor'];?>
</a></div>
<div class="mydesign" style="margin-top: 22px;"><a class="text-ellipsis1 text-xs text-muted" >上映日期:</a><a class="text-ellipsis2"><?php echo $_smarty_tpl->tpl_vars['arr']->value['0']['douban_uptime'];?>
</a></div>
<div class="mydesign"><a class="text-ellipsis1 text-xs text-muted">片长:</a><a class="text-ellipsis2"><?php echo $_smarty_tpl->tpl_vars['arr']->value['0']['douban_movietime'];?>
</a></div>
<div class="mydesign" style="height: 15px;"><a class="text-ellipsis1 text-xs text-muted">简介:</a></div><div class="mydesigntextarea"><a class="text-ellipsis2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['arr']->value['0']['douban_synopsis'];?>
</a></div>
                        </div>
                        
                      </div>
                      
                      
                    </div>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                  </div>
                  
                  
                <div id="yass_bottom_edge" style="background-image: url(&quot;chrome://yass/content/edgebgbot.png&quot;); background-position: 0px 0px; position: absolute; margin: 0px; padding: 0px; border-width: 0px; height: 0px; left: 0px; top: 646px; width: 100%; display: block;"></div></section>
  
  
                
              </section>
            </section>
            <!-- side content -->
            
            <!-- / side content -->
          </section>
          <a data-target="#nav,html" data-toggle="class:nav-off-screen,open" class="hide nav-off-screen-block" href="#"></a>
        </section>
      </section>
    </section>    
  </section>
 <script src="<?php echo @Home_JS;?>
jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?php echo @Home_JS;?>
movie_bootstrap.js"></script>
  <!-- App -->
  <script src="<?php echo @Home_JS;?>
movie_app.js"></script>  
  <script src="<?php echo @Home_JS;?>
movie_slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo @Home_JS;?>
movie_app.plugin.js"></script>

  <script type="text/javascript" src="<?php echo @Home_JS;?>
movie_jPlayer/demo.js"></script>


</body></html><?php }} ?>