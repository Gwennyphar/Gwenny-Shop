<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 15:49:48
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/base/store/country_area.js" */ ?>
<?php /*%%SmartyHeaderCode:7146167005a37d58cba5fa0-33586449%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02853bb4f017af27df2c28c03a33af6523afc118' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/base/store/country_area.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7146167005a37d58cba5fa0-33586449',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a37d58cbb68f1_65748091',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a37d58cbb68f1_65748091')) {function content_5a37d58cbb68f1_65748091($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Base.store.CountryArea', {
    extend: 'Ext.data.Store',

    alternateClassName: 'Shopware.store.CountryArea',
    storeId: 'base.CountryArea',
    model : 'Shopware.apps.Base.model.CountryArea',
    pageSize: 1000,
    remoteFilter: true,

    proxy:{
        type:'ajax',
        url:'<?php echo '/backend/base/getCountryAreas';?>',
        reader:{
            type:'json',
            root:'data',
            totalProperty:'total'
        }
    }
}).create();
<?php }} ?>