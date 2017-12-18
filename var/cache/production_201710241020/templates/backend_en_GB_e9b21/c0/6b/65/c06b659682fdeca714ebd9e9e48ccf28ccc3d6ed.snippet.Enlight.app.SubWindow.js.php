<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 15:49:46
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/engine/Library/ExtJs/components/Enlight.app.SubWindow.js" */ ?>
<?php /*%%SmartyHeaderCode:20952565745a37d58ad49de3-69853791%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c06b659682fdeca714ebd9e9e48ccf28ccc3d6ed' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/engine/Library/ExtJs/components/Enlight.app.SubWindow.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20952565745a37d58ad49de3-69853791',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a37d58ad4f466_52042558',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a37d58ad4f466_52042558')) {function content_5a37d58ad4f466_52042558($_smarty_tpl) {?>/**
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
 * Shopware UI - Window
 *
 * This class overrides the default Ext.window.Window object
 * to add our necessary functionality.
 *
 * The class renders the Ext.window.Window in the active
 * desktop, renders the header tools and sets the needed
 * event listeners.
 */
Ext.define('Enlight.app.SubWindow', {
    extend: 'Enlight.app.Window',
    alias: 'widget.subwindow',
    footerButton: false,
    isSubWindow: true
});
<?php }} ?>