<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 02:29:28
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/base/attribute/field/Shopware.form.field.CategoryGrid.js" */ ?>
<?php /*%%SmartyHeaderCode:6922289655a3719f85d9700-00342812%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36650dbb81574748137689327a6bbe2b7e291826' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/base/attribute/field/Shopware.form.field.CategoryGrid.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6922289655a3719f85d9700-00342812',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a3719f85dfc47_19069963',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3719f85dfc47_19069963')) {function content_5a3719f85dfc47_19069963($_smarty_tpl) {?>/**
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
 * @category    Shopware
 * @package     Base
 * @subpackage  Attribute
 * @version     $Id$
 * @author      shopware AG
 */

Ext.define('Shopware.form.field.CategoryGrid', {
    extend: 'Shopware.form.field.Grid',
    alias: 'widget.shopware-form-field-category-grid',
    mixins: ['Shopware.model.Helper'],

    createColumns: function() {
        var me = this;
        var activeColumn = { dataIndex: 'active', width: 30 };
        me.applyBooleanColumnConfig(activeColumn);

        return [
            me.createSortingColumn(),
            activeColumn,
            { dataIndex: 'name', flex: 1, renderer: me.nameRenderer, scope: me },
            me.createActionColumn()
        ];
    },

    createSearchField: function() {
        return Ext.create('Shopware.form.field.CategorySingleSelection', this.getComboConfig());
    },

    nameRenderer: function(value, meta, record) {
        var parents = Ext.clone(record.get('parents'));

        if (!parents || parents.length <= 0) {
            parents = [];
        }
        parents.push(value);
        return parents.join('>');
    }
});<?php }} ?>