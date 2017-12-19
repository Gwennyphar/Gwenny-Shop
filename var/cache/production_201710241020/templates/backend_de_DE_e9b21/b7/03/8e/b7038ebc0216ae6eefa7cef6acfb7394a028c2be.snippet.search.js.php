<?php /* Smarty version Smarty-3.1.12, created on 2017-12-19 01:10:53
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/performance/view/tabs/settings/fields/search.js" */ ?>
<?php /*%%SmartyHeaderCode:14332123105a38590d828d85-32226316%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7038ebc0216ae6eefa7cef6acfb7394a028c2be' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/performance/view/tabs/settings/fields/search.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14332123105a38590d828d85-32226316',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a38590d8705b9_25784777',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a38590d8705b9_25784777')) {function content_5a38590d8705b9_25784777($_smarty_tpl) {?>/**
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
 * SEO fieldSet for
 */
//
Ext.define('Shopware.apps.Performance.view.tabs.settings.fields.Search', {
    /**
     * Define that the base field set is an extension of the "Base" fieldSet
     * @string
     */
    extend:'Shopware.apps.Performance.view.tabs.settings.fields.Base',

    /**
     * List of short aliases for class names. Most useful for defining xtypes for widgets.
     * @string
     */
    alias:'widget.performance-tabs-settings-search',

    /**
     * Description of the fieldSet
     */
    caption: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'tabs'/'settings'/'search'/'title','default'=>'Search','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'settings'/'search'/'title','default'=>'Search','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Suche<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'settings'/'search'/'title','default'=>'Search','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
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
                defaults: me.defaults,
                title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'fieldset'/'information','default'=>'Information','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'information','default'=>'Information','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Information<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'information','default'=>'Information','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                items: [
                    me.createDescriptionContainer("<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'fieldset'/'search'/'info','default'=>'Der Such-Index in Shopware wird zeitversetzt aufgebaut. Sie können diesen Prozess an dieser Stelle manuell auslösen und zusätzlich konfigurieren, ob der Such-Index in Echtzeit oder via Cronjob aktualisiert werden soll.','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'search'/'info','default'=>'Der Such-Index in Shopware wird zeitversetzt aufgebaut. Sie können diesen Prozess an dieser Stelle manuell auslösen und zusätzlich konfigurieren, ob der Such-Index in Echtzeit oder via Cronjob aktualisiert werden soll.','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Der Such-Index in Shopware wird zeitversetzt aufgebaut. Du kannst diesen Prozess an dieser Stelle manuell auslösen und zusätzlich konfigurieren, ob der Such-Index in Echtzeit oder via Cronjob aktualisiert werden soll.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'search'/'info','default'=>'Der Such-Index in Shopware wird zeitversetzt aufgebaut. Sie können diesen Prozess an dieser Stelle manuell auslösen und zusätzlich konfigurieren, ob der Such-Index in Echtzeit oder via Cronjob aktualisiert werden soll.','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
")
                ]},
            {
                xtype: 'fieldset',
                defaults: me.defaults,
                title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'fieldset'/'configuration','default'=>'Configuration','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'configuration','default'=>'Configuration','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Configuration<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'configuration','default'=>'Configuration','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                items: [
                    {
                        xtype: 'performance-multi-request-button',
                        event: 'search',
                        title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'fieldset'/'search'/'buildIndex','default'=>'Rebuild search index','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'search'/'buildIndex','default'=>'Rebuild search index','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Such-Index neu aufbauen.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'search'/'buildIndex','default'=>'Rebuild search index','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
                    },
                    {
                        fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'fieldset'/'refreshStrategy','default'=>'Refresh strategy','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'refreshStrategy','default'=>'Refresh strategy','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Aktualisierungsstrategie<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'refreshStrategy','default'=>'Refresh strategy','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                        helpText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'fieldset'/'refreshStrategy'/'help','default'=>'How do you want to refresh this information?<br><br>\' +
                                \'<b>Manually</b>: Refresh by clicking the *build Index* button<br>\' +
                                \'<b>CronJob</b>: Refresh with a CronJob (recommended)<br>\' +
                                \'<b>Live</b>: Refresh in live operation (not recommended for large shops)','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'refreshStrategy'/'help','default'=>'How do you want to refresh this information?<br><br>\' +
                                \'<b>Manually</b>: Refresh by clicking the *build Index* button<br>\' +
                                \'<b>CronJob</b>: Refresh with a CronJob (recommended)<br>\' +
                                \'<b>Live</b>: Refresh in live operation (not recommended for large shops)','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Wie möchtest du diese Informationen aktualisieren?<br><br><b>Manuell</b>: Aktualisierung über den Button *Index neu aufbauen*<br><b>Cronjob</b>: Aktualisierung über einen Cronjob (empfohlen)<br><b>Live</b>: Live-Aktualisierung (nicht empfohlen)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'refreshStrategy'/'help','default'=>'How do you want to refresh this information?<br><br>\' +
                                \'<b>Manually</b>: Refresh by clicking the *build Index* button<br>\' +
                                \'<b>CronJob</b>: Refresh with a CronJob (recommended)<br>\' +
                                \'<b>Live</b>: Refresh in live operation (not recommended for large shops)','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                        name: 'search[searchRefreshStrategy]',
                        xtype: 'combo',
                        valueField: 'id',
                        editable: false,
                        displayField: 'name',
                        store: Ext.create('Ext.data.Store', {
                            fields: [
                                { name: 'id', type: 'int' },
                                { name: 'name', type: 'string' }
                            ],
                            data: [
                                { id: 1, name: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'fieldset'/'refreshStrategy'/'manual','default'=>'Manually','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'refreshStrategy'/'manual','default'=>'Manually','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Manuell<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'refreshStrategy'/'manual','default'=>'Manually','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
' },
                                { id: 2, name: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'fieldset'/'refreshStrategy'/'cronJob','default'=>'CronJob','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'refreshStrategy'/'cronJob','default'=>'CronJob','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Cronjob<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'refreshStrategy'/'cronJob','default'=>'CronJob','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
' },
                                { id: 3, name: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'fieldset'/'refreshStrategy'/'live','default'=>'Live','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'refreshStrategy'/'live','default'=>'Live','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Live<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'refreshStrategy'/'live','default'=>'Live','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
' }
                            ]
                        })
                    },
                    {
                        fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'fieldset'/'search'/'cache_time','default'=>'Cache time','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'search'/'cache_time','default'=>'Cache time','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Cache-Zeit<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'search'/'cache_time','default'=>'Cache time','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                        name: 'search[cachesearch]',
                        xtype: 'textfield',
                        minValue: 3600
                    },
                    {
                        fieldLabel:  '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'fieldset'/'search'/'trace_search','default'=>'Trace search requests','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'search'/'trace_search','default'=>'Trace search requests','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Suchanfragen protokollieren<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'search'/'trace_search','default'=>'Trace search requests','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                        name: 'search[traceSearch]',
                        xtype: 'checkbox',
                        uncheckedValue: false,
                        inputValue: true
                    },
                    {
                        fieldLabel:  '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'fieldset'/'search'/'last_update','default'=>'Last index update','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'search'/'last_update','default'=>'Last index update','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Letzte Index-Aktualisierung<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'search'/'last_update','default'=>'Last index update','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                        name: 'search[fuzzysearchlastupdate]',
                        xtype: 'displayfield',
                        renderer: function(value) {
                            if (typeof value === Ext.undefined ) {
                                return value;
                            }
                            return Ext.util.Format.date(value) + ' ' + Ext.util.Format.date(value, timeFormat);
                        }
                    }
                ]
            }
        ];
    }

});
//
<?php }} ?>