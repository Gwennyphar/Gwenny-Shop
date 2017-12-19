<?php /* Smarty version Smarty-3.1.12, created on 2017-12-19 01:10:53
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/performance/view/tabs/cache/info.js" */ ?>
<?php /*%%SmartyHeaderCode:18023679105a38590d6405f6-65852730%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05f9881859f615a53eedeac79297b050cf01ea04' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/performance/view/tabs/cache/info.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18023679105a38590d6405f6-65852730',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a38590d67f696_15763663',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a38590d67f696_15763663')) {function content_5a38590d67f696_15763663($_smarty_tpl) {?>/**
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

//
Ext.define('Shopware.apps.Performance.view.tabs.cache.Info', {
    extend: 'Ext.grid.Panel',
    alias: 'widget.performance-tabs-cache-info',

    title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'info'/'title','default'=>'Cache-Directory information','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'info'/'title','default'=>'Cache-Directory information','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Cache-Verzeichnis Informationen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'info'/'title','default'=>'Cache-Directory information','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

    layout: 'fit',
    autoScroll: true,

    initComponent: function() {
        var me = this;

        me.buttons = [
            Ext.create('Ext.Button', {
                text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'fieldset'/'buttons'/'refresh','default'=>'Refresh','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'buttons'/'refresh','default'=>'Refresh','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Neu laden<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'buttons'/'refresh','default'=>'Refresh','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                cls: 'secondary',
                scope: me,
                handler:function () {
                    me.refreshCacheData();
                }}
            )
        ];

        Ext.applyIf(me, {
            columns: me.getColumns()
        });

        me.callParent(arguments);
    },

    /**
     * Reloads cache data from server
     */
    refreshCacheData: function() {
        var me = this;

        me.store.load();
    },

    /**
     * Creates the grid columns
     *
     * @return [array] grid columns
     */
    getColumns: function() {
        var me = this;

        return [{
            header: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'info'/'columns'/'name','default'=>'Name','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'info'/'columns'/'name','default'=>'Name','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'info'/'columns'/'name','default'=>'Name','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            dataIndex: 'name',
            flex: 5
        }, {
            header: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'info'/'columns'/'backend','default'=>'Backend','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'info'/'columns'/'backend','default'=>'Backend','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Backend<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'info'/'columns'/'backend','default'=>'Backend','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            dataIndex: 'backend',
            flex: 3
        }, {
            header: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'info'/'columns'/'directory','default'=>'Directory','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'info'/'columns'/'directory','default'=>'Directory','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Verzeichnis<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'info'/'columns'/'directory','default'=>'Directory','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            dataIndex: 'dir',
            flex: 4
        }, {
            header: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'info'/'columns'/'files','default'=>'Files','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'info'/'columns'/'files','default'=>'Files','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Dateien<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'info'/'columns'/'files','default'=>'Files','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            dataIndex: 'files',
            align: 'right',
            flex: 2
        }, {
            header: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'info'/'columns'/'size','default'=>'Size','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'info'/'columns'/'size','default'=>'Size','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Größe<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'info'/'columns'/'size','default'=>'Size','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            dataIndex: 'size',
            align: 'right',
            flex: 2
        }, {
            header: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'info'/'columns'/'freeSpace','default'=>'Free memory','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'info'/'columns'/'freeSpace','default'=>'Free memory','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Freier Speicher<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'info'/'columns'/'freeSpace','default'=>'Free memory','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            dataIndex: 'freeSpace',
            align: 'right',
            flex: 2
        }, {
            header: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'info'/'columns'/'message','default'=>'Message','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'info'/'columns'/'message','default'=>'Message','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Meldung<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'info'/'columns'/'message','default'=>'Message','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            dataIndex: 'message',
            width: 60,
            renderer: me.messageRenderer
        }];
    },

    messageRenderer: function(value, metaData, record, colIndex, store, view) {
        var tpl = new Ext.XTemplate(
            '<div class="sprite-balloon"></div>'
        );

        if (value.length == 0) {
            return '<center><div style="width: 16px; height: 16px;" class="sprite-tick-circle"></div></center>';
        } else {
            metaData.tdAttr = 'data-qtip="' + value + '"';
            return '<center><div style="width: 16px; height: 16px;" class="sprite-exclamation"></div></center>';
        }
    }
});
//
<?php }} ?>