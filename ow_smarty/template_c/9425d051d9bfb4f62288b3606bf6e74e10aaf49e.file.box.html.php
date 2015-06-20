<?php /* Smarty version Smarty-3.1.12, created on 2015-06-19 18:44:13
         compiled from "/var/www/html/ow_system_plugins/base/decorators/box.html" */ ?>
<?php /*%%SmartyHeaderCode:168258840555849b3dd389c8-29466210%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9425d051d9bfb4f62288b3606bf6e74e10aaf49e' => 
    array (
      0 => '/var/www/html/ow_system_plugins/base/decorators/box.html',
      1 => 1429047570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168258840555849b3dd389c8-29466210',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_55849b3dd5cc72_66884104',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55849b3dd5cc72_66884104')) {function content_55849b3dd5cc72_66884104($_smarty_tpl) {?><?php if (!is_callable('smarty_function_decorator')) include '/var/www/html/ow_smarty/plugin/function.decorator.php';
?><?php if ($_smarty_tpl->tpl_vars['data']->value['capEnabled']){?>
<div class="ow_box_cap<?php echo $_smarty_tpl->tpl_vars['data']->value['capAddClass'];?>
">
	<div class="ow_box_cap_right">
		<div class="ow_box_cap_body">
			<h3 class="<?php echo $_smarty_tpl->tpl_vars['data']->value['iconClass'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['label'];?>
</h3><?php echo $_smarty_tpl->tpl_vars['data']->value['capContent'];?>

		</div>
	</div>
</div>
<?php }?>
<div class="ow_box<?php echo $_smarty_tpl->tpl_vars['data']->value['addClass'];?>
 ow_break_word"<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['style'])){?> style="<?php echo $_smarty_tpl->tpl_vars['data']->value['style'];?>
"<?php }?>>
<?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>

<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['toolbar'])){?>
    <div class="ow_box_toolbar_cont clearfix">
	<?php echo smarty_function_decorator(array('name'=>'box_toolbar','itemList'=>$_smarty_tpl->tpl_vars['data']->value['toolbar']),$_smarty_tpl);?>

    </div>
<?php }?>
<?php if (empty($_smarty_tpl->tpl_vars['data']->value['type'])){?>
	<div class="ow_box_bottom_left"></div>
	<div class="ow_box_bottom_right"></div>
	<div class="ow_box_bottom_body"></div>
	<div class="ow_box_bottom_shadow"></div>
<?php }?>
</div><?php }} ?>