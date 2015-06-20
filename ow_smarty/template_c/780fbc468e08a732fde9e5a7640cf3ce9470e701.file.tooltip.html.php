<?php /* Smarty version Smarty-3.1.12, created on 2015-06-19 18:44:13
         compiled from "/var/www/html/ow_system_plugins/base/decorators/tooltip.html" */ ?>
<?php /*%%SmartyHeaderCode:168072595755849b3dbb7212-41579552%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '780fbc468e08a732fde9e5a7640cf3ce9470e701' => 
    array (
      0 => '/var/www/html/ow_system_plugins/base/decorators/tooltip.html',
      1 => 1429047570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168072595755849b3dbb7212-41579552',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_55849b3dbc0988_52870269',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55849b3dbc0988_52870269')) {function content_55849b3dbc0988_52870269($_smarty_tpl) {?>
<div class="ow_tooltip <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['addClass'])){?> <?php echo $_smarty_tpl->tpl_vars['data']->value['addClass'];?>
<?php }?>">
    <div class="ow_tooltip_tail">
        <span></span>
    </div>
    <div class="ow_tooltip_body">
        <?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>

    </div>
</div><?php }} ?>