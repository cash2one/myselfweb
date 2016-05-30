<?php

namespace Home\Model;
use Think\Model;

class IndexModel extends Model{
    function define_select($table=0,$where=0){
        var_dump(1);die;
        $table=D($table);
        if($where){
            foreach($where as $key=>$value){
                $string=$key."='".$value;
            }var_dump($string);die;
        }
$arr=$table->where("username='".$a['username']."' and password='".$a['password']."'")->select();
        }
    
    
}
