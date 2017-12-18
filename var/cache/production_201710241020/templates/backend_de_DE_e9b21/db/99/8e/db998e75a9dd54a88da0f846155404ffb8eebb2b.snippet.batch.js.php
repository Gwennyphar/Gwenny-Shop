<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 02:29:34
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/article/model/batch.js" */ ?>
<?php /*%%SmartyHeaderCode:11434475055a3719fe28b0e2-94652940%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db998e75a9dd54a88da0f846155404ffb8eebb2b' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/article/model/batch.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11434475055a3719fe28b0e2-94652940',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a3719fe2a41a8_10744539',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3719fe2a41a8_10744539')) {function content_5a3719fe2a41a8_10744539($_smarty_tpl) {?>/**
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
 * Shopware Model - Article models.
 *
 * The batch model of the article module is responsible to initials
 * all stores which used for the data selection on the detail page.
 */
//
Ext.define('Shopware.apps.Article.model.Batch', {

    /**
    * Extends the standard Ext Model
    * @string
    */
    extend: 'Ext.data.Model',

   /**
    * The batch model is only a data container which contains all
    * data for the global stores in the model association data.
    * An Ext.data.Model needs one field.
    * @array
    */
    fields: [
       //
       'id'
   ],

    /**
     * Define the associations of the order model.
     * One order has a customer, many details, billing- & shipping address and a payment information.
     * @array
     */
    associations:[
        //association for the article data
        { type:'hasMany', model:'Shopware.apps.Article.model.Article', name:'getArticle', associationKey:'article' },

        //global data for the detail form. Used for example for combo boxes.
        { type:'hasMany', model:'Shopware.apps.Base.model.CustomerGroup', name:'getCustomerGroups', associationKey:'customerGroups' },

        //association for all defined sub shops in the shop
        { type:'hasMany', model:'Shopware.apps.Base.model.Shop', name:'getShops', associationKey:'shops' },

        //association for all defined taxes in the shop
        { type:'hasMany', model:'Shopware.apps.Base.model.Tax', name:'getTaxes', associationKey:'taxes' },

        //association for all defined article suppliers in the shop
        { type:'hasMany', model:'Shopware.apps.Base.model.Supplier', name:'getSuppliers', associationKey:'suppliers' },

        //association for all defined templates in the shop
        { type:'hasMany', model:'Shopware.apps.Article.model.Template', name:'getTemplates', associationKey:'templates' },

        //association for all defined units in the shop
        { type:'hasMany', model:'Shopware.apps.Article.model.Unit', name:'getUnits', associationKey:'units' },

        //association for all defined property groups in the shop
        { type:'hasMany', model:'Shopware.apps.Article.model.PropertyGroup', name:'getProperties', associationKey:'properties' },

        //association for all defined categories in the shop
        { type:'hasMany', model:'Shopware.apps.Article.model.Category', name:'getCategories', associationKey:'categories' },

        //association for all defined configurator groups in the shop
        { type:'hasMany', model:'Shopware.apps.Article.model.ConfiguratorGroup', name:'getConfiguratorGroups', associationKey:'configuratorGroups' },

        //association for all defined price groups in the shop
        { type:'hasMany', model:'Shopware.apps.Article.model.PriceGroup', name:'getPriceGroups', associationKey:'priceGroups' },
    ]
});
//

<?php }} ?>