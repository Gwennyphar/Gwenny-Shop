<?php /* Smarty version Smarty-3.1.12, created on 2017-12-19 00:30:32
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/base/attribute/model/dynamic_reader.js" */ ?>
<?php /*%%SmartyHeaderCode:17009326235a384f98114a49-84858547%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2416aca832af85f4508d660e639662862a30d38' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/base/attribute/model/dynamic_reader.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17009326235a384f98114a49-84858547',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a384f9811a637_93449402',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a384f9811a637_93449402')) {function content_5a384f9811a637_93449402($_smarty_tpl) {?>/**
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

Ext.define('Shopware.model.DynamicReader', {
    extend: 'Ext.data.reader.Json',
    root: 'data',
    type: 'json',

    readRecords: function(data) {
        if (!data) {
            return this.callParent(arguments);
        }
        if (!data.data) {
            return this.callParent(arguments);
        }
        if (!data.data[0]) {
            return this.callParent(arguments);
        }
        this.model.setFields(Object.keys(data.data[0]));
        return this.callParent(arguments);
    }
});<?php }} ?>