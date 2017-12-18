<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 15:49:49
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/base/attribute/field_handler/Shopware.attribute.StringFieldHandler.js" */ ?>
<?php /*%%SmartyHeaderCode:18503127165a37d58dad7031-23590528%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afef088e3bdcc5f834d81067c45d35c614b3741c' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/base/attribute/field_handler/Shopware.attribute.StringFieldHandler.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18503127165a37d58dad7031-23590528',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a37d58dadbcc5_60487959',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a37d58dadbcc5_60487959')) {function content_5a37d58dadbcc5_60487959($_smarty_tpl) {?>/**
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

Ext.define('Shopware.attribute.StringFieldHandler', {
    extend: 'Shopware.attribute.FieldHandlerInterface',

    supports: function(attribute) {
        return (attribute.get('columnType') == 'string');
    },

    create: function(field, attribute) {
        field.xtype = 'textfield';
        return field;
    }
});<?php }} ?>