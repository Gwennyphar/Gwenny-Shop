<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 15:50:15
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/store/basket.js" */ ?>
<?php /*%%SmartyHeaderCode:8961497465a37d5a70506f1-67752313%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd38faf1d0089535b41e875ee14e31861040f95ca' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/store/basket.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8961497465a37d5a70506f1-67752313',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a37d5a70641c5_34231607',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a37d5a70641c5_34231607')) {function content_5a37d5a70641c5_34231607($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.PluginManager.store.Basket', {
    extend: 'Ext.data.Store',

    proxy: {
        type: 'ajax',
        api: {
            read: '<?php echo '/backend/PluginManager/checkout';?>'
        },
        reader: {
            type: 'json',
            root: 'data',
            totalProperty: 'total'
        }
    },

    model: 'Shopware.apps.PluginManager.model.Basket'
});
//<?php }} ?>