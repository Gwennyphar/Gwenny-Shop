<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 15:50:02
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/product_stream/view/condition_list/field/vote_average.js" */ ?>
<?php /*%%SmartyHeaderCode:244441305a37d59a4efbe0-85237453%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2cf08e03247b1920415bbbd3e1e24801c7082c1a' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/product_stream/view/condition_list/field/vote_average.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '244441305a37d59a4efbe0-85237453',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a37d59a5b7b00_26206232',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a37d59a5b7b00_26206232')) {function content_5a37d59a5b7b00_26206232($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.ProductStream.view.condition_list.field.VoteAverage', {

    extend: 'Ext.form.FieldContainer',
    layout: { type: 'hbox', align: 'stretch' },
    mixins: [ 'Ext.form.field.Base' ],
    height: 30,
    value: undefined,

    initComponent: function() {
        var me = this;
        me.items = me.createItems();
        me.callParent(arguments);
    },

    createItems: function() {
        var me = this;
        return [
            me.createAverage()
        ];
    },

    createAverage: function() {
        var me = this;

        me.average = Ext.create('Ext.form.field.Number', {
            labelWidth: 150,
            fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'minimum_average','default'=>'Minimum average','namespace'=>'backend/product_stream/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'minimum_average','default'=>'Minimum average','namespace'=>'backend/product_stream/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Minimum average<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'minimum_average','default'=>'Minimum average','namespace'=>'backend/product_stream/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            allowBlank: false,
            minValue: 1,
            value: 3,
            decimalPrecision: 1,
            maxValue: 5,
            padding: '0 0 0 10',
            flex: 1
        });
        return me.average;
    },

    getValue: function() {
        return this.value;
    },

    setValue: function(value) {
        var me = this;

        me.value = value;

        if (!Ext.isObject(value)) {
            me.average.setValue(1);
            return;
        }

        if (value.hasOwnProperty('average')) {
            me.average.setValue(value.average);
        }
    },

    getSubmitData: function() {
        var value = {};

        value[this.name] = {
            average: this.average.getValue()
        };
        return value;
    }
});
//<?php }} ?>