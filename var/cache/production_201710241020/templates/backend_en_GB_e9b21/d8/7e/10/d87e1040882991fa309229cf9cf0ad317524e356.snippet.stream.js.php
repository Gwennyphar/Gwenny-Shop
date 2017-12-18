<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 15:50:00
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/product_stream/model/stream.js" */ ?>
<?php /*%%SmartyHeaderCode:2605822365a37d59889f346-07845587%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd87e1040882991fa309229cf9cf0ad317524e356' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/product_stream/model/stream.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2605822365a37d59889f346-07845587',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a37d5989e4ea6_75205810',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a37d5989e4ea6_75205810')) {function content_5a37d5989e4ea6_75205810($_smarty_tpl) {?>/**
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
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */
//
Ext.define('Shopware.apps.ProductStream.model.Stream', {
    extend: 'Shopware.data.Model',

    configure: function() {
        return {
            controller: 'ProductStream'
        };
    },

    fields: [
        //
        { name : 'id', type: 'int', useNull: true },
        { name : 'name', type: 'string', useNull: false },
        { name : 'description', type: 'string', useNull: false },
        { name : 'type', type: 'int', defaultValue: 1 },
        { name : 'sorting' },
        { name : 'sortingId', type: 'int', useNull: true },
        { name : 'conditions', useNull: false }
    ]
});
//<?php }} ?>