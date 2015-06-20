<?php /* Smarty version Smarty-3.1.12, created on 2015-06-19 18:44:13
         compiled from "/var/www/html/ow_system_plugins/base/views/components/file_attachment.html" */ ?>
<?php /*%%SmartyHeaderCode:106863772555849b3de92190-28204495%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08102d77073fecd7a9bdbba5a6af8514c65891b6' => 
    array (
      0 => '/var/www/html/ow_system_plugins/base/views/components/file_attachment.html',
      1 => 1429047570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106863772555849b3de92190-28204495',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_55849b3de9e428_37549282',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55849b3de9e428_37549282')) {function content_55849b3de9e428_37549282($_smarty_tpl) {?><div id="<?php echo $_smarty_tpl->tpl_vars['data']->value['uid'];?>
">
    <div class="ow_file_attachment_preview clearfix"<?php if (empty($_smarty_tpl->tpl_vars['data']->value['showPreview'])){?> style="display:none;"<?php }?>></div>
    <?php if (empty($_smarty_tpl->tpl_vars['data']->value['selector'])){?>
    <div class="clearfix ow_status_update_btn_block">
        <span class="ow_attachment_icons">
            <div id="nfa-feed1" class="ow_attachments">
              <span class="buttons clearfix">
                  <a title="Attach" href="javascript://" class="attach"></a>
              </span>
            </div>
        </span>
    </div>
    <?php }?>
</div><?php }} ?>