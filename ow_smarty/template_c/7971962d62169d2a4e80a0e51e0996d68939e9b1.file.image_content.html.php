<?php /* Smarty version Smarty-3.1.12, created on 2015-06-19 18:44:13
         compiled from "/var/www/html/ow_plugins/newsfeed/views/formats/image_content.html" */ ?>
<?php /*%%SmartyHeaderCode:38765889855849b3da35b41-96443717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7971962d62169d2a4e80a0e51e0996d68939e9b1' => 
    array (
      0 => '/var/www/html/ow_plugins/newsfeed/views/formats/image_content.html',
      1 => 1429047572,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38765889855849b3da35b41-96443717',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'vars' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_55849b3da55888_35049463',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55849b3da55888_35049463')) {function content_55849b3da55888_35049463($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_more')) include '/var/www/html/ow_smarty/plugin/modifier.more.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['vars']->value['status'])){?><div class="ow_newsfeed_body_status ow_smallmargin"><?php echo smarty_modifier_more($_smarty_tpl->tpl_vars['vars']->value['status'],300);?>
</div><?php }?>

<div class="ow_newsfeed_oembed_atch clearfix">
    <div class="ow_newsfeed_item_picture">
    <a href="<?php if (!empty($_smarty_tpl->tpl_vars['vars']->value['url'])){?><?php echo $_smarty_tpl->tpl_vars['vars']->value['url'];?>
<?php }else{ ?>javascript://<?php }?>"><img src="<?php echo $_smarty_tpl->tpl_vars['vars']->value['thumbnail'];?>
" /></a>
    </div>
    <div class="ow_newsfeed_item_content">
        <a class="ow_newsfeed_item_title" href="<?php if (!empty($_smarty_tpl->tpl_vars['vars']->value['url'])){?><?php echo $_smarty_tpl->tpl_vars['vars']->value['url'];?>
<?php }else{ ?>javascript://<?php }?>"><?php echo $_smarty_tpl->tpl_vars['vars']->value['title'];?>
</a>
        <div class="ow_remark ow_smallmargin"><?php echo $_smarty_tpl->tpl_vars['vars']->value['description'];?>
</div>
        
        <?php if ($_smarty_tpl->tpl_vars['vars']->value['userList']){?>
            <div class="owm_newsfeed_ulist">
                <div class="owm_newsfeed_item_padding owm_newsfeed_item_box clearfix">
                    <div class="owm_newsfeed_ulist_count" style="display:inline-block">
                        <?php echo $_smarty_tpl->tpl_vars['vars']->value['userList']['label'];?>

                    </div>
                    <?php echo $_smarty_tpl->tpl_vars['vars']->value['userList']['list'];?>

                </div>
            </div>
        <?php }?>
    </div>
</div><?php }} ?>