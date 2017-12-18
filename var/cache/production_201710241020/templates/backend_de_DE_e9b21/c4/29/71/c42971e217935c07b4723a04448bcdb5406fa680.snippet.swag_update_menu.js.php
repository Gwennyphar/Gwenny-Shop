<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 02:29:31
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/engine/Shopware/Plugins/Default/Backend/SwagUpdate/Views/backend/index/view/swag_update_menu.js" */ ?>
<?php /*%%SmartyHeaderCode:4826222925a3719fbe23119-00636402%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c42971e217935c07b4723a04448bcdb5406fa680' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/engine/Shopware/Plugins/Default/Backend/SwagUpdate/Views/backend/index/view/swag_update_menu.js',
      1 => 1508840484,
      2 => 'file',
    ),
    'd6e4251e65f85fbf766def7141ff89aedd84175a' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/index/store/news_local.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4826222925a3719fbe23119-00636402',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a3719fbe65ef8_70182916',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3719fbe65ef8_70182916')) {function content_5a3719fbe65ef8_70182916($_smarty_tpl) {?>/**
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

//
Ext.define('Shopware.apps.Index.store.NewsLocal', {
    extend: 'Ext.data.Store',
    model: 'Shopware.apps.Index.model.News',
    autoLoad: true,
    proxy: {
        type: 'localstorage',
        id: 'widget-settings-shopware-news-cache-<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('namespace'=>'backend/index/store/news_local','name'=>'script'/'ext'/'lang','default'=>'en_GB')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'backend/index/store/news_local','name'=>'script'/'ext'/'lang','default'=>'en_GB'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
de<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'backend/index/store/news_local','name'=>'script'/'ext'/'lang','default'=>'en_GB'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    }
});
//
<?php }} ?>