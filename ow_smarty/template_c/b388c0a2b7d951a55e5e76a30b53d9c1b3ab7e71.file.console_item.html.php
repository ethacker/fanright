<?php /* Smarty version Smarty-3.1.12, created on 2015-06-10 18:33:32
         compiled from "/var/www/html/ow_system_plugins/base/views/components/console_item.html" */ ?>
<?php /*%%SmartyHeaderCode:1479305545578bb3cf22003-59261268%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b388c0a2b7d951a55e5e76a30b53d9c1b3ab7e71' => 
    array (
      0 => '/var/www/html/ow_system_plugins/base/views/components/console_item.html',
      1 => 1429047570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1479305545578bb3cf22003-59261268',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5578bb3cf3a522_94913526',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5578bb3cf3a522_94913526')) {function content_5578bb3cf3a522_94913526($_smarty_tpl) {?><?php if (!is_callable('smarty_block_block_decorator')) include '/var/www/html/ow_smarty/plugin/block.block_decorator.php';
?><div id="<?php echo $_smarty_tpl->tpl_vars['item']->value['uniqId'];?>
" class="ow_console_item <?php echo $_smarty_tpl->tpl_vars['item']->value['class'];?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['hidden']){?>style="display: none;"<?php }?>>
    <?php echo $_smarty_tpl->tpl_vars['item']->value['html'];?>

    <?php if (!empty($_smarty_tpl->tpl_vars['item']->value['content'])){?>
        <div id="<?php echo $_smarty_tpl->tpl_vars['item']->value['content']['uniqId'];?>
" class="OW_ConsoleItemContent" style="display: none;">

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('block_decorator', array('name'=>"tooltip",'addClass'=>"console_tooltip ow_tooltip_top_right")); $_block_repeat=true; echo smarty_block_block_decorator(array('name'=>"tooltip",'addClass'=>"console_tooltip ow_tooltip_top_right"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php echo $_smarty_tpl->tpl_vars['item']->value['content']['html'];?>

            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_block_decorator(array('name'=>"tooltip",'addClass'=>"console_tooltip ow_tooltip_top_right"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


        </div>
    <?php }?>
</div><?php }} ?>