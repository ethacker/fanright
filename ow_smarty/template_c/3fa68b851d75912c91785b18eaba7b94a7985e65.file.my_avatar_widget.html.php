<?php /* Smarty version Smarty-3.1.12, created on 2015-06-19 18:44:14
         compiled from "/var/www/html/ow_system_plugins/base/views/components/my_avatar_widget.html" */ ?>
<?php /*%%SmartyHeaderCode:179918852055849b3e0586b2-08609860%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fa68b851d75912c91785b18eaba7b94a7985e65' => 
    array (
      0 => '/var/www/html/ow_system_plugins/base/views/components/my_avatar_widget.html',
      1 => 1429047570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179918852055849b3e0586b2-08609860',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'avatar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_55849b3e06bde7_69582303',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55849b3e06bde7_69582303')) {function content_55849b3e06bde7_69582303($_smarty_tpl) {?><?php if (!is_callable('smarty_function_decorator')) include '/var/www/html/ow_smarty/plugin/function.decorator.php';
?>
<div class="ow_my_avatar_widget clearfix">
	<div class="ow_left ow_my_avatar_img"><?php echo smarty_function_decorator(array('name'=>'avatar_item','data'=>$_smarty_tpl->tpl_vars['avatar']->value),$_smarty_tpl);?>
</div>
    <div class="ow_my_avatar_cont">
    	<a href="<?php echo $_smarty_tpl->tpl_vars['avatar']->value['url'];?>
" class="ow_my_avatar_username"><span><?php echo $_smarty_tpl->tpl_vars['avatar']->value['title'];?>
</span></a>
    </div>
</div><?php }} ?>