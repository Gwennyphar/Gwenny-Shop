<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 15:50:01
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/product_stream/view/condition_list/condition/immediate_delivery.js" */ ?>
<?php /*%%SmartyHeaderCode:4836220305a37d599969b54-02515071%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91e9e052b1c3b94dccf8b0c72b916204db9521c0' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/product_stream/view/condition_list/condition/immediate_delivery.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4836220305a37d599969b54-02515071',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a37d5999f8884_84894519',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a37d5999f8884_84894519')) {function content_5a37d5999f8884_84894519($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.ProductStream.view.condition_list.condition.ImmediateDelivery', {
    extend: 'ProductStream.filter.AbstractCondition',

    getName: function() {
        return 'Shopware\\Bundle\\SearchBundle\\Condition\\ImmediateDeliveryCondition';
    },

    getLabel: function() {
        return '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'immediate_delivery_condition','default'=>'Immediate delivery condition','namespace'=>'backend/product_stream/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'immediate_delivery_condition','default'=>'Immediate delivery condition','namespace'=>'backend/product_stream/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Immediate delivery condition<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'immediate_delivery_condition','default'=>'Immediate delivery condition','namespace'=>'backend/product_stream/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
    },

    isSingleton: function() {
        return true;
    },

    create: function(callback) {
        callback(this.createField());
    },

    load: function(key, value) {
        if (key !== this.getName()) {
            return;
        }
        return this.createField();
    },

    createField: function() {
        var me = this;
        return Ext.create('Ext.container.Container', {
            getName: function() {
                return 'condition.' + me.getName();
            },
            items: [{
                xtype: 'displayfield',
                value: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'immediate_delivery'/'display_text','default'=>'Only products available for imediate delivery will be displyed','namespace'=>'backend/product_stream/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'immediate_delivery'/'display_text','default'=>'Only products available for imediate delivery will be displyed','namespace'=>'backend/product_stream/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Only products available for immediate delivery will be displayed<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'immediate_delivery'/'display_text','default'=>'Only products available for imediate delivery will be displyed','namespace'=>'backend/product_stream/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            }, {
                xtype: 'numberfield',
                name: 'condition.' + this.getName(),
                hidden: true,
                value: 1
            }]
        });
    }
});
//<?php }} ?>