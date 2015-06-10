<?php /* Smarty version Smarty-3.1.12, created on 2015-06-10 18:33:32
         compiled from "/var/www/html/ow_system_plugins/base/decorators/tooltip.html" */ ?>
<?php /*%%SmartyHeaderCode:10852750315578bb3cc07337-38582636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '10852750315578bb3cc07337-38582636',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5578bb3cc107e4_24747875',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5578bb3cc107e4_24747875')) {function content_5578bb3cc107e4_24747875($_smarty_tpl) {?>
<div class="ow_tooltip <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['addClass'])){?> <?php echo $_smarty_tpl->tpl_vars['data']->value['addClass'];?>
<?php }?>">
    <div class="ow_tooltip_tail">
        <span></span>
    </div>
    <div class="ow_tooltip_body">
        <?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>

    </div>
</div><?php }} ?>