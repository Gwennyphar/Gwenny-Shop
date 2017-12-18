<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 19:34:51
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/performance/controller/start.js" */ ?>
<?php /*%%SmartyHeaderCode:11570483815a380a4b48ff10-41487886%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68990bbfc8bb762633b0695fa8f84fd8d4fe3e6b' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/performance/controller/start.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11570483815a380a4b48ff10-41487886',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a380a4b4c8741_48886616',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a380a4b4c8741_48886616')) {function content_5a380a4b4c8741_48886616($_smarty_tpl) {?>/**
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
 * The cache controller takes care of cache related events and also
 * handles the category fixing
 */

//
//
Ext.define('Shopware.apps.Performance.controller.Start', {
    extend: 'Enlight.app.Controller',

    infoTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'form'/'message_title','default'=>'Shop cache','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'form'/'message_title','default'=>'Shop cache','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Shopcache<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'form'/'message_title','default'=>'Shop cache','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
    infoMessageSuccess: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'form'/'message','default'=>'Shop cache has been cleared.','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'form'/'message','default'=>'Shop cache has been cleared.','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Shopcache wurde geleert.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'form'/'message','default'=>'Shop cache has been cleared.','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
    infoTitlePerformanceMode: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'tabs'/'start'/'performance_mode','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'start'/'performance_mode','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Performance mode<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'start'/'performance_mode','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
    infoMessageProductionMode: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'tabs'/'start'/'production_mode_active','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'start'/'production_mode_active','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Der Produktivmodus wurde erfolgreich aktiviert<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'start'/'production_mode_active','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
    infoMessageDevelopmentMode: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'tabs'/'start'/'development_mode_active','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'start'/'development_mode_active','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Der Bearbeitungsmodus wurde erfolgreich aktiviert<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'start'/'development_mode_active','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
    errorTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'errorTitle','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'errorTitle','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Fehler<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'errorTitle','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
    httpCacheError: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'tabs'/'start'/'errorHttpCache','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'start'/'errorHttpCache','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Das HttpCache Plugin ist nicht installiert<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'start'/'errorHttpCache','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

    running: false,
    state: null,

    /**
     * init events
     */
    init: function () {
        var me = this;

        me.control({
            'performance-tabs-start-main button[action=clear-all]': {
                click: me.clearWholeCache
            },
            'performance-tabs-start-main': {
                'init-toggle-productive': me.getPerformanceMode,
                'toggle-productive': me.toggleProductive
            }
        });

        me.callParent(arguments);
    },

    /**
     * function to set toggle-button-state in the view on startup
     * @param Shopware.apps.Performance.view.tabs.start.Main window
     */
    getPerformanceMode: function (window) {
        var me = this;

        Ext.Ajax.request({
            url: '<?php echo '/backend/Performance/getProductiveMode';?>',
            success: function (operation, opts) {
                var response = Ext.decode(operation.responseText);

                if (response.success == true) {
                    me.state = response.productiveMode;
                    window.setState(me.state);
                }
            }
        });
    },

    /**
     * set productive mode active/unactive
     * @param Shopware.apps.Performance.view.tabs.start.Main window
     */
    toggleProductive: function (window) {
        var me = this;

        if (!window) {
            return;
        }

        if (me.running) {
            return;
        }

        me.running = true;

        Ext.Ajax.request({
            url: '<?php echo '/backend/Performance/toggleProductiveMode';?>',
            success: function (operation, opts) {
                var response = Ext.decode(operation.responseText);
                me.running = false;

                if (response.success == true) {
                    me.toggleProductiveCallback(window);
                } else {
                    if (response.state == 'not_found') {
                        Shopware.Notification.createGrowlMessage(
                            me.errorTitle,
                            me.httpCacheError
                        );
                        window.resetState();
                    }
                }
            }
        });
    },

    /**
     * callback function for toggleProductive
     * @param Shopware.apps.Performance.view.tabs.start.Main window
     */
    toggleProductiveCallback: function (window) {
        var me = this,
            message;

        if (me.state) {
            message = me.infoMessageDevelopmentMode;
        } else {
            message = me.infoMessageProductionMode;
        }

        me.state = !me.state;

        Shopware.Notification.createGrowlMessage(
            me.infoTitlePerformanceMode,
            message,
            me.infoTitlePerformanceMode
        );
    },

    /**
     * clear whole cache
     */
    clearWholeCache: function () {
        var me = this;

        Ext.Ajax.request({
            url: '<?php echo '/backend/Cache/clearCache';?>?cache=Config',
            params:{
              'cache[config]'   : 'on',
              'cache[template]' : 'on',
              'cache[search]'   : 'on',
              'cache[router]'   : 'on'
            },
            success: function () {
                me.reloadInfoStore();
            }
        });
    },

    /**
     * reload cache-info-store and give success-message
     */
    reloadInfoStore: function () {
        var me = this;

        Ext.getStore('Info').load({
            callback: function (records, operation) {
                Shopware.Notification.createGrowlMessage(
                    me.infoTitle,
                    me.infoMessageSuccess,
                    me.infoTitle
                );
            }
        });
    }
});
//<?php }} ?>