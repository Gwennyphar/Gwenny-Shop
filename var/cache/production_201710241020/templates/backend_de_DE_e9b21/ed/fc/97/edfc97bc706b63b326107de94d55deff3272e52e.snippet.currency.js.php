<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 02:29:27
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/base/store/currency.js" */ ?>
<?php /*%%SmartyHeaderCode:15888925405a3719f78a6283-74095567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'edfc97bc706b63b326107de94d55deff3272e52e' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/base/store/currency.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15888925405a3719f78a6283-74095567',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a3719f78ad1b5_45691795',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3719f78ad1b5_45691795')) {function content_5a3719f78ad1b5_45691795($_smarty_tpl) {?>/**
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
 * @package    Base
 * @subpackage Store
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Store - Global Stores and Models
 *
 * todo@all: Documentation
 */
Ext.define('Shopware.apps.Base.store.Currency', {
    extend: 'Ext.data.Store',

    alternateClassName: [
        'Shopware.store.Currency'
    ],
    storeId: 'base.Currency',
    model : 'Shopware.apps.Base.model.Currency',
    pageSize: 1000,
    remoteFilter: true,

    proxy: {
        type: 'ajax',
        url: '<?php echo '/backend/base/getCurrencies';?>',
        reader: {
            type: 'json',
            root: 'data',
            totalProperty: 'total'
        }
    }
}).create();
<?php }} ?>