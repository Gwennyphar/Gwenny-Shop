<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 02:29:38
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/article/controller/category.js" */ ?>
<?php /*%%SmartyHeaderCode:7511638285a371a0221f501-84547007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53d4619cfdd146003b92609641f26c438808c85e' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/article/controller/category.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7511638285a371a0221f501-84547007',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a371a0223f9d5_92849533',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a371a0223f9d5_92849533')) {function content_5a371a0223f9d5_92849533($_smarty_tpl) {?>/**
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
 * @package    Article
 * @subpackage Category
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Controller - Article backend module
 *
 * todo@all: Documentation
 */
//
//
Ext.define('Shopware.apps.Article.controller.Category', {
    /**
     * The parent class that this class extends.
     * @string
     */
    extend:'Ext.app.Controller',

    /**
     * Contains all snippets for the component.
     * @object
     */
    snippets: {
        alreadyExist: {
            title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'category'/'already_exist'/'title','default'=>'Failed','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'category'/'already_exist'/'title','default'=>'Failed','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Fehlgeschlagen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'category'/'already_exist'/'title','default'=>'Failed','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            message: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'category'/'already_exist'/'message','default'=>'Category: [0] has already been assigned','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'category'/'already_exist'/'message','default'=>'Category: [0] has already been assigned','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Kategorie: [0] ist bereits zugewiesen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'category'/'already_exist'/'message','default'=>'Category: [0] has already been assigned','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            caller: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'category'/'already_exist'/'caller','default'=>'Article','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'category'/'already_exist'/'caller','default'=>'Article','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Artikel<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'category'/'already_exist'/'caller','default'=>'Article','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        }
    },
    /**
     * Set component references for easy access
     * @array
     */
    refs:[
        { ref:'categoryTree', selector:'article-detail-window article-category-drop-zone' },
        { ref:'categoryDropZone', selector:'article-detail-window article-category-tree' },
        { ref:'categoryGrid', selector:'article-detail-window article-category-list' }
    ],

    /**
     * A template method that is called when your application boots.
     * It is called before the Application's launch function is executed
     * so gives a hook point to run any code before your Viewport is created.
     *
     * @params orderId - The main controller can handle a orderId parameter to open the order detail page directly
     * @return void
     */
    init:function () {
        var me = this;

        me.control({
            'article-detail-window article-category-drop-zone': {
                addCategories: me.onAddCategory
            },
            'article-detail-window article-category-list': {
                removeCategories: me.onRemoveCategories
            },
            'article-detail-window article-category-tree': {
                addCategory: me.onAddCategory
            }
        });
        me.callParent(arguments);
    },

    /**
     * Event listener function which fired when the user want to remove an assigned category.
     * The event can be fired over the grid action column, or over the toolbar button
     * on the category tab.
     *
     * @param array categories
     * @return boolean
     */
    onRemoveCategories: function(categories) {
        var me = this,
            grid = me.getCategoryGrid(),
            gridStore = grid.getStore();

        if (!Ext.isArray(categories)) {
            return true;
        }
        gridStore.remove(categories);
        return true;
    },

    /**
     * Event listener function which fired when the user want to add a category over drag and drop
     * in the category tab.
     *
     * @param categories
     */
    onAddCategory: function(categories) {
        var me = this, message,
            grid = me.getCategoryGrid(),
            gridStore = grid.getStore();

        if (!Ext.isArray(categories)) {
            return true;
        }

        Ext.each(categories, function(category) {
            if (category instanceof Ext.data.Model && category.get('allowDrag')) {
                if (!gridStore.getById(category.get('id'))) {
                    gridStore.add(category);
                } else {
                    message = Ext.String.format(me.snippets.alreadyExist.message, category.get('name'));
                    Shopware.Notification.createGrowlMessage(me.snippets.alreadyExist.title, message, me.snippets.alreadyExist.caller);
                }
            }
        });
    }

});
//
<?php }} ?>