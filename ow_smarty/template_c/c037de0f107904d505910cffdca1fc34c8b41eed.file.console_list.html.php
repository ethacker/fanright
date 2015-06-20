<?php /* Smarty version Smarty-3.1.12, created on 2015-06-19 18:44:13
         compiled from "/var/www/html/ow_plugins/mailbox/views/components/console_list.html" */ ?>
<?php /*%%SmartyHeaderCode:65110526355849b3df3f253-74588751%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c037de0f107904d505910cffdca1fc34c8b41eed' => 
    array (
      0 => '/var/www/html/ow_plugins/mailbox/views/components/console_list.html',
      1 => 1432754052,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65110526355849b3df3f253-74588751',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mailModeEnabled' => 0,
    'isAuthorizedSendMessage' => 0,
    'viewAllUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_55849b3e00f6b6_41575943',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55849b3e00f6b6_41575943')) {function content_55849b3e00f6b6_41575943($_smarty_tpl) {?><?php if (!is_callable('smarty_function_text')) include '/var/www/html/ow_smarty/plugin/function.text.php';
?><div class="ow_console_list_wrapper OW_ConsoleListContainer">
    <div class="ow_nocontent OW_ConsoleListNoContent"><?php echo smarty_function_text(array('key'=>'base+empty_list'),$_smarty_tpl);?>
</div>
    <ul class="ow_console_list OW_ConsoleList"></ul>
    <div class="ow_preloader_content ow_console_list_preloader OW_ConsoleListPreloader" style="visibility: hidden"></div>
</div>

<div class="<?php if ($_smarty_tpl->tpl_vars['mailModeEnabled']->value&&$_smarty_tpl->tpl_vars['isAuthorizedSendMessage']->value){?>ow_console_messages_btns<?php }else{ ?>ow_console_messages_btn<?php }?> clearfix">
    <div class="ow_console_messages_viewall"><a href="<?php echo $_smarty_tpl->tpl_vars['viewAllUrl']->value;?>
"><?php echo smarty_function_text(array('key'=>"mailbox+view_all"),$_smarty_tpl);?>
</a></div>
    <?php if ($_smarty_tpl->tpl_vars['mailModeEnabled']->value&&$_smarty_tpl->tpl_vars['isAuthorizedSendMessage']->value){?><div class="ow_console_messages_send"><a href="javascript://" id="mailboxConsoleListSendMessageBtn" ><?php echo smarty_function_text(array('key'=>"mailbox+send_message"),$_smarty_tpl);?>
</a></div><?php }?>
</div><?php }} ?>