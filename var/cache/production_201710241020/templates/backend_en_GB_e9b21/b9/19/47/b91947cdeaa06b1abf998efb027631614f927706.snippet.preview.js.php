<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 15:50:05
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/customer/store/preview.js" */ ?>
<?php /*%%SmartyHeaderCode:13845276565a37d59d2d94d6-45116165%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b91947cdeaa06b1abf998efb027631614f927706' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/customer/store/preview.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13845276565a37d59d2d94d6-45116165',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a37d59d308743_87232839',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a37d59d308743_87232839')) {function content_5a37d59d308743_87232839($_smarty_tpl) {?>/**
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
// 
Ext.define('Shopware.apps.Customer.store.Preview', {
    extend: 'Ext.data.Store',
    model: 'Shopware.model.Dynamic',
    pageSize: 20,
    remoteSort: true,
    remoteFilter: true,

    proxy: {
        type: 'ajax',
        api: {
            read: '<?php echo '/backend/CustomerStream/loadStream';?>'
        },
        reader: Ext.create('Shopware.model.DynamicReader')
    }
});
// 
<?php }} ?>