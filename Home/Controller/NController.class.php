<?php
namespace Home\Controller;
use Think\Controller;
class NController extends Controller{
   public function _empty() {
   function _empty(){
               
$info = <<<eof
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>404页面自动跳转</title>

<link href="http://localhost/movie/i_movie/public/Admin/css/fale.css" rel="stylesheet" type="text/css">

<script type="text/javascript">
	var num=6;
	function redirect(){
		num--;
		document.getElementById("num").innerHTML=num;
		if(num<0){
			document.getElementById("num").innerHTML=0;
			window.location.href='http://localhost/movie/i_movie/index.php/Home/Index/index';
			}
		}
	setInterval("redirect()", 1000);
</script>
</head>

<body onLoad="redirect();">
<div class="whole">
	<img src="http://localhost/movie/i_movie/public/Admin/img/back.jpg" />
    <div class="mask"></div>
</div>
<div class="b">
		<img src="http://localhost/movie/i_movie/public/Admin/img/404.png" class="center"/>
		<p>
			暂时未能找到您查找的页面<br>
			可能输入的网址错误或此页面不存在<br>
            <span id="num"></span>秒后自动跳转到主页
		</p>
	</div>

</body>
</html>

eof;
echo $info;
exit;
    }
   }
   function check_login(){
   // var_dump($_SESSION);die;
       if(!$_SESSION){
           $this->error('请先登录',__MODULE__.'/index/index',3);
       }
   }
   function write_action($userip,$action_adress,$userid,$action,$time){
       $table=D('myweb_user_action');
            $info['ip']=$userip;
            $info['userid']=$userid;
            $info['area']=$action_adress;
            $info['action']=$action;
            $info['action_time']=$time;
      
        $table->create($info);    
        $table->add();
   }

 

function GetIpLookup($ip = ''){  
      
    $res = @file_get_contents('http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=js&ip=' . $ip);  
    if(empty($res)){ return false; }  
    $jsonMatches = array();  
    preg_match('#\{.+?\}#', $res, $jsonMatches);  
    if(!isset($jsonMatches[0])){ return false; }  
    $json = json_decode($jsonMatches[0], true);  
    if(isset($json['ret']) && $json['ret'] == 1){  
        $json['ip'] = $ip;  
        unset($json['ret']);  
    }else{  
        return false;  
    }  
    return $json;  
}


}
    
    