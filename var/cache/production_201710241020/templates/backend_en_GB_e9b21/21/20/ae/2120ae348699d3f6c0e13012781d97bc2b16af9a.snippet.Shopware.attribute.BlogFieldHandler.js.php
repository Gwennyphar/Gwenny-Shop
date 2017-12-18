<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 15:49:50
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/base/attribute/field_handler/Shopware.attribute.BlogFieldHandler.js" */ ?>
<?php /*%%SmartyHeaderCode:11573427875a37d58e7fb907-51919738%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2120ae348699d3f6c0e13012781d97bc2b16af9a' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/base/attribute/field_handler/Shopware.attribute.BlogFieldHandler.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11573427875a37d58e7fb907-51919738',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a37d58e80fff7_25611372',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a37d58e80fff7_25611372')) {function content_5a37d58e80fff7_25611372($_smarty_tpl) {?>/**
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

Ext.define('Shopware.attribute.BlogFieldHandler', {
    extend: 'Shopware.attribute.AbstractEntityFieldHandler',
    entity: "Shopware\\Models\\Blog\\Blog",
    singleSelectionClass: 'Shopware.form.field.BlogSingleSelection',
    multiSelectionClass: 'Shopware.form.field.BlogGrid'
});<?php }} ?>