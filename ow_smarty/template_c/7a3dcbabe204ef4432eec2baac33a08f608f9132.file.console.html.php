<?php /* Smarty version Smarty-3.1.12, created on 2015-06-19 18:44:14
         compiled from "/var/www/html/ow_system_plugins/base/views/components/console.html" */ ?>
<?php /*%%SmartyHeaderCode:174817003955849b3e01d1d5-20447001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a3dcbabe204ef4432eec2baac33a08f608f9132' => 
    array (
      0 => '/var/www/html/ow_system_plugins/base/views/components/console.html',
      1 => 1429047570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174817003955849b3e01d1d5-20447001',
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
  'unifunc' => 'content_55849b3e0278c3_99801151',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55849b3e0278c3_99801151')) {function content_55849b3e0278c3_99801151($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include '/var/www/html/ow_smarty/plugin/block.style.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


html div.ow_console_list_wrapper
{
    min-height: 0px;
    max-height: 257px;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="ow_console clearfix">
    <div class="ow_console_body clearfix">
        <div style="ow_floatright">
            <?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value){
$_smarty_tpl->tpl_vars["item"]->_loop = true;
?>
                <?php echo $_smarty_tpl->tpl_vars['item']->value;?>

            <?php } ?>
        </div>
    </div>
</div><?php }} ?>