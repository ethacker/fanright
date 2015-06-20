<?php /* Smarty version Smarty-3.1.12, created on 2015-06-19 18:44:13
         compiled from "/var/www/html/ow_system_plugins/base/views/components/menu.html" */ ?>
<?php /*%%SmartyHeaderCode:206634743755849b3ddd0583-12939658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7798e1fe674e6db65d75dad384e2eab8c7de5395' => 
    array (
      0 => '/var/www/html/ow_system_plugins/base/views/components/menu.html',
      1 => 1433971555,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206634743755849b3ddd0583-12939658',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'class' => 0,
    'data' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_55849b3dde92a5_37864407',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55849b3dde92a5_37864407')) {function content_55849b3dde92a5_37864407($_smarty_tpl) {?><ul class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
 clearfix">
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?><li class="<?php echo $_smarty_tpl->tpl_vars['item']->value['class'];?>
<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['active'])){?> active<?php }?>   btn-custom-lighten"><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"<?php if ($_smarty_tpl->tpl_vars['item']->value['new_window']){?> target="_blank"<?php }?>><span><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</span></a></li><?php } ?>
</ul>
<?php }} ?>