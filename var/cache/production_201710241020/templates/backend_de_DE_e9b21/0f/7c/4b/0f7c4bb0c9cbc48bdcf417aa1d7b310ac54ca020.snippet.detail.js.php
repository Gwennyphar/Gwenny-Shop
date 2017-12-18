<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 19:30:38
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/customer/view/customer_stream/detail.js" */ ?>
<?php /*%%SmartyHeaderCode:18124179355a38094e76dec2-86004836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f7c4bb0c9cbc48bdcf417aa1d7b310ac54ca020' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/customer/view/customer_stream/detail.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18124179355a38094e76dec2-86004836',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a38094e8088d2_42466932',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a38094e8088d2_42466932')) {function content_5a38094e8088d2_42466932($_smarty_tpl) {?>/**
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
 * @subpackage CustomerStream
 * @version    $Id$
 * @author shopware AG
 */

// 
// 
Ext.define('Shopware.apps.Customer.view.customer_stream.Detail', {
    extend: 'Shopware.model.Container',
    alias: 'widget.customer-stream-detail',
    layout: 'anchor',
    defaults: { anchor: '100%' },
    withAssignment: true,

    configure: function () {
        var me = this;

        return {
            fieldSets: [{
                splitFields: false,
                border: false,
                padding: 0,
                title: '',
                fields: {
                    name: {
                        fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"stream_name",'namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"stream_name",'namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"stream_name",'namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                        allowBlank: false,
                        listeners: {
                            scope: me,
                            blur: me.onBlurStripTags
                        }
                    },
                    description: {
                        xtype: 'textarea',
                        fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"stream_description",'namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"stream_description",'namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Beschreibung<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"stream_description",'namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                        listeners: {
                            scope: me,
                            blur: me.onBlurStripTags
                        }
                    },
                    static: me.createStaticCheckbox,
                    freezeUp: me.createFreezeUp
                }
            }]
        };
    },

    createStaticCheckbox: function() {
        var me = this;

        me.staticCheckbox = Ext.create('Ext.form.field.Checkbox', {
            name: 'static',
            value: false,
            uncheckedValue: false,
            inputValue: true,
            labelWidth: 130,
            anchor: '100%',
            fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"static",'namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"static",'namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Statisch<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"static",'namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            listeners: {
                'change': function(field, newValue) {
                    me.fireEvent('static-changed', newValue);
                }
            }
        });

        return me.staticCheckbox;
    },

    createFreezeUp: function() {
        var me = this;

        me.freezeUpDate = Ext.create('Ext.form.field.Date', {
            fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"freeze_up_label",'namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"freeze_up_label",'namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Bis zum<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"freeze_up_label",'namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            submitFormat: 'Y-m-d',
            name: 'freezeUpDate',
            labelWidth: 130,
            minValue: new Date(),
            allowBlank: true,
            disabled: true
        });

        me.freezeUpTime = Ext.create('Ext.form.field.Time', {
            submitFormat: 'H:i',
            xtype: 'timefield',
            name: 'freezeUpTime',
            minDate: new Date(),
            helpText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"freeze_up_help",'namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"freeze_up_help",'namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Durch Festlegen eines Datums und einer Uhrzeit ist der Stream nur für einen definierten Zeitraum statisch und wird anschließend automatisch zu einem dynamischen Stream umgewandelt.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"freeze_up_help",'namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            margin: '0 0 0 135',
            disabled: true
        });

        me.freezeUpContainer = Ext.create('Ext.container.Container', {
            layout: {
                type: 'vbox',
                align: 'stretch'
            },
            anchor: '100%',
            name: 'freezeUp',
            items: [
                me.freezeUpDate,
                me.freezeUpTime
            ]}
        );

        return me.freezeUpContainer;
    },

    createWarningMessageBox: function(newValue, oldValue) {
        Ext.MessageBox.alert('<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"stream_name_tags_stripped_notice",'namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"stream_name_tags_stripped_notice",'namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Hinweis<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"stream_name_tags_stripped_notice",'namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', Ext.String.format('<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"stream_name_tags_stripped",'namespace'=>'backend/customer/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"stream_name_tags_stripped",'namespace'=>'backend/customer/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Der eingegebene Wert <b>[0]</b> enthält HTML-Tags.<br>Diese Tags wurden <b>entfernt</b>, der neue Wert lautet: <b>[1]</b><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"stream_name_tags_stripped",'namespace'=>'backend/customer/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
', Ext.util.Format.htmlEncode(oldValue), newValue));
    },

    onBlurStripTags: function(comp) {
        var me = this,
            val = comp.getValue(),
            html;

        html = Ext.util.Format.stripTags(val);
        html = html.replace(/"/g, '');

        if (html === val) {
            return;
        }

        comp.setRawValue(html);
        comp.setValue(html);

        me.createWarningMessageBox(html, val);
    }
});
// 
<?php }} ?>