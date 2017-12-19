<?php /* Smarty version Smarty-3.1.12, created on 2017-12-19 01:10:53
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/performance/view/tabs/settings/fields/topseller.js" */ ?>
<?php /*%%SmartyHeaderCode:6636761705a38590d7c4ab1-56569546%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9534a3a04792399b7f660d4bfd27f56d4f4ffc90' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/performance/view/tabs/settings/fields/topseller.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6636761705a38590d7c4ab1-56569546',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a38590d81e1a7_83682940',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a38590d81e1a7_83682940')) {function content_5a38590d81e1a7_83682940($_smarty_tpl) {?>/**
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
 * ""Shopware" is a registered trademark of shopware AG.
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
Ext.define('Shopware.apps.Performance.view.tabs.settings.fields.Topseller', {
    /**
     * Define that the base field set is an extension of the "Base" fieldSet
     * @string
     */
    extend:'Shopware.apps.Performance.view.tabs.settings.fields.Base',

    /**
     * List of short aliases for class names. Most useful for defining xtypes for widgets.
     * @string
     */
    alias:'widget.performance-tabs-settings-topseller',

    /**
     * Description of the fieldSet
     */
    caption: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'tabs'/'settings'/'topseller'/'title','default'=>'Topseller','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'settings'/'topseller'/'title','default'=>'Topseller','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Topseller<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'settings'/'topseller'/'title','default'=>'Topseller','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
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
                    me.createDescriptionContainer("<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'fieldset'/'topseller'/'info','default'=>'Das Anzeigen der Topseller ist besonders performancelastig, da hierzu eine Vielzahl von Daten ausgewertet werden müssen. Sie sollten in großen Shop-Umngebungen daher den Topseller-Index via Cronjob aktualisieren lassen.','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'topseller'/'info','default'=>'Das Anzeigen der Topseller ist besonders performancelastig, da hierzu eine Vielzahl von Daten ausgewertet werden müssen. Sie sollten in großen Shop-Umngebungen daher den Topseller-Index via Cronjob aktualisieren lassen.','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Das Anzeigen der Topseller ist besonders performancelastig, da hierzu eine Vielzahl von Daten ausgewertet werden müssen. Du solltest in großen Shop-Umgebungen daher den Topseller-Index via Cronjob aktualisieren lassen.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'topseller'/'info','default'=>'Das Anzeigen der Topseller ist besonders performancelastig, da hierzu eine Vielzahl von Daten ausgewertet werden müssen. Sie sollten in großen Shop-Umngebungen daher den Topseller-Index via Cronjob aktualisieren lassen.','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
")
                ]
            },
            {
                xtype: 'fieldset',
                title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'fieldset'/'topseller'/'config','default'=>'Configuration \\\'Topseller\\\'','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'topseller'/'config','default'=>'Configuration \\\'Topseller\\\'','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Konfiguration \'Topseller\'<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'topseller'/'config','default'=>'Configuration \\\'Topseller\\\'','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                defaults: me.defaults,
                items: [
                    {
                        xtype: 'performance-multi-request-button',
                        event: 'topseller',
                        title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'fieldset'/'topseller'/'buildIndex','default'=>'Index neu aufbauen','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'topseller'/'buildIndex','default'=>'Index neu aufbauen','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Index neu aufbauen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'topseller'/'buildIndex','default'=>'Index neu aufbauen','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
                    },
                    {
                        fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'fieldset'/'topseller'/'enable','default'=>'Topseller im Shop anzeigen','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'topseller'/'enable','default'=>'Topseller im Shop anzeigen','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Topseller im Shop anzeigen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'topseller'/'enable','default'=>'Topseller im Shop anzeigen','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                        helpText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'fieldset'/'topseller'/'enable'/'help','default'=>'Do you want to show TopSellers in your shop?','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'topseller'/'enable'/'help','default'=>'Do you want to show TopSellers in your shop?','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Sollen die Topseller Daten in Ihrem Shop angezeigt werden?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'topseller'/'enable'/'help','default'=>'Do you want to show TopSellers in your shop?','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                        name: 'topSeller[topSellerActive]',
                        xtype: 'checkbox',
                        uncheckedValue: false,
                        inputValue: true
                    },
                    {
                        fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'fieldset'/'topseller'/'valid','default'=>'Topseller gültig für [n] Tage','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'topseller'/'valid','default'=>'Topseller gültig für [n] Tage','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Topseller gültig für [n] Tage<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'topseller'/'valid','default'=>'Topseller gültig für [n] Tage','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                        name: 'topSeller[topSellerValidationTime]',
                        xtype: 'numberfield',
                        minValue: 1,
                        maxValue: 365
                    },
                    {
                        fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'fieldset'/'topseller'/'orders','default'=>'Bestellungen der letzten [n] Tage berücksichtigen','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'topseller'/'orders','default'=>'Bestellungen der letzten [n] Tage berücksichtigen','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Bestellungen der letzten [n] Tage berücksichtigen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'topseller'/'orders','default'=>'Bestellungen der letzten [n] Tage berücksichtigen','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                        helpText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'fieldset'/'topseller'/'orders'/'help','default'=>'How many days of orders should be calculated?','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'topseller'/'orders'/'help','default'=>'How many days of orders should be calculated?','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Wie viele Tage sollen bei der Generierung berücksichtigt werden?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'topseller'/'orders'/'help','default'=>'How many days of orders should be calculated?','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                        name: 'topSeller[chartinterval]', // existing value
                        xtype: 'numberfield',
                        minValue: 10
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
                        name: 'topSeller[topSellerRefreshStrategy]',
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
                        fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'fieldset'/'topseller'/'pseudoSales','default'=>'Take pseudo sales into account','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'topseller'/'pseudoSales','default'=>'Take pseudo sales into account','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Pseudo Verkäufe berücksichtigen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'topseller'/'pseudoSales','default'=>'Take pseudo sales into account','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                        name: 'topSeller[topSellerPseudoSales]',
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