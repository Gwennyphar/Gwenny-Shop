<?php /* Smarty version Smarty-3.1.12, created on 2017-12-19 22:51:03
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/model/basket_position.js" */ ?>
<?php /*%%SmartyHeaderCode:19542446755a3989c7ded0d1-62177169%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5af1d24127871b15201729ba5049999f39f82b53' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/model/basket_position.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19542446755a3989c7ded0d1-62177169',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a3989c7df70e2_04212649',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3989c7df70e2_04212649')) {function content_5a3989c7df70e2_04212649($_smarty_tpl) {?>/**
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
 * @package    PluginManager
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

//
Ext.define('Shopware.apps.PluginManager.model.BasketPosition', {
    extend: 'Ext.data.Model',

    fields: [
        { name: 'technicalName', type: 'string' },
        { name: 'priceType', type: 'string' },
        { name: 'price', type: 'float' }
    ],

    associations: [{
        type: 'hasMany',
        model: 'Shopware.apps.PluginManager.model.Plugin',
        name: 'getPlugin',
        associationKey: 'plugin'
    }]

});
//<?php }} ?>