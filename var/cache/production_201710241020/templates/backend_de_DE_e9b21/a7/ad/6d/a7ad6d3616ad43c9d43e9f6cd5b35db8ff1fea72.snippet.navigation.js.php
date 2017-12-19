<?php /* Smarty version Smarty-3.1.12, created on 2017-12-19 01:10:53
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/performance/view/tabs/settings/navigation.js" */ ?>
<?php /*%%SmartyHeaderCode:8823840125a38590d6f8833-50276442%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7ad6d3616ad43c9d43e9f6cd5b35db8ff1fea72' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/performance/view/tabs/settings/navigation.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8823840125a38590d6f8833-50276442',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a38590d73a612_15887712',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a38590d73a612_15887712')) {function content_5a38590d73a612_15887712($_smarty_tpl) {?>/**
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
 * @package    Performance
 * @subpackage View
 * @version    $Id$
 * @author shopware AG
 */

//

//
Ext.define('Shopware.apps.Performance.view.tabs.settings.Navigation', {
    extend: 'Ext.tree.Panel',
    alias: 'widget.performance-tabs-settings-navigation',
    rootVisible: false,
    title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'tabs'/'settings'/'title','default'=>'Settings','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'settings'/'title','default'=>'Settings','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Einstellungen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'settings'/'title','default'=>'Settings','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

    /**
     * Mark the navigation bar as not collapsible
     */
    collapsed: false,
    collapsible: false,

    width: 200,
    expanded: true,
    useArrows: true,
    displayField: 'text',

    data: {
        expanded: true,
        children: [{
            text: "<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'navigation'/'general','default'=>'General','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'navigation'/'general','default'=>'General','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Allgemein<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'navigation'/'general','default'=>'General','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
",
            expanded: true,
            children: [
            {
                text: "<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'navigation'/'home','default'=>'Performance checks','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'navigation'/'home','default'=>'Performance checks','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Performance checks<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'navigation'/'home','default'=>'Performance checks','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
",
                leaf: true,
                internalName: 'performance-tabs-settings-home'
            },
            {
                text: "<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'navigation'/'cache','default'=>'HTTP Cache','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'navigation'/'cache','default'=>'HTTP Cache','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
HTTP-Cache<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'navigation'/'cache','default'=>'HTTP Cache','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
",
                leaf: true,
                internalName: 'performance-tabs-settings-http-cache'
            }, {
                text: "<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'navigation'/'theme_cache','default'=>'Theme cache','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'navigation'/'theme_cache','default'=>'Theme cache','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Themes<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'navigation'/'theme_cache','default'=>'Theme cache','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
",
                leaf: true,
                internalName: 'performance-tabs-settings-theme-cache'
            }, {
                text: "<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'navigation'/'seo','default'=>'SEO','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'navigation'/'seo','default'=>'SEO','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
SEO<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'navigation'/'seo','default'=>'SEO','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
",
                leaf: true,
                internalName: 'performance-tabs-settings-seo'
            }, {
                text: "<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'navigation'/'search','default'=>'Search','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'navigation'/'search','default'=>'Search','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Suche<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'navigation'/'search','default'=>'Search','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
",
                leaf: true,
                internalName: 'performance-tabs-settings-search'
            }, {
                text: "<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'navigation'/'categories','default'=>'Categories','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'navigation'/'categories','default'=>'Categories','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Kategorien<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'navigation'/'categories','default'=>'Categories','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
",
                leaf: true,
                internalName: 'performance-tabs-settings-categories'
            }, {
                text: "<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'navigation'/'filter','default'=>'Filters','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'navigation'/'filter','default'=>'Filters','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Filter<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'navigation'/'filter','default'=>'Filters','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
",
                leaf: true,
                internalName: 'performance-tabs-settings-filter'
            }, {
                text: "<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'navigation'/'various','default'=>'Various','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'navigation'/'various','default'=>'Various','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Verschiedenes<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'navigation'/'various','default'=>'Various','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
",
                leaf: true,
                internalName: 'performance-tabs-settings-various'
            }]
        }, {
            text: "<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'navigation'/'crossselling','default'=>'Marketing','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'navigation'/'crossselling','default'=>'Marketing','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Marketing<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'navigation'/'crossselling','default'=>'Marketing','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
",
            expanded: true,
            children: [{
                text: "<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'navigation'/'topseller','default'=>'TopSeller','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'navigation'/'topseller','default'=>'TopSeller','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Topseller<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'navigation'/'topseller','default'=>'TopSeller','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
",
                name: '21',
                leaf: true,
                internalName: 'performance-tabs-settings-topseller'
            }, {
                text: "<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'navigation'/'otherCustomers','default'=>'Empfehlungsmarketing','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'navigation'/'otherCustomers','default'=>'Empfehlungsmarketing','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Empfehlungsmarketing<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'navigation'/'otherCustomers','default'=>'Empfehlungsmarketing','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
",
                leaf: true,
                internalName: 'performance-tabs-settings-customers'
            }]
        }]
    },

    /*
     * The internalName of each item is the xtype of the corresponding fieldset
     *
     * If internalName is empty or has no fieldSet associated, all fieldSets will be hidden
     */
    listeners: {
        itemclick: function(tree, record, item, index, e, eOpts) {
            var internalName = record.raw.internalName;
            this.fireEvent('itemClicked', internalName)
        },
        beforeitemclick: function(tree, record, item, index, e, eOpts) {
            if (record.childNodes.length > 0) {
                return false;
            }
            return true;
        }

    },

    /*
     * Initialize the component and define the event fired
     */
    initComponent: function() {
        var me = this;

        me.root = Ext.clone(me.data);
        me.addEvents('itemClicked');

        me.callParent(arguments);
    }

});
//
<?php }} ?>