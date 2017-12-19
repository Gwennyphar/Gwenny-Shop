<?php /* Smarty version Smarty-3.1.12, created on 2017-12-19 01:10:53
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/performance/controller/multi_request.js" */ ?>
<?php /*%%SmartyHeaderCode:19570530805a38590dae3d12-70772893%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f10bdafa5910e9703facc9c8230c782da1358a9' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/performance/controller/multi_request.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19570530805a38590dae3d12-70772893',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a38590db5e129_44851645',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a38590db5e129_44851645')) {function content_5a38590db5e129_44851645($_smarty_tpl) {?>/**
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
 * @package    Shopware_Performance
 * @subpackage Cache
 * @copyright  Copyright (c) shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author shopware AG
 */

/**
 * The multi request dialog controller takes care of actual requests
 */

//
//
Ext.define('Shopware.apps.Performance.controller.MultiRequest', {

    extend: 'Enlight.app.Controller',

    /**
     * Contains all snippets for the component
     * @object
     */
    snippets: {
        process: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'request'/'process','default'=>'[0] out of [1] items processed','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'request'/'process','default'=>'[0] out of [1] items processed','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
[0] von [1] Elementen bearbeitet<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'request'/'process','default'=>'[0] out of [1] items processed','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        done: {
            message: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'request'/'done_message','default'=>'Operation finished','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'request'/'done_message','default'=>'Operation finished','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Operation beendet<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'request'/'done_message','default'=>'Operation finished','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'request'/'done_title','default'=>'Successful','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'request'/'done_title','default'=>'Successful','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Erfolgreich<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'request'/'done_title','default'=>'Successful','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        }
    },

    /**
     * Indicates if the operations should be canceled after the next request
     */
    cancelOperation: false,

    requestConfig: {
        topseller: {
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'multi_request'/'topseller','default'=>'Build index for TopSeller','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'multi_request'/'topseller','default'=>'Build index for TopSeller','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Topseller-Index neu erstellen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'multi_request'/'topseller','default'=>'Build index for TopSeller','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            totalCountUrl: '<?php echo '/backend/TopSeller/getTopSellerCount';?>',
            requestUrl: '<?php echo '/backend/TopSeller/initTopSeller';?>',
            batchSize: 100
        },

        search: {
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'multi_request'/'search','default'=>'Build index for frontend search','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'multi_request'/'search','default'=>'Build index for frontend search','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Such-Index neu erstellen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'multi_request'/'search','default'=>'Build index for frontend search','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            requestUrl: '<?php echo '/backend/SearchIndex/build';?>',
            batchSize: 100
        },

        seo: {
            initUrl: '<?php echo '/backend/Seo/initSeo';?>',
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'multi_request'/'sei','default'=>'Build index for SEO','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'multi_request'/'sei','default'=>'Build index for SEO','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
SEO-Index neu erstellen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'multi_request'/'sei','default'=>'Build index for SEO','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            snippetResource: 'seo',
            totalCountUrl: '<?php echo '/backend/Seo/getCount';?>',
            batchSize: 100
        },

        similarShown: {
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'multi_request'/'viewed','default'=>'Build index for: Customers also viewed','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'multi_request'/'viewed','default'=>'Build index for: Customers also viewed','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Kunden haben sich auch angesehen Index neu erstellen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'multi_request'/'viewed','default'=>'Build index for: Customers also viewed','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            totalCountUrl: '<?php echo '/backend/SimilarShown/getSimilarShownCount';?>',
            requestUrl: '<?php echo '/backend/SimilarShown/initSimilarShown';?>',
            batchSize: 100
        },
        alsoBought: {
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'multi_request'/'bought','default'=>'Build index for: Customers also bought','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'multi_request'/'bought','default'=>'Build index for: Customers also bought','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Kunden kauften auch Index neu erstellen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'multi_request'/'bought','default'=>'Build index for: Customers also bought','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            totalCountUrl: '<?php echo '/backend/AlsoBought/getAlsoBoughtCount';?>',
            requestUrl: '<?php echo '/backend/AlsoBought/initAlsoBought';?>',
            batchSize: 100
        },
        category: {
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'multi_request'/'categories','default'=>'Repair categories','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'multi_request'/'categories','default'=>'Repair categories','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Kategorie Verknüpfungen neu aufbauen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'multi_request'/'categories','default'=>'Repair categories','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            totalCountUrl: '<?php echo '/backend/Performance/prepareTree';?>',
            requestUrl: '<?php echo '/backend/Performance/fixCategories';?>',
            batchSize: 100
        },
        httpCacheWarmer: {
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'multi_request'/'http_cache_warmer'/'windowTitle','default'=>'Warm up cache','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'multi_request'/'http_cache_warmer'/'windowTitle','default'=>'Warm up cache','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Cache aufwärmen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'multi_request'/'http_cache_warmer'/'windowTitle','default'=>'Warm up cache','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            snippetResource: 'httpCacheWarmer',
            totalCountUrl: '<?php echo '/backend/Performance/getHttpURLs';?>',
            batchSize: 10
        }
    },

    init: function () {
        var me = this;

        me.control({
            'performance-multi-request-button': {
                'showMultiRequestDialog': me.onShowMultiRequestDialog,
                'showMultiRequestTasks': me.onShowMultiRequestTasks
            },
            'performance-main-multi-request-tasks': {
                'onShopSelected': me.onShopSelected,
                'startSeoIndex': me.onStartSeoIndex,
                'startHttpCacheWarmUp': me.onStartHttpCacheWarmUp,
                'multiRequestTasksCancelProcess': me.onCancelMultiRequest
            },
            'performance-main-multi-request-dialog': {
                'multiRequestDialogCancelProcess': me.onCancelMultiRequest,
                'multiRequestDialogStartProcess': me.onStartMultiRequest
            }
        });

        me.callParent(arguments);
    },

    onShopSelected: function(window, shopId, taskName) {
        var me = this;

        var taskConfig = window.taskConfig;

        Ext.Ajax.request({
            url: taskConfig.totalCountUrl,
            timeout: 4000000,
            params: {
                shopId: shopId
            },
            success: function(response) {
                var json = Ext.decode(response.responseText);
                taskConfig.totalCounts = json.data.counts;

                me.updateProgressBars(taskName, window);

                window.startButton.enable();
            }
        });
    },

    updateProgressBars: function(taskName, win) {
        var taskConfig = win.taskConfig;

        win.iterateConfig(taskName, function (err, config, configName) {
            if (err) {
                throw err;
            }

            if (!Ext.isEmpty(taskConfig.totalCounts[configName])) {
                win[configName + 'Bar'].updateProgress(
                    0, Ext.String.format(config.progressText, 0, taskConfig.totalCounts[configName])
                );
            }
        });
    },

    getRequestConfig: function(win, progress, taskName, resource) {
        return {
            batchSize: win.batchSizeCombo.getValue(),
            progress: win[progress],
            requestUrl: win[taskName][resource].requestUrl,
            totalCount: win.taskConfig.totalCounts[resource] * 1,
            snippet: win[taskName][resource].progressText,
            params: {
                shopId: win.shopCombo.getValue()
            }
        };
    },

    getSeoInitRequestConfig: function(window) {
        var me = this;

        return {
            totalCount: 1,
            progress: null,
            requestUrl: me.requestConfig.seo.initUrl,
            batchSize: 2,
            params: {
                shopId: window.shopCombo.getValue()
            }
        };
    },

    /**
     * Called after the user hits the 'start' button of the multiRequestDialog
     */
    onStartSeoIndex: function(win) {
        var me = this, configs = [];

        me.updateProgressBars('seo', win);

        configs.push(me.getSeoInitRequestConfig(win, me.requestConfig.seo));

        win.iterateConfig('seo', function (err, seoConfig, seoConfigName) {
            if (err) {
                throw err;
            }

            configs.push(me.getRequestConfig(win, seoConfigName + 'Bar', 'seo', seoConfigName));
        });

        win.startButton.hide();
        win.cancelButton.show();
        win.cancelButton.enable();
        me.cancelOperation = false;

        me.runRequest(0, win, null, configs);
    },

    /**
     * Called after the user hits the 'start' button of the multiRequestDialog
     */
    onStartHttpCacheWarmUp: function(win) {
        var me = this, configs = [];

        me.updateProgressBars('httpCache', win);

        win.iterateConfig('httpCache', function (err, seoConfig, seoConfigName) {
            if (err) {
                throw err;
            }

            configs.push(me.getRequestConfig(win, seoConfigName + 'Bar', 'httpCache', seoConfigName));
        });

        win.startButton.hide();
        win.cancelButton.show();
        win.cancelButton.enable();
        me.cancelOperation = false;

        me.runRequest(0, win, null, configs);
    },

    /**
     *
     */
    onShowMultiRequestTasks: function(type) {
        var me = this,
            config = me.requestConfig[type];

        var win = me.getView('main.MultiRequestTasks').create({
            title: config.title,
            currentType: type,
            taskConfig: config,
            batchSize: config.batchSize
        }).show();

        me.cancelOperation = false;

        return win;
    },

    /**
     * Runs the actual request
     * Method is called recursively until all data was processed
     */
    runRequest: function(offset, dialog, currentConfig, configs) {
        var me = this;

        // support for multiple batch operation.
        if (currentConfig === null) {
            // get next request configuration
            currentConfig = configs.shift();
        }

        var params = currentConfig.params;
        if (!(Ext.isObject(params))) {
            params = { };
        }

        // last batch size processed?
        if (offset >= currentConfig.totalCount) {
            // is progress bar configured?
            if (currentConfig.progress) {
                currentConfig.progress.updateProgress(1, me.snippets.done.message, true);
            }

            // no more request configurations exists?
            if (configs.length === 0) {
                // Enable close button, set progressBar to 'finish'
                dialog.closeButton.enable();
                dialog.startButton.show();
                dialog.cancelButton.hide();

                // Show 'finished' message
                Shopware.Notification.createGrowlMessage(me.snippets.done.title, me.snippets.done.message);
            } else {
                // cancel button pushed?
                if (me.cancelOperation) {
                    dialog.closeButton.enable();
                    dialog.startButton.show();
                    dialog.cancelButton.hide();
                    return;
                }

                // get next config and call again
                currentConfig = configs.shift();
                me.runRequest(0, dialog, currentConfig, configs);
            }
            return;
        }

        // cancel button pushed?
        if (me.cancelOperation) {
            dialog.closeButton.enable();
            dialog.startButton.show();
            dialog.cancelButton.hide();
            return;
        }

        // has the current request a progress bar?
        if (currentConfig.progress) {
            // updates the progress bar value and text, the last parameter is the animation flag
            currentConfig.progress.updateProgress(
                ((offset + currentConfig.batchSize) > currentConfig.totalCount ? currentConfig.totalCount : (offset + currentConfig.batchSize)) / currentConfig.totalCount,
                Ext.String.format(currentConfig.snippet, ((offset + currentConfig.batchSize) > currentConfig.totalCount ? currentConfig.totalCount : (offset + currentConfig.batchSize)), currentConfig.totalCount),
                true
            );
        }

        // set the params single, to support additional request params
        params.offset = offset;
        params.limit = currentConfig.batchSize;

        Ext.Ajax.request({
            url: currentConfig.requestUrl,
            method: 'POST',
            params: params,
            timeout: 4000000,
            success: function(response) {
                var json = Ext.decode(response.responseText);

                // start recusive call here
                me.runRequest((offset + currentConfig.batchSize), dialog, currentConfig, configs);
            },
            failure: function(response) {
                me.shouldCancel = true;
                me.runRequest((offset + currentConfig.batchSize), dialog, currentConfig, configs);
            }
        });
    },

    /**
     * Called after the user hits the 'start' button of the multiRequestDialog
     */
    onStartMultiRequest: function(dialog) {
        var me = this,
            type = dialog.currentType,
            config = me.requestConfig[type];

        dialog.combo.disable();
        config.batchSize = dialog.combo.getValue();
        config.progress = dialog.progressBar;
        config.snippet = me.snippets.process;

        me.runRequest(0, dialog, config, []);
    },

    /**
     * Called after the user clicks the 'cancel' button of the multiRequestDialog
     */
    onCancelMultiRequest: function() {
        var me = this;

        me.cancelOperation = true;
    },

    /**
     *
     * @param type The actual dialog type (topseller, seo…)
     * @param fieldSet
     */
    onShowMultiRequestDialog: function(type, fieldSet) {
        var me = this,
            config = me.requestConfig[type];

        var window = me.getView('main.MultiRequestDialog').create({
            title: config.title,
            currentType: type,
            batchSize: config.batchSize
        }).show();

        me.cancelOperation = false;

        if (config.totalCountUrl) {
            Ext.Ajax.request({
                url: config.totalCountUrl,
                success: function(response) {
                    var json = Ext.decode(response.responseText);
                    config.totalCount = json.data.count;

                    window.progressBar.updateProgress(0);

                    window.startButton.enable();
                }
            });
        } else {
            if (!config.totalCount) {
                config.totalCount = 1;
            }

            window.progressBar.updateProgress(0);
            window.startButton.enable();
        }
    }

});
//
<?php }} ?>