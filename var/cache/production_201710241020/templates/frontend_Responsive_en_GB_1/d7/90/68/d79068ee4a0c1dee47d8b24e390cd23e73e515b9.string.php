<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 15:49:53
         compiled from "d79068ee4a0c1dee47d8b24e390cd23e73e515b9" */ ?>
<?php /*%%SmartyHeaderCode:11244704655a37d5912d1336-55022940%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd79068ee4a0c1dee47d8b24e390cd23e73e515b9' => 
    array (
      0 => 'd79068ee4a0c1dee47d8b24e390cd23e73e515b9',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '11244704655a37d5912d1336-55022940',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blogArticle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a37d5912d6ae8_65131208',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a37d5912d6ae8_65131208')) {function content_5a37d5912d6ae8_65131208($_smarty_tpl) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sCategoryPath'][0][0]->sSmartyCategoryPath(array('categoryID'=>$_smarty_tpl->tpl_vars['blogArticle']->value['categoryId']),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['blogArticle']->value['title'];?>
<?php }} ?>