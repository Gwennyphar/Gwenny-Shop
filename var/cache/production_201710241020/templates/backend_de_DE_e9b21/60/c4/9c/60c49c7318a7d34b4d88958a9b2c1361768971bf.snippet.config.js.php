<?php /* Smarty version Smarty-3.1.12, created on 2017-12-19 01:10:53
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/performance/model/config.js" */ ?>
<?php /*%%SmartyHeaderCode:17207924435a38590d316fe5-16457453%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60c49c7318a7d34b4d88958a9b2c1361768971bf' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/performance/model/config.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17207924435a38590d316fe5-16457453',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a38590d329927_73811262',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a38590d329927_73811262')) {function content_5a38590d329927_73811262($_smarty_tpl) {?>/**
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
 * @package    Performance
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Base config model which holds references to the config items
 */
//
Ext.define('Shopware.apps.Performance.model.Config', {

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Ext.data.Model',

    /**
     * Contains the model fields
     * @array
     */
    fields:[
        //
        { name:'id', type:'int' }
    ],


    /**
     * Configure the data communication
     * @object
     */
    proxy:{
        /**
         * Set proxy type to ajax
         * @string
         */
        type:'ajax',

        /**
         * Configure the url mapping for the different
         * store operations based on
         * @object
         */
        api:{
            update:'<?php echo '/backend/Performance/saveConfig';?>',
            create:'<?php echo '/backend/Performance/saveConfig';?>'
        },

        /**
         * Configure the data reader
         * @object
         */
        reader:{
            type:'json',
            root:'data',
            totalProperty:'total'
        }

    },

    /**
     * Define the associations of the customer model.
     * One customer has a billing, shipping address and a debit information.
     * @array
     */
    associations:[
        { type:'hasMany', model:'Shopware.apps.Performance.model.Check', name:'getPerformanceCheck', associationKey:'check' },
        { type:'hasMany', model:'Shopware.apps.Performance.model.HttpCache', name:'getHttpCache', associationKey:'httpCache' },
        { type:'hasMany', model:'Shopware.apps.Performance.model.TopSeller', name:'getTopSeller', associationKey:'topSeller' },
        { type:'hasMany', model:'Shopware.apps.Performance.model.Seo', name:'getSeo', associationKey:'seo' },
        { type:'hasMany', model:'Shopware.apps.Performance.model.Search', name:'getSearch', associationKey:'search' },
        { type:'hasMany', model:'Shopware.apps.Performance.model.Categories', name:'getCategories', associationKey:'categories' },
        { type:'hasMany', model:'Shopware.apps.Performance.model.Filter', name:'getFilter', associationKey:'filters' },
        { type:'hasMany', model:'Shopware.apps.Performance.model.Various', name:'getVarious', associationKey:'various' },
        { type:'hasMany', model:'Shopware.apps.Performance.model.Customer', name:'getCustomer', associationKey:'customer' }
    ]

});
//
<?php }} ?>