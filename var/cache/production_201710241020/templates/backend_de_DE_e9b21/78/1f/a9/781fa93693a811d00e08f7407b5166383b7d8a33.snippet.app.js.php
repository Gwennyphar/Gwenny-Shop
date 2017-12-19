<?php /* Smarty version Smarty-3.1.12, created on 2017-12-19 22:51:03
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/app.js" */ ?>
<?php /*%%SmartyHeaderCode:16154712725a3989c79e1dc4-44556824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '781fa93693a811d00e08f7407b5166383b7d8a33' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/app.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16154712725a3989c79e1dc4-44556824',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a3989c7a14937_90806389',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3989c7a14937_90806389')) {function content_5a3989c7a14937_90806389($_smarty_tpl) {?>/**
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
 * @subpackage App
 * @version    $Id$
 * @author shopware AG
 */

//
Ext.define('Shopware.apps.PluginManager', {
    extend: 'Enlight.app.SubApplication',
    name: 'Shopware.apps.PluginManager',
    bulkLoad: true,
    loadPath: '<?php echo '/backend/PluginManager/load';?>',

    controllers: [
        'Main',
        'Navigation',
        'Plugin'
    ],

    views: [
        'PluginHelper',

        'components.Container',
        'components.ImageSlider',
        'components.Listing',
        'components.StorePlugin',
        'components.ExpiredPlugin',
        'components.Tab',
        'components.Tree',

        'list.HomePage',
        'list.LocalPluginListingPage',
        'list.Navigation',
        'list.StoreListingPage',
        'list.UpdatePage',
        'list.LicencePage',
        'list.PremiumPluginsPage',
        'list.ExpiredPluginsPage',
        'list.ConnectIntroductionPage',
        'list.ImportExportTeaserPage',
        'list.Window',

        'detail.Window',
        'detail.Container',
        'detail.Prices',
        'detail.Comments',
        'detail.Header',
        'detail.Meta',
        'detail.Actions',

        'loading.Mask',
        'account.Login',
        'account.LoginWindow',
        'account.Register',
        'account.Checkout',
        'account.Upload'

    ],

    stores: [
        'Basket',
        'Licence',
        'LocalPlugin',
        'StorePlugin',
        'Category',
        'UpdatePlugins',
        'ExpiredPlugins'
    ],

    models: [
        'Licence',
        'Plugin',
        'Comment',
        'Picture',
        'Basket',
        'BasketPosition',
        'Domain',
        'Address',
        'Price',
        'Category',
        'Producer'
    ],

    //remove listeners
    globalEvents: [
        'load-update-listing',
        'display-plugin',
        'install-plugin',
        'uninstall-plugin',
        'secure-uninstall-plugin',
        'reinstall-plugin',
        'activate-plugin',
        'deactivate-plugin',
        'update-plugin',
        'update-dummy-plugin',
        'upload-plugin',
        'delete-plugin',
        'reload-plugin',
        'store-login',
        'download-plugin-licence',
        'reload-local-listing',
        'import-plugin-licence',
        'save-plugin-configuration',
        'buy-plugin',
        'rent-plugin',
        'download-free-plugin',
        'request-plugin-test-version',
        'check-store-login',
        'open-login',
        'check-licence-plugin',
        'plugin-reloaded',
        'display-plugin-by-name',
        'load-store-listing',
        'display-premium-plugins',
        'display-expired-plugins',
        'display-importexport-teaser',
        'display-connect-introduction',
        'enable-expired-plugins-mode',
        'enable-connect-introduction-mode',
        'enable-premium-plugins-mode',
        'enable-importexport-teaser-mode',
        'destroy-login',
        'store-register',
        'clear-all-cache',
        'plugin-state-changed',
        'refresh-account-data'
    ],

    dynamicEvents: [
        'plugin-reloaded-',
        'plugin-bought'
    ],

    windowClasses: [
        'Shopware.apps.PluginManager.view.account.Checkout',
        'Shopware.apps.PluginManager.view.account.Login',
        'Shopware.apps.PluginManager.view.account.Upload',
        'Shopware.apps.PluginManager.view.detail.Window',
        'Shopware.apps.PluginManager.view.list.Window',
        'Shopware.apps.PluginManager.view.loading.Mask'
    ],

    onBeforeLaunch: function() {
        var me = this;

        me._destroyGlobalListeners(function() {
            me._destroyOtherModuleInstances(function() {
            });
        });

        me.callParent(arguments);
    },

    launch: function () {
        var me = this;
        return me.getController('Main').mainWindow;
    },


    _destroyGlobalListeners: function(callback) {
        var me = this;
        var events = Shopware.app.Application.events;

        for (var key in events) {
            var event = events[key];

            if (me.globalEvents.indexOf(event.name) >= 0 && event.listeners.length > 0) {
                Ext.each(event.listeners, function(listener) {
                    if(!listener) {
                        return;
                    }

                    Shopware.app.Application.removeListener(
                        event.name,
                        listener.fn,
                        listener.scope
                    );
                });
            }

            Ext.each(me.dynamicEvents, function(eventName) {
                if (event.name && event.name.indexOf(eventName) >= 0) {
                    Ext.each(event.listeners, function(listener) {
                        if (listener) {
                            Shopware.app.Application.removeListener(
                                event.name,
                                listener.fn,
                                listener.scope
                            );
                        }
                    });
                }
            });
        }

        callback();
    },

    _destroyOtherModuleInstances: function (cb, cbArgs) {
        var me = this, activeWindows = [], subAppId = me.$subAppId;
        cbArgs = cbArgs || [];

        Ext.each(Shopware.app.Application.subApplications.items, function (subApp) {

            if (!subApp || !subApp.windowManager || subApp.$subAppId === subAppId || !subApp.windowManager.hasOwnProperty('zIndexStack')) {
                return;
            }
            Ext.each(subApp.windowManager.zIndexStack, function (item) {
                if (typeof(item) !== 'undefined' && me.windowClasses.indexOf(item.$className) > -1) {
                    activeWindows.push(item);
                }
            });
        });

        if (activeWindows && activeWindows.length) {
            Ext.each(activeWindows, function (win) {
                win.destroy();
            });

            if (Ext.isFunction(cb)) {
                cb.apply(me, cbArgs);
            }
        } else {
            if (Ext.isFunction(cb)) {
                cb.apply(me, cbArgs);
            }
        }
    }
});
//<?php }} ?>