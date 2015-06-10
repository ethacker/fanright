<?php /* Smarty version Smarty-3.1.12, created on 2015-06-10 18:33:32
         compiled from "/var/www/html/ow_plugins/contact_importer/views/components/email_invite.html" */ ?>
<?php /*%%SmartyHeaderCode:4593126155578bb3cda24a3-38599670%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33d8057fe3a588e09aab136b6a5abeae8d93b81d' => 
    array (
      0 => '/var/www/html/ow_plugins/contact_importer/views/components/email_invite.html',
      1 => 1429047576,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4593126155578bb3cda24a3-38599670',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5578bb3cdaa963_46787271',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5578bb3cdaa963_46787271')) {function content_5578bb3cdaa963_46787271($_smarty_tpl) {?><?php if (!is_callable('smarty_block_form')) include '/var/www/html/ow_smarty/plugin/block.form.php';
if (!is_callable('smarty_function_input')) include '/var/www/html/ow_smarty/plugin/function.input.php';
if (!is_callable('smarty_function_submit')) include '/var/www/html/ow_smarty/plugin/function.submit.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>'inite-friends')); $_block_repeat=true; echo smarty_block_form(array('name'=>'inite-friends'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php echo smarty_function_input(array('name'=>'emailList'),$_smarty_tpl);?>

    <div class="ow_smallmargin"><?php echo smarty_function_input(array('name'=>'text'),$_smarty_tpl);?>
</div>
    <div class="clearfix ow_smallmargin">
        <div class="ow_right"><?php echo smarty_function_submit(array('name'=>'submit'),$_smarty_tpl);?>
</div>
    </div>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>'inite-friends'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>