<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 15:49:50
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/base/model/custom_sorting.js" */ ?>
<?php /*%%SmartyHeaderCode:3812165055a37d58ec3e121-58731566%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdc154da2e7c52ac03503a7275b645069dc3d000' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/base/model/custom_sorting.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3812165055a37d58ec3e121-58731566',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a37d58ec4b857_17834620',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a37d58ec4b857_17834620')) {function content_5a37d58ec4b857_17834620($_smarty_tpl) {?>/**
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

//

Ext.define('Shopware.apps.Base.model.CustomSorting', {
    extend: 'Shopware.data.Model',

    configure: function() {
        return {
            controller: 'CustomSorting'
        };
    },

    fields: [
        { name: 'id', type: 'int' },
        { name: 'label', type: 'string' },
        { name: 'active', type: 'boolean' },
        { name: 'displayInCategories', type: 'boolean' },
        { name: 'position', type: 'int' },
        { name: 'sortings', type: 'array' }
    ]
});

//
<?php }} ?>