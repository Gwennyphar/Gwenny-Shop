<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 19:30:25
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/engine/Library/ExtJs/overrides/Ext.menu.Menu.js" */ ?>
<?php /*%%SmartyHeaderCode:3555533545a380941dff2d6-55636385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd11e3c0bebe80f16b74783f42916a9169da9b937' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/engine/Library/ExtJs/overrides/Ext.menu.Menu.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3555533545a380941dff2d6-55636385',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a380941e042f2_33446425',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a380941e042f2_33446425')) {function content_5a380941e042f2_33446425($_smarty_tpl) {?>/**
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
Ext.override(Ext.menu.Menu, {

    /**
     * Fixes the hover issue on sub menu items in chrome.
     *
     * @param ev
     */
    onMouseLeave: function(ev) {
        var activeItem = this.activeItem,
            menu = activeItem && activeItem.menu,
            menuEl = menu && menu.getEl();

        if (Ext.isChrome && menuEl && menuEl.contains(ev.getRelatedTarget())) {
            return;
        }

        this.callParent([ev]);
    }
});<?php }} ?>