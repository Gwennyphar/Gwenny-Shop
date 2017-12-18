<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 15:50:14
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/view/account/login_window.js" */ ?>
<?php /*%%SmartyHeaderCode:17523238705a37d5a6e084c9-14974325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42862ba4ed7afb0b02260fdd25d89c166af6a155' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/view/account/login_window.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17523238705a37d5a6e084c9-14974325',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a37d5a6e20fb9_91051422',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a37d5a6e20fb9_91051422')) {function content_5a37d5a6e20fb9_91051422($_smarty_tpl) {?>/**
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
 * @subpackage Account
 * @version    $Id$
 * @author shopware AG
 */
//

//
Ext.define('Shopware.apps.PluginManager.view.account.LoginWindow', {
    extend: 'Ext.window.Window',
    modal: true,

    /**
     * Contains all snippets for the view component
     * @object
     */
    snippets: {
        title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'account'/'title','default'=>'Shopware ID','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'account'/'title','default'=>'Shopware ID','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Shopware ID<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'account'/'title','default'=>'Shopware ID','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        descriptionMessage: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'account'/'description_message','default'=>'Please login with your existing Shopware ID or register your shop, to access the complete functional range of the PluginManager. <br>The Shopware ID is your username and will give you access to your Shopware account and our Community Store, the central marketplace for all shopware extensions.','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'account'/'description_message','default'=>'Please login with your existing Shopware ID or register your shop, to access the complete functional range of the PluginManager. <br>The Shopware ID is your username and will give you access to your Shopware account and our Community Store, the central marketplace for all shopware extensions.','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Please login with your existing Shopware ID or register your shop, to access the complete functional range of the PluginManager. <br>The Shopware ID is your username and will give you access to your Shopware account and our Community Store, the central marketplace for all shopware extensions.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'account'/'description_message','default'=>'Please login with your existing Shopware ID or register your shop, to access the complete functional range of the PluginManager. <br>The Shopware ID is your username and will give you access to your Shopware account and our Community Store, the central marketplace for all shopware extensions.','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },

    cls: 'plugin-manager-login-window',

    header: false,

    minWidth: 800,
    bodyPadding: 40,

    initComponent: function () {
        var me = this;

        me.items = [
            me.createHeadline(),
            me.createDescriptionText(),
            me.createLayouts()
        ];

        me.callParent(arguments);
    },

    createLayouts: function () {
        var me = this;

        return {
            border: false,
            layout: {
                type: 'hbox',
                align: 'stretch'
            },
            anchor: '100%',
            items: [
                me.createLoginPanel(),
                me.createRegisterPanel()
            ]
        };

    },

    createHeadline: function () {
        var me = this;

        return Ext.create('Ext.container.Container', {
            border: false,
            layout: 'hbox',
            anchor: '100%',
            cls: 'headline-container',
            items: [
                Ext.create('Ext.Component', {
                    html: me.snippets.title,
                    width: 680,
                    cls: 'headline'
                }),
                Ext.create('PluginManager.container.Container', {
                    html: 'X',
                    cls: 'headline-close',
                    handler: function() {
                        Shopware.app.Application.fireEvent('destroy-login', me);
                    }
                })
            ]
        });
    },

    createDescriptionText: function() {
        var me = this;
        return {
            html: me.snippets.descriptionMessage,
            margin: '0 0 20 0',
            cls: 'description-text',
            width: 720,
            border: false
        }
    },

    createLoginPanel: function () {
        var me = this;

        return Ext.create('Shopware.apps.PluginManager.view.account.Login', {
            callback: me.callback,
            margin: '0 25 0 0'
        });
    },

    createRegisterPanel: function () {
        var me = this;

        return Ext.create('Shopware.apps.PluginManager.view.account.Register', {
            cls: 'plugin-manager-login-window plugin-manager-register-form',
            callback: me.callback,
            margin: '0 0 0 15'
        });
    }

});
//<?php }} ?>