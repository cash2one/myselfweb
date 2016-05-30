<?php

namespace Home\Controller;
use Think\Controller;
class MovieController extends NController 
{

    function  index(){
          //var_dump($_SESSION['level']);die;
        $action='登陆个人影院';
         $action_time=date("Y-m-d H:i:s",time());
            $this->write_action($_SESSION['userip'],$_SESSION['action_adress'],$_SESSION['userid'],$action,$action_time);
        header("Access-Control-Allow-Origin：*");
        $table=D('myweb_movie_info');
    $arr=$table->where("is_update_info=1")->select();
    foreach ($arr as $key => $value) {
        
        $arr[$key]['douban_actor']=mb_substr($value['douban_actor'],0,70,"UTF-8")."……";
    }
//var_dump($arr);die;
   // var_dump($arr);die;
   // var_dump($arr);die;
	$this->check_login();
    $this->assign('level',$_SESSION['level']);
    $this->assign('info',$arr);
    $this->assign('username',$_SESSION['username']);
    $this->display();
    }
    function  movie_detail(){
          //var_dump($_SESSION['level']);die;
         $table=D('myweb_movie_info');
          $arr=$table->where("id=".$_GET['id'])->select();
          $pass_time=ceil(time()-strtotime($arr['0']['create_download_url_time']))/3600;
          //var_dump($arr);die;
          if($pass_time>6){
            $a=$this->get_download_url($arr['0']['wangpan_url']);
            $info['download_url']=$a['data']['downloadurl'];
            $info['create_download_url_time']=date('Y-m-d H:i:s',time());
            $table->where("id=".$_GET['id'])->save($info);
           
          }
     $arr=$table->where("id=".$_GET['id'])->select();
     $action='察看影片信息-'.$arr['0']['movie_name'];
         $action_time=date("Y-m-d H:i:s",time());
            $this->write_action($_SESSION['userip'],$_SESSION['action_adress'],$_SESSION['userid'],$action,$action_time);
     $arr['0']['douban_actor']=preg_replace('/主演:/','',$arr['0']['douban_actor']);
     $arr['0']['douban_director']=preg_replace('/导演:/','',$arr['0']['douban_director']);
     $arr['0']['douban_type']=preg_replace('/类型:/','',$arr['0']['douban_type']);
     $arr['0']['douban_area']=preg_replace('/地区:/','',$arr['0']['douban_area']);
     $arr['0']['douban_uptime']=preg_replace('/上映日期:/','',$arr['0']['douban_uptime']);
     $arr['0']['douban_movietime']=preg_replace('/片长:/','',$arr['0']['douban_movietime']);
$this->assign('username',$_SESSION['username']);
    $this->assign('level',$_SESSION['level']);
          $this->assign('arr',$arr);
     //var_dump($arr);die;
    $this->display();
    }
    function  add_movie(){
      //
        
        if (!empty($_POST)) {
            $movie_info['movie_name']=$_POST['movie_name'];
            $movie_info['wangpan_url']=$_POST['download_url'];
            $table=D('myweb_movie_info');
                        $table->create($movie_info);
                        $table->add();
        }
    $this->check_login();
    $this->display();
    }
     function  search_movie(){
      //
        //var_dump($_POST);die;
        $table=D('myweb_movie_info');
       $keywords=$_POST['keywords'];
        $where['movie_name'] = array('like',"%$keywords%");
       $arr=$table->where($where)->select();
       $where1['douban_actor'] = array('like',"%$keywords%");
       $arr1=$table->where($where1)->select();
     
     $action='搜索信息-'.$keywords;
         $action_time=date("Y-m-d H:i:s",time());
            $this->write_action($_SESSION['userip'],$_SESSION['action_adress'],$_SESSION['userid'],$action,$action_time);
            foreach ($arr as $key => $value) {
                $arr[$key]['douban_actor']=preg_replace('/主演:/','',$arr[$key]['douban_actor']);
     $arr[$key]['douban_director']=preg_replace('/导演:/','',$arr[$key]['douban_director']);
     $arr[$key]['douban_type']=preg_replace('/类型:/','',$arr[$key]['douban_type']);
     $arr[$key]['douban_area']=preg_replace('/地区:/','',$arr[$key]['douban_area']);
     $arr[$key]['douban_uptime']=preg_replace('/上映日期:/','',$arr[$key]['douban_uptime']);
     $arr[$key]['douban_movietime']=preg_replace('/片长:/','',$arr[$key]['douban_movietime']);
            }
            foreach ($arr1 as $key => $value) {
                $arr1[$key]['douban_actor']=preg_replace('/主演:/','',$arr1[$key]['douban_actor']);
     $arr1[$key]['douban_director']=preg_replace('/导演:/','',$arr1[$key]['douban_director']);
     $arr1[$key]['douban_type']=preg_replace('/类型:/','',$arr1[$key]['douban_type']);
     $arr1[$key]['douban_area']=preg_replace('/地区:/','',$arr1[$key]['douban_area']);
     $arr1[$key]['douban_uptime']=preg_replace('/上映日期:/','',$arr1[$key]['douban_uptime']);
     $arr1[$key]['douban_movietime']=preg_replace('/片长:/','',$arr1[$key]['douban_movietime']);
            }
     
$this->assign('username',$_SESSION['username']);
    $this->assign('level',$_SESSION['level']);
          $this->assign('arr',$arr);
          $this->assign('arr1',$arr1);
    $this->check_login();
    $this->display();
    }

     function  movie_xiangqing(){
      //
     
    $this->check_login();
    $this->display();
    }


    function  get_movie_info(){
     $table=D('myweb_movie_info');
    $arr=$table->where("is_update_info=0")->select();
    foreach ($arr as $key => $value) {
        $info=$this->get_douban_info($value['movie_name']);
        $info['is_update_info']=1;
        $arr=$this->get_download_url($value['wangpan_url']);
        $state_code=$arr['errno'];
        if ($state_code<>0) {
            $arr=$this->get_download_url($value['wangpan_url']);
        }
        $info['download_url']=$arr['data']['downloadurl'];
        $info['create_download_url_time']=date('Y-m-d H:i:s',time());
        $table=D('myweb_movie_info');
        $a=$table->where("id=".$value['id'])->save($info);
    }
    

    }






    function get_douban_info($movie_name=0){
        if($movie_name){
$url='https://movie.douban.com/subject_search?search_text='.$movie_name.'&cat=1002'; 
$html = file_get_contents($url); 
$subject='/<a class="nbg".*[\n].*alt="'.$movie_name.'".*/';
preg_match($subject,$html,$matches);
$subject_url='/(https:\/\/movie.douban.com)\S*\//';
preg_match($subject_url,$matches['0'],$matches_url);
$subject_id='/\d{3,}/';
preg_match($subject_id,$matches_url['0'],$matches_id);
$info['douban_id']=$matches_id['0'];
$url="https://movie.douban.com/subject/".$info['douban_id']."/"; 
$html = file_get_contents($url); 
$html= strip_tags($html);
$subject_actor="/主演\:.*/";
preg_match($subject_actor,$html,$matches_actor);
$info['douban_actor']=$matches_actor['0'];
$subject_director="/导演\:.*/";
preg_match($subject_director,$html,$matches_director);
$info['douban_director']=$matches_director['0'];
//类型
$subject_type="/类型\:.*/";
preg_match($subject_type,$html,$matches_type);
$info['douban_type']=$matches_type['0'];
//地区
$subject_area="/地区\:.*/";
preg_match($subject_area,$html,$matches_area);
$info['douban_area']=$matches_area['0'];
//上映时间
$subject_uptime="/上映日期\:.*/";
preg_match($subject_uptime,$html,$matches_uptime);
$info['douban_uptime']=$matches_uptime['0'];
//片长
$subject_movietime="/片长\:.*/";
preg_match($subject_movietime,$html,$matches_movietime);
$info['douban_movietime']=$matches_movietime['0'];
//豆瓣评分
$subject_code="/豆瓣评分\n.*\n.*/";
preg_match($subject_code,$html,$matches_code);
$matches_code=preg_replace('/\s*/','',$matches_code);
$subject_code="/\d*\.\d*/";
preg_match($subject_code,$matches_code['0'],$matches_code);
$info['douban_code']=$matches_code['0'];
//影片简介
$subject_synopsis="/剧情简介.*\n.*\n.*\n.*\n.*\n.*/";
preg_match($subject_synopsis,$html,$matches_synopsis);
$matches_synopsis=preg_replace('/\s*/','',$matches_synopsis);
$matches_synopsis=preg_replace('/剧情简介/','',$matches_synopsis);
$matches_synopsis=preg_replace('/·/','',$matches_synopsis);
$matches_synopsis=preg_replace('/&nbsp;/','',$matches_synopsis);

$info['douban_synopsis']=$matches_synopsis['0'];



$url='http://www.1905.com/search/?q='.$movie_name; 
$html = file_get_contents($url); 
$subject="/<img.*http\:\/\/.*".$movie_name."/";
preg_match($subject,$html,$matches);
$subject="/http\:\/\/\S*\"/";
preg_match($subject,$matches['0'],$matches);
$matches1=preg_replace('/_120_/','_360_',$matches['0']);
$matches1=preg_replace('/_168_/','_504_',$matches1);
$matches1=preg_replace('/\"/','',$matches1);
$info['douban_imgurl']=$matches1;
return $info;}else{
    return 0;
    }
}


   function get_download_url($share_info=0){
    $mycookie="Q=u%3D360H1479036130%26n%3D%26le%3D%26m%3DZGZ2WGWOWGWOWGWOWGWOWGWOAGt0%26qid%3D1479036130%26im%3D1_t00df551a583a87f4e9%26src%3Dpcw_cloud%26t%3D1";
$errmsg='';//失败原因
$errno=55;//错误代号
$cookie='';//cookie值
//$url="http://yunpan.cn/cFhEJLIGPa2PW";
$url='';
$password='';
if($share_info)
{
    $aurl=trim($share_info);
    $aurl=urldecode($aurl);
    $urlarr=explode(' ', $aurl);
    $url=$urlarr[0];
    $url=str_replace("https","http",$url);
    if(count($urlarr)>=2)
    {
        $password=end($urlarr);
    }
}
else {
    $errmsg='URL地址不能为空！';
    $res=array("errno"=>$errno,"errmsg"=>$errmsg);
    echo json_encode($res);
    return;
}
$ch = curl_init($url); //初始化
$options = array(
    CURLOPT_FOLLOWLOCATION => TRUE,
    CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0',
        CURLOPT_HEADER => TRUE,//将头文件的信息作为数据流输出
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => TRUE, //接收服务端范围的html代码而不是直接浏览器输出
        CURLOPT_TIMEOUT => 30,
        );
curl_setopt_array($ch, $options);
$content = curl_exec($ch); //执行curl并赋值给$content
$errmsg=curl_error($ch);
$content=str_replace(" ","",$content);
curl_close($ch);
if(strpos($content,"分享者已取消此分享，或删除了分享的文件"))
{
    $errmsg='Oh,NO!该链接已经失效了...';
    $res=array("errno"=>$errno,"errmsg"=>$errmsg);
    echo json_encode($res);
    return;
}
if(strpos($content,"请输入提取码"))//需要访问密码
{
    //echo '进入提取码识别<br>';
    $vurl = "http://c43.yunpan.360.cn/share/verifyPassword";
    $curlObj = curl_init();
    $strarr = explode("/",$url);
    $shorturl=end($strarr);
    $data=array(
        'shorturl'      =>$shorturl,
        'linkpassword'  =>$password,
        );
    $options = array(
            CURLOPT_HEADER => TRUE,//将头文件的信息作为数据流输出
            CURLOPT_URL => $vurl,
            CURLOPT_REFERER => $vurl,
            CURLOPT_POST => TRUE, //使用post提交
            CURLOPT_RETURNTRANSFER => TRUE, //接收服务端范围的html代码而不是直接浏览器输出
            CURLOPT_TIMEOUT => 4,
            CURLOPT_POSTFIELDS => http_build_query($data), //post的数据
            );
    curl_setopt_array($curlObj, $options);
    $response = curl_exec($curlObj);
    $errmsg=curl_error($curlObj);
    curl_close($curlObj);
    if(strstr($response,"\"errno\":0"))//POST成功了
    {
        $content=str_replace(' ', '', $response);//删除所有空格
        $cookie=$this->Search_String($response, 'Set-Cookie:', '{');
        //这里的Cookie重新设置一下是为了兼容SAE
        $cookie=explode(';', $cookie)[0].';';
        $ch = curl_init(); //初始化
        $options = array(
                CURLOPT_HEADER => TRUE,//将头文件的信息作为数据流输出
                CURLOPT_FOLLOWLOCATION => TRUE,
                CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:25.0) Gecko/20100101 Firefox/25.0',
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => TRUE, //接收服务端范围的html代码而不是直接浏览器输出
                CURLOPT_TIMEOUT => 30,
                CURLOPT_COOKIE =>$cookie //带Cookie提交数据
                );
        curl_setopt_array($ch, $options);
        $content = curl_exec($ch); //执行curl并赋值给$content
        $errmsg=curl_error($ch);
        $content=str_replace(" ","",$content);
    }
    else if(strstr($response,"\"errno\":")){
        echo '{'.$this->Search_String($response, '{', '}').'}';
        return;
    }
    else{
        $res=array('errno'=>55,'errmsg'=>$errmsg);
        echo json_encode($res);
        return;
    }
}
//成功获取分享页面信息后继续分析
if(strstr($content,"varrootFileList"))//文件夹
{
    //echo '进入文件夹解析<br>';
    if(empty($mycookie)){
        $res=array('errno'=>'5','errmsg'=>'暂不支持对文件夹的解析');
        echo json_encode($res);
        return;
    }
    $nid = $this->Search_String($content, "data:[{\"nid\":\"", "\"");
    $name = $this->Search_String($content, "name:'", "'");
    $surl=$this->Search_String($content, "surl:'", "'");
    //echo $nid.'<br>'.$surl;
    //这里的Cookie必须重新设置一下，否则下面的Header无法设置成功
    $cookie=explode(';', $cookie)[0].';';//这里的Cookie不对
    $cookie=$cookie.$mycookie;
    $downurl='http://c11.yunpan.360.cn/share/downloadfile?shorturl='.$surl.'&nid='.$nid.'&download_permit_token=';
    $headers = array(
        'User-Agent: Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-CN; rv:1.9) Gecko/2008052906 Firefox/3.0',
        'Referer: http://f1bd66.l11.yunpan.cn/lk/cFhEJLIGPa2PW',
        'Content-type:application/x-www-form-urlencoded',
        );
    $ch = curl_init($downurl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 120);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    //curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);//Header无法改变和$cookie取值有关，晕死了。。。
    //curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    $response = curl_exec($ch);
    $errmsg=curl_error($ch);
    curl_close($ch);
    if(strstr($response,"errno")){//终于成功了
        $size=0;
        $res=array();
        $add=array('filename'=>$name,'size'=>$size);//补充信息
        $res=$this->object_array(json_decode($response));
        $res=array_merge($res,$add);
        echo json_encode($res);
    }
    else{
        $res=array('errno'=>$errno,'errmsg'=>$errmsg);
        echo json_encode($res);
    }
}
else if(strstr($content,"varSYS_CONF"))//普通文件 文件夹
{
    //echo '进入普通文件解析<br>';
    $nid = $this->Search_String($content, "nid:'", "'");
    $email = $this->Search_String($content, "email:'", "'");
    $name = $this->Search_String($content, "name:'", "'");
    $surl=$this->Search_String($content, "surl:'", "'");
    $download_permit_token=$this->Search_String($content, "download_permit_token:'", "'");
    if($download_permit_token==""&&empty($mycookie))
    {
        $res=array('errno'=>'5','errmsg'=>'暂不支持对大文件的解析');
        echo json_encode($res);
        return;
    }
    //echo $nid.'<br>'.$email.'<br>'.$surl;
    //$cookie='user_visit_token_cHA8QjbyxkN5e=83850b9685cb9faef7337055d928f88c.1449369079; path=/; domain=yunpan.cn';
    //这里的Cookie必须重新设置一下，否则下面的Header无法设置成功
    $cookie=explode(';', $cookie)[0].';';
    $cookie=$cookie.$mycookie;
    $downurl='http://c11.yunpan.360.cn/share/downloadfile?shorturl='.$surl.'&nid='.$nid.'&download_permit_token='.$download_permit_token;
    $headers = array(
        'User-Agent: Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-CN; rv:1.9) Gecko/2008052906 Firefox/3.0',
        'Referer: http://c43.yunpan.360.cn/share/downloadfile/',
        'Content-type:application/x-www-form-urlencoded',
        );
    $ch = curl_init($downurl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 120);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    //curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);//Header无法改变和$cookie取值有关，晕死了。。。
    $response = curl_exec($ch);
    $errmsg=curl_error($ch);
    curl_close($ch);
    if(strstr($response,"errno")){//终于成功了
        //echo '终于成功了<br>';
        $size=$this->Search_String($response, '&fsize=', '&');
        $res=array();
        $add=array('filename'=>$name,'email'=>$email,'size'=>(int)$size);//补充信息
        $res=$this->object_array(json_decode($response));
        $res=array_merge($res,$add);
        return $res;
    }
    else{
        $res=array('errno'=>$errno,'errmsg'=>$errmsg);
        return $res;
    }
}
else {
    $res=array('errno'=>$errno,'errmsg'=>$errmsg);
    return $res;
}
}
function Search_String($html,$s1,$s2)
{
    $n=strpos($html,$s1);//寻找位置
    if($n)
    {
        $n+=strlen($s1);
        $str=substr($html,$n);//删除前面的
        $n=strpos($str,$s2);
        if($n)
        {
            $str=substr($str,0,$n);
            return $str;
        }
        else
            return "";
    }
    else
        return "";
}
//PHP和JS通讯通常都用json，
//但是PHP要用json的数据，通过json_decode转出来的数组并不是标准的array，
//所以需要用这个函数进行转换。
function object_array($array){
    if(is_object($array)){
        $array = (array)$array;
    }
    if(is_array($array)){
        foreach($array as $key=>$value){
            $array[$key] = $this->object_array($value);
        }
    }
    return $array;
}








 

}