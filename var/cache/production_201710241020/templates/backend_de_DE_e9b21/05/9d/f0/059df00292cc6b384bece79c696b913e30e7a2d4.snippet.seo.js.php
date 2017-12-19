<?php /* Smarty version Smarty-3.1.12, created on 2017-12-19 01:10:53
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/performance/model/seo.js" */ ?>
<?php /*%%SmartyHeaderCode:3333192525a38590d397dc1-99327386%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '059df00292cc6b384bece79c696b913e30e7a2d4' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/performance/model/seo.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3333192525a38590d397dc1-99327386',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a38590d3a1a39_97741340',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a38590d3a1a39_97741340')) {function content_5a38590d3a1a39_97741340($_smarty_tpl) {?>/**
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
 * Topseller config model
 */
//
Ext.define('Shopware.apps.Performance.model.Seo', {

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
        { name:'id', type:'int' },
        { name: 'routercache', type: 'int'},
        { name: 'routerlastupdateDate', type: 'date', dateFormat: 'd.m.Y'},
        { name: 'routerlastupdateTime', type: 'time'},
        { name: 'seoRefreshStrategy', type: 'int'}
    ]

});
//
<?php }} ?>