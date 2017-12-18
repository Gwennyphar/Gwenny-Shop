<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 19:30:37
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/product_stream/view/condition_list/field/property_window.js" */ ?>
<?php /*%%SmartyHeaderCode:20394259325a38094d5eacf3-49174807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eda3ded5748760a0058427a54381d8e05354983c' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/product_stream/view/condition_list/field/property_window.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20394259325a38094d5eacf3-49174807',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a38094d675206_83144827',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a38094d675206_83144827')) {function content_5a38094d675206_83144827($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.ProductStream.view.condition_list.field.PropertyWindow', {
    extend: 'Ext.window.Window',
    modal: true,
    bodyPadding: 10,
    width: 400,

    layout: {
        type: 'vbox',
        align: 'stretch'
    },

    applyCallback: function(group) { },

    initComponent: function() {
        var me = this;

        me.items = me.createItems();
        me.dockedItems = [me.createToolbar()];
        me.callParent(arguments);
    },

    createItems: function() {
        var me = this;

        me.propertyCombo = Ext.create('Ext.form.field.ComboBox', {
            name: 'property',
            fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'select_group','default'=>'Select group','namespace'=>'backend/product_stream/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'select_group','default'=>'Select group','namespace'=>'backend/product_stream/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Gruppe wählen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'select_group','default'=>'Select group','namespace'=>'backend/product_stream/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            pageSize: 20,
            store: me.createStore(),
            valueField: 'id',
            allowBlank: false,
            displayField: 'name'
        });

        me.notice = Ext.create('Ext.container.Container', {
            html:  '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'property'/'input_text','default'=>'Please select a property group','namespace'=>'backend/product_stream/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'property'/'input_text','default'=>'Please select a property group','namespace'=>'backend/product_stream/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Bitte wähle zunächst eine Eigenschaftsgruppe aus<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'property'/'input_text','default'=>'Please select a property group','namespace'=>'backend/product_stream/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            height: 40
        });

        return [me.notice, me.propertyCombo];
    },

    createStore: function() {
        return Ext.create('Shopware.store.Search', {
            fields: ['id', 'name'],
            pageSize: 20,
            configure: function() {
                return { entity: "Shopware\\Models\\Property\\Option" }
            }
        });
    },

    createToolbar: function() {
        var me = this;
        return Ext.create('Ext.toolbar.Toolbar', {
            dock: 'bottom',
            items: ['->', {
                xtype: 'button',
                text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'apply','default'=>'Apply','namespace'=>'backend/product_stream/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'apply','default'=>'Apply','namespace'=>'backend/product_stream/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Anwenden<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'apply','default'=>'Apply','namespace'=>'backend/product_stream/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                cls: 'primary',
                handler: function() {
                    if (me.propertyCombo.getValue()) {
                        var group = me.propertyCombo.getStore().getById(me.propertyCombo.getValue());
                        me.applyCallback(group);
                        me.destroy();
                    }
                }
            }]
        });
    }
});
//<?php }} ?>