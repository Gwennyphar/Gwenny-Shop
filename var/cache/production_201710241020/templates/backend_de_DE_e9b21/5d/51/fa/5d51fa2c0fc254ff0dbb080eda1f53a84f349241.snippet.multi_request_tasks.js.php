<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 19:34:50
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/performance/view/main/multi_request_tasks.js" */ ?>
<?php /*%%SmartyHeaderCode:3187367935a380a4abaede8-29446505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d51fa2c0fc254ff0dbb080eda1f53a84f349241' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/performance/view/main/multi_request_tasks.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3187367935a380a4abaede8-29446505',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a380a4ac74fc3_48290330',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a380a4ac74fc3_48290330')) {function content_5a380a4ac74fc3_48290330($_smarty_tpl) {?>/**
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

//
Ext.define('Shopware.apps.Performance.view.main.MultiRequestTasks', {

    /**
     * Define that the order main window is an extension of the enlight application window
     * @string
     */
    extend: 'Enlight.app.Window',

    /**
     * List of short aliases for class names. Most useful for defining xtypes for widgets.
     * @string
     */
    alias: 'widget.performance-main-multi-request-tasks',

    /**
     * If the modal property is set to true, the user can't change the window focus to another window.
     * @boolean
     */
    modal: true,

    /**
     * Disable the close icon in the window header
     * @boolean
     */
    closable: false,

    /**
     * Disable window resize
     * @boolean
     */
    resizable: false,

    /**
     * Disables the maximize button in the window header
     * @boolean
     */
    maximizable: false,

    /**
     * Remove the height property of Enlight.app.Window
     * @null
     */
    height: null,

    /**
     * Set width of the window
     * @integer
     */
    width: 360,

    /**
     * Disables the minimize button in the window header
     * @boolean
     */
    minimizable: false,

    seo: {
        article: {
            initialText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'listing'/'articles','default'=>'Article URLs','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'listing'/'articles','default'=>'Article URLs','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Artikel-URLs<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'listing'/'articles','default'=>'Article URLs','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            progressText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'progress'/'articles','default'=>'[0] of [1] article urls','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'progress'/'articles','default'=>'[0] of [1] article urls','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
[0] von [1] Artikel-URLs<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'progress'/'articles','default'=>'[0] of [1] article urls','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            requestUrl: '<?php echo '/backend/Seo/seoArticle';?>'
        },
        category: {
            initialText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'listing'/'category','default'=>'Category URLs','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'listing'/'category','default'=>'Category URLs','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Kategorie-URLs<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'listing'/'category','default'=>'Category URLs','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            progressText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'progress'/'category','default'=>'[0] of [1] category urls','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'progress'/'category','default'=>'[0] of [1] category urls','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
[0] von [1] Kategorie-URLs<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'progress'/'category','default'=>'[0] of [1] category urls','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            requestUrl: '<?php echo '/backend/Seo/seoCategory';?>'
        },
        emotion: {
            initialText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'listing'/'emotion','default'=>'Emotion URLs','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'listing'/'emotion','default'=>'Emotion URLs','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Einkaufswelten-URLs<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'listing'/'emotion','default'=>'Emotion URLs','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            progressText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'progress'/'emotion','default'=>'[0] of [1] emotion urls','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'progress'/'emotion','default'=>'[0] of [1] emotion urls','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
[0] von [1] Einkaufswelten-URLs<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'progress'/'emotion','default'=>'[0] of [1] emotion urls','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            requestUrl: '<?php echo '/backend/Seo/seoEmotion';?>'
        },
        blog: {
            initialText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'listing'/'blog','default'=>'Blog URLs','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'listing'/'blog','default'=>'Blog URLs','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Blog-URLs<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'listing'/'blog','default'=>'Blog URLs','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            progressText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'progress'/'blog','default'=>'[0] of [1] blog urls','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'progress'/'blog','default'=>'[0] of [1] blog urls','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
[0] von [1] Blog-URLs<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'progress'/'blog','default'=>'[0] of [1] blog urls','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            requestUrl: '<?php echo '/backend/Seo/seoBlog';?>'
        },
        static: {
            initialText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'listing'/'static','default'=>'Static URLs','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'listing'/'static','default'=>'Static URLs','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Statische URLs<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'listing'/'static','default'=>'Static URLs','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            progressText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'progress'/'static','default'=>'[0] of [1] static urls','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'progress'/'static','default'=>'[0] of [1] static urls','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
[0] von [1] Statische URLs<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'progress'/'static','default'=>'[0] of [1] static urls','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            requestUrl: '<?php echo '/backend/Seo/seoStatic';?>'
        },
        content: {
            initialText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'listing'/'content','default'=>'Content URLs','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'listing'/'content','default'=>'Content URLs','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Shopseiten-URLs<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'listing'/'content','default'=>'Content URLs','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            progressText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'progress'/'content','default'=>'[0] of [1] content urls','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'progress'/'content','default'=>'[0] of [1] content urls','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
[0] von [1] Shopseiten-URLs<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'progress'/'content','default'=>'[0] of [1] content urls','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            requestUrl: '<?php echo '/backend/Seo/seoContent';?>'
        },
        supplier: {
            initialText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'listing'/'supplier','default'=>'Supplier URLs','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'listing'/'supplier','default'=>'Supplier URLs','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Hersteller-URLs<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'listing'/'supplier','default'=>'Supplier URLs','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            progressText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'progress'/'supplier','default'=>'[0] of [1] supplier urls','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'progress'/'supplier','default'=>'[0] of [1] supplier urls','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
[0] von [1] Hersteller-URLs<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'progress'/'supplier','default'=>'[0] of [1] supplier urls','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            requestUrl: '<?php echo '/backend/Seo/seoSupplier';?>'
        }
    },

    httpCache: {
        article: {
            initialText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'progress'/'initialArticles','default'=>'Article URLs...','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'progress'/'initialArticles','default'=>'Article URLs...','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Artikel URLs...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'progress'/'initialArticles','default'=>'Article URLs...','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            progressText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'progress'/'articles','default'=>'[0] of [1] article URLs','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'progress'/'articles','default'=>'[0] of [1] article URLs','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
[0] von [1] Artikel-URLs<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'progress'/'articles','default'=>'[0] of [1] article URLs','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            requestUrl: '<?php echo '/backend/Performance/warmUpCache/resource/article';?>'
        },
        category: {
            initialText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'progress'/'initialCategory','default'=>'Category URLs...','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'progress'/'initialCategory','default'=>'Category URLs...','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Kategorie URLs...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'progress'/'initialCategory','default'=>'Category URLs...','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            progressText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'progress'/'category','default'=>'[0] of [1] category URLs','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'progress'/'category','default'=>'[0] of [1] category URLs','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
[0] von [1] Kategorie-URLs<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'progress'/'category','default'=>'[0] of [1] category URLs','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            requestUrl: '<?php echo '/backend/Performance/warmUpCache/resource/category';?>'
        },
        blog: {
            initialText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'progress'/'initialBlog','default'=>'Blog URLs...','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'progress'/'initialBlog','default'=>'Blog URLs...','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Blog URLs...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'progress'/'initialBlog','default'=>'Blog URLs...','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            progressText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'progress'/'blog','default'=>'[0] of [1] blog URLs','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'progress'/'blog','default'=>'[0] of [1] blog URLs','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
[0] von [1] Blog-URLs<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'progress'/'blog','default'=>'[0] of [1] blog URLs','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            requestUrl: '<?php echo '/backend/Performance/warmUpCache/resource/blog';?>'
        },
        static: {
            initialText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'progress'/'initialStatic','default'=>'Static URLs...','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'progress'/'initialStatic','default'=>'Static URLs...','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Statische URLs...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'progress'/'initialStatic','default'=>'Static URLs...','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            progressText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'progress'/'httpCacheWarmer'/'static','default'=>'[0] of [1] static URLs','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'progress'/'httpCacheWarmer'/'static','default'=>'[0] of [1] static URLs','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
[0] von [1] Statische URLs<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'progress'/'httpCacheWarmer'/'static','default'=>'[0] of [1] static URLs','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            requestUrl: '<?php echo '/backend/Performance/warmUpCache/resource/static';?>'
        },
        supplier: {
            initialText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'progress'/'initialSupplier','default'=>'Supplier URLs...','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'progress'/'initialSupplier','default'=>'Supplier URLs...','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Hersteller URLs...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'progress'/'initialSupplier','default'=>'Supplier URLs...','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            progressText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'progress'/'supplier','default'=>'[0] of [1] supplier URLs','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'progress'/'supplier','default'=>'[0] of [1] supplier URLs','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
[0] von [1] Hersteller-URLs<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'progress'/'supplier','default'=>'[0] of [1] supplier URLs','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            requestUrl: '<?php echo '/backend/Performance/warmUpCache/resource/supplier';?>'
        }
    },

    /**
     * Contains all snippets for the component
     * @object
     */
    snippets: {
        cancel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'progress'/'cancel','default'=>'Cancel process','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'progress'/'cancel','default'=>'Cancel process','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Vorgang abbrechen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'progress'/'cancel','default'=>'Cancel process','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        start: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'progress'/'start','default'=>'Start process','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'progress'/'start','default'=>'Start process','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Vorgang starten<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'progress'/'start','default'=>'Start process','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        close: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'progress'/'close','default'=>'Close window','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'progress'/'close','default'=>'Close window','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Fenster schließen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'progress'/'close','default'=>'Close window','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },

    batchSize: 50,

    currentType: 'seo',

    /**
     * The initComponent template method is an important initialization step for a Component.
     * It is intended to be implemented by each subclass of Ext.Component to provide any needed constructor logic.
     * The initComponent method of the class being created is called first,
     * with each initComponent method up the hierarchy to Ext.Component being called thereafter.
     * This makes it easy to implement and, if needed, override the constructor logic of the Component at any step in the hierarchy.
     * The initComponent method must contain a call to callParent in order to ensure that the parent class' initComponent method is also called.
     *
     * @return void
     */
    initComponent: function () {
        var me = this;
        me.registerEvents();

        me.items = [{
            xtype: 'panel',
            unstyled: true,
            bodyPadding: 10,
            layout: 'anchor',
            defaults: {
                anchor: '100%'
            },
            items: me.createItems()
        }];

        me.dockedItems = [{
            xtype: 'toolbar',
            items: me.createButtons(),
            ui: 'shopware-ui',
            dock: 'bottom'
        }];

        me.callParent(arguments);
    },

    /**
     * Helper function to create the window items.
     */
    createItems: function() {
        var me = this;

        if (me.currentType === 'seo') {
            return me.createSeoItems();
        } else if (me.currentType === 'httpCacheWarmer') {
            return me.createHttpCacheWarmerItems();
        } else {
            return me.createSearchIndexItems();
        }
    },

    /**
     * Helper function to create the window items for the seo index
     * @returns Array
     */
    createSeoItems: function() {
        var me = this,
            items = [];

        me.iterateConfig('seo', function(err, config, configName) {
            if (err) {
                throw err;
            }

            me[configName + 'Bar'] = me.createProgressBar(configName, config.initialText);
            items.push(me[configName + 'Bar']);
        });

        return [
            me.createShopCombo('seo'),
            {
                xtype: 'container',
                padding: '20 0',
                items: items
            },
            me.createBatchSizeCombo()
        ];
    },

    /**
     * Helper function to create the window items for the seo index
     * @returns Array
     */
    createHttpCacheWarmerItems: function() {
        var me = this,
            items = [];

        me.iterateConfig('httpCache', function(err, config, configName) {
            if (err) {
                throw err;
            }

            me[configName + 'Bar'] = me.createProgressBar(configName, config.initialText);
            items.push(me[configName + 'Bar']);
        });

        return [
            me.createShopCombo('httpCache'),
            {
                xtype: 'container',
                padding: '20 0',
                items: items
            },
            me.createBatchSizeCombo()
        ];
    },

    /**
     * Creates the shop combo box for the multi request window
     * for the seo and search index generation.
     */
    createShopCombo: function(taskName) {
        var me = this;

        me.shopCombo = Ext.create('Ext.form.field.ComboBox', {
            forceSelection: true,
            store: Ext.create('Shopware.apps.Performance.store.Shop').load(),
            valueField: 'id',
            displayField: 'name',
            queryMode: 'remote',
            fieldLabel: 'Shop',
            editable: false,
            listeners: {
                select: function() {
                    me.fireEvent('onShopSelected', me, this.getValue(), taskName);
                }
            }
        });

        return me.shopCombo;
    },

    /**
     * Helper function to create the window items for the search index
     */
    createSearchIndexItems: function() {

    },

    /**
     * Registers additional component events.
     */
    registerEvents: function() {
        this.addEvents(
            'onShopSelected',
            'multiRequestTasksCancelProcess',
            'startSeoIndex'
        );
    },

    createBatchSizeCombo: function() {
        var me = this;

        me.batchSizeCombo = Ext.create('Ext.form.ComboBox', {
            fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'multi_request'/'batch'/'label','default'=>'Batch size','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'multi_request'/'batch'/'label','default'=>'Batch size','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Stapelgröße<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'multi_request'/'batch'/'label','default'=>'Batch size','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            helpText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'multi_request'/'batch'/'help','default'=>'How many records should be processed per request? Default: 5000','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'multi_request'/'batch'/'help','default'=>'How many records should be processed per request? Default: 5000','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Wieviele Datensätze sollen in einem Request bearbeitet werden?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'multi_request'/'batch'/'help','default'=>'How many records should be processed per request? Default: 5000','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            name: 'batchSize',
            margin: '0 0 10 0',
            allowBlank: false,
            value: me.batchSize,
            editable: true,
            displayField: 'batchSize',
            store: Ext.create('Ext.data.Store', {
                fields: [
                    { name: 'batchSize', type: 'int' }
                ],
                data: [
                    { batchSize: '1' },
                    { batchSize: '5' },
                    { batchSize: '10' },
                    { batchSize: '20' },
                    { batchSize: '30' },
                    { batchSize: '50' },
                    { batchSize: '75' },
                    { batchSize: '100' },
                    { batchSize: '150' },
                    { batchSize: '200' },
                    { batchSize: '250' },
                    { batchSize: '500' },
                    { batchSize: '1000' },
                    { batchSize: '1500' }
                ]
            })
        });

        return me.batchSizeCombo;
    },

    /**
     * Creates the progress which displays the progress status for the document creation.
     */
    createProgressBar: function(name, text) {
        return Ext.create('Ext.ProgressBar', {
            animate: true,
            name: name,
            text: text,
            margin: '0 0 15',
            style: 'border-width: 1px !important;',
            cls: 'left-align'
        });
    },

    /**
     * Creates the cancel button which allows the user to cancel the document creation in the
     * batch window. Event will be handled in the batch controller.
     */
    createStartButton: function() {
        var me = this;

        return Ext.create('Ext.button.Button', {
            text: me.snippets.start,
            cls: 'primary',
            action: 'start',
            disabled: true,
            handler: function() {
                this.hide();
                me.cancelButton.show();
                me.closeButton.disable();
                if (me.currentType === 'seo') {
                    me.fireEvent('startSeoIndex', me);
                } else if (me.currentType === 'httpCacheWarmer') {
                    me.fireEvent('startHttpCacheWarmUp', me);
                }
            }
        });
    },

    /**
     * Creates the cancel button which allows the user to cancel the document creation in the
     * batch window. Event will be handled in the batch controller.
     */
    createCancelButton: function() {
        var me = this;

        return Ext.create('Ext.button.Button', {
            text: me.snippets.cancel,
            cls: 'primary',
            action: 'cancel',
            disabled: false,
            hidden: true,
            handler: function() {
                this.disable();
                me.fireEvent('multiRequestTasksCancelProcess', me);
            }
        });
    },

    /**
     * Creates the close button which allows the user to close the window. The window closing is handled over this
     * button to prevent that the user close the window while the batch process is already working.
     * So the user have to wait until the process are finish or the user can clicks the cancel button.
     * The button will enabled after the batch process are finish or the cancel event are fired and the batch process
     * successfully canceled.
     */
    createCloseButton: function() {
        var me = this;

        return Ext.create('Ext.button.Button', {
            text: me.snippets.close,
            action: 'closeWindow',
            cls: 'secondary',
            handler: function() {
                me.destroy();
            }
        });
    },

    /**
     * Creates the button container for the close and cancel button
     *
     * @return { array }
     */
    createButtons: function() {
        var me = this;

        me.startButton = me.createStartButton();
        me.closeButton = me.createCloseButton();
        me.cancelButton = me.createCancelButton();

        return [
            me.startButton,
            me.cancelButton,
            '->',
            me.closeButton
        ];
    },

    /**
     * Iterates over the seo/httpCache config, depending on the "configName" parameter using the given callback.
     *
     * @param { string } configName
     * @param { function(object, string) } callback
     * @oaram { object } scope
     * @return { boolean }
     */
    iterateConfig: function(configName, callback, scope) {
        scope = scope || this;

        if (!this[configName]) {
            callback.apply(scope, [ new Error(Ext.String.format('Configuration [0] not found', configName)) ]);
            return false;
        }

        for (var key in this[configName]) {
            var config;

            if (!this[configName].hasOwnProperty(key)) {
                continue;
            }

            config = this[configName][key];
            callback.apply(scope, [null, config, key]);
        }

        return true;
    },

    /**
     * Adds a progress bar to the SEO URL generator / HttpCache warmer.
     * Leave param 'target' empty to add the new progress bar to both windows.
     *
     * @param { object } configuration
     * @param { string } name
     * @param { string } [target]
     */
    addProgressBar: function(configuration, name, target) {
        if (!target) {
            this.seo[name] = configuration;
            this.httpCache[name] = configuration;

            return;
        }

        this[target][name] = configuration;
    }
});
//
<?php }} ?>