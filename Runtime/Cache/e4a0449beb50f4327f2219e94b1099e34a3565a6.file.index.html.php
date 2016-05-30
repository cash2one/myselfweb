<?php /* Smarty version Smarty-3.1.6, created on 2016-01-19 10:30:18
         compiled from "E:\wamp\mymovie/Home/View\index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:9190569d909d9dadf3-22394555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4a0449beb50f4327f2219e94b1099e34a3565a6' => 
    array (
      0 => 'E:\\wamp\\mymovie/Home/View\\index\\index.html',
      1 => 1453170613,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9190569d909d9dadf3-22394555',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_569d909da4841',
  'variables' => 
  array (
    'zhishiyuedu_daily' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569d909da4841')) {function content_569d909da4841($_smarty_tpl) {?><!DOCTYPE html>
<!-- saved from url=(0028)http://www.chinaz.com/start/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="<?php echo @Home_CSS;?>
common.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="<?php echo @Home_CSS;?>
index/base.css">
<link type="text/css" rel="stylesheet" href="<?php echo @Home_CSS;?>
index/common.css">
<link type="text/css" rel="stylesheet" href="<?php echo @Home_CSS;?>
index/dialog.css">
<link type="text/css" rel="stylesheet" href="<?php echo @Home_CSS;?>
index/topbar.css">
<script src="<?php echo @Home_JS;?>
index/chinaz.js"></script>
<script src="<?php echo @Home_JS;?>
index/common.js"></script>
<script src="<?php echo @Home_JS;?>
index/config.js"></script>
<script src="<?php echo @Home_JS;?>
index/fet.js"></script>
<script src="<?php echo @Home_JS;?>
index/jquery-1.10.2.min.js"></script>
<script src="<?php echo @Home_JS;?>
index/repos.js"></script>
<script src="<?php echo @Home_JS;?>
index/uc1.js"></script>

<body>
<!--head Star -->
<div id="head">
  

  <div class="main">
    <!--mtb10 Star -->

    <!--mtb10 End -->
    <!--menuBox Star -->
			<div class="menuBox">
				<ul class="main_navi clearfix">
					<li class=""><a href="http://www.chinaz.com">首页<i></i></a></li>
					<li><a href="http://www.chinaz.com/news/">业界<i></i></a></li>
					<li><a href="http://www.chinaz.com/web/">建站<i></i></a></li>
					<li class="current"><a href="http://www.chinaz.com/start/">创业<i></i></a></li>
					<li><a href="http://www.chinaz.com/biz/">电商<i></i></a></li>
					<li><a href="http://www.chinaz.com/manage/">运营<i></i></a></li>
					<li><a href="http://www.chinaz.com/website/">好站<i></i></a></li>
					<li><a href="http://www.chinaz.com/mobile/">移动<i></i></a></li>
					<li><a href="http://www.chinaz.com/game/">游戏<i></i></a></li>
					<li><a href="http://www.chinaz.com/design/">设计<i></i></a></li>
					<li><a href="http://www.chinaz.com/special/">专题</a></li>
				</ul>
			</div>
<!--menuBox End -->

			


     
    
  

<!--head End -->
<!--content Star -->
<div id="content" style="padding-top: 20px;">
  <div class="main clearfix">
    <div class="w690 fl">
      <div class="listsTxtMainBar pt0 ">
		 <h3 class="listsHbar clearfix">
				 <ul>
													<li><a href="http://www.chinaz.com/start/review/">芝士阅读-每日</a></li>
													<li><a href="http://www.chinaz.com/start/experience/">经验</a></li>
													<li><a href="http://www.chinaz.com/start/app/">App</a></li>
													<li><a href="http://www.chinaz.com/start/model/">模式</a></li>
													<li><a href="http://www.chinaz.com/start/money/">资本</a></li>
													<li><a href="http://www.chinaz.com/start/policy/">政策</a></li>
														</ul>
							
					</h3>
					
        <div class="txtBar  pd15 bgf">
          <!--tabTitleBar Star-->
          <div class="newsRankBar mb20">
            <div class="newsListBar current">
              <div class="topicsImgTxtBar">
                                <ul class="imgTxtBar clearfix imgTxtBar-b">
                                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['zhishiyuedu_daily']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
              			                    <li class="ptb25">
                    <div class="clearfix">
                      <div class="w170 fl"><a href="http://www.chinaz.com/start/2016/0118/497065.shtml"> <img width="120" height="92" alt=<?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
 src=<?php echo $_smarty_tpl->tpl_vars['value']->value->img;?>
> </a> </div>                      <div>
                        <h3 class="fz18 YaHei fbold"><a target="_blank" href="http://www.chinaz.com/start/2016/0118/497065.shtml" title="<?php echo $_smarty_tpl->tpl_vars['value']->value->author;?>
：<?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value->author;?>
：<?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
</a></h3>
                        <div class="txtBox">
                          <div class="txt">
                           
                            <p class="gray-5  pt10"><?php echo $_smarty_tpl->tpl_vars['value']->value->recommend;?>
</p>
                          </div>
                        </div>
                      </div>
                                        </div></li><?php } ?>
				  			                    
				                  </ul>
              </div>
            </div>
          </div>
          <!--tabTitleBar End-->
          <div class="pagecon tc clearfix ptb25">
            <!--pageBar Star-->
            <div class="pageBar fr ">
            <li><a class="prev disable" href="javascript:void(0);">上一页</a></li><li><a class="now" href="javascript:void(0);">1</a></li><li><a href="http://www.chinaz.com/start/index_2.shtml">2</a></li><li><a href="http://www.chinaz.com/start/index_3.shtml">3</a></li><li><a href="http://www.chinaz.com/start/index_4.shtml">4</a></li><li><a href="http://www.chinaz.com/start/index_5.shtml">5</a></li><li><a href="http://www.chinaz.com/start/index_6.shtml">6</a></li><li><a href="http://www.chinaz.com/start/index_20.shtml">... 20</a></li><li><a class="next" href="http://www.chinaz.com/start/index_2.shtml">下一页</a></li>	
            </div>
            <!--pageBar End-->
          </div>
        </div>
      </div>
    </div>
    <div class="w300 fr">
      <div>


        <div id="bdcs"><div class="bdcs-container"><meta content="IE=9" http-equiv="x-ua-compatible">   <!-- 嵌入式 -->  <div id="default-searchbox" class="bdcs-main bdcs-clearfix">      <div id="bdcs-search-inline" class="bdcs-search bdcs-clearfix">          <form id="bdcs-search-form" autocomplete="off" class="bdcs-search-form" target="_blank" method="get" action="http://so.chinaz.com/cse/search">              <input type="hidden" value="13215756937974215344" name="s">              <input type="hidden" value="1" name="entry">                                                                        <input type="text" placeholder="请输入关键词" id="bdcs-search-form-input" class="bdcs-search-form-input" name="q" autocomplete="off" style="height: 34px; line-height: 34px;">              <input type="submit" value="搜索" id="bdcs-search-form-submit" class="bdcs-search-form-submit bdcs-search-form-submit-magnifier">                       </form>      </div>                <div id="bdcs-search-sug" class="bdcs-search-sug" style="top: 156px; width: 267px;">              <ul id="bdcs-search-sug-list" class="bdcs-search-sug-list"></ul>          </div>                  </div>                      
      
					<div class="tabTitleBar mt20 bgf borderTred">
						<div class="borderTnone pb10 YaHei">
							<h3 class="titleMain titleMain-b red"><span class="txt pl10">分类点击榜</span></h3>
							<ul class="newsRankList newsRankList-in"><li><em class="no1">1</em><a title="罗辑思维的“地下江湖”" target="_blank" href="http://www.chinaz.com/start/2015/1231/490718.shtml">罗辑思维的“地下江湖”</a>
                </li>
                </ul>						</div>
					</div>
					<!--tabTitleBar End-->
					
<div class="borderTred mt20">
<!--cnzz tui-->
	<script src="http://tui.cnzz.net/cs.php?id=1000094222" charset="utf-8" c="gd" type="text/javascript"></script><div style="display:block;float:none;border:0 none;margin:0;padding:0;visibility:visible;overflow:visible;*zoom:1;position:relative;z-index:1;" id="aliyun_cnzz_tui_1000094222"><iframe frameborder="0" allowtransparency="true" scrolling="no" style="float: none; display: block; overflow: hidden; z-index: 2147483646; margin: 0px; padding: 0px; border: 0px none; background: transparent none repeat scroll 0% 0%; height: 503px; width: 300px;"></iframe></div>
<!--cnzz tui-->
		</div>	
<!--tabTitleBar Star-->
					<div class="tabTitleBar mt20 bgf borderTred">
						<div class="borderTnone pb10 YaHei">
							<h3 class="titleMain titleMain-b red"><span class="txt pl10">分类评论榜</span></h3>
							<ul class="newsRankList newsRankList-in"><li><em class="no1">1</em><a title="被饿了么、美团和百度外卖联合封杀是种什么体验？" target="_blank" href="http://www.chinaz.com/start/2016/0113/494646.shtml">被饿了么、美团和百度外卖联合封杀是种什么体验？</a>
                </li></ul>						</div>
					</div>
					<!--tabTitleBar End-->
 
<div class="mt20 newFixedBox" style="position: static; top: 0px;"> 


<script type="text/javascript" src="http://cpro.baidustatic.com/cpro/ui/c.js"></script>
</div>
 
 
 
    </div>
  </div>
</div>
<!--content End -->
<!--footer Star -->
	<div id="footer">
		<div class="main">
			<p>
	<a href="http://www.chinaz.com/aboutus/index.html" target="_blank">关于站长之家</a> - 
    <a href="http://ww.chinaz.com/aboutus/contact.php?from=news" target="_blank">联系我们</a> - 
    <a href="http://www.chinaz.com/aboutus/ad.html" target="_blank">广告服务</a> - 
    <a href="http://www.chinaz.com/aboutus/link.html" target="_blank">友情链接</a> - 
	<a href="http://www.chinaz.com/aboutus/announce.html" target="_blank">版权声明</a> - 
    <a href="http://www.chinaz.com/aboutus/join.html" target="_blank">人才招聘</a> - 
	 <a href="http://www.chinaz.com/aboutus/events.html" target="_blank">网站动态</a> - 
    <a href="http://www.chinaz.com/aboutus/help.html" target="_blank">帮助</a> - 
	<!--<a href="#">iPhone客户端</a>-<a href="#">Android客户端</a>- --><a href="http://m.chinaz.com" target="_blank">手机版</a>
			</p>
			<p>增值电信业务经营许可证: 闽B2-20070004号 - <a href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=35020302000061" rel="nofollow" target="_blank"><img src="http://img.chinaz.com/ghs.png">闽公网安备 35020302000061号</a><!--北京公安局网监中心备案号: 11010502020695号--> - <a href="http://www.miitbeian.gov.cn" target="_blank">闽ICP备08105208号</a></p>
			<p>&copy;CopyRight 2002-2016 CHINAZ.COM Inc All Rights Reserved. 站长之家 版权所有</p>
			<p class="mt10"><a target="_blank" href="http://www.cmstop.com" class="poweredby"><img width="90" height="32" style="vertical-align: inherit;" src="http://img.chinaz.com/templates/2015theme/images/icon/poweredby.gif"></a><!--可信网站图片LOGO安装开始--><script src="https://kxlogo.knet.cn/seallogo.dll?sn=e12020335020010628301467&amp;size=3"></script><a style="display:inline-block;position:relative;width:89px;height:32px;" kx_type="缩放式" target="_blank" href="https://ss.knet.cn/verifyseal.dll?sn=e12020335020010628301467&amp;ct=df&amp;a=1&amp;pa=0.4460101301369932"><img width="89" height="32" style="left:0;position:absolute;top:0;border:none;" onmouseout="showMin(this)" onmouseover="showFull(this)" w="89" h="32" src="https://ss.knet.cn/static/images/logo/cnnic.png"></a><!--可信网站图片LOGO安装结束--></p>		
		</div>
	</div>
<!--footer End -->
<script src="http://my.chinaz.com/js/uc1.js" type="text/javascript"></script><script charset="utf-8" src="http://my.chinaz.com/api/account/topbar?proxy=/httpproxy.aspx" type="text/javascript"></script><link rel="Stylesheet" type="text/css" href="http://img.chinaz.com/max-templates/passport/styles/topbar.css"><link rel="Stylesheet" type="text/css" href="http://img.chinaz.com/max-templates/default/styles/dialog.css"><script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan style='display:none;' id='cnzz_stat_icon_433095'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s9.cnzz.com/stat.php%3Fid%3D433095' type='text/javascript'%3E%3C/script%3E"));</script><span id="cnzz_stat_icon_433095" style="display:none;"><a title="站长统计" target="_blank" href="http://www.cnzz.com/stat/website.php?web_id=433095">站长统计</a></span><script type="text/javascript" src=" http://s9.cnzz.com/stat.php?id=433095"></script><script type="text/javascript" charset="utf-8" src="http://c.cnzz.com/core.php?web_id=433095&amp;t=z"></script>


<div style="display:none;"><script language="JavaScript" src="http://s11.cnzz.com/stat.php?id=1254679775&amp;web_id=1254679775"></script><script type="text/javascript" charset="utf-8" src="http://c.cnzz.com/core.php?web_id=1254679775&amp;t=z"></script><a title="站长统计" target="_blank" href="http://www.cnzz.com/stat/website.php?web_id=1254679775">站长统计</a>

</div>

<script type="text/javascript">
  (function(){
    var adScript = document.createElement('script');
    adScript.src = 'http://img.chinaz.com/js/chinaz.js';
    document.getElementsByTagName('head')[0].appendChild(adScript);
  })();
</script>



<div id="gotop" class="gotop hide" style="left: auto; display: none;"> <a class="cz-weixin" href="javascript:;"></a>
  <div class="cz-weixin-con hide">
    <h2 class="cz-weixin-title">微信扫一扫</h2>
    <div class="cz-weixin-pic"> <img width="100" height="100" alt="站长之家微信账号" src="http://img.chinaz.com/templates/2015style/images/weixin.jpg"> </div>
  </div>
  <a class="feedback" target="_blank" href="http://ww.chinaz.com/aboutus/contact.php"></a> <a class="go" href="javascript:;"></a> </div>

<div style="background-image: url(&quot;chrome://yass/content/edgebgbot.png&quot;); background-position: 0px 0px; position: absolute; margin: 0px; padding: 0px; border-width: 0px; height: 0px; left: 0px; top: 4002px; width: 100%; display: block;" id="yass_bottom_edge"></div></body></html><?php }} ?>