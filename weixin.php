<?php 
$nonce = $_GET['nonce'];
        $token     = 'yzc';
        $timestamp = $_GET['timestamp'];
        $echostr   = $_GET['echostr'];
        $signature = $_GET['signature'];
        //�γ����飬Ȼ���ֵ�������
        $array = array();
        $array = array($nonce, $timestamp, $token);
        sort($array);
        //ƴ�ӳ��ַ���,sha1���� ��Ȼ����signature����У��
        $str = sha1( implode( $array ) );
        if( $str  == $signature ){
            //��һ�ν���weixin api�ӿڵ�ʱ��
            echo  $echostr;
            exit;
        }