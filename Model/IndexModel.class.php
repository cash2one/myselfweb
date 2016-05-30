<?php

namespace Model;
use Think\Model;

class IndexModel extends Model{
    function test(){
        return 123;
    }
    /* function searchst($q){
        $obj=D('movie');
        $obj1=D('area');
        $obj2=D('cate');
        $m='%'.$q[movie_name].'%';
        $first=$obj->where("name like '$m'")->select();
        foreach ($first as $k=>&$v){
            $n=$obj1->find($v[area]);
           
          //  show_bug($n[areaname]);
            $v[area1]=$n[areaname];
        }
        foreach ($first as $k=>&$v){
            $n=$obj2->find($v[kind]);
             
           // show_bug($v);
            $v[kind1]=$n[catename];
        }
        
       // $l=$obj2->select();
        
        
       // show_bug($first);
        //show_bug($n);
       // show_bug($l);
        return $first;
    } */
    
}
