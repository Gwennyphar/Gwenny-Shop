<?php /* Smarty version Smarty-3.1.12, created on 2017-12-19 22:51:04
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/store/local_plugin.js" */ ?>
<?php /*%%SmartyHeaderCode:4204428745a3989c8951571-29280006%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '358ecf41fc70f4b5b9904b3a141d22d0f84aaa79' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/store/local_plugin.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4204428745a3989c8951571-29280006',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a3989c8973983_09104475',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3989c8973983_09104475')) {function content_5a3989c8973983_09104475($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.PluginManager.store.LocalPlugin', {
    extend:'Shopware.store.Listing',

    pageSize: 20000,

    remoteSort: true,
    remoteFilter: false,

    groupers: [{
        property: 'groupingState',
        direction: 'DESC'
    }],

    configure: function() {
        return {
            controller: 'PluginManager',
            proxy: {
                type: 'ajax',
                api: {
                    read: '<?php echo '/backend/PluginManager/localListing';?>'
                },
                reader: {
                    type: 'json',
                    root: 'data',
                    totalProperty: 'total'
                }
            }
        };
    },

    model: 'Shopware.apps.PluginManager.model.Plugin'
});
//<?php }} ?>