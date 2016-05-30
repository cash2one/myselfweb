<?php /* Smarty version Smarty-3.1.6, created on 2016-04-04 19:40:57
         compiled from "D:\localuser\ftp483451\Web/Home/View\Weixin\show_design.html" */ ?>
<?php /*%%SmartyHeaderCode:195415701e69b798224-51850812%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a096996f5ec43101116ece537c432615a945472' => 
    array (
      0 => 'D:\\localuser\\ftp483451\\Web/Home/View\\Weixin\\show_design.html',
      1 => 1459770450,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195415701e69b798224-51850812',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5701e69b80bb6',
  'variables' => 
  array (
    'design_info1' => 0,
    'd_val' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5701e69b80bb6')) {function content_5701e69b80bb6($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
    <title>装修展示</title>
    <link rel="stylesheet" href="<?php echo @Home_CSS;?>
weui.css"/>
    <link rel="stylesheet" href="<?php echo @Home_CSS;?>
example.css"/>
</head>
<body>

    <!-- <div class="hd">
        <h1 class="page_title">Article</h1>
    </div> -->
    <div class="bd">
        <article class="weui_article">
            <h1><?php echo $_smarty_tpl->tpl_vars['design_info1']->value["title"];?>
</h1>
            <section>
                <?php  $_smarty_tpl->tpl_vars['d_val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d_val']->_loop = false;
 $_smarty_tpl->tpl_vars['d_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['design_info1']->value['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d_val']->key => $_smarty_tpl->tpl_vars['d_val']->value){
$_smarty_tpl->tpl_vars['d_val']->_loop = true;
 $_smarty_tpl->tpl_vars['d_key']->value = $_smarty_tpl->tpl_vars['d_val']->key;
?>
                <section>
                   <img style="width:100%;align-self:center;" src="<?php echo $_smarty_tpl->tpl_vars['d_val']->value['filename'];?>
"/>
                </section>
               <?php } ?>
            </section>
        </article>
    </div>

</body>
</html><?php }} ?>