<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 02:29:26
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/engine/Library/ExtJs/overrides/Ext.view.BoundList.js" */ ?>
<?php /*%%SmartyHeaderCode:16689529095a3719f64c8a30-53565275%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a821b2546b6511e81ff0b8e395c3ce21552d19cb' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/engine/Library/ExtJs/overrides/Ext.view.BoundList.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16689529095a3719f64c8a30-53565275',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a3719f64cd129_95397391',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3719f64cd129_95397391')) {function content_5a3719f64cd129_95397391($_smarty_tpl) {?>/**
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

/**
 * Shopware UI - BoundList Override
 *
 * This files provides an override to address the
 * boundlist easier in our Selenium Tests.
 *
 * The override adds an addtional HTML5 "data"-attrbute
 * to the element. The value of the attribute is
 * either the "name" property of the ComboBox or
 * the action
 */
Ext.override(Ext.view.BoundList,
/** @lends Ext.view.BoundList# */
{
    /**
     * Suffix for the added data-attribute.
     * @string
     */
    dataSuffix: 'action',

    /**
     * Adds an additional HTML5 "data"-attribute
     * to easier address the element in our
     * selenium tests.
     *
     * @public
     * @return void
     */
    afterRender: function() {
        var me = this;
        me.callOverridden(arguments);

        if(me.el.dom && me.pickerField) {
            var dom = me.el.dom,
                value = me.action || me.pickerField.name;

            dom.setAttribute('data-' + me.dataSuffix, value);
        }
    }
});
<?php }} ?>