<?php /* Smarty version Smarty-3.1.12, created on 2017-12-19 00:31:33
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/customer/model/quick_view.js" */ ?>
<?php /*%%SmartyHeaderCode:8460831545a384fd5f08917-14731673%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffa8e3c0d1f43718531d550b9cdfda31aea1238c' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/customer/model/quick_view.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8460831545a384fd5f08917-14731673',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a384fd60af259_82975389',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a384fd60af259_82975389')) {function content_5a384fd60af259_82975389($_smarty_tpl) {?>/**
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
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

// 

/**
 * Shopware Model - Customer list backend module.
 *
 * The order model represents a single data row of the s_order or the Shopware\Models\Order\Order
 * doctrine mode which contains the head data about a shop order.
 */
// 
Ext.define('Shopware.apps.Customer.model.QuickView', {

    extend: 'Shopware.data.Model',

    fields: [
        // 
        { name: 'id', type: 'int' },
        { name: 'number', type: 'string' },
        { name: 'customerGroup', type: 'string' },
        { name: 'shop', type: 'string' },
        { name: 'attribute' },
        { name: 'active', type: 'bool' },
        { name: 'email', type: 'string' },
        { name: 'firstLogin', type: 'date' },
        { name: 'lastLogin', type: 'date' },
        { name: 'accountMode', type: 'int' },
        { name: 'newsletter', type: 'bool' },
        { name: 'lockedUntil', type: 'date' },
        { name: 'salutation', type: 'string' },
        { name: 'title', type: 'string' },
        { name: 'firstname', type: 'string' },
        { name: 'lastname', type: 'string' },
        { name: 'zipcode', type: 'string' },
        { name: 'city', type: 'string' },
        { name: 'company', type: 'string' },
        { name: 'birthday', type: 'date', useNull: true }
    ],

    configure: function() {
        return {
            controller: 'CustomerQuickView'
        };
    }
});
// 
<?php }} ?>