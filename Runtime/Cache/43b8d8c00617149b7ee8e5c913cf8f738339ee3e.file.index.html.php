<?php /* Smarty version Smarty-3.1.6, created on 2016-04-22 18:21:15
         compiled from "D:\localuser\ftp483451\Web/Home/View\movie\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1148571836b376c765-41151618%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43b8d8c00617149b7ee8e5c913cf8f738339ee3e' => 
    array (
      0 => 'D:\\localuser\\ftp483451\\Web/Home/View\\movie\\index.html',
      1 => 1461319772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1148571836b376c765-41151618',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_571836b3a4f72',
  'variables' => 
  array (
    'username' => 0,
    'level' => 0,
    'info' => 0,
    'con' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571836b3a4f72')) {function content_571836b3a4f72($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en" class="app">
<head>  
  <meta charset="utf-8" />
  <title>电影之家</title>
  
   <meta http-equiv="Access-Control-Allow-Origin" content="*">
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  
  <link rel="stylesheet" href="<?php echo @Home_CSS;?>
movie_bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo @Home_CSS;?>
movie_animate.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo @Home_CSS;?>
movie_font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo @Home_CSS;?>
movie_simple-line-icons.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo @Home_CSS;?>
movie_font.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo @Home_CSS;?>
movie_app.css" type="text/css" />  

    <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->
</head>
<body class="">
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
      <form class="navbar-form navbar-left input-s-lg m-t m-l-n-xs hidden-xs"action="<?php echo @__MODULE__;?>
/movie/search_movie" method="POST">
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-btn">
              <button type="submit" class="btn btn-sm bg-white btn-icon rounded"><i class="icon-magnifier fa-search"></i></button>
            </span>
            <input type="text" name="keywords" class="form-control input-sm no-border rounded" placeholder="输入你要寻找的片名或主演">
          </div>
        </div>
      </form>
      <div class="navbar-right ">
        <ul class="nav navbar-nav m-n hidden-xs nav-user user">
          <li class="hidden-xs">
           <!--  <a href="#" class="dropdown-toggle lt" data-toggle="dropdown">
              <i class="icon-bell"></i>
              <span class="badge badge-sm up bg-danger count">2</span>
            </a> -->
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
        <!-- /.aside -->
        <section id="content">
          <section class="hbox stretch">
            <section>
              <section class="vbox">
                <section class="scrollable padder-lg w-f-md" id="bjax-target">
                  <a href="#" class="pull-right text-muted m-t-lg" data-toggle="class:fa-spin" ><!-- <i class="icon-refresh i-lg  inline" id="refresh"></i> --></a>
                  <h2 class="font-thin m-b">最新上线 <!-- <span class="musicbar animate inline m-l-sm" style="width:20px;height:20px">
                    <span class="bar1 a1 bg-primary lter"></span>
                    <span class="bar2 a2 bg-info lt"></span>
                    <span class="bar3 a3 bg-success"></span>
                    <span class="bar4 a4 bg-warning dk"></span>
                    <span class="bar5 a5 bg-danger dker"></span>
                  </span> --></h2>
                  <div class="row row-sm">
                  <?php  $_smarty_tpl->tpl_vars['con'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['con']->_loop = false;
 $_smarty_tpl->tpl_vars['cid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['con']->key => $_smarty_tpl->tpl_vars['con']->value){
$_smarty_tpl->tpl_vars['con']->_loop = true;
 $_smarty_tpl->tpl_vars['cid']->value = $_smarty_tpl->tpl_vars['con']->key;
?>
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2" onclick="tiaozhuan(<?php echo $_smarty_tpl->tpl_vars['con']->value['id'];?>
)">
                      <div class="item">
                        <div class="pos-rlt">
                          <div class="bottom">
                            <span class="badge bg-info m-l-sm m-b-sm"><?php echo $_smarty_tpl->tpl_vars['con']->value["douban_movietime"];?>
</span>
                          </div>
                          <div class="item-overlay opacity r r-2x bg-black">
                            <div class="text-info padder m-t-sm text-sm">
                              <i><a class="text-ellipsis">豆瓣评分:<?php echo $_smarty_tpl->tpl_vars['con']->value["douban_code"];?>
</a></i>
                              
                            </div>
                            <div class="center text-center m-t-n">
                              <a class="acto"><?php echo $_smarty_tpl->tpl_vars['con']->value["douban_actor"];?>
</a>
                            </div>
                            <!-- <div class="bottom padder m-b-sm">
                              <a href="#" class="pull-right">
                                <i class="fa fa-heart-o"></i>
                              </a>
                              <a href="#">
                                <i class="fa fa-plus-circle"></i>
                              </a>
                            </div> -->
                          </div>
                          <a href="#"><img src=<?php echo $_smarty_tpl->tpl_vars['con']->value["douban_imgurl"];?>
 alt="" class="r r-2x img-full"></a>
                        </div>
                        <div class="padder-v">
                          <a href="#" class="text-ellipsis"><?php echo $_smarty_tpl->tpl_vars['con']->value["movie_name"];?>
</a>
                          
                        </div>
                      </div>
                    </div><?php } ?>
                    
                    
                   
                  </div>
              
                </section>
                
              </section>
            </section>
        
          </section>
          <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
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
<script>
function tiaozhuan(num){
  //alert(num);
  var url="<?php echo @__MODULE__;?>
/Movie/movie_detail?id="+num;
  //alert(url);
  location.href=url;
}
</script>
</body>
</html><?php }} ?>