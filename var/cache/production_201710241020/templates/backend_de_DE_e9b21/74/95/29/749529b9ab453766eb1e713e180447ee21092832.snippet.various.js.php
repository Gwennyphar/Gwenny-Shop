<?php /* Smarty version Smarty-3.1.12, created on 2017-12-19 01:10:53
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/performance/view/tabs/settings/fields/various.js" */ ?>
<?php /*%%SmartyHeaderCode:20079239975a38590d93d320-20636596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749529b9ab453766eb1e713e180447ee21092832' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/performance/view/tabs/settings/fields/various.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20079239975a38590d93d320-20636596',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a38590d96f3a3_50265514',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a38590d96f3a3_50265514')) {function content_5a38590d96f3a3_50265514($_smarty_tpl) {?>/**
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
 * @package    Customer
 * @subpackage Detail
 * @version    $Id$
 * @author shopware AG
 */

//

/**
 * Categories fieldSet
 */
//
Ext.define('Shopware.apps.Performance.view.tabs.settings.fields.Various', {
    /**
     * Define that the base field set is an extension of the "Base" fieldSet
     * @string
     */
    extend:'Shopware.apps.Performance.view.tabs.settings.fields.Base',

    /**
     * List of short aliases for class names. Most useful for defining xtypes for widgets.
     * @string
     */
    alias:'widget.performance-tabs-settings-various',

    /**
     * Description of the fieldSet
     */
    caption: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'tabs'/'settings'/'various'/'title','default'=>'Various','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'settings'/'various'/'title','default'=>'Various','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Verschiedenes<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'settings'/'various'/'title','default'=>'Various','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

    /**
     * Component event method which is fired when the component
     * is initials. The component is initials when the user
     * want to create a new customer or edit an existing customer
     * @return void
     */
    initComponent:function () {
        var me = this;

        me.items = me.getItems();
        me.callParent(arguments);

    },

    getItems: function() {
        var me = this;

        return [
            {
                xtype: 'fieldset',
                title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'fieldset'/'information','default'=>'Information','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'information','default'=>'Information','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Information<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'information','default'=>'Information','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                defaults: me.defaults,
                items: [
                    me.createDescriptionContainer("<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'fieldset'/'categories'/'info','default'=>'Here you can adjust various settings which impact the performance of item listings.','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'categories'/'info','default'=>'Here you can adjust various settings which impact the performance of item listings.','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Hier kannst du Einstellungen vornehmen, die die Performance der Produkt-Listings betreffen.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'categories'/'info','default'=>'Here you can adjust various settings which impact the performance of item listings.','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
")]
            },
            {
                xtype: 'fieldset',
                title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'fieldset'/'configuration','default'=>'Configuration','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'configuration','default'=>'Configuration','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Configuration<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'configuration','default'=>'Configuration','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                defaults: me.defaults,
                items: [
                    {
                        fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'fieldset'/'various'/'disableStats','default'=>'Deactivates the statistics from Shopware','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'various'/'disableStats','default'=>'Deactivates the statistics from Shopware','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Deaktiviert die Shopware eigenen Statistiken<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'various'/'disableStats','default'=>'Deactivates the statistics from Shopware','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                        helpText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'fieldset'/'various'/'disableStats'/'help','default'=>'Note that the last seen articles will not saved in the database, if this setting is disabled.','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'various'/'disableStats'/'help','default'=>'Note that the last seen articles will not saved in the database, if this setting is disabled.','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Beachte, dass die zuletzt angeschauten Artikel bei deaktivierter Einstellung nicht mehr in der Datenbank gesichert werden.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'various'/'disableStats'/'help','default'=>'Note that the last seen articles will not saved in the database, if this setting is disabled.','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                        name: 'various[disableShopwareStatistics]',
                        xtype: 'checkbox',
                        uncheckedValue: false,
                        inputValue: true
                    },
                    {
                        fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'fieldset'/'various'/'lastArticles','default'=>'Display previously viewed items','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'various'/'lastArticles','default'=>'Display previously viewed items','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Zuletzt angesehene Artikel anzeigen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'various'/'lastArticles','default'=>'Display previously viewed items','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                        name: 'various[LastArticles:lastarticles_show]',
                        xtype: 'checkbox',
                        uncheckedValue: false,
                        inputValue: true
                    },
                    {
                        fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'fieldset'/'various'/'numLastArticles','default'=>'Number of last articles','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'various'/'numLastArticles','default'=>'Number of last articles','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Anzahl zuletzt angesehener Artikel<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'various'/'numLastArticles','default'=>'Number of last articles','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                        name: 'various[LastArticles:lastarticlestoshow]',
                        xtype: 'numberfield',
                        minValue: 1
                    },
                    {
                        fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'fieldset'/'various'/'disableArticleNavigation','default'=>'Disable article navigation of article detail page','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'various'/'disableArticleNavigation','default'=>'Disable article navigation of article detail page','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Artikel Navigation deaktivieren<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'various'/'disableArticleNavigation','default'=>'Disable article navigation of article detail page','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                        helpText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'fieldset'/'various'/'disableArticleNavigation'/'help','default'=>'Disables the left/right arrows on the articles detail page','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'various'/'disableArticleNavigation'/'help','default'=>'Disables the left/right arrows on the articles detail page','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Deaktivieren des Links- und Rechts-Pfeils auf der Artikeldetailseite<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'various'/'disableArticleNavigation'/'help','default'=>'Disables the left/right arrows on the articles detail page','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                        name: 'various[disableArticleNavigation]',
                        xtype: 'checkbox',
                        uncheckedValue: false,
                        inputValue: true
                    }
                ]}
        ];
    }


});
//
<?php }} ?>