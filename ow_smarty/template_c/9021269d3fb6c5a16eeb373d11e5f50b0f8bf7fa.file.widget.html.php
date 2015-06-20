<?php /* Smarty version Smarty-3.1.12, created on 2015-06-19 18:44:13
         compiled from "/var/www/html/ow_plugins/contact_importer/views/components/widget.html" */ ?>
<?php /*%%SmartyHeaderCode:114808325755849b3dd72d51-98581275%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9021269d3fb6c5a16eeb373d11e5f50b0f8bf7fa' => 
    array (
      0 => '/var/www/html/ow_plugins/contact_importer/views/components/widget.html',
      1 => 1429047576,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114808325755849b3dd72d51-98581275',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'btns' => 0,
    'b' => 0,
    'eicmp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_55849b3dd85583_13220356',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55849b3dd85583_13220356')) {function content_55849b3dd85583_13220356($_smarty_tpl) {?><?php if (!is_callable('smarty_block_style')) include '/var/www/html/ow_smarty/plugin/block.style.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('style', array()); $_block_repeat=true; echo smarty_block_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


.contactimporter_provider_button
{
	margin: 3px;
        display: inline-block;
	cursor: pointer;
}

.contactimporter_provider_button img
{
    width: 45px;
}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_style(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<center>
    <?php  $_smarty_tpl->tpl_vars["b"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["b"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['btns']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["b"]->key => $_smarty_tpl->tpl_vars["b"]->value){
$_smarty_tpl->tpl_vars["b"]->_loop = true;
?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['b']->value['href'];?>
" onclick="<?php echo $_smarty_tpl->tpl_vars['b']->value['onclick'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['b']->value['class'];?>
 contactimporter_provider_button">
            <img src="<?php echo $_smarty_tpl->tpl_vars['b']->value['iconUrl'];?>
" />
        </a>
    <?php } ?>
</center>
<div style="display:none;">
<div class="contactimporter_email_invite_cont">
<?php echo $_smarty_tpl->tpl_vars['eicmp']->value;?>

</div>
</div><?php }} ?>