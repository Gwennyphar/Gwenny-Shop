<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 02:29:36
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/order/view/detail/dispatch.js" */ ?>
<?php /*%%SmartyHeaderCode:6838800925a371a00332686-31725384%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5848a13a2ba11c56d44d05228a02139aa2b6fa4' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/order/view/detail/dispatch.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6838800925a371a00332686-31725384',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a371a00365d51_39965293',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a371a00365d51_39965293')) {function content_5a371a00365d51_39965293($_smarty_tpl) {?>/**
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
 * @package    Order
 * @subpackage View
 * @version    $Id$
 * @author shopware AG
 */

//

/**
 * Shopware UI - Order detail page
 */
//
Ext.define('Shopware.apps.Order.view.detail.Dispatch', {
    /**
     * Define that the dispatch field set is an extension of the Ext.form.FieldSet
     * @string
     */
    extend: 'Ext.form.FieldSet',
    /**
     * List of short aliases for class names. Most useful for defining xtypes for widgets.
     * @string
     */
    alias: 'widget.order-dispatch-field-set',
    /**
     * Set css class for this component
     * @string
     */
    cls: Ext.baseCSSPrefix + 'dispatch-field-set',
    /**
     * Contains all snippets for the view component
     * @object
     */
    snippets: {
        title:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'dispatch'/'title','default'=>'Dispatch data','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'dispatch'/'title','default'=>'Dispatch data','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Versand-Daten<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'dispatch'/'title','default'=>'Dispatch data','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        dispatchMethod:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'dispatch'/'fields'/'dispatch_method','default'=>'Dispatch method','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'dispatch'/'fields'/'dispatch_method','default'=>'Dispatch method','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Versandart<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'dispatch'/'fields'/'dispatch_method','default'=>'Dispatch method','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },

    /**
     * @return void
     */
    initComponent:function () {
        var me = this;

        me.title = me.snippets.title;
        me.items = me.createItems();

        me.callParent(arguments);
    },

    /**
     * @return Ext.Component[]
     */
    createItems: function() {
        var me = this;

        return [{
            xtype: 'container',
            layout: 'anchor',
            items: [
                me.createDispatchCombo()
            ]
        }];
    },

    /**
     * @return Ext.form.field.ComboBox
     */
    createDispatchCombo: function() {
        var me = this;

        me.dispatchCombo = Ext.create('Ext.form.field.ComboBox', {
            name: 'dispatchId',
            fieldLabel: me.snippets.dispatchMethod,
            store: me.dispatchesStore,
            queryMode: 'local',
            valueField: 'id',
            displayField: 'name',
            triggerAction: 'all',
            required: true,
            allowBlank: false,
            editable: false,
            anchor: '97.5%',
            labelWidth: 155,
            listeners: {
                change: function(field, newValue) {
                    me.fireEvent('changeDispatch', me, newValue);
                }
            }
        });

        return me.dispatchCombo;
    }
});
//
<?php }} ?>