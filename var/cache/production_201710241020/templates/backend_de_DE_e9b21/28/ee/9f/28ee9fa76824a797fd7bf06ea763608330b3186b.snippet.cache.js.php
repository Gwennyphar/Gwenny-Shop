<?php /* Smarty version Smarty-3.1.12, created on 2017-12-19 01:10:53
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/performance/controller/cache.js" */ ?>
<?php /*%%SmartyHeaderCode:1295137205a38590dabb879-66690670%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28ee9fa76824a797fd7bf06ea763608330b3186b' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/performance/controller/cache.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1295137205a38590dabb879-66690670',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a38590dadc483_69944429',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a38590dadc483_69944429')) {function content_5a38590dadc483_69944429($_smarty_tpl) {?>/**
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
 * The cache controller takes care of cache related events and also
 * handles the category fixing
 */

//
//
Ext.define('Shopware.apps.Performance.controller.Cache', {

    extend: 'Enlight.app.Controller',

    refs: [
        { ref: 'window', selector: 'cache-window' },
        { ref: 'info', selector: 'performance-tabs-cache-info dataview' },
        { ref: 'form', selector: 'performance-tabs-cache-form' },

        { ref: 'progressBar',    selector: 'performance-main-categories progressbar' },
        { ref: 'progressWindow', selector: 'performance-main-categories' },
        { ref: 'startButton',    selector: 'performance-main-categories button[action=start]' },
        { ref: 'closeButton',    selector: 'performance-main-categories button[action=closeWindow]' },
        { ref: 'cancelButton',   selector: 'performance-main-categories button[action=cancel]' }
    ],

    infoTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'form'/'message_title','default'=>'Shop cache','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'form'/'message_title','default'=>'Shop cache','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Shopcache<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'form'/'message_title','default'=>'Shop cache','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
    infoMessageSuccess: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'form'/'message','default'=>'Shop cache has been cleared.','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'form'/'message','default'=>'Shop cache has been cleared.','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Shopcache wurde geleert.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'form'/'message','default'=>'Shop cache has been cleared.','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

    /**
     * Contains all snippets for the component
     * @object
     */
    snippets: {
        process: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'controller'/'process','default'=>'Category/Article connection [0] of [1]','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'controller'/'process','default'=>'Category/Article connection [0] of [1]','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Kategorien / Artikel Verknüpfung [0] von [1]<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'controller'/'process','default'=>'Category/Article connection [0] of [1]','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        done: {
            message: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'controller'/'done_message','default'=>'All categories have been fixed','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'controller'/'done_message','default'=>'All categories have been fixed','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Alle Kategorien wurden korrigiert.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'controller'/'done_message','default'=>'All categories have been fixed','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'controller'/'done_title','default'=>'Successful','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'controller'/'done_title','default'=>'Successful','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Erfolgreich<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'controller'/'done_title','default'=>'Successful','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        }
    },

    /**
     * Class property which holds the main application if it is created
     *
     * @default null
     * @object
     */
    mainWindow: null,

    /**
     *
     */
    init: function () {
        var me = this;

        me.control({
            'performance-tabs-cache-main button[action=clear]': {
                click: function(button, event) {
                    me.getForm().submit({
                        success: function(form, action) {
                            var themeCacheCleared = form.getFields().findBy(function(record) {
                                return (record.name !== undefined && record.name == 'cache[theme]' && record.checked == true);
                            });

                            me.getStore('Info').load({
                                callback: function(records, operation) {
                                    if (themeCacheCleared) {
                                        Shopware.app.Application.fireEvent('shopware-theme-cache-warm-up-request');
                                    }

                                    Shopware.Notification.createGrowlMessage(
                                        me.infoTitle,
                                        me.infoMessageSuccess,
                                        me.infoTitle
                                    );
                                }
                            });
                        }
                    });
                }
            },

            'performance-tabs-cache-main button[action=select-all]': {
                click: function(button, event) {
                    me.getForm().getForm().getFields().each(function(item) {
                        item.setValue(true);
                    });
                }
            },

            'performance-main-categories': {
                startProcess:  me.onStartProcess,
                cancelProcess: me.onCancelProcess,
                closeWindow:   me.onCloseProcessWindow
            }
        });

        me.callParent(arguments);
    }
});
//
<?php }} ?>