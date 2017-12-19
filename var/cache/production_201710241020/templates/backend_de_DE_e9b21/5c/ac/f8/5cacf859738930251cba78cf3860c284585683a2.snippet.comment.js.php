<?php /* Smarty version Smarty-3.1.12, created on 2017-12-19 22:51:03
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/model/comment.js" */ ?>
<?php /*%%SmartyHeaderCode:11125300425a3989c7dba0c6-89065013%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cacf859738930251cba78cf3860c284585683a2' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/model/comment.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11125300425a3989c7dba0c6-89065013',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a3989c7dc5347_41620843',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3989c7dc5347_41620843')) {function content_5a3989c7dc5347_41620843($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.PluginManager.model.Comment', {
    extend: 'Ext.data.Model',

    fields: [
        { name: 'rating', type: 'int' },
        { name: 'creationDate', type: 'datetime' },
        { name: 'headline', type: 'string' },
        { name: 'author', type: 'string' },
        { name: 'text', type: 'string' }
    ]
});
//<?php }} ?>