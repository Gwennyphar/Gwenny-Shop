<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 03:06:38
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Frontend/Bare/frontend/listing/actions/action-filter-facets.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11443101675a3722ae5b2b45-91656325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7daada927191e5725ca0063536c04544611dce4' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Frontend/Bare/frontend/listing/actions/action-filter-facets.tpl',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11443101675a3722ae5b2b45-91656325',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facets' => 0,
    'facet' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a3722ae5bfad2_26467952',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3722ae5bfad2_26467952')) {function content_5a3722ae5bfad2_26467952($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['facet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['facet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['facets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['facet']->key => $_smarty_tpl->tpl_vars['facet']->value){
$_smarty_tpl->tpl_vars['facet']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['facet']->value->getTemplate()!==null){?>
        <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['facet']->value->getTemplate(), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('facet'=>$_smarty_tpl->tpl_vars['facet']->value), 0);?>

    <?php }?>
<?php } ?><?php }} ?>