<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 02:29:27
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/base/store/attribute_config.js" */ ?>
<?php /*%%SmartyHeaderCode:1401443755a3719f7a2d007-13825065%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3f7e0e38f21b4355421d4ad9b00d295f673ad08' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/base/store/attribute_config.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1401443755a3719f7a2d007-13825065',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a3719f7a31808_51604176',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3719f7a31808_51604176')) {function content_5a3719f7a31808_51604176($_smarty_tpl) {?>
Ext.define('Shopware.store.AttributeConfig', {
    extend: 'Shopware.store.Listing',
    model: 'Shopware.model.AttributeConfig',
    remoteSort: false,

    configure: function() {
        return {
            controller: 'AttributeData'
        }
    }
});
<?php }} ?>