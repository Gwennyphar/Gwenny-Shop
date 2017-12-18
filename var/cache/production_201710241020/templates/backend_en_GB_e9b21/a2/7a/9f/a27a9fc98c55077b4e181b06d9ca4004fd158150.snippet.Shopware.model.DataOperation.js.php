<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 15:49:47
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/base/application/Shopware.model.DataOperation.js" */ ?>
<?php /*%%SmartyHeaderCode:8800896285a37d58b9713a3-20431879%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a27a9fc98c55077b4e181b06d9ca4004fd158150' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/base/application/Shopware.model.DataOperation.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8800896285a37d58b9713a3-20431879',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a37d58b97ee04_15363717',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a37d58b97ee04_15363717')) {function content_5a37d58b97ee04_15363717($_smarty_tpl) {?>
//
//

Ext.define('Shopware.model.DataOperation', {

    extend:'Ext.data.Model',

    phantom: true,

    fields:[
        { name: 'success', type: 'boolean' },
        { name: 'request' },
        { name: 'error', type: 'string' },
        { name: 'operation' },
    ]
});
//
<?php }} ?>