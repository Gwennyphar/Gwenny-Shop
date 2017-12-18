<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 15:50:05
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/customer/store/detail.js" */ ?>
<?php /*%%SmartyHeaderCode:19955007855a37d59d005683-81849990%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4677ed328dacdb05fbdb36320e034d830997c6b' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/customer/store/detail.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19955007855a37d59d005683-81849990',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a37d59d012b93_04614600',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a37d59d012b93_04614600')) {function content_5a37d59d012b93_04614600($_smarty_tpl) {?>/**
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
 * Shopware Store - Customer list backend module.
 *
 * The detail store is used for the customer detail page and allows the user
 * to edit or add customers.
 */
// 
Ext.define('Shopware.apps.Customer.store.Detail', {
    /**
     * Extend for the standard ExtJS 4
     * @string
     */
    extend: 'Ext.data.Store',
    /**
     * Disable auto loading
     * @boolean
     */
    autoLoad: false,
    /**
     * Define the used model for this store
     * @string
     */
    model: 'Shopware.apps.Customer.model.Customer'
});
// 
<?php }} ?>