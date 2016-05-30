<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class WeatherController extends NController {

    function  weather_index(){
       $this->check_login();
		$weather=$this->get_weather($_SESSION['city']);
        $time=date('Y-m-d H:i',time());
        $rand=mt_rand(1,5);
       // var_dump($time);die;
        //var_dump($weather);die;
         $action="进入天气预报";
        $this->write_action($_SESSION['userip'],$_SESSION['action_adress'],$_SESSION['userid'],$action,date("Y-m-d H:i:s",time()));
        $this->assign("rand",$rand);
        $this->assign("weather",$weather);
        $this->assign("time",$time);
    $this->display();
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
    
        

    }

   


       
  
  

  

        