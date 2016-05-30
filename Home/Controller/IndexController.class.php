<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
require_once dirname(dirname(dirname(__FILE__))).'/debug.php';
require_once dirname(dirname(dirname(__FILE__))).'/Connect2.1/qqConnectAPI.php';
class IndexController extends NController 
{

    function  index(){
		
    $this->display();
    }
    function  qqconnect(){
        
    $oauth=new \Oauth();
    $oauth->qq_login();
    }

    function login(){
        $a=$_POST;
        $b=$_GET;
        $table=D('myweb_user');    //var_dump($_SESSION);die; 
        if ($b['code']) {
            $oauth = new \Oauth();
                $accesstoken=$oauth->qq_callback();
                $openid= $oauth->get_openid();
                //debug($openid);
                setcookie('qq_accesstoken',$accesstoken,time()+86400);
                setcookie('qq_openid',$openid,time()+86400);
                $qc=new \QC($accesstoken,$openid);
                $userinfo=$qc->get_user_info();
                $arr=$table->where("qq_open_id='".$_COOKIE['qq_openid']."'")->select();

                if(!$arr){
                        $_POST['reg_time']=date("Y-m-d H:i:s",time());
                        $_POST['username']=$userinfo['nickname'];
                        $_POST['qq_open_id']=$_COOKIE['qq_openid'];
                        $_POST['password']=123;
                        $table=D('myweb_user');
                        $table->create();
                        $table->add();
                        $arr=$table->where("qq_open_id='".$_COOKIE['qq_openid']."'")->select();
                }else{
                        
                        $user_info['username']=$userinfo['nickname'];
                        $a=$table->where("id=".$info['id'])->save($user_info);


                }
               

            session('username',$arr['0']['username']);
            session('level',$arr['0']['level']);
            session('userid',$arr['0']['id']);
            session('signature',$arr['0']['signature']);
            session('email',$arr['0']['email']);
            $arr=$arr['0'];

            session('userip',$a["ip"]);

            $action_adress=$this->GetIpLookup(/*'60.180.139.151'*/$_SESSION['userip']); 
            $action_adress1=$action_adress['country'].$action_adress['province'].$action_adress['city'];
            session('city',$action_adress['city']);
            session('action_adress',$action_adress1);
            $action_time=date("Y-m-d H:i:s",time());
            $action="登陆系统";
            if(mb_strlen($arr['signature'])>120){
                $arr['signature']=mb_strcut($arr['signature'], 0,120)."...";

            }
            $this->write_action($_SESSION['userip'],$action_adress1,$_SESSION['userid'],$action,$action_time);
            $weather=$this->get_weather($action_adress['city']);
            //var_dump($weather);die;
            $this->assign('arr',$arr);
            $this->assign('weather',$weather);
            $this->display("persional_homepage");
              


        }
        if(count($a)==4||$b['state']==1){
        
            //登陆
            //$a['1']账号 $a['2']密码

            if ($b['state']==1) {
                $arr=$table->where("id='".$_SESSION['userid']."'")->select();
            }else{
        $arr=$table->where("username='".$a['username']."' and password='".$a['password']."'"." and ispassword='1'")->select();
        // var_dump($table->where("username='".$a['username']."' and password='".$a['password']."'"."' and ispassword=1'"));die;
    }
        if ($arr) {
            session('username',$arr['0']['username']);
            session('level',$arr['0']['level']);
            session('userid',$arr['0']['id']);
            session('signature',$arr['0']['signature']);
            session('email',$arr['0']['email']);
            $arr=$arr['0'];

            session('userip',$a["ip"]);

            $action_adress=$this->GetIpLookup(/*'60.180.139.151'*/$_SESSION['userip']); 
            $action_adress1=$action_adress['country'].$action_adress['province'].$action_adress['city'];
            session('city',$action_adress['city']);
            session('action_adress',$action_adress1);
            $action_time=date("Y-m-d H:i:s",time());
            $action="登陆系统";
            if(mb_strlen($arr['signature'])>120){
                $arr['signature']=mb_strcut($arr['signature'], 0,120)."...";

            }
            $this->write_action($_SESSION['userip'],$action_adress1,$_SESSION['userid'],$action,$action_time);
            $weather=$this->get_weather($action_adress['city']);
            //var_dump($weather);die;
            $this->assign('arr',$arr);
            $this->assign('weather',$weather);
            $this->display("persional_homepage");
        }else{
            $this->display("index");
        }
       
        }elseif (count($a)==1) {
            //注册
            //$a['1']账号 $a['2']邮箱 $a['3']密码
            $a=explode(",", $a[b]);
            $_POST['reg_time']=date("Y-m-d H:i:s",time());
            $_POST['username']=$a['1'];
            $_POST['email']=$a['2'];
            $_POST['password']=$a['3'];
            $_POST['ispassword']=1;
              $table=D('myweb_user');
        $table->create();
        $table->add();
        return true;
            
        }
        
        

    }

     function  get_weather($city){
        $ch = curl_init();
    $url = 'http://apis.baidu.com/heweather/weather/free?city='.$city;
    $header = array(
        'apikey: ad43f48a603f5bfd5e908a6e9d93a681',
    );
    // 添加apikey到header
    curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // 执行HTTP请求
    curl_setopt($ch , CURLOPT_URL , $url);
    $res = curl_exec($ch);
    $a=json_decode($res,true);
    return $a["HeWeather data service 3.0"]['0'];
        }

    function  getuserinfo(){
        $user_id=$_POST['b'];
        if($_SESSION['userid']==$user_id){
           $this->ajaxReturn (json_encode($_SESSION),'JSON');
        }       
    }

      function loginout(){
         session(null);
         setcookie('qq_accesstoken','');
                setcookie('qq_openid','');
         $this->display('index');
     }


        function  update_user_info(){
            $this->check_login();
        $info=$_POST;

      //  var_dump($info);die;
        
        $user_info['username']=$info['username'];
        $user_info['email']=$info['email'];
        $user_info['signature']=$info['signature'];
        session('username',$info['username']);
        session('email',$info['email']);
        session('signature',$info['signature']);
       //   var_dump($_SESSION);die;
        $obj=D('myweb_user');
        $action="更新用户信息";
        $action_time=date("Y-m-d H:i:s",time());
      
             $a=$obj->where("id=".$info['id'])->save($user_info);
if ($a) {
    $this->write_action($_SESSION['userip'],$_SESSION['action_adress'],$_SESSION['userid'],$action,$action_time);
}
             
              $table=D('myweb_user');
 $arr=$table->where("id='".$_SESSION['userid']."'")->select();
 $arr=$arr['0'];


   $this->assign('arr',$arr);
       $this->display("persional_homepage");

     


        
    }
  
    function  send_email(){
        $test=$_POST['text']; 
                $mail = new \Home\Common\Util\PHPMailer();

    $mail->IsSMTP(); // 使用SMTP方式发送
        $mail->CharSet='UTF-8';// 设置邮件的字符编码
$mail->SMTPDebug = 1;//失误报错
$mail->SMTPSecure = "ssl";
        $mail->Host = 'smtp.qq.com'; // 您的企业邮局服务器
        $mail->Port = 465; // 设置端口
        $mail->SMTPAuth = true; // 启用SMTP验证功能
        $mail->Username = '569508391@qq.com'; // 邮局用户名(请填写完整的email地址)
        $mail->Password = "ye3157!"; // 邮局密码
        $mail->From = '569508391@qq.com'; //邮件发送者email地址
        $mail->FromName = "yonghu";
        $mail->AddAddress('569508391@qq.com', '龙哥');//收件人地址，可以替换成任何想要接收邮件的email信箱,          
        $mail->IsHTML(true); // set email format to HTML //是否使用HTML格式
        $mail->Subject = '用户意见';//"PHPMailer测试邮件"; //邮件标题
        $mail->Body = $test; //邮件内容
        if(!$mail->Send())
        {
            return false;
        }else{
            return true;
        }


        
    }

    function DateDiff($date1, $date2) { //时间比较函数，返回两个日期相差几秒、几分钟、几小时或几天 //oSPHP.COM.CN 
    switch ($unit) { 
        case 's': 
            $dividend = 1; 
            break; 
        case 'i': 
            $dividend = 60; 
            break; 
        case 'h': 
            $dividend = 3600; 
            break; 
        case 'd': 
            $dividend = 86400; 
            break; 
        default: 
            $dividend = 86400; 
    } 
    $time1 = strtotime($date1); 
    $time2 = strtotime($date2); 
    if ($time1 && $time2) 
		$time['day']=floor(($time1 - $time2) / $dividend);
		$time['hour']=floor((($time1 - $time2) % $dividend)/3600);
		$time['minute']=floor((($time1 - $time2) % $dividend)%3600/60);
		$time['second']=floor((($time1 - $time2) % $dividend)%3600%60);
		
        return $time; 
    return false; 
} 
}