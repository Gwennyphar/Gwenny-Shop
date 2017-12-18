<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 15:50:05
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/customer/store/address.js" */ ?>
<?php /*%%SmartyHeaderCode:809714305a37d59d1ba695-81730601%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a09f608417e8e75c32f6f11c0f467097f0f2d89e' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/customer/store/address.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '809714305a37d59d1ba695-81730601',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a37d59d1e23d9_43213939',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a37d59d1e23d9_43213939')) {function content_5a37d59d1e23d9_43213939($_smarty_tpl) {?>/**
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
 * @subpackage Store
 * @version    $Id$
 * @author shopware AG
 */

// 

/**
 * Shopware Store - Customer list backend module
 *
 * The orders store is used from the customer order grid which is displayed
 * on bottom of the order tab.
 */
// 
Ext.define('Shopware.apps.Customer.store.Address', {

    extend: 'Shopware.store.Listing',
    model: 'Shopware.apps.Customer.model.Address',
    pageSize: 50,

    configure: function() {
        return {
            controller: 'Address'
        };
    }
});
// 
<?php }} ?>