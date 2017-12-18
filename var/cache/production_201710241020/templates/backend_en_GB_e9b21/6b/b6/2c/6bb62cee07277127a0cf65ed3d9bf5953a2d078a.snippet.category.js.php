<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 15:50:15
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/store/category.js" */ ?>
<?php /*%%SmartyHeaderCode:12294530635a37d5a70aebb0-02543484%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bb62cee07277127a0cf65ed3d9bf5953a2d078a' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/store/category.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12294530635a37d5a70aebb0-02543484',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a37d5a70c0c11_19213826',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a37d5a70c0c11_19213826')) {function content_5a37d5a70c0c11_19213826($_smarty_tpl) {?>/**
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
 * @subpackage Store
 * @version    $Id$
 * @author shopware AG
 */

//
Ext.define('Shopware.apps.PluginManager.store.Category', {
    extend: 'Ext.data.Store',

    proxy: {
        type: 'ajax',
        api: {
            read: '<?php echo '/backend/PluginManager/getCategories';?>'
        },
        reader: {
            type: 'json',
            root: 'data',
            totalProperty: 'total'
        }
    },

    model: 'Shopware.apps.PluginManager.model.Category'
});
//<?php }} ?>