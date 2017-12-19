<?php /* Smarty version Smarty-3.1.12, created on 2017-12-19 22:51:03
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/model/licence.js" */ ?>
<?php /*%%SmartyHeaderCode:11600027235a3989c7d632f5-75468857%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '406e5a444e7aa7cf84ee0dbb7a8ab82c66a22f8a' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/model/licence.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11600027235a3989c7d632f5-75468857',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a3989c7d72120_29454033',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3989c7d72120_29454033')) {function content_5a3989c7d72120_29454033($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.PluginManager.model.Licence', {
    extend: 'Ext.data.Model',

    fields: [
        { name: 'id', type: 'int' },
        { name: 'label', type: 'string' },
        { name: 'technicalName', type: 'string' },
        { name: 'iconPath', type: 'string' },
        { name: 'shop', type: 'string' },
        { name: 'subscription', type: 'string' },
        { name: 'creationDate', type: 'datetime' },
        { name: 'expirationDate', type: 'datetime' },
        { name: 'licenseKey', type: 'string' },
        { name: 'isLicenseCheckEnabled', type: 'boolean', defaultValue: false, persist: false},
        { name: 'binaryLink', type: 'string' },
        { name: 'binaryVersion', type: 'string' },

        { name: 'priceColumn', type: 'string' }
    ],

    associations: [{
        type: 'hasMany',
        model: 'Shopware.apps.PluginManager.model.Price',
        name: 'getPrice',
        associationKey: 'priceModel'
    }]
});
//<?php }} ?>