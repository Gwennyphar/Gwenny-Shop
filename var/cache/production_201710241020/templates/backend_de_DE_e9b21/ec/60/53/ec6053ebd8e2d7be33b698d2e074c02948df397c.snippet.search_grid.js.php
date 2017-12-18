<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 19:30:36
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/product_stream/view/search_grid.js" */ ?>
<?php /*%%SmartyHeaderCode:16753688545a38094c3d2410-19482374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec6053ebd8e2d7be33b698d2e074c02948df397c' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/product_stream/view/search_grid.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16753688545a38094c3d2410-19482374',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a38094c4839f5_24611522',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a38094c4839f5_24611522')) {function content_5a38094c4839f5_24611522($_smarty_tpl) {?>/**
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
 * @package    ProductStream
 * @subpackage Window
 * @version    $Id$
 * @author shopware AG
 */
//
//
Ext.define('Shopware.apps.ProductStream.view.SearchGrid', {
    extend: 'Ext.form.FieldContainer',
    layout: { type: 'vbox', align: 'stretch' },
    border: false,
    cls: 'product-stream-search-grid',

    /**
     * @required
     */
    searchStore: null,

    /**
     * @required
     */
    store: null,

    initComponent: function() {
        this.items = this.createItems();
        this.callParent(arguments);
    },

    createItems: function() {
        return [
            this.createSearchField(),
            this.createGrid()
        ];
    },

    createSearchField: function() {
        var me = this;

        me.searchField = Ext.create('Shopware.form.field.Search', {
            store: me.searchStore,
            displayField: 'name',
            valueField: 'id',
            multiSelect: true,
            fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'search','default'=>'Search','namespace'=>'backend/product_stream/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'search','default'=>'Search','namespace'=>'backend/product_stream/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Suche<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'search','default'=>'Search','namespace'=>'backend/product_stream/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            pageSize: me.searchStore.pageSize,
            listeners: {
                select: function (combo, records) {
                    me.onSelectItem(combo, records);
                }
            }
        });
        return me.searchField;
    },

    createGrid: function() {
        this.grid = Ext.create('Ext.grid.Panel', {
            flex: 1,
            store: this.store,
            dockedItems: [this.createPagingBar()],
            columns: this.createColumns()
        });
        return this.grid;
    },

    createColumns: function() {
        var columns = this.createDisplayColumns();
        columns.push(this.createActionColumn());
        return columns;
    },

    createDisplayColumns: function() {
        return [{
            header: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'name','default'=>'Name','namespace'=>'backend/product_stream/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'name','default'=>'Name','namespace'=>'backend/product_stream/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'name','default'=>'Name','namespace'=>'backend/product_stream/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            sortable: false,
            dataIndex: 'name',
            flex: 1
        }];
    },

    createActionColumn: function() {
        return {
            xtype: 'actioncolumn',
            width: 25,
            sortable: false,
            items: this.createActionItems()
        };
    },

    createActionItems: function() {
        var me = this;
        return [{
            iconCls: 'sprite-minus-circle-frame',
            handler: function (view, rowIndex, colIndex, item, opts, record) {
                me.removeRecord(record);
            }
        }];
    },

    createPagingBar: function() {
        var me = this;
        me.pagingbar = Ext.create('Ext.toolbar.Paging', {
            store: me.store,
            dock: 'bottom'
        });
        return me.pagingbar;
    },

    onSelectItem: function (combo, records) {
        var me = this, inStore;

        Ext.each(records, function (record) {
            inStore = me.store.getById(record.get('id'));
            if (inStore === null) {
                me.addRecord(record);
            }
        });
        combo.setValue('');
    },

    addRecord: function(record) {
        this.store.add(record);
    },

    removeRecord: function(record) {
        this.store.remove(record);
    }
});
//<?php }} ?>