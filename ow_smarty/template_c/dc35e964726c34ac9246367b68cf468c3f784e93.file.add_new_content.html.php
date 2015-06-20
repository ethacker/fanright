<?php /* Smarty version Smarty-3.1.12, created on 2015-06-19 18:44:14
         compiled from "/var/www/html/ow_system_plugins/base/views/components/add_new_content.html" */ ?>
<?php /*%%SmartyHeaderCode:117540371255849b3e073f67-10471007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc35e964726c34ac9246367b68cf468c3f784e93' => 
    array (
      0 => '/var/www/html/ow_system_plugins/base/views/components/add_new_content.html',
      1 => 1429047570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117540371255849b3e073f67-10471007',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_55849b3e0877d2_25372478',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55849b3e0877d2_25372478')) {function content_55849b3e0877d2_25372478($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
<a class="ow_add_content <?php echo $_smarty_tpl->tpl_vars['item']->value['iconClass'];?>
"<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['id'])){?> id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</a>
<?php } ?><?php }} ?>