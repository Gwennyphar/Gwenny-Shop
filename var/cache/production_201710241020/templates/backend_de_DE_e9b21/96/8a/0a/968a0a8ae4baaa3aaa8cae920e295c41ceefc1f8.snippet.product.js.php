<?php /* Smarty version Smarty-3.1.12, created on 2017-12-19 00:31:33
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/product_stream/model/product.js" */ ?>
<?php /*%%SmartyHeaderCode:15454605485a384fd55ee397-30853182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '968a0a8ae4baaa3aaa8cae920e295c41ceefc1f8' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/product_stream/model/product.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15454605485a384fd55ee397-30853182',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a384fd567a934_03285144',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a384fd567a934_03285144')) {function content_5a384fd567a934_03285144($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.ProductStream.model.Product', {
    extend: 'Ext.data.Model',
    fields: [
        //
        { name : 'id', type: 'int', useNull: true },
        { name : 'number', type: 'string' },
        { name : 'name', type: 'string' },
        { name : 'stock', type: 'int' },
        { name : 'cheapestPrice' }
    ]
});
//<?php }} ?>