<?php /*%%SmartyHeaderCode:4299554c1f1a71d638-82491233%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a243dabcca0b45a8613924759e2f36555d639d53' => 
    array (
      0 => 'F:/wamp/www/www/Home/View\\Index\\show.html',
      1 => 1431051918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4299554c1f1a71d638-82491233',
  'variables' => 
  array (
    'a' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_554c1f1b2a2ea',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554c1f1b2a2ea')) {function content_554c1f1b2a2ea($_smarty_tpl) {?><!DOCTYPE html>
<!-- saved from url=(0046)http://www.yingshidaquan.com/html/DQ19831.html -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- <script src="http://hm.baidu.com/hm.js?7d641dc41f2a120b6028b77cd8febdd1"></script>
<script type="text/javascript" charset="gbk"
	id="tanx-s-mm_13902122_7222073_30098170" async=""
	src="http://p.tanx.com/ex?i=mm_13902122_7222073_30098170"></script>
<script type="text/javascript" charset="gbk"
	id="tanx-s-mm_13902122_7222073_30102152" async=""
	src="http://p.tanx.com/ex?i=mm_13902122_7222073_30102152"></script>
<meta charset="utf-8"> -->
<title></title>

<link
	href=/public/Home/css//ii/style.css
	type="text/css" rel="stylesheet">
<script type="text/javascript"
	src=/public/Home/js//ii/jquery-1.7.1.min.js></script>
<script type="text/javascript"
	src=/public/Home/js//ii/common.js></script>
<script type="text/javascript" src="http://cbjs.baidu.com/js/m.js"></script>
<script type="text/javascript"
	src=/public/Home/js//ii/super.js></script>
<link type="text/css" rel="stylesheet" charset="utf-8"
	href="http://pstatic.xunlei.com/js/v2/css/xl_style.css?203">
<script type="text/javascript" async=""
	src=/public/Home/js//ii/embed.js
	charset="UTF-8"></script>
<script
	src=/public/Home/js//ii/bsStatic.js
	type="text/javascript" charset="utf-8"></script>
<script
	src=/public/Home/js//ii/bs-engine.js
	type="text/javascript" charset="utf-8"></script>
<style type="text/css">
a.bshareDiv, #bsPanel, #bsMorePanel, #bshareF {
	border: none;
	background: none;
	padding: 0;
	margin: 0;
	font: 12px Helvetica, Calibri, Tahoma, Arial, 宋体, sans-serif;
	line-height: 14px;
}

#bsPanel div, #bsMorePanel div, #bshareF div {
	display: block;
}

.bsRlogo .bsPopupAwd, .bsRlogoSel .bsPopupAwd, .bsLogo .bsPopupAwd,
	.bsLogoSel .bsPopupAwd {
	line-height: 16px !important;
}

a.bshareDiv div, #bsFloatTab div {
	*display: inline;
	zoom: 1;
	display: inline-block;
}

a.bshareDiv img, a.bshareDiv div, a.bshareDiv span, a.bshareDiv a,
	#bshareF table, #bshareF tr, #bshareF td {
	text-decoration: none;
	background: none;
	margin: 0;
	padding: 0;
	border: none;
	line-height: 1.2
}

a.bshareDiv span {
	display: inline;
	float: none;
}

div.buzzButton {
	cursor: pointer;
	font-weight: bold;
}

.buzzButton .shareCount a {
	color: #333
}

.bsStyle1 .shareCount a {
	color: #fff
}

span.bshareText {
	white-space: nowrap;
}

span.bshareText:hover {
	text-decoration: underline;
}

a.bshareDiv .bsPromo, div.bshare-custom .bsPromo {
	display: none;
	position: absolute;
	z-index: 100;
}

a.bshareDiv .bsPromo.bsPromo1, div.bshare-custom .bsPromo.bsPromo1 {
	width: 51px;
	height: 18px;
	top: -18px;
	left: 0;
	line-height: 16px;
	font-size: 12px !important;
	font-weight: normal !important;
	color: #fff;
	text-align: center;
	background:
		url(http://static.bshare.cn/frame/images/bshare_box_sprite2.gif)
		no-repeat 0 -606px;
}

div.bshare-custom .bsPromo.bsPromo2 {
	background:
		url(http://static.bshare.cn/frame/images/bshare_promo_sprite.gif)
		no-repeat;
	cursor: pointer;
}
</style>
<style type="text/css">
.bsBox {
	display: none;
	z-index: 100000001;
	font-size: 12px;
	background:
		url(http://static.bshare.cn/frame/images//background-opaque-dark.gif)
		!important;
	padding: 6px !important;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
}

.bsClose {
	_overflow: hidden;
	cursor: pointer;
	position: absolute;
	z-index: 10000000;
	color: #666;
	font-weight: bold;
	font-family: Helvetica, Arial;
	font-size: 14px;
	line-height: 20px;
}

.bsTop {
	color: #666;
	background: #f2f2f2;
	height: 24px;
	line-height: 24px;
	border-bottom: 1px solid #e8e8e8;
}

.bsTop span {
	float: left;
}

.bsFrameDiv, #bsMorePanel {
	border: none;
	background: #fff;
}

.bsReturn {
	float: right;
	*margin-right: 20px;
	margin-right: 36px;
	text-align: right;
	cursor: pointer;
	line-height: 24px;
	color: #666;
	opacity: 0.5;
}

#bsReturn:hover {
	text-decoration: underline;
	opacity: 1;
}
</style>
<script
	src=/public/Home/js//ii/bsMore.js
	type="text/javascript" charset="utf-8"></script>
<script
	src=/public/Home/js//ii/bshareS3.js
	type="text/javascript" charset="utf-8"></script>
<style type="text/css">
div.bsClear {
	clear: both;
	height: 0;
	line-height: 0;
	overflow: hidden;
	font-size: 0;
}

.bsSearchDiv {
	padding: 5px 15px;
	background-color: #fafafa;
}

.bFind-wrapper-top {
	background: #fff;
	border-color: #ccc #aaa #aaa #ccc;
	border-style: solid;
	border-width: 1px;
	height: 16px;
	padding: 4px;
	margin: 0;
}

.bFind-wrapper-top input {
	padding: 0 !important;
	border: none !important;
	box-shadow: none !important;
	line-height: 16px !important;
}

.bFind-placeholder {
	background: url("http://static.bshare.cn/css/images/search-icon.gif")
		no-repeat;
	display: block;
	float: left;
	height: 16px;
	width: 16px;
}

.bFind {
	background: none;
	border: none;
	float: left;
	font-size: 11px !important;
	height: 16px !important;
	margin-left: 3px;
	outline: none;
	padding: 0;
	width: 400px;
}

.bsPlatDiv {
	height: 322px;
	background: #fff;
	overflow: auto;
	padding: 0 15px;
}

#bsLogoList {
	display: block;
	list-style: none;
	overflow: hidden;
	margin: 0;
	padding: 0;
}

#bsLogoList li {
	float: left;
	display: inline-block;
	width: 71px;
	text-align: center;
	font-size: 12px;
	height: 80px;
	margin: 0 !important;
}

#bsLogoList .bsPlatIcon {
	cursor: pointer;
	display: block !important;
	text-align: center;
}

#bsLogoList .bsPlatImg {
	width: 32px;
	height: 32px;
	border: none !important;
	display: inline-block;
}

#bsLogoList .bsPlatImg:hover {
	-moz-border-radius: 7px;
	-webkit-border-radius: 7px;
	border-radius: 7px;
	box-shadow: 0 0 15px #a7a8ac;
}

#bsLogoList .bsPlatName {
	white-space: nowrap;
	text-overflow: ellipsis;
	overflow: hidden;
	text-align: center;
	color: #333 !important;
	margin-top: 2px;
	line-height: 140%;
	*width: 70px;
}

#bsLogoList .bsPromoM {
	text-align: center;
}

.bsFooterDiv {
	height: 24px;
	line-height: 24px;
	padding: 0 15px;
	border-top: 1px solid #e8e8e8;
	background: #f2f2f2;
	text-align: right;
}

a.bsLogoLink {
	color: #666;
}

.bsLogoLink:hover {
	text-decoration: underline;
}

.bsPromoM {
	background:
		url(http://static.bshare.cn/frame/images//bshare_box_sprite2.gif)
		no-repeat top left;
}

.bsNew, .bsHot, .bsRec, .bsAwd {
	background-position: 0 -552px;
	width: 19px;
	margin: 5px auto 1px;
	line-height: 16px;
	height: 18px;
	font-size: 12px;
	color: #fff;
	overflow: hidden;
}

.bsNew {
	background-position: 0 -570px;
}

.bsRec {
	width: 30px;
	background-position: 0 -588px;
}

.bsAwd {
	background:
		url(http://static.bshare.cn/frame/images//promot/promote.gif)
		no-repeat;
}
</style>
<link type="text/css" rel="stylesheet"
	href=/public/Home/css//ii/embed.default.css">
<script
	src=/public/Home/js//ii/bshare_view"
	type="text/javascript" charset="utf-8"></script>
<style type="text/css">
.bs-xtop, .bs-xbottom {
	display: block;
	background: transparent !important;
	font-size: 1px;
	width: 100%;
}

.bs-xb1, .bs-xb2, .bs-xb3, .bs-xb4 {
	display: block;
	overflow: hidden;
}

.bs-xb1, .bs-xb2, .bs-xb3 {
	height: 1px;
}

.bs-xb2, .bs-xb3, .bs-xb4 {
	background-color: #F89C2F;
}

.bs-xb1 {
	margin-left: 5px;
	background-color: #F89C2F;
}

.bs-xb2 {
	margin-left: 3px;
	border-width: 0 2px;
}

.bs-xb3 {
	margin-left: 2px;
}

.bs-xb4 {
	height: 2px;
	margin-left: 1px;
}

.bs-lb1, .bs-lb2, .bs-lb3, .bs-lb4 {
	display: block;
	overflow: hidden;
}

.bs-lb1, .bs-lb2, .bs-lb3 {
	height: 1px;
}

.bs-lb2, .bs-lb3, .bs-lb4 {
	background-color: #F89C2F;
}

.bs-lb1 {
	margin-right: 5px;
	background-color: #F89C2F;
}

.bs-lb2 {
	margin-right: 3px;
	border-width: 0 2px;
}

.bs-lb3 {
	margin-right: 2px;
}

.bs-lb4 {
	height: 2px;
	margin-right: 1px;
}

.bs-verticaltext {
	writing-mode: tb-rl;
	filter: fliph fliph;
	-webkit-transform: rotate(90deg);
	-moz-transform: rotate(90deg);
}

a.bsSiteLink {
	text-decoration: none;
	color: #666;
}

a.bsSiteLink:hover {
	text-decoration: underline;
}

div.bsTitle {
	padding: 0 8px;
	border-bottom: 1px solid #e8e8e8;
	color: #666;
	background: #f2f2f2;
	text-align: left;
}

div.buzzButton {
	cursor: pointer;
}

div.bsRlogo, div.bsRlogoSel {
	width: 68px;
	float: left;
	margin: 0;
	padding: 2px 0;
}

div.bsRlogo a, div.bsRlogoSel a {
	float: left;
}

div.bsLogo, div.bsLogoSel {
	float: left;
	width: 111px;
	text-align: left;
	height: auto;
	padding: 2px 4px;
	margin: 2px 0;
	white-space: nowrap;
	overflow: hidden;
}

div.bsLogoSel, div.bsRlogoSel {
	border: 1px solid #ddd;
	background: #f1f1f1;
}

div.bsLogo, div.bsRlogo {
	border: 1px solid #fff;
	background: #fff;
}

div.bsLogo a, div.bsLogoSel a {
	display: block;
	height: 16px;
	line-height: 16px;
	padding: 0 0 0 24px;
	text-decoration: none;
	float: left;
	overflow: hidden;
}

div.bsLogoSel a, div.bsRlogoSel a {
	color: #000;
	border: none;
}

div.bsLogo a, div.bsRlogo a {
	color: #666;
	border: none;
}

div.bsLogoLink {
	width: 121px;
	overflow: hidden;
	background: #FFF;
	float: left;
	margin: 3px 0;
}

#bsPanel {
	z-index: 100000000;
	font-size: 12px;
	width: 258px;
	background:
		url(http://static.bshare.cn/frame/images/background-opaque-dark.png);
	padding: 6px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
}

div.bsClear {
	clear: both;
	height: 0;
	line-height: 0;
	font-size: 0;
	overflow: hidden;
}

div.bsPopupAwd {
	background:
		url(http://static.bshare.cn/frame/images//bshare_box_sprite2.gif)
		no-repeat top left;
	background-position: 0 -624px;
	width: 18px;
	padding-left: 3px;
	text-align: center;
	float: left;
	margin-left: 2px;
	height: 15px;
	font-size: 12px;
	color: #fff;
	overflow: hidden;
}

div.bsRlogo .bsPopupAwd, div.bsRlogoSel .bsPopupAwd {
	float: left;
	margin: 5px 0 0 -14px;
}
</style>
<style type="text/css">
.bs-xtop, .bs-xbottom {
	display: block;
	background: transparent !important;
	font-size: 1px;
	width: 100%;
}

.bs-xb1, .bs-xb2, .bs-xb3, .bs-xb4 {
	display: block;
	overflow: hidden;
}

.bs-xb1, .bs-xb2, .bs-xb3 {
	height: 1px;
}

.bs-xb2, .bs-xb3, .bs-xb4 {
	background-color: #F89C2F;
}

.bs-xb1 {
	margin-left: 5px;
	background-color: #F89C2F;
}

.bs-xb2 {
	margin-left: 3px;
	border-width: 0 2px;
}

.bs-xb3 {
	margin-left: 2px;
}

.bs-xb4 {
	height: 2px;
	margin-left: 1px;
}

.bs-lb1, .bs-lb2, .bs-lb3, .bs-lb4 {
	display: block;
	overflow: hidden;
}

.bs-lb1, .bs-lb2, .bs-lb3 {
	height: 1px;
}

.bs-lb2, .bs-lb3, .bs-lb4 {
	background-color: #F89C2F;
}

.bs-lb1 {
	margin-right: 5px;
	background-color: #F89C2F;
}

.bs-lb2 {
	margin-right: 3px;
	border-width: 0 2px;
}

.bs-lb3 {
	margin-right: 2px;
}

.bs-lb4 {
	height: 2px;
	margin-right: 1px;
}

.bs-verticaltext {
	writing-mode: tb-rl;
	filter: fliph fliph;
	-webkit-transform: rotate(90deg);
	-moz-transform: rotate(90deg);
}

a.bsSiteLink {
	text-decoration: none;
	color: #666;
}

a.bsSiteLink:hover {
	text-decoration: underline;
}

div.bsTitle {
	padding: 0 8px;
	border-bottom: 1px solid #e8e8e8;
	color: #666;
	background: #f2f2f2;
	text-align: left;
}

div.buzzButton {
	cursor: pointer;
}

div.bsRlogo, div.bsRlogoSel {
	width: 68px;
	float: left;
	margin: 0;
	padding: 2px 0;
}

div.bsRlogo a, div.bsRlogoSel a {
	float: left;
}

div.bsLogo, div.bsLogoSel {
	float: left;
	width: 111px;
	text-align: left;
	height: auto;
	padding: 2px 4px;
	margin: 2px 0;
	white-space: nowrap;
	overflow: hidden;
}

div.bsLogoSel, div.bsRlogoSel {
	border: 1px solid #ddd;
	background: #f1f1f1;
}

div.bsLogo, div.bsRlogo {
	border: 1px solid #fff;
	background: #fff;
}

div.bsLogo a, div.bsLogoSel a {
	display: block;
	height: 16px;
	line-height: 16px;
	padding: 0 0 0 24px;
	text-decoration: none;
	float: left;
	overflow: hidden;
}

div.bsLogoSel a, div.bsRlogoSel a {
	color: #000;
	border: none;
}

div.bsLogo a, div.bsRlogo a {
	color: #666;
	border: none;
}

div.bsLogoLink {
	width: 121px;
	overflow: hidden;
	background: #FFF;
	float: left;
	margin: 3px 0;
}

#bsPanel {
	z-index: 100000000;
	font-size: 12px;
	width: 258px;
	background:
		url(http://static.bshare.cn/frame/images/background-opaque-dark.png);
	padding: 6px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
}

div.bsClear {
	clear: both;
	height: 0;
	line-height: 0;
	font-size: 0;
	overflow: hidden;
}

div.bsPopupAwd {
	background:
		url(http://static.bshare.cn/frame/images//bshare_box_sprite2.gif)
		no-repeat top left;
	background-position: 0 -624px;
	width: 18px;
	padding-left: 3px;
	text-align: center;
	float: left;
	margin-left: 2px;
	height: 15px;
	font-size: 12px;
	color: #fff;
	overflow: hidden;
}

div.bsRlogo .bsPopupAwd, div.bsRlogoSel .bsPopupAwd {
	float: left;
	margin: 5px 0 0 -14px;
}
</style>
</head>
<body class="channel1">

	<!--/menu-->
	<!--/header-->
	<div id="history">
		<a href="javascript:void(0);" class="list_hist"><strong></strong></a>
	</div>
	<div id="main">
		<div class="banner mt3">
			<script type="text/javascript"
				src=/public/Home/js//ii/content_top_1.js"
				charset="utf-8"></script>
			<a
				href="http://dlsw.br.baidu.com/ditui/zujian/bdBrowserSetup-5957-ftn_1000146276.exe"
				rel="nofollow" target="_blank"><img
				src="http://ubmcmm.baidustatic.com/media/v1/0f000FmJG_tEdhVZA7W5e0.gif"
				style="width: 980px; display: none !important;"></a>
		</div>
		<div class="view">
		
			<div class="pic">
				<img
					src=/public/upload/2015-05-07/554b17b88c6e6.jpg
					>

				

			</div>
			<div class="info">
				<h1>热血青春</h1>
				<ul>
					
					<li><span>类型：</span><a
						href="#"
						target="_blank">喜剧片 </a></li>
					<li><span>主演：</span><a
						href="#"
						target="_blank">朴宝英</a></li>
					<li><div class="fl">
							<span>地区：</span>韩国
						</div></li>
				
				</ul>
				<div class="textdesc">
					<span>剧情：</span>電影《熱血青春》講述八十年代曾在忠南洪城一帶非常有名的女生混混，傳說的花花公子、火鳳凰派老大，首爾來的轉學生等青春男女的熱血浪漫愛情故事。是由電影《奔跑的烏龜》的導演、用非凡的耐力成功指導作品的李延宇擔任導演。
在電影<超速緋聞>(2008)和<狼族少年>(2012)中擔任主角的樸寶英這次將在電影中飾演洪城農高大姐大英淑，首次突破形象，將展現她自信強勢的一面。而在8月1日大結局的SBS月火劇〈聽見你的聲音〉和電影〈觀相〉中有超高人氣的李鍾碩將飾演用一個眼神、一個呼吸就能迷倒女生的，充滿魅力的洪城農高傳說級的花花公子忠吉。李世英扮演了擁有白皮膚與纖瘦身材，受到所有男同學喜愛的女高中生昭熙,而金英光則扮演了洪城農高火鳳凰派的老大光 石，盡顯其野性美。<a
						href="#"></a>
				</div>
				
				<div class="a468">
					<script type="text/javascript"
						src=/public/Home/js//ii/content_top_468.js
						charset="utf-8"></script>
					<script type="text/javascript">
    /*大全网内容页顶部468*60图片标签云*/
    var cpro_id = "u1982845";
</script>
					<script src="http://cpro.baidustatic.com/cpro/ui/c.js"
						type="text/javascript"></script>
				</div>
			</div>
			
		</div>
		<div class="infoad">
			<script type="text/javascript"
				src=/public/Home/js//ii/content_top_300_1.js
				charset="utf-8"></script>
			<script type="text/javascript">
    /*大全网内容页顶部 300*250  纯图片加标签云*/
    var cpro_id = "u1591296";
</script>
			<script src="http://cpro.baidustatic.com/cpro/ui/c.js"
				type="text/javascript"></script>
			<div class="skydrive">
				<p>
					<span>友情提示：</span>欢迎大家使用网盘连接下载！
				</p>
				<ul>
					<li class="wbaidu"><a href=http://pan.baidu.com/s/1i3F0Fa9
						target="_blank">pfe2</a></li>
					
				</ul>
			</div>
		</div>
		<div class="cr"></div>
		<div style="margin-top: 5px; text-align: center; margin-bottom: 5px;">
			<script type="text/javascript"
				src=/public/Home/js//ii/content_top_2.js
				charset="utf-8"></script>
			<script type="text/javascript">
    /*大全网内容页 960*90 纯图片*/
    var cpro_id = "u2068299";
</script>
			<script src="http://cpro.baidustatic.com/cpro/ui/c.js"
				type="text/javascript"></script>
		</div>
		<!-- <div class="endpage">
			<div class="ulike">
				<div class="title">
					<span>猜你喜欢</span>
				</div>
				<ul class="img-list imglist clearfix">
					<li><a class="play-img"
						href="http://www.yingshidaquan.com/html/DQ19108.html"
						title="速度与激情7/在线点播/迅雷下载" target="_blank"><img
							src=/public/Home/img//ii/19108.jpg
							alt="速度与激情7"><i></i><em>动作惊悚</em></a>
					<h5>
							<a href="http://www.yingshidaquan.com/html/DQ19108.html"
								title="速度与激情7" target="_blank">速度与激情7</a>
						</h5></li>
					<li><a class="play-img"
						href="http://www.yingshidaquan.com/html/DQ20682.html"
						title="王牌特工：特工学院/在线点播/迅雷下载" target="_blank"><img
							src=/public/Home/img//ii/55441db64bba1.jpg
							alt="王牌特工：特工学院"><i></i><em>1280超清</em></a>
					<h5>
							<a href="http://www.yingshidaquan.com/html/DQ20682.html"
								title="王牌特工：特工学院" target="_blank">王牌特工：特工</a>
						</h5></li>
					<li><a class="play-img"
						href="http://www.yingshidaquan.com/html/DQ20560.html"
						title="战狼/在线点播/迅雷下载" target="_blank"><img
							src=/public/Home/img//ii/5535b31de3295.jpg
							alt="战狼"><i></i><em>战争动作</em></a>
					<h5>
							<a href="http://www.yingshidaquan.com/html/DQ20560.html"
								title="战狼" target="_blank">战狼</a>
						</h5></li>
					<li><a class="play-img"
						href="http://www.yingshidaquan.com/html/DQ20116.html"
						title="天将雄师/天将雄狮/在线点播/迅雷下载" target="_blank"><img
							src=/public/Home/img//ii/54fa8c55a54c5.jpg
							alt="天将雄师/天将雄狮"><i></i><em>1280超清</em></a>
					<h5>
							<a href="http://www.yingshidaquan.com/html/DQ20116.html"
								title="天将雄师/天将雄狮" target="_blank">天将雄师/天将</a>
						</h5></li>
					<li><a class="play-img"
						href="./飓风营救3高清电影 -无广告在线云点播-动作片-飓风营救3高清迅雷下载-影视大全-全集网_files/飓风营救3高清电影 -无广告在线云点播-动作片-飓风营救3高清迅雷下载-影视大全-全集网.html"
						title="飓风营救3/在线点播/迅雷下载" target="_blank"><img
							src=/public/Home/img//ii/19831.jpg
							alt="飓风营救3"><i></i><em>1280超清</em></a>
					<h5>
							<a
								href="./飓风营救3高清电影 -无广告在线云点播-动作片-飓风营救3高清迅雷下载-影视大全-全集网_files/飓风营救3高清电影 -无广告在线云点播-动作片-飓风营救3高清迅雷下载-影视大全-全集网.html"
								title="飓风营救3" target="_blank">飓风营救3</a>
						</h5></li>
					<li><a class="play-img"
						href="http://www.yingshidaquan.com/html/DQ20406.html"
						title="贵族大盗/在线点播/迅雷下载" target="_blank"><img
							src=/public/Home/img//ii/55262c079f42f.jpg
							alt="贵族大盗"><i></i><em>1280超清</em></a>
					<h5>
							<a href="http://www.yingshidaquan.com/html/DQ20406.html"
								title="贵族大盗" target="_blank">贵族大盗</a>
						</h5></li>
					<li><a class="play-img"
						href="http://www.yingshidaquan.com/html/DQ19777.html"
						title="美国狙击手/在线点播/迅雷下载" target="_blank"><img
							src=/public/Home/img//ii/19777.jpg
							alt="美国狙击手"><i></i><em>1280超清</em></a>
					<h5>
							<a href="http://www.yingshidaquan.com/html/DQ19777.html"
								title="美国狙击手" target="_blank">美国狙击手</a>
						</h5></li>
					<li><a class="play-img"
						href="http://www.yingshidaquan.com/html/DQ2899.html"
						title="破坏者/震撼杀戮/在线点播/迅雷下载" target="_blank"><img
							src=/public/Home/img//ii/2899.jpg
							alt="破坏者/震撼杀戮"><i></i><em>1280超清</em></a>
					<h5>
							<a href="http://www.yingshidaquan.com/html/DQ2899.html"
								title="破坏者/震撼杀戮" target="_blank">破坏者/震撼杀</a>
						</h5></li>
				</ul>
			</div>

		




		</div> -->
		
	
	</div>
	





</body>
</html><?php }} ?>