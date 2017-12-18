<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 15:50:00
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/order/model/order_history.js" */ ?>
<?php /*%%SmartyHeaderCode:20468225725a37d598daf8e5-50186555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '595d6e933a23e348ee15f376cb984080c4f25c2e' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/order/model/order_history.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20468225725a37d598daf8e5-50186555',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a37d598dd3c06_31105976',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a37d598dd3c06_31105976')) {function content_5a37d598dd3c06_31105976($_smarty_tpl) {?>/**
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
 * @package    Order
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Order list backend module.
 *
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.Order.model.OrderHistory', {

   /**
    * Extends the standard Ext Model
    * @string
    */
    extend: 'Ext.data.Model',

   /**
    * The fields used for this model
    * @array
    */
    fields: [
       //
        { name : 'id', type: 'int' },
        { name : 'userName', type: 'string' },
        { name : 'changeDate', type: 'date' },
        { name : 'prevOrderStatusId', type: 'int' },
        { name : 'currentOrderStatusId', type: 'int' },
        { name : 'prevPaymentStatusId', type: 'int' },
        { name : 'currentPaymentStatusId', type: 'int' }
    ]
});
//

<?php }} ?>