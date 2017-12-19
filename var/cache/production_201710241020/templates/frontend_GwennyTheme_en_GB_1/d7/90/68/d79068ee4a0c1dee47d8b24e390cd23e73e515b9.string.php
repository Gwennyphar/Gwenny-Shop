<?php /* Smarty version Smarty-3.1.12, created on 2017-12-19 20:34:46
         compiled from "d79068ee4a0c1dee47d8b24e390cd23e73e515b9" */ ?>
<?php /*%%SmartyHeaderCode:20115242905a3969d6d5e660-14862794%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '20115242905a3969d6d5e660-14862794',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blogArticle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a3969d6d6b377_50244108',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3969d6d6b377_50244108')) {function content_5a3969d6d6b377_50244108($_smarty_tpl) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sCategoryPath'][0][0]->sSmartyCategoryPath(array('categoryID'=>$_smarty_tpl->tpl_vars['blogArticle']->value['categoryId']),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['blogArticle']->value['title'];?>
<?php }} ?>