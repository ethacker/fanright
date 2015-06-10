<?php /* Smarty version Smarty-3.1.12, created on 2015-06-10 18:33:32
         compiled from "/var/www/html/ow_system_plugins/base/views/components/console_dropdown_hover.html" */ ?>
<?php /*%%SmartyHeaderCode:16663689555578bb3cf1c001-35359218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c047b615ba300b1c26b22f82ee74598b0fd44ed' => 
    array (
      0 => '/var/www/html/ow_system_plugins/base/views/components/console_dropdown_hover.html',
      1 => 1429047570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16663689555578bb3cf1c001-35359218',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'label' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5578bb3cf204a9_24863478',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5578bb3cf204a9_24863478')) {function content_5578bb3cf204a9_24863478($_smarty_tpl) {?><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" class="ow_console_item_link"><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</a>
<span class="ow_console_more"></span><?php }} ?>