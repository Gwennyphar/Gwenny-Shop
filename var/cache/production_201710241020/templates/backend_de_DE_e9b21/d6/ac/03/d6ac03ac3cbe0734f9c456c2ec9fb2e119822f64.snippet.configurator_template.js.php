<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 02:29:34
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/article/model/configurator_template.js" */ ?>
<?php /*%%SmartyHeaderCode:16129997035a3719fea93593-36499141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6ac03ac3cbe0734f9c456c2ec9fb2e119822f64' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/article/model/configurator_template.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16129997035a3719fea93593-36499141',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a3719feae47d0_47432048',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3719feae47d0_47432048')) {function content_5a3719feae47d0_47432048($_smarty_tpl) {?>/**
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
 * @package    Article
 * @subpackage Batch
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Article backend module.
 */
//
Ext.define('Shopware.apps.Article.model.ConfiguratorTemplate', {
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
        { name: 'id', type: 'int' },
        { name: 'articleId', type: 'int' },
        { name: 'number', type: 'string' },
        { name: 'additionalText', type: 'string' },
        { name: 'supplierNumber', type: 'string' },
        { name: 'active', type: 'int' },
        { name: 'inStock', type: 'int' },
        { name: 'stockMin', type: 'int' },
        { name: 'weight', type: 'float' },
        { name: 'ean', type: 'string', useNull: true },
        { name: 'width', type: 'float', useNull: true },
        { name: 'height', type: 'float', useNull: true },
        { name: 'len', type: 'float', useNull: true },
        { name: 'active', type: 'boolean' },
        { name: 'position', type: 'int' },
        { name: 'releaseDate', type: 'date', useNull: true, dateFormat: 'd.m.Y' },
        { name: 'shippingTime', type: 'string', useNull: true },
        { name: 'shippingFree', type: 'boolean' },
        { name: 'purchaseSteps', type: 'int', useNull: true },
        { name: 'minPurchase', type: 'int', useNull: false, defaultValue: 1 },
        { name: 'maxPurchase', type: 'int', useNull: true },
        { name: 'unitId', type: 'int', useNull: true },
        { name: 'purchaseUnit', type: 'float', useNull: true },
        { name: 'referenceUnit', type: 'float', useNull: true},
        { name: 'packUnit', type: 'string', useNull: true },
        { name: 'purchasePrice', type: 'float', useNull: false }
    ],
    associations: [
        { type: 'hasMany', model: 'Shopware.apps.Article.model.Price', name: 'getPrice', associationKey: 'prices' },
    ]
});
//
<?php }} ?>