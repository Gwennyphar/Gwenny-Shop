<?php /* Smarty version Smarty-3.1.12, created on 2017-12-19 22:51:04
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/view/list/connect_introduction_page.js" */ ?>
<?php /*%%SmartyHeaderCode:9092090735a3989c84aa018-10679790%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b55b4d08b934129876d189cd43297186dae7477' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/view/list/connect_introduction_page.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9092090735a3989c84aa018-10679790',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a3989c84bb582_44274614',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3989c84bb582_44274614')) {function content_5a3989c84bb582_44274614($_smarty_tpl) {?>/**
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
 * @subpackage List
 * @version    $Id$
 * @author shopware AG
 */
//

//
Ext.define('Shopware.apps.PluginManager.view.list.ConnectIntroductionPage', {
    extend: 'Ext.panel.Panel',
    alias: 'widget.plugin-manager-connect-introduction-page',
    layout: 'fit',
    border: false,
    bodyCls: 'plugin-manager-listing-page',

    initComponent: function() {
        var me = this,
            url = Ext.String.format('//cdn.shopware.de/connect_introducing/index_[0].html', Ext.userLanguage !== 'de' ? 'en' : Ext.userLanguage);

        me.items = [{
            xtype: 'container',
            html: '<iframe src="' + url + '" width="100%" height="100%"></iframe>'
        }];
        me.dockedItems = me.buildDockedItems();

        me.callParent(arguments);
    },

    buildDockedItems: function() {
        var me = this;

        me.bottomToolbar = Ext.create('Ext.toolbar.Toolbar', {
            dock: 'bottom',
            items: [{
                xtype: 'button',
                cls: 'secondary',
                text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"connect_introduction/remove_connect",'namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"connect_introduction/remove_connect",'namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Connect entfernen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"connect_introduction/remove_connect",'namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                handler: function() {
                    me.fireEvent('connect-introduction-remove');
                }
            }, '->', {
                xtype: 'button',
                cls: 'primary',
                text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"connect_introduction/connect_now",'namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"connect_introduction/connect_now",'namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Jetzt Connecten<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"connect_introduction/connect_now",'namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                handler: function() {
                    me.fireEvent('connect-introduction-install');
                }
            }]
        });

        return [ me.bottomToolbar ];
    }
});
//<?php }} ?>