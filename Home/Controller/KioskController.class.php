<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
class kioskController extends NController {

    function  myweb_kiosk(){//var_dump(123);die;
       $this->check_login();
       $rand=mt_rand(1,100);
        $url='http://api.zsreader.com/v2/pub/section/5664e6bd51e35212730095c2?page=1&rand='.$rand.'&size=20'; 
    $html = file_get_contents($url);
    $a=json_decode($html,true);
    $info['book']=$a['data'];
    $info['time']=date("Y-m-d",time());
    
//var_dump($info['time']);die;
    $this->assign('info',$info);
	
    $this->display();
    }

    function  getbookinfo(){//var_dump(123);die;
        $book_id=$_POST['b'];

 
        $url='http://api.zsreader.com/v2/pub/book/'.$book_id.'?rec=1&v=1'; 
    $html = file_get_contents($url);
    $a=json_decode($html,true);
    $info=$a['data'];



    $html="
                <div class='showLeft'>
                    <div class='partener'>
                        <img class='row1' src='".$info['img']."'  style='margin-left: 40px;''>
                        <div class='pname' style='width: 220px;'>书名:".$info['name']."</div>
                        <div class='pinfo' style='width: 220px;'>作者:".$info['author']."</div>
                        <div class='pinfo' style='width: 220px;'>出版社:".$info["publisher"]."</div>
                    </div>
                </div>
                <div class='showRight'>
                    <div class='huncontent' >    
                    <pre  style='padding-right: 20px;'>
作者介绍:</br>".
$info['authorDesc']
."
作品介绍</br>".
$info['desc']."
</pre>    </div>
                </div>
                
            </div>";

    $this->ajaxReturn($html);




    
    }

    
        

    }

   


       
  
  

  

        