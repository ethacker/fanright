<?php /* Smarty version Smarty-3.1.12, created on 2015-06-19 18:44:13
         compiled from "/var/www/html/ow_themes/darklets/decorators/button.html" */ ?>
<?php /*%%SmartyHeaderCode:168258840555849b3db19459-00483020%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6119658710daab1f9938ee261277a0ddbb1ff158' => 
    array (
      0 => '/var/www/html/ow_themes/darklets/decorators/button.html',
      1 => 1429047578,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168258840555849b3db19459-00483020',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_55849b3db493b5_14964530',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55849b3db493b5_14964530')) {function content_55849b3db493b5_14964530($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include '/var/www/html/ow_smarty/plugin/function.text.php';
?>
<span class="ow_button"><span class="<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['class'])){?> <?php echo $_smarty_tpl->tpl_vars['data']->value['class'];?>
<?php }?>"><input type="<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['type'])&&$_smarty_tpl->tpl_vars['data']->value['type']=='submit'){?>submit<?php }else{ ?>button<?php }?>"  value="<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['langLabel'])){?><?php echo smarty_function_text(array('key'=>$_smarty_tpl->tpl_vars['data']->value['langLabel']),$_smarty_tpl);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['data']->value['label'];?>
<?php }?>"<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['buttonName'])){?> name="<?php echo $_smarty_tpl->tpl_vars['data']->value['buttonName'];?>
"<?php }?><?php if (!empty($_smarty_tpl->tpl_vars['data']->value['id'])){?> id="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"<?php }?><?php if (!empty($_smarty_tpl->tpl_vars['data']->value['class'])){?> class="<?php echo $_smarty_tpl->tpl_vars['data']->value['class'];?>
"<?php }?><?php if (!empty($_smarty_tpl->tpl_vars['data']->value['extraString'])){?><?php echo $_smarty_tpl->tpl_vars['data']->value['extraString'];?>
<?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['onclick'])){?>onclick="<?php echo $_smarty_tpl->tpl_vars['data']->value['onclick'];?>
"<?php }?> /></span></span><?php }} ?>