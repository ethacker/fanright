<?php /* Smarty version Smarty-3.1.12, created on 2015-06-19 18:44:14
         compiled from "/var/www/html/ow_system_plugins/base/views/components/sidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:824014855849b3e0313b6-20409665%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07e8069c453121a1302719becea1d6280c5fbfd1' => 
    array (
      0 => '/var/www/html/ow_system_plugins/base/views/components/sidebar.html',
      1 => 1429047570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '824014855849b3e0313b6-20409665',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'componentList' => 0,
    'component' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_55849b3e04ce36_28981874',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55849b3e04ce36_28981874')) {function content_55849b3e04ce36_28981874($_smarty_tpl) {?><?php if (!is_callable('smarty_block_script')) include '/var/www/html/ow_smarty/plugin/block.script.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('script', array()); $_block_repeat=true; echo smarty_block_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    DND_InterfaceFix.fix('.ow_sidebar');
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php  $_smarty_tpl->tpl_vars["component"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["component"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['componentList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["component"]->key => $_smarty_tpl->tpl_vars["component"]->value){
$_smarty_tpl->tpl_vars["component"]->_loop = true;
?>
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sb_component'][0][0]->tplComponent(array('uniqName'=>$_smarty_tpl->tpl_vars['component']->value['uniqName']),$_smarty_tpl);?>

<?php } ?><?php }} ?>