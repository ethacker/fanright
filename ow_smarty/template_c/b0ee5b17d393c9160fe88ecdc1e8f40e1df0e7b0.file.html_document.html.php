<?php /* Smarty version Smarty-3.1.12, created on 2015-06-10 18:33:33
         compiled from "/var/www/html/ow_themes/origin/master_pages/html_document.html" */ ?>
<?php /*%%SmartyHeaderCode:15974479725578bb3d094583-56730512%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0ee5b17d393c9160fe88ecdc1e8f40e1df0e7b0' => 
    array (
      0 => '/var/www/html/ow_themes/origin/master_pages/html_document.html',
      1 => 1429047576,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15974479725578bb3d094583-56730512',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'language' => 0,
    'direction' => 0,
    'title' => 0,
    'headData' => 0,
    'bodyClass' => 0,
    'pageBody' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5578bb3d0a1ff5_65459535',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5578bb3d0a1ff5_65459535')) {function content_5578bb3d0a1ff5_65459535($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
" dir="<?php echo $_smarty_tpl->tpl_vars['direction']->value;?>
">
<head>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<?php echo $_smarty_tpl->tpl_vars['headData']->value;?>

</head>
<!--[if IE 8]><body class="ow ie8<?php echo $_smarty_tpl->tpl_vars['bodyClass']->value;?>
"><![endif]-->
<!--[if !IE 8]><!--><body class="ow<?php echo $_smarty_tpl->tpl_vars['bodyClass']->value;?>
"><!--<![endif]-->
<?php echo $_smarty_tpl->tpl_vars['pageBody']->value;?>

</body>
</html>
<?php }} ?>