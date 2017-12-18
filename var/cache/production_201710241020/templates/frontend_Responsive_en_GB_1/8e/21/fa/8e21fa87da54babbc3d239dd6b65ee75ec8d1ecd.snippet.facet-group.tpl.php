<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 03:06:38
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Frontend/Bare/frontend/listing/filter/facet-group.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1808165965a3722ae5a1253-87343344%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e21fa87da54babbc3d239dd6b65ee75ec8d1ecd' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Frontend/Bare/frontend/listing/filter/facet-group.tpl',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1808165965a3722ae5a1253-87343344',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facet' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a3722ae5addb0_38157411',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3722ae5addb0_38157411')) {function content_5a3722ae5addb0_38157411($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['facet']->value->getLabel()){?>
    <h3 class="filter--set-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value->getLabel(), ENT_QUOTES, 'utf-8', true);?>
</h3>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("frontend/listing/actions/action-filter-facets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('facets'=>$_smarty_tpl->tpl_vars['facet']->value->getFacetResults()), 0);?>

<?php }} ?>