<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 15:49:50
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/base/attribute/field/Shopware.form.field.PremiumGrid.js" */ ?>
<?php /*%%SmartyHeaderCode:10247414115a37d58e579925-15794296%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21417887d681c2235ad344f743b0d4a541a526be' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/base/attribute/field/Shopware.form.field.PremiumGrid.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10247414115a37d58e579925-15794296',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a37d58e5803c6_61994751',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a37d58e5803c6_61994751')) {function content_5a37d58e5803c6_61994751($_smarty_tpl) {?>/**
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

//

Ext.define('Shopware.form.field.PremiumGrid', {
    extend: 'Shopware.form.field.Grid',
    alias: 'widget.shopware-form-field-premium-grid',
    createColumns: function() {
        var me = this;

        return [
            me.createSortingColumn(),
            { dataIndex: 'orderNumberExport', flex: 1 },
            { dataIndex: 'name', flex: 2, renderer: me.productRenderer },
            { dataIndex: 'shop' },
            me.createActionColumn()
        ];
    },

    createSearchField: function() {
        return Ext.create('Shopware.form.field.PremiumSingleSelection', this.getComboConfig());
    },

    productRenderer: function(value, meta, record) {
        return '<b>'+record.get('number')+'</b> - ' + value;
    }
});<?php }} ?>