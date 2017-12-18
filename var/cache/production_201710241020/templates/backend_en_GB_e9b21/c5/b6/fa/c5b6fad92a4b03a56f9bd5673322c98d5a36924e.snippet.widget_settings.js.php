<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 15:49:54
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/index/store/widget_settings.js" */ ?>
<?php /*%%SmartyHeaderCode:9426462815a37d592d63ed6-07563096%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5b6fad92a4b03a56f9bd5673322c98d5a36924e' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/index/store/widget_settings.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9426462815a37d592d63ed6-07563096',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a37d592d6aed0_93861548',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a37d592d6aed0_93861548')) {function content_5a37d592d6aed0_93861548($_smarty_tpl) {?>/**
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

Ext.define('Shopware.apps.Index.store.WidgetSettings', {

    extend: 'Ext.data.Store',

    model: 'Shopware.apps.Index.model.WidgetSettings',

    proxy: {
        type: 'localstorage',
        id: 'widget-settings-' + window.location.pathname.replace('/backend/', '')
    }
});

//
<?php }} ?>