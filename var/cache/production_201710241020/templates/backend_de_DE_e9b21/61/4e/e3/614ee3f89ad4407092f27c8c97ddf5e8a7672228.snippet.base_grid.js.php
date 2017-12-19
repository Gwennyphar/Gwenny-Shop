<?php /* Smarty version Smarty-3.1.12, created on 2017-12-19 01:10:53
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/performance/view/tabs/settings/elements/base_grid.js" */ ?>
<?php /*%%SmartyHeaderCode:19844411845a38590d9e5c39-74219938%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '614ee3f89ad4407092f27c8c97ddf5e8a7672228' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/performance/view/tabs/settings/elements/base_grid.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19844411845a38590d9e5c39-74219938',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a38590d9f66e7_20467681',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a38590d9f66e7_20467681')) {function content_5a38590d9f66e7_20467681($_smarty_tpl) {?>/**
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
 * @package    Customer
 * @subpackage Order
 * @version    $Id$
 * @author shopware AG
 */

//

/**
 * Basic grid with cellediting plugin
 */
//
Ext.define('Shopware.apps.Performance.view.tabs.settings.elements.BaseGrid', {
    /**
     * Extend from the standard ExtJS 4
     * @string
     */
    extend:'Ext.grid.Panel',

    /**
     * The view needs to be scrollable
     * @string
     */
    autoScroll: true,

    viewConfig: {
        markDirty: false
    },

    /**
     * Initialize the Shopware.apps.Customer.view.main.List and defines the necessary
     * default configuration
     * @return void
     */
    initComponent:function () {
        var me = this;

        me.cellEditingPlugin = me.getEditingPlugin();
        me.plugins = [ me.cellEditingPlugin ];

        me.toolbar = me.getToolbar();
        me.dockedItems = [ me.toolbar ];
        me.columns = me.getColumns();

        me.callParent(arguments);
    },

    /**
     * Sets up the editing plugin and registers some related events
     * @returns Ext.grid.plugin.RowEditing
     */
    getEditingPlugin: function() {
        var me = this;

        me.on('canceledit', function(editor, e) {
            var record = e.record;

            me.store.remove(record);
        });

        return Ext.create('Ext.grid.plugin.RowEditing', {
            clicksToEdit: 2,
            errorSummary: false,
            pluginId: 'rowEditing'
        });
    },

    /**
     * Creates the grid toolbar with the add and delete button
     *
     * @return [Ext.toolbar.Toolbar] grid toolbar
     */
    getToolbar:function () {
        var me = this,
            textField;

        textField = Ext.create('Ext.form.field.Text', {
            name: 'value',
            flex: 1,
            listeners: {
                specialkey: function(field, event){
                    if (event.getKey() == event.ENTER) {
                        var record = Ext.create('Shopware.apps.Performance.model.KeyValue'),
                            key = field.getValue(),
                            split = key.split(' '),
                            value = '';

                        if (split[1]) {
                            key = split[0];
                            value = split[1];
                        }

                        record.set('key', key);
                        record.set('value', value);
                        me.store.add(record);
                        field.setValue('');
                        me.cellEditingPlugin.startEdit(record, 1);
                    }
                }
            }
        });

        return Ext.create('Ext.toolbar.Toolbar', {
            dock:'top',
            items:[
                textField,
                {
                    iconCls:'sprite-plus-circle-frame',
                    text:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'grid'/'addEntry','default'=>'Add entry','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'grid'/'addEntry','default'=>'Add entry','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Eintrag hinzufügen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'grid'/'addEntry','default'=>'Add entry','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    cls: 'secondary small',
                    action:'add-entry',
                    handler: function() {
                        var record = Ext.create('Shopware.apps.Performance.model.KeyValue'),
                            field = textField,
                            key = field.getValue(),
                            split = key.split(' '),
                            value = '';

                        if (split[1]) {
                            key = split[0];
                            value = split[1];
                        }

                        record.set('key', key);
                        record.set('value', value);
                        me.store.add(record);
                        field.setValue('');
                        me.cellEditingPlugin.startEdit(record, 1);
                    }
                }
            ]
        });
    }


});
//
<?php }} ?>