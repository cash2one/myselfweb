<?php /* Smarty version Smarty-3.1.6, created on 2016-02-22 14:09:50
         compiled from "E:\wamp\mymovie/Home/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1045456ca6b5e6d9117-16588523%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8745672f36bd30a10c19eaafa9fb06dc488917f4' => 
    array (
      0 => 'E:\\wamp\\mymovie/Home/View\\Index\\index.html',
      1 => 1456121389,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1045456ca6b5e6d9117-16588523',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56ca6b5e88aaf',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56ca6b5e88aaf')) {function content_56ca6b5e88aaf($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
  <style type="text/css">
    body, html {width: 100%;height: 100%;margin:0;font-family:"微软雅黑";}
    #allmap{width:100%;height:95%;}
    #r-result{width:100%;margin-top:5px;}
    .loc_search{height:5%;}
    p{margin:5px; font-size:14px;}
  </style>
  <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=E7H2sa8vSWAlG7rB7XXQFYsq"></script>
   <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.1.min.js"></script>
  
  <title>添加/删除工具条、比例尺控件</title>
</head>
<body>

<input type="text" id="search">



<input type="submit" onclick="a()" value="百度一下">
  <div id="allmap"></div>



 
</body>
</html>
<script type="text/javascript">
  // 百度地图API功能
  var map = new BMap.Map("allmap");
  map.centerAndZoom(new BMap.Point(116.404, 39.915), 11);
map.enableScrollWheelZoom(true); 
  var top_left_control = new BMap.ScaleControl({anchor: BMAP_ANCHOR_TOP_LEFT});// 左上角，添加比例尺
  var top_left_navigation = new BMap.NavigationControl();  //左上角，添加默认缩放平移控件
  var top_right_navigation = new BMap.NavigationControl({anchor: BMAP_ANCHOR_TOP_RIGHT, type: BMAP_NAVIGATION_CONTROL_SMALL}); map.addControl(top_left_control);        
    map.addControl(top_left_navigation);     
    map.addControl(top_right_navigation); local.search("天安门"); //右上角，仅包含平移和缩放按钮
  /*缩放控件type有四种类型:
  BMAP_NAVIGATION_CONTROL_SMALL：仅包含平移和缩放按钮；BMAP_NAVIGATION_CONTROL_PAN:仅包含平移按钮；BMAP_NAVIGATION_CONTROL_ZOOM：仅包含缩放按钮*/

 
</script>

<script type="text/javascript">
  function a(){
    var map = new BMap.Map("allmap");          
  map.centerAndZoom(new BMap.Point(116.404, 39.915), 11);
  var local = new BMap.LocalSearch(map, {
    renderOptions:{map: map}
  });
 
    var b=$("#search").val();
  local.search(b);
  }
 
</script>

<?php }} ?>