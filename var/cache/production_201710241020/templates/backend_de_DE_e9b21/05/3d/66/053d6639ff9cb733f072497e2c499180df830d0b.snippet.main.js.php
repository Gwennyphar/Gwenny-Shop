<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 20:30:39
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/login/view/main.js" */ ?>
<?php /*%%SmartyHeaderCode:9273867955a38175f96d157-02516531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '053d6639ff9cb733f072497e2c499180df830d0b' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/login/view/main.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9273867955a38175f96d157-02516531',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a38175f9771c5_87836083',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a38175f9771c5_87836083')) {function content_5a38175f9771c5_87836083($_smarty_tpl) {?>/**
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
 * @package    Login
 * @subpackage Main
 * @version    $Id$
 * @author shopware AG
 */

//

/**
 * todo@all: Documentation
 */
Ext.define('Shopware.apps.Login.view.Main', {
    extend: 'Ext.window.Window',
    width: 360,
    height: 435,
    ui: 'shopware-ui',
    cls: 'login-window',
    shadow: false,
    preventHeader: true,
    footerButton: false,
    border: false,
    resizable: false,
    maximizable: false,
    plain: true,
    header: false,
    closable: false,

    /**
     * Initialize the component and bind an event listener to
     * the `onWindowResize` to center the window.
     *
     * @returns { Void }
     */
    initComponent: function() {
        var me = this;

        me.callParent();

        Ext.EventManager.onWindowResize(function() { me.center(); })
    }
});
<?php }} ?>