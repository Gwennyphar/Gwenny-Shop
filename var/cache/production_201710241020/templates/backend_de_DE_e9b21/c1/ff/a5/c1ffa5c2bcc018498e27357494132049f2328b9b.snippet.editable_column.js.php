<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 02:29:34
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/article_list/model/editable_column.js" */ ?>
<?php /*%%SmartyHeaderCode:12263242195a3719fe38a053-48809247%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1ffa5c2bcc018498e27357494132049f2328b9b' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/article_list/model/editable_column.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12263242195a3719fe38a053-48809247',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a3719fe3b00a2_55016935',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3719fe3b00a2_55016935')) {function content_5a3719fe3b00a2_55016935($_smarty_tpl) {?>/**
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
 */

/**
 * Shopware Model - Operation model
 *
 * Represents a single editable column
 */
//
Ext.define('Shopware.apps.ArticleList.model.EditableColumn', {
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
        { name: 'id', type: 'int', useNull: true },
        { name: 'name', type: 'string' }
    ],

    associations:[
           {
               type:'hasMany',
               model:'Shopware.apps.ArticleList.model.Operator',
               name:'getOperators',
               associationKey:'operators'
           }
       ]


});
//
<?php }} ?>