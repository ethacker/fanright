<?php /* Smarty version Smarty-3.1.12, created on 2015-06-10 18:33:32
         compiled from "/var/www/html/ow_plugins/newsfeed/views/formats/text.html" */ ?>
<?php /*%%SmartyHeaderCode:1455120505578bb3cd103e8-20209393%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '605fcb9c07a7886176a0b8e09eb067c91ab359b9' => 
    array (
      0 => '/var/www/html/ow_plugins/newsfeed/views/formats/text.html',
      1 => 1429047572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1455120505578bb3cd103e8-20209393',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5578bb3cd14219_89776613',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5578bb3cd14219_89776613')) {function content_5578bb3cd14219_89776613($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_more')) include '/var/www/html/ow_smarty/plugin/modifier.more.php';
?><?php echo smarty_modifier_more($_smarty_tpl->tpl_vars['text']->value,300);?>

<?php }} ?>