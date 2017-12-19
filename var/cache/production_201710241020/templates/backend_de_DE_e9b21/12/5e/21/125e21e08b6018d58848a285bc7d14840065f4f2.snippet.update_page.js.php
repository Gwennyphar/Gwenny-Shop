<?php /* Smarty version Smarty-3.1.12, created on 2017-12-19 22:51:04
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/view/list/update_page.js" */ ?>
<?php /*%%SmartyHeaderCode:11653640185a3989c83ae489-89141262%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '125e21e08b6018d58848a285bc7d14840065f4f2' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/view/list/update_page.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11653640185a3989c83ae489-89141262',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a3989c83b83d3_79345456',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3989c83b83d3_79345456')) {function content_5a3989c83b83d3_79345456($_smarty_tpl) {?>/**
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
 *
 * @category   Shopware
 * @package    PluginManager
 * @subpackage List
 * @version    $Id$
 * @author shopware AG
 */

//
Ext.define('Shopware.apps.PluginManager.view.list.UpdatePage', {
    extend: 'Ext.container.Container',
    autoScroll: true,
    alias: 'widget.plugin-manager-update-page',

    initComponent: function() {
        var me = this;

        me.items = [ me.createStoreListing() ];

        me.callParent(arguments);
    },

    createStoreListing: function() {
        var me = this;

        me.updateStore = Ext.create('Shopware.apps.PluginManager.store.UpdatePlugins');

        me.listing = Ext.create('PluginManager.components.Listing', {
            store: me.updateStore,
            padding: 30,
            width: 1007
        });

        me.content = Ext.create('Ext.container.Container', {
            items: [
                me.listing
            ]
        });

        return me.content;
    }
});
//<?php }} ?>