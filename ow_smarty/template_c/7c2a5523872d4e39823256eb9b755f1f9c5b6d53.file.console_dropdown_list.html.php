<?php /* Smarty version Smarty-3.1.12, created on 2015-06-19 18:44:13
         compiled from "/var/www/html/ow_system_plugins/base/views/components/console_dropdown_list.html" */ ?>
<?php /*%%SmartyHeaderCode:197173359555849b3df26d25-31081455%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c2a5523872d4e39823256eb9b755f1f9c5b6d53' => 
    array (
      0 => '/var/www/html/ow_system_plugins/base/views/components/console_dropdown_list.html',
      1 => 1429047570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197173359555849b3df26d25-31081455',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'label' => 0,
    'counter' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_55849b3df39c80_54265389',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55849b3df39c80_54265389')) {function content_55849b3df39c80_54265389($_smarty_tpl) {?><a href="javascript://" class="ow_console_item_link"><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</a>

<span <?php if (empty($_smarty_tpl->tpl_vars['counter']->value['number'])){?>style="display: none;"<?php }?> class="ow_count_wrap OW_ConsoleItemCounter" >
    <span class="<?php if ($_smarty_tpl->tpl_vars['counter']->value['active']){?>ow_count_active<?php }?> ow_count_bg OW_ConsoleItemCounterPlace">
        <span class="ow_count OW_ConsoleItemCounterNumber" <?php if (empty($_smarty_tpl->tpl_vars['counter']->value['number'])){?>style="visibility: hidden;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['counter']->value['number'];?>
</span>
    </span>
</span>
<?php }} ?>