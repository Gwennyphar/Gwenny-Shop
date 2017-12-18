<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 19:34:51
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/performance/controller/settings.js" */ ?>
<?php /*%%SmartyHeaderCode:4810646485a380a4b35f550-58738476%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5e2d64cf37991436f35250eccd1b3278ca115c1' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/performance/controller/settings.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4810646485a380a4b35f550-58738476',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a380a4b39ed07_85470146',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a380a4b39ed07_85470146')) {function content_5a380a4b39ed07_85470146($_smarty_tpl) {?>/**
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

//

/**
 * Shopware Controller - Performance backend module
 *
 * The settings controller handles the 'settings' tab
 */
//
Ext.define('Shopware.apps.Performance.controller.Settings', {
    extend: 'Enlight.app.Controller',

    /*
     * Selector for easy access to the settings panel
     */
    refs: [
        { ref: 'settings', selector: 'performance-tabs-settings-main' },
        { ref: 'cacheTime', selector: 'performance-tabs-settings-elements-cache-time' },
        { ref: 'noCache', selector: 'performance-tabs-settings-elements-no-cache' },
        { ref: 'checkGrid', selector: 'performance-tabs-settings-home grid' }

    ],

    snippets: {
        growlMessage: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'growMessage','default'=>'Performance Module','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growMessage','default'=>'Performance Module','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Performance-Modul<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'growMessage','default'=>'Performance Module','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        successTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'successTitle','default'=>'Success','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'successTitle','default'=>'Success','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Erfolgreich<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'successTitle','default'=>'Success','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        successMessage: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'successMessage'/'configSaved','default'=>'Configuration saved','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'successMessage'/'configSaved','default'=>'Configuration saved','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Konfiguration gespeichert<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'successMessage'/'configSaved','default'=>'Configuration saved','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        errorTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'errorTitle','default'=>'Error','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'errorTitle','default'=>'Error','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Fehler<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'errorTitle','default'=>'Error','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        errorMessage: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'successMessage','default'=>'Error saving the configuration','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'successMessage','default'=>'Error saving the configuration','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Fehler beim Speichern der Konfiguration<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'successMessage','default'=>'Error saving the configuration','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        noticeTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'noticeTitle','default'=>'Invalid data','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'noticeTitle','default'=>'Invalid data','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Invalide Daten<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'noticeTitle','default'=>'Invalid data','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        noticeMessage: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'noticeMessage','default'=>'There are still invalid data entered in the forms, please check all forms before saving','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'noticeMessage','default'=>'There are still invalid data entered in the forms, please check all forms before saving','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
In den Formularen sind noch invalide Daten eingetragen, bitte kontrolliere die Formulare<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'noticeMessage','default'=>'There are still invalid data entered in the forms, please check all forms before saving','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },

    /*
     * A reference to the current fieldSet being shown
     */
    currentItem: null,

    /**
     * Init the controller, registert to some events
     */
    init: function () {
        var me = this;

        me.control({
            'performance-tabs-settings-main button[action=save-settings]': {
                click: function(button, event) {
                    me.onSave();
                }
            },
            'performance-tabs-settings-navigation': {
                'itemClicked': me.onNavigationItemClicked
            }
        });

        me.callParent(arguments);
    },

    /**
     * Helper method to load the stores
     */
    loadConfigStore: function(callback) {
        var me = this;

        me.getStore('Config').load(function (records) {
            var storeData = records[0];

            me.injectConfig(storeData);

            if (callback) {
                callback();
            }
        });

    },

    /*
     * Takes a config record, loads it into the settings form and also sets
     * some stores
     */
    injectConfig: function(config) {
        var me = this;
        var store = config.getPerformanceCheck();
        var grid = me.getCheckGrid();

        me.getSettings().panel.loadRecord(config);
        grid.reconfigure(store);

        // reconfigure grids and inject the stores
        me.getCacheTime().reconfigure(config.getHttpCache().first().getCacheControllers());
        me.getNoCache().reconfigure(config.getHttpCache().first().getNoCacheControllers());

        me.configData = Ext.clone(config);
    },

    /*
     * Called after the user clicked on an item in the navigation tree
     */
    onNavigationItemClicked: function(itemName) {
        var me = this,
            settings = me.getSettings(),
            itemToShow;

        // First of all: Hide all items:
        settings.panel.items.each(function(item) {
            item.hide();
            if (item.xtype == itemName) {
                itemToShow = item;
            }
        });

        // If no fieldSet is defined for the clicked item, return
        if (!itemToShow) {
            me.currentItem = null;
            return;
        }

        // Load the last saved configData into the form
        me.injectConfig(me.configData);
        itemToShow.show();
        me.currentItem = itemName;
    },



    /**
     * Callback function called when the users clicks the 'save' button on the settings form
     */
    onSave: function() {
        var me = this,
            settings = me.getSettings().panel,
            configRecord = settings.getRecord();

        if (!(settings.getForm().isValid())) {
            Shopware.Notification.createStickyGrowlMessage({
                title: me.snippets.noticeTitle,
                text: me.snippets.noticeMessage
            });
            return false;
        }
        settings.getForm().updateRecord(configRecord);

        //save the model and check in the callback function if the operation was successfully
        configRecord.save({
            callback:function (data, operation) {
                var records = operation.getRecords(),
                    record = records[0],
                    rawData = record.getProxy().getReader().rawData;

                if ( operation.success === true ) {
                    // Load the returned data
                    me.loadConfigStore();
                    Shopware.Notification.createGrowlMessage(me.snippets.successTitle, me.snippets.successMessage, me.snippets.growlMessage);
                } else {
                    Shopware.Notification.createGrowlMessage(me.snippets.errorTitle, me.snippets.errorMessage + '<br> ' + rawData.message, me.snippets.growlMessage)
                }
            }
        });

    },

    deepCloneStore: function (source) {
        var target = Ext.create ('Ext.data.Store', {
            model: source.model
        });

        Ext.each (source.getRange (), function (record) {
            var newRecordData = Ext.clone (record.copy().data);
            var model = new source.model (newRecordData, newRecordData.id);

            target.add (model);
        });

        return target;
    }

});
//
<?php }} ?>