<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 02:29:30
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/index/store/theme_cache_warm_up.js" */ ?>
<?php /*%%SmartyHeaderCode:8264172245a3719faae8fe9-79766217%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5155833765e655d62f0821685307287c85b15a63' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/index/store/theme_cache_warm_up.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8264172245a3719faae8fe9-79766217',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a3719faaf2c64_64543100',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3719faaf2c64_64543100')) {function content_5a3719faaf2c64_64543100($_smarty_tpl) {?>/**
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

/**
 * Theme cache warm up store
 *
 * Loads stores that use themes
 */
//
Ext.define('Shopware.apps.Index.store.ThemeCacheWarmUp', {
    extend: 'Shopware.apps.Base.store.Shop',
    model: 'Shopware.apps.Index.model.ThemeCacheWarmUp',
    remoteFilter: true,
    clearOnLoad: false,

    proxy: {
        type: 'ajax',
        url: '<?php echo '/backend/base/getShopsWithThemes';?>',
        reader: {
            type: 'json',
            root: 'data'
        }
    }
});
//
<?php }} ?>