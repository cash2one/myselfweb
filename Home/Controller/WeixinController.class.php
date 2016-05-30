<?php

namespace Home\Controller;

use Think\Controller;




class WeixinController extends Controller {
	
   
	public function index()
	
{
         
	$nonce = $_GET['nonce'];
        $token     = 'yzc';
        $timestamp = $_GET['timestamp'];
        $echostr   = $_GET['echostr'];
        $signature = $_GET['signature'];
        //形成数组，然后按字典序排序
        $array = array();
        $array = array($nonce, $timestamp, $token);
        sort($array);
        //拼接成字符串,sha1加密 ，然后与signature进行校验
        $str = sha1( implode( $array ) );
        if( $str  == $signature && $echostr){
            //第一次接入weixin api接口的时候
			ob_clean();
            echo  $echostr;
            exit;
        }else{ob_clean();
        	$this->reponseMsg();

        }
    }

public function reponseMsg(){
		//1.获取到微信推送过来post数据（xml格式）
		$postArr = $GLOBALS['HTTP_RAW_POST_DATA'];
		$tmpstr=$postArr;
		//2.处理消息类型，并设置回复类型和内容
		/*<xml>
<ToUserName><![CDATA[toUser]]></ToUserName>
<FromUserName><![CDATA[FromUser]]></FromUserName>
<CreateTime>123456789</CreateTime>
<MsgType><![CDATA[event]]></MsgType>
<Event><![CDATA[subscribe]]></Event>
</xml>*/
		$postObj = simplexml_load_string( $postArr );
		//$postObj->ToUserName = '';//订阅号
		//$postObj->FromUserName = '';用户id
		//$postObj->CreateTime = '';
		//$postObj->MsgType = '';
		//$postObj->Event = '';
		// gh_e79a177814ed
		//判断该数据包是否是订阅的事件推送
		if( strtolower( $postObj->MsgType) == 'event'){
			//如果是关注 subscribe 事件
			if( strtolower($postObj->Event == 'subscribe') ){
				//回复用户消息(纯文本格式)	
				$toUser   = $postObj->FromUserName;
				$fromUser = $postObj->ToUserName;
				$time     = time();
				$msgType  =  'text';
				$content  = "欢迎订阅YE爱生活(^_^)";
				$template = "<xml>
							<ToUserName><![CDATA[%s]]></ToUserName>
							<FromUserName><![CDATA[%s]]></FromUserName>
							<CreateTime>%s</CreateTime>
							<MsgType><![CDATA[%s]]></MsgType>
							<Content><![CDATA[%s]]></Content>
							</xml>";
							$userinfo['openid']="$toUser";
							$userinfo['regist_time']=date("Y-m-d H:i:s",time());
							$table=D('weixin_user');
							$arr=$table->where("openid='".$toUser."'")->select();
							if(!$arr){
								$table->create($userinfo);
								$table->add();
							}
                         
				$info     = sprintf($template, $toUser, $fromUser, $time, $msgType, $content);ob_clean();
				echo $info;

			}
		}
		//根据用户自动回复
				if (strtolower($postObj->MsgType)=='text') {
					if(preg_match("/傻(.*?)/", trim($postObj->Content))||preg_match("/蠢(.*?)/", trim($postObj->Content))||preg_match("/草(.*?)尼玛/", trim($postObj->Content))||preg_match("/草(.*?)你妈/", trim($postObj->Content))||preg_match("/鱼唇(.*?)/", trim($postObj->Content))||preg_match("/你(.*?)丑/", trim($postObj->Content))||preg_match("/笨(.*?)蛋/", trim($postObj->Content))){
						$a=mt_rand(1,4);
						switch ($a) {
							case '1':
								$content="你是个大傻比";
								break;
							case '2':
								$content="蠢货，讲屁话呢";
								break;
							case '3':
								$content="山炮啊你，哈哈哈！";
								break;
							case '4':
								$content="尼玛，呵呵";
								break;

						}
						$template = "<xml>
							<ToUserName><![CDATA[%s]]></ToUserName>
							<FromUserName><![CDATA[%s]]></FromUserName>
							<CreateTime>%s</CreateTime>
							<MsgType><![CDATA[%s]]></MsgType>
							<Content><![CDATA[%s]]></Content>
							</xml>";
							$toUser   = $postObj->FromUserName;
							$fromUser = $postObj->ToUserName;
						
							$time=time();
							$msgType='text';

							
							echo sprintf($template,$toUser,$fromUser,$time,$msgType,$content);
							exit;

					}

					$user_table=D('weixin_user');
					$arr=$user_table->where("openid='".$postObj->FromUserName."'")->select();
					$user_id=$arr['0']['id'];
				$user_table=D('weixin_action');
				$action=$user_table->where('user_id="'.$user_id.'" and action_type<>1')->order('time desc')->limit(1)->select();
				$isuse=$this->check_action($action['0']['time']);
				if (($isuse>1&&$isuse)||$action['0']['action_type']==0||$postObj->Content=="结束") {
					switch (trim($postObj->Content)) {
						case '帮助':
							$content="1.装修设计图"."\n"."一.先输入“装修”进入装修设计图系统"."\n"."二.按照：风格,户型,面积,颜色顺序输入查询条件，例如我查询中式，三居，80~100平米，主调白色的房子，那就输入“19,3,3,1”，退出系统请输入“结束”"."\n"."风格:"."\n"."	全部 	0"."\n"."	宜家 	18"."\n"."	现代 	15"."\n"."	简欧 	20"."\n"."	欧式 	2"."\n"."	北欧 	19"."\n"."	中式 	4"."\n"."	简约 	13"."\n"."	地中海	12"."\n"."	日式	17"."\n"."	美式	9"."\n"."	东南亚 	8"."\n"."	田园	11"."\n"."	混搭	100"."\n"."	新古典	6"."\n"."户型:"."\n"."	全部	0"."\n"."	一居	7"."\n"."	二居	2"."\n"."	三居	3"."\n"."	四居	4"."\n"."	小户型	1"."\n"."	公寓	8"."\n"."	别墅	6"."\n"."	复式	5"."\n"."面积:"."\n"."	全部	0"."\n"."	<60㎡	1"."\n"."	60~80	2"."\n"."	80~100	3"."\n"."	100~120	4"."\n"."	120~150	5"."\n"."	>150	6"."\n"."装饰分格颜色:"."\n"."	全部	0"."\n"."	白色	1"."\n"."	米色	12"."\n"."	黄色	4"."\n"."	橙色	6"."\n"."	红色	3"."\n"."	粉色	7"."\n"."	绿色	5"."\n"."	蓝色	8"."\n"."	紫色	10"."\n"."	黑色	2"."\n"."	咖啡色	14"."\n"."	灰色	9"
							;
							$iskeyword=1;
							$action='获取帮助';
							$action_type=1;
							break;
						case '结束':
							$content="已帮你结束当前查询环境";
							$iskeyword=1;
							$action='结束查询环境';
							$action_type=0;
							break;
						case '装修':
							$content="你已进入装修查询环境，请输入查询条件";
							$iskeyword=1;
							$action='进入装修查询环境';
							$action_type=2;
							break;
							
					}
					if ($iskeyword==1) {
						
					
					$template = "<xml>
							<ToUserName><![CDATA[%s]]></ToUserName>
							<FromUserName><![CDATA[%s]]></FromUserName>
							<CreateTime>%s</CreateTime>
							<MsgType><![CDATA[%s]]></MsgType>
							<Content><![CDATA[%s]]></Content>
							</xml>";
							$toUser   = $postObj->FromUserName;
							$fromUser = $postObj->ToUserName;
						
							$time=time();
							$msgType='text';

							
							echo sprintf($template,$toUser,$fromUser,$time,$msgType,$content);
								
							
							$this->write_action($toUser,$action,$action_type);
						}
							exit;}else{
								if ($action['0']['action_type']==2) {
									$user_design=explode(',',"$postObj->Content");
									if(count($user_design)!=4){
										
							$content="请输入正确的装修查询";
					
						
					
					$template = "<xml>
							<ToUserName><![CDATA[%s]]></ToUserName>
							<FromUserName><![CDATA[%s]]></FromUserName>
							<CreateTime>%s</CreateTime>
							<MsgType><![CDATA[%s]]></MsgType>
							<Content><![CDATA[%s]]></Content>
							</xml>";
							$toUser   = $postObj->FromUserName;
							$fromUser = $postObj->ToUserName;
							$time=time();
							$msgType='text';
							echo sprintf($template,$toUser,$fromUser,$time,$msgType,$content);
						
									}else{
										//查询条件 0,0,0,0  风格 户型 大小 ，颜色
										$design_table=D('weixin_designnum');
										$arr1=$design_table->where("style='".$user_design['0']."' and hometype='".$user_design['1']."' and area='".$user_design['2']."' and color='".$user_design['3']."'")->select();
										$design_num=$arr1['0']['design_number'];
										$design_page=intval($design_num/6);
										$define_page=mt_rand(1,$design_page);//获得随机页面
										$curl = curl_init();

				curl_setopt_array($curl, array(
				  CURLOPT_URL => "http://mobileapi.to8to.com/index.php",
				  CURLOPT_RETURNTRANSFER => true,
				  CURLOPT_ENCODING => "",
				  CURLOPT_MAXREDIRS => 10,
				  CURLOPT_TIMEOUT => 30,
				  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				  CURLOPT_CUSTOMREQUEST => "POST",
				  CURLOPT_POSTFIELDS => "action=list&appid=15&appostype=2&appversion=3.8.0&area=".$user_design['2']."&channel=appstore&color=".$user_design['3']."&homeType=".$user_design['1']."&idfa=EAFA36B5-81BA-4A91-A3B7-4B79B7672925&initialize=0&model=imagessets&page=".$define_page."	&paging=true&perPage=6&style=".$user_design['0']."&systemversion=8.2&t8t_device_id=F01E4FC3-F276-4656-B30B-ED1CBF5470B1&to8to_token=6265841_b305b06ee4c7807fd4d899ffb0cd6f5b&uid=6265841&version=2.5",
				  CURLOPT_HTTPHEADER => array(
				    "cache-control: no-cache",
				    "content-type: application/x-www-form-urlencoded",
				    "postman-token: f3c33aab-3a8a-f370-4a3a-03e55ed22b4e"
				  ),
				));

				$response = curl_exec($curl);
				$err = curl_error($curl);
				curl_close($curl);


				$noyong1=json_decode($response,true);
				$design_info=$noyong1['data'];
	/*		<xml>
<ToUserName><![CDATA[toUser]]></ToUserName>
<FromUserName><![CDATA[fromUser]]></FromUserName>
<CreateTime>12345678</CreateTime>
<MsgType><![CDATA[news]]></MsgType>
<ArticleCount>2</ArticleCount>
<Articles>
<item>
<Title><![CDATA[title1]]></Title> 
<Description><![CDATA[description1]]></Description>
<PicUrl><![CDATA[picurl]]></PicUrl>
<Url><![CDATA[url]]></Url>
</item>
<item>
<Title><![CDATA[title]]></Title>
<Description><![CDATA[description]]></Description>
<PicUrl><![CDATA[picurl]]></PicUrl>
<Url><![CDATA[url]]></Url>
</item>
</Articles>
</xml> */	
		$num=count($design_info);
$toUser   = $postObj->FromUserName;
				$fromUser = $postObj->ToUserName;
				$design_template="<xml>
								<ToUserName><![CDATA[%s]]></ToUserName>
								<FromUserName><![CDATA[%s]]></FromUserName>
								<CreateTime>%s</CreateTime>
								<MsgType><![CDATA[%s]]></MsgType>
								<ArticleCount>".$num."</ArticleCount>
								<Articles>";
				foreach ($design_info as $key => $value) {
					$design_template.="<item>
								<Title><![CDATA[".$value['title']."]]></Title> 
								<Description><![CDATA[这里是一套".$value['title']."设计]]></Description>
								<PicUrl><![CDATA[".$value['info']['0']['filename']."]]></PicUrl>
								<Url><![CDATA[http://www.bestyzc.club/index.php/Home/Weixin/show_design?color=".$user_design['3']."&type=".$user_design['1']."&style=".$user_design['0']."&area=".$user_design['2']."&define_page=".$define_page."&order=".$key."]]></Url>
								</item>";
				}
			
			$design_template.="</Articles>
								</xml>";
				

								echo sprintf($design_template,$toUser,$fromUser,time(),'news');

								}
									exit;
								}
								elseif(0){
									exit;
								}
							}
						}
						
				}

		public function show_design(){
			
			$info=$_GET;
			$curl = curl_init();

				curl_setopt_array($curl, array(
				  CURLOPT_URL => "http://mobileapi.to8to.com/index.php",
				  CURLOPT_RETURNTRANSFER => true,
				  CURLOPT_ENCODING => "",
				  CURLOPT_MAXREDIRS => 10,
				  CURLOPT_TIMEOUT => 30,
				  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				  CURLOPT_CUSTOMREQUEST => "POST",
				  CURLOPT_POSTFIELDS => "action=list&appid=15&appostype=2&appversion=3.8.0&area=".$info['area']."&channel=appstore&color=".$info['color']."&homeType=".$info['type']."&idfa=EAFA36B5-81BA-4A91-A3B7-4B79B7672925&initialize=0&model=imagessets&page=".$info['define_page']."	&paging=true&perPage=6&style=".$info['style']."&systemversion=8.2&t8t_device_id=F01E4FC3-F276-4656-B30B-ED1CBF5470B1&to8to_token=6265841_b305b06ee4c7807fd4d899ffb0cd6f5b&uid=6265841&version=2.5",
				  CURLOPT_HTTPHEADER => array(
				    "cache-control: no-cache",
				    "content-type: application/x-www-form-urlencoded",
				    "postman-token: f3c33aab-3a8a-f370-4a3a-03e55ed22b4e"
				  ),
				));

				$response = curl_exec($curl);
				$err = curl_error($curl);
				curl_close($curl);


				$noyong1=json_decode($response,true);
				$design_info1=$noyong1['data'][$_GET['order']];
				//var_dump($design_info1);die;
				$this->assign('design_info1',$design_info1);
						$this->display();

}
			

public function write_action($toUser,$action,$action_type){
						$user_table=D('weixin_user');
						$arr=$user_table->where("openid='".$toUser."'")->select();
						$user_action['user_id']=$arr['0']['id'];
						$user_action['action']="$action";
						$user_action['action_type']=$action_type;
							$user_action['time']=date("Y-m-d H:i:s",time());
							$table=D('weixin_action');
							$table->create($user_action);
							$table->add();

}

public function check_action($time){
						$sys_time=strtotime(date("Y-m-d H:i:s",time()));
						$action_time=strtotime ($time);
						$take_time=($sys_time-$action_time)/3600;
						return $take_time;

}


public function test2(){
	$user_design=array('0'=>4,'1'=>4,'2'=>0,'3'=>0);
						$design_table=D('weixin_designnum');
										$arr1=$design_table->where("style='".$user_design['0']."' and hometype='".$user_design['1']."' and area='".$user_design['2']."' and color='".$user_design['3']."'")->select();
										$design_num=$arr1['0']['design_number'];
										$design_page=intval($design_num/2);
										$define_page=mt_rand(1,$design_page);//获得随机页面
										$curl = curl_init();

				curl_setopt_array($curl, array(
				  CURLOPT_URL => "http://mobileapi.to8to.com/index.php",
				  CURLOPT_RETURNTRANSFER => true,
				  CURLOPT_ENCODING => "",
				  CURLOPT_MAXREDIRS => 10,
				  CURLOPT_TIMEOUT => 30,
				  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				  CURLOPT_CUSTOMREQUEST => "POST",
				  CURLOPT_POSTFIELDS => "action=list&appid=15&appostype=2&appversion=3.8.0&area=".$user_design['2']."&channel=appstore&color=".$user_design['3']."&homeType=".$user_design['1']."&idfa=EAFA36B5-81BA-4A91-A3B7-4B79B7672925&initialize=0&model=imagessets&page=".$define_page."	&paging=true&perPage=2&style=".$user_design['0']."&systemversion=8.2&t8t_device_id=F01E4FC3-F276-4656-B30B-ED1CBF5470B1&to8to_token=6265841_b305b06ee4c7807fd4d899ffb0cd6f5b&uid=6265841&version=2.5",
				  CURLOPT_HTTPHEADER => array(
				    "cache-control: no-cache",
				    "content-type: application/x-www-form-urlencoded",
				    "postman-token: f3c33aab-3a8a-f370-4a3a-03e55ed22b4e"
				  ),
				));

				$response = curl_exec($curl);
				$err = curl_error($curl);
				curl_close($curl);


				$noyong1=json_decode($response,true);
				$design_info=$noyong1['data'];
	/*		<xml>
<ToUserName><![CDATA[toUser]]></ToUserName>
<FromUserName><![CDATA[fromUser]]></FromUserName>
<CreateTime>12345678</CreateTime>
<MsgType><![CDATA[news]]></MsgType>
<ArticleCount>2</ArticleCount>
<Articles>
<item>
<Title><![CDATA[title1]]></Title> 
<Description><![CDATA[description1]]></Description>
<PicUrl><![CDATA[picurl]]></PicUrl>
<Url><![CDATA[url]]></Url>
</item>
<item>
<Title><![CDATA[title]]></Title>
<Description><![CDATA[description]]></Description>
<PicUrl><![CDATA[picurl]]></PicUrl>
<Url><![CDATA[url]]></Url>
</item>
</Articles>
</xml> */	
		$num=count($design_info);
$toUser   = $postObj->FromUserName;
				$fromUser = $postObj->ToUserName;
				$design_template="<xml>
								<ToUserName><![CDATA[%s]]></ToUserName>
								<FromUserName><![CDATA[%s]]></FromUserName>
								<CreateTime>%s</CreateTime>
								<MsgType><![CDATA[%s]]></MsgType>
								<ArticleCount>".$num."</ArticleCount>
								<Articles>";

				foreach ($design_info as $key => $value) {
					$design_template.="<item>
								<Title><![CDATA[".$value['title']."]]></Title> 
								<Description><![CDATA[这里是一套".$value['title']."设计]]></Description>
								<PicUrl><![CDATA[".$value['info']['0']['filename']."]]></PicUrl>
								<Url><![CDATA[http://www.bestyzc.club/index.php/Home/Weixin/show_design?color=".$user_design['3']."&type=".$user_design['1']."&style=".$user_design['0']."&area=".$user_design['2']."&define_page=".$define_page."&order=".$key."]]></Url>
								</item>";
				}
			
			$design_template.="</Articles>
								</xml>";
				var_dump($design_template);die;

								echo sprintf($design_template,$toUser,$fromUser,time(),'news');

}


public function test($a='0,0,0,0'){
	$user_post=explode(',', $a);
	$post_num=count($user_post);
	if ($post_num==4) {
		

		$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://mobileapi.to8to.com/index.php",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "action=list&appid=15&appostype=2&appversion=3.8.0&area=".$user_post['0']."&channel=appstore&color=".$user_post['1']."&homeType=".$user_post['3']."&idfa=EAFA36B5-81BA-4A91-A3B7-4B79B7672925&initialize=0&model=imagessets&page=1&paging=true&perPage=1000&style=".$user_post['4']."8&systemversion=8.2&t8t_device_id=F01E4FC3-F276-4656-B30B-ED1CBF5470B1&to8to_token=6265841_b305b06ee4c7807fd4d899ffb0cd6f5b&uid=6265841&version=2.5",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "content-type: application/x-www-form-urlencoded",
    "postman-token: f3c33aab-3a8a-f370-4a3a-03e55ed22b4e"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);


$noyong1=json_decode($response,true);
$design_info=$noyong1['data'];
var_dump($design_info);die;


	}
	var_dump($post_num);die;


}
	
}



