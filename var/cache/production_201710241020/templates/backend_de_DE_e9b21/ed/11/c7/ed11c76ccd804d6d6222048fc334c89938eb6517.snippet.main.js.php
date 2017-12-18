<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 19:34:51
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/performance/controller/main.js" */ ?>
<?php /*%%SmartyHeaderCode:12300251235a380a4b34ed89-63789210%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed11c76ccd804d6d6222048fc334c89938eb6517' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/performance/controller/main.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12300251235a380a4b34ed89-63789210',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a380a4b359cf2_68750954',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a380a4b359cf2_68750954')) {function content_5a380a4b359cf2_68750954($_smarty_tpl) {?>/**
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
 * @package    Shopware_Config
 * @subpackage Config
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Controller - Performance backend module
 *
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.Performance.controller.Main', {
    extend: 'Enlight.app.Controller',

    refs: [
        { ref: 'info', selector: 'performance-tabs-cache-info' },
        { ref: 'settings', selector: 'performance-tabs-settings-main' },
        { ref: 'navigation', selector: 'performance-tabs-settings-navigation' }
    ],

    /**
     * The main window instance
     * @object
     */
    mainWindow: null,

    /**
     * Called by the SubApplication to create and show the window
     *
     * @returns { Void }
     */
    run: function() {
        if (!Ext.getCmp('performanceWindow')) {
            var me = this;

            if (!me.subApplication.infoStore) {
                me.subApplication.infoStore = me.getStore('Info');
                me.subApplication.infoStore.load();
            }

            me.mainWindow = me.subApplication.getView('main.Window').create({
                infoStore: me.subApplication.infoStore
            }).show();

            // Loads the main settings store and injects it into the settings form
            me.getController('Settings').loadConfigStore();
        } else {
            Ext.getCmp('performanceWindow').show();
        }
    }


});
//
<?php }} ?>