<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 02:29:28
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/base/attribute/field_handler/Shopware.attribute.ComboBoxFieldHandler.js" */ ?>
<?php /*%%SmartyHeaderCode:13434331845a3719f89909c8-17571179%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cc1f195f915fa532ca31ff2bcd50170d9b1113e' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/base/attribute/field_handler/Shopware.attribute.ComboBoxFieldHandler.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13434331845a3719f89909c8-17571179',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a3719f89960a8_42980994',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3719f89960a8_42980994')) {function content_5a3719f89960a8_42980994($_smarty_tpl) {?>/**
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

Ext.define('Shopware.attribute.ComboBoxFieldHandler', {
    extend: 'Shopware.attribute.FieldHandlerInterface',
    supports: function(attribute) {
        return (attribute.get('columnType') == 'combobox');
    },
    create: function(field, attribute) {
        var data = [];
        field.xtype = 'combobox';
        field.displayField = 'value';
        field.valueField = 'key';

        if (attribute.get('arrayStore')) {
            data = Ext.JSON.decode(attribute.get('arrayStore'))
        }

        field.store = Ext.create('Ext.data.Store', {
            fields: ['key', 'value'],
            data: data
        });
        return field;
    }
});<?php }} ?>