<?php /* Smarty version Smarty-3.1.12, created on 2017-12-19 01:10:53
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/performance/controller/direct.js" */ ?>
<?php /*%%SmartyHeaderCode:2686225485a38590db67f25-98576321%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76eb1ec9b3e0cf76394fe944ff43c38f462f709c' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/performance/controller/direct.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2686225485a38590db67f25-98576321',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a38590db93a61_00703939',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a38590db93a61_00703939')) {function content_5a38590db93a61_00703939($_smarty_tpl) {?>/**
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
 * @package    Shopware_Cache
 * @subpackage Cache
 * @copyright  Copyright (c) shopware AG (http://www.shopware.de)
 * @version    $Id$
 * @author shopware AG
 */

//

//
Ext.define('Shopware.apps.Performance.controller.Direct', {

    extend: 'Enlight.app.Controller',

    infoTitle: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'direct'/'message_title','default'=>'Shop cache','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'direct'/'message_title','default'=>'Shop cache','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Shopcache<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'direct'/'message_title','default'=>'Shop cache','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

    infoMessages: {
        'Template': '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'direct'/'messages'/'template','default'=>'Template cache has been cleared','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'direct'/'messages'/'template','default'=>'Template cache has been cleared','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Template-Cache wurde geleert<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'direct'/'messages'/'template','default'=>'Template cache has been cleared','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        'Config': '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'direct'/'messages'/'config','default'=>'Shop cache has been cleared','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'direct'/'messages'/'config','default'=>'Shop cache has been cleared','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Shopcache wurde geleert<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'direct'/'messages'/'config','default'=>'Shop cache has been cleared','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        'Frontend': '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'direct'/'messages'/'frontend','default'=>'Article+category cache has been cleared','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'direct'/'messages'/'frontend','default'=>'Article+category cache has been cleared','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Artikel + Kategorie-Cache wurde geleert<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'direct'/'messages'/'frontend','default'=>'Article+category cache has been cleared','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        'Proxy': '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'direct'/'messages'/'proxy','default'=>'Proxy/Model cache has been cleared','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'direct'/'messages'/'proxy','default'=>'Proxy/Model cache has been cleared','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Proxy/Model-Cache wurde geleert<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'direct'/'messages'/'proxy','default'=>'Proxy/Model cache has been cleared','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        'NoPermission': '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'direct'/'messages'/'no_permission','default'=>'You do not have the permission to clear the shop cache','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'direct'/'messages'/'no_permission','default'=>'You do not have the permission to clear the shop cache','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Du bist nicht dazu berechtigt den Shopcache zu leeren<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'direct'/'messages'/'no_permission','default'=>'You do not have the permission to clear the shop cache','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },

    /**
     * Method which will be used for the quick buttons. The method should be called
     * directly.
     *
     * After the request is done, the subApplication will be destroyed.
     * @returns { Void }
     */
    directClearCache: function() {
        var me = this,
            action = me.subApplication.action;

        /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'clear'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if (!$_tmp1){?>*/
        Shopware.Notification.createGrowlMessage(
            me.infoTitle,
            me.infoMessages.NoPermission,
            me.infoTitle
        );
        /*<?php }else{ ?>*/
        Ext.Ajax.request({
            url: '<?php echo '/backend/Cache/clearDirect';?>?cache=' + action,
            success: function() {
                Shopware.Notification.createGrowlMessage(
                    me.infoTitle,
                    me.infoMessages[action],
                    me.infoTitle
                );

                me.subApplication.handleSubAppDestroy(null);
            }
        });
        /*<?php }?>*/
    }
});
//
<?php }} ?>