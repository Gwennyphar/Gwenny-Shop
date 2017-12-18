<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 02:29:37
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/product_stream/store/attribute.js" */ ?>
<?php /*%%SmartyHeaderCode:4826604645a371a01707923-86896572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bbacc042a65450980af2139e74ab3e7e4b96e5d' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/product_stream/store/attribute.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4826604645a371a01707923-86896572',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a371a01722322_42393303',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a371a01722322_42393303')) {function content_5a371a01722322_42393303($_smarty_tpl) {?>/**
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
 * @subpackage Store
 * @version    $Id$
 * @author shopware AG
 */
//
Ext.define('Shopware.apps.ProductStream.store.Attribute', {
    extend:'Ext.data.Store',
    fields: [ 'column', 'label' ],
    autoLoad: false,
    pageSize: 15,
    proxy:{
        type:'ajax',
        url: '<?php echo '/backend/ProductStream/getAttributes';?>',
        reader:{
            type:'json',
            root:'data',
            totalProperty:'total'
        }
    }
});
//<?php }} ?>