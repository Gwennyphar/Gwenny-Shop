<?php /* Smarty version Smarty-3.1.12, created on 2017-12-19 00:31:24
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/index/model/visitors.js" */ ?>
<?php /*%%SmartyHeaderCode:16696034295a384fcc7c6195-95433301%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a80ee6c21eba747aeb603f50935ae8417c639a7' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/index/model/visitors.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16696034295a384fcc7c6195-95433301',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a384fcc7d0b75_68831349',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a384fcc7d0b75_68831349')) {function content_5a384fcc7d0b75_68831349($_smarty_tpl) {?>/**
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
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.Index.model.Visitors', {
    extend: 'Ext.data.Model',
    fields: [
        //
        'date', { name: 'visitors', type: 'int'}, 'timestamp']
});
//
<?php }} ?>