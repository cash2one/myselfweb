<?php
header("content-type:text/html;charset=utf8");
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

function show_bug($msg){
    echo "<pre style='color:red'>";
    var_dump($msg);
    echo "</pre>";
}

//define('SITE_URL', '/public/');
define('Admin_CSS', '../../../public/Admin/css/');
define('Admin_IMG', '../../../public/Admin/img/');
define('Admin_JS', '../../../public/Admin/js/');
define('Home_CSS', '../../../public/Home/css/');
define('Home_IMG', '../../../public/Home/img/');
define('Home_JS', '../../../public/Home/js/');
define('Home_FONT', '../../../public/Home/font/');
define('SITE_URL', '/public/');
define('APP_DEBUG',true);
 

 
 
define('ROOT',$_SERVER['DOCUMENT_ROOT']);
define('THINK_PATH',ROOT.'/ThinkPHP/');
 
 
require THINK_PATH.'ThinkPHP.php';