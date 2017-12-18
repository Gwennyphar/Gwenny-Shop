<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 02:29:32
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/engine/Shopware/Plugins/Default/Backend/SwagUpdate/Views/backend/index/view/swag_update_menu.js" */ ?>
<?php /*%%SmartyHeaderCode:7770670135a3719fce6b008-71360492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f390ab96dc4ef26fc12acbd059b2dc2ec9f034e' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/engine/Shopware/Plugins/Default/Backend/SwagUpdate/Views/backend/index/view/swag_update_menu.js',
      1 => 1508840484,
      2 => 'file',
    ),
    '6eb472d801c7a8378fcd98cbe88a2cfda832bd79' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/index/store/news.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7770670135a3719fce6b008-71360492',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a3719fce8fd11_68669120',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3719fce8fd11_68669120')) {function content_5a3719fce8fd11_68669120($_smarty_tpl) {?>/**
 * Shopware 5
 * Copyright (c) shopware AG
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * "Shopware" is a registered trademark of shopware AG.
 * The licensing of the program under the AGPLv3 does not imply a
 * trademark license. Therefore any rights, title and interest in
 * our trademarks remain entirely with us.
 */

//
Ext.define('Shopware.apps.Index.store.News', {
    extend: 'Ext.data.Store',
    model: 'Shopware.apps.Index.model.News',
    remoteFilter: true,
    clearOnLoad: true,
    proxy: {
        type: 'ajax',
        url: '<?php echo '/backend/widgets/getShopwareNews';?>',
        reader: {
            type: 'json',
            root: 'data'
        }
    }
});
//
<?php }} ?>