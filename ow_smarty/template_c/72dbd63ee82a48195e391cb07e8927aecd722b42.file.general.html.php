<?php /* Smarty version Smarty-3.1.12, created on 2015-06-19 18:44:13
         compiled from "/var/www/html/ow_themes/darklets/master_pages/general.html" */ ?>
<?php /*%%SmartyHeaderCode:16116514655849b3de03d57-09325906%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72dbd63ee82a48195e391cb07e8927aecd722b42' => 
    array (
      0 => '/var/www/html/ow_themes/darklets/master_pages/general.html',
      1 => 1434750822,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16116514655849b3de03d57-09325906',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'siteUrl' => 0,
    'siteName' => 0,
    'imageControlValues' => 0,
    'main_menu' => 0,
    'heading_icon_class' => 0,
    'heading' => 0,
    'content' => 0,
    'bottom_menu' => 0,
    'bottomPoweredByLink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_55849b3de2a183_77244504',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55849b3de2a183_77244504')) {function content_55849b3de2a183_77244504($_smarty_tpl) {?><?php if (!is_callable('smarty_function_component')) include '/var/www/html/ow_smarty/plugin/function.component.php';
if (!is_callable('smarty_function_add_content')) include '/var/www/html/ow_smarty/plugin/function.add_content.php';
if (!is_callable('smarty_function_text')) include '/var/www/html/ow_smarty/plugin/function.text.php';
if (!is_callable('smarty_function_decorator')) include '/var/www/html/ow_smarty/plugin/function.decorator.php';
?><div class="ow_page_wrap">
	<div class="ow_page_padding">
		<div class="ow_site_panel">
			<?php echo smarty_function_component(array('class'=>'BASE_CMP_Console'),$_smarty_tpl);?>

			<div class="ow_logo_wrap"><a href="<?php echo $_smarty_tpl->tpl_vars['siteUrl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['siteName']->value;?>
</a></div>
		</div>
		<div class="ow_header">
		
			<?php if (isset($_smarty_tpl->tpl_vars['imageControlValues']->value['headerImage']['src'])){?>
				<div style="background: url(<?php echo $_smarty_tpl->tpl_vars['imageControlValues']->value['headerImage']['src'];?>
) no-repeat; height: <?php echo $_smarty_tpl->tpl_vars['imageControlValues']->value['headerImage']['height'];?>
px;"></div>
			<?php }else{ ?>
				<div class="ow_header_pic"></div>
			<?php }?>
		</div>

		<div class="ow_page_container">
			<div class="fanright_nav_menu"><ul class="nav_links"><li class="fantasy  btn-custom-darken">
						<a class="persistent_links" href="http://ec2-52-26-104-96.us-west-2.compute.amazonaws.com/underconstruction.html">Fantasy</a></li><li class="fantasy  btn-custom-darken">
						<a class="persistent_links" href="http://ec2-52-26-104-96.us-west-2.compute.amazonaws.com/underconstruction.html">Fanright Competition</a></li><li class="fantasy  btn-custom-darken">
						<a class="persistent_links" href="http://ec2-52-26-104-96.us-west-2.compute.amazonaws.com/underconstruction.html">Pick'em Contests</a></li><li class="fantasy  btn-custom-darken">
						<a class="persistent_links" href="http://ec2-52-26-104-96.us-west-2.compute.amazonaws.com/underconstruction.html">Exchange</a></li></ul></div>
			<div class="ow_menu_wrap"><?php echo $_smarty_tpl->tpl_vars['main_menu']->value;?>
</div>
			<div class="ow_canvas">
				<div class="ow_page ow_bg_color clearfix">
					<h1 class="ow_stdmargin <?php echo $_smarty_tpl->tpl_vars['heading_icon_class']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['heading']->value;?>
</h1>
					<div class="ow_content">
						<?php echo smarty_function_add_content(array('key'=>'base.add_page_top_content'),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

						<?php echo smarty_function_add_content(array('key'=>'base.add_page_bottom_content'),$_smarty_tpl);?>

					</div>
					<div class="ow_sidebar">
						<?php echo smarty_function_component(array('class'=>"BASE_CMP_Sidebar"),$_smarty_tpl);?>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="ow_footer">
	<div class="ow_canvas">
		<div class="ow_page clearfix">
			<?php echo $_smarty_tpl->tpl_vars['bottom_menu']->value;?>

			<div class="ow_copyright">
				<?php echo smarty_function_text(array('key'=>'base+copyright'),$_smarty_tpl);?>

			</div>
			<div style="float:right;padding-bottom: 30px;">
				<?php echo $_smarty_tpl->tpl_vars['bottomPoweredByLink']->value;?>

			</div>
		</div>
	</div>
</div>    
<?php echo smarty_function_decorator(array('name'=>'floatbox'),$_smarty_tpl);?>

<?php }} ?>