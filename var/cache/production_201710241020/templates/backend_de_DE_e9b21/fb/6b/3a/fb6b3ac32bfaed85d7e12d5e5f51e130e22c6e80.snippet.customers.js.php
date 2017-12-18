<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 19:34:51
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/performance/view/tabs/settings/fields/customers.js" */ ?>
<?php /*%%SmartyHeaderCode:18366862675a380a4b22a618-60526638%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb6b3ac32bfaed85d7e12d5e5f51e130e22c6e80' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/performance/view/tabs/settings/fields/customers.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18366862675a380a4b22a618-60526638',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a380a4b28d128_30926594',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a380a4b28d128_30926594')) {function content_5a380a4b28d128_30926594($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Performance.view.tabs.settings.fields.Customers', {
    /**
     * Define that the base field set is an extension of the "Base" fieldSet
     * @string
     */
    extend:'Shopware.apps.Performance.view.tabs.settings.fields.Base',

    /**
     * List of short aliases for class names. Most useful for defining xtypes for widgets.
     * @string
     */
    alias:'widget.performance-tabs-settings-customers',

    /**
     * Description of the fieldSet
     */
    caption: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'tabs'/'settings'/'categories'/'title','default'=>'Categories','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'settings'/'categories'/'title','default'=>'Categories','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Kategorien<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'settings'/'categories'/'title','default'=>'Categories','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
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
                    me.createDescriptionContainer("<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'fieldset'/'customers'/'info','default'=>'Konfigurieren Sie hier in welchen Abständen die Daten für die in Shopware integrierten Recommendation-Funktionen neu erzeugt werden sollen.','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'customers'/'info','default'=>'Konfigurieren Sie hier in welchen Abständen die Daten für die in Shopware integrierten Recommendation-Funktionen neu erzeugt werden sollen.','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Konfiguriere hier in welchen Abständen die Daten für die in Shopware integrierten Empfehlungs-Funktionen neu erzeugt werden sollen.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'customers'/'info','default'=>'Konfigurieren Sie hier in welchen Abständen die Daten für die in Shopware integrierten Recommendation-Funktionen neu erzeugt werden sollen.','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
")
                ]
            },
            {
                xtype: 'fieldset',
                defaults: me.defaults,
                title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'fieldset'/'customers'/'fieldset'/'also_bought','default'=>'Configuration \\\'Customers also bought\\\'','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'customers'/'fieldset'/'also_bought','default'=>'Configuration \\\'Customers also bought\\\'','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Konfiguration \'Kunden kauften auch\'<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'customers'/'fieldset'/'also_bought','default'=>'Configuration \\\'Customers also bought\\\'','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                items: [
                    {
                        xtype: 'performance-multi-request-button',
                        event: 'alsoBought',
                        title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'fieldset'/'also'/'buildIndex','default'=>'Kunden kauften auch Index neu aufbauen','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'also'/'buildIndex','default'=>'Kunden kauften auch Index neu aufbauen','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Kunden kauften auch Index neu aufbauen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'also'/'buildIndex','default'=>'Kunden kauften auch Index neu aufbauen','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
                    },
                    {
                        fieldLabel:  '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'fieldset'/'customers'/'also_bought'/'show','default'=>'Kunden kauften auch im Frontend anzeigen','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'customers'/'also_bought'/'show','default'=>'Kunden kauften auch im Frontend anzeigen','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Kunden kauften auch im Frontend anzeigen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'customers'/'also_bought'/'show','default'=>'Kunden kauften auch im Frontend anzeigen','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                        name: 'customer[alsoBoughtShow]',
                        xtype: 'checkbox',
                        uncheckedValue: false,
                        inputValue: true
                    }
                ]
            },
            {
                xtype: 'fieldset',
                defaults: me.defaults,
                title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'fieldset'/'customers'/'fieldset'/'also_seen','default'=>'Configuration \\\'Customers also viewed\\\'','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'customers'/'fieldset'/'also_seen','default'=>'Configuration \\\'Customers also viewed\\\'','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Konfiguration \'Kunden haben sich auch angesehen\'<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'customers'/'fieldset'/'also_seen','default'=>'Configuration \\\'Customers also viewed\\\'','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                items: [
                    {
                        xtype: 'performance-multi-request-button',
                        event: 'similarShown',
                        title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'fieldset'/'simiar'/'buildIndex','default'=>'Kunden haben sich ebenfalls angesehen Index neu aufbauen','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'simiar'/'buildIndex','default'=>'Kunden haben sich ebenfalls angesehen Index neu aufbauen','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Kunden haben sich ebenfalls angesehen Index neu aufbauen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'simiar'/'buildIndex','default'=>'Kunden haben sich ebenfalls angesehen Index neu aufbauen','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
                    },
                    {
                        fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'fieldset'/'customers'/'fieldset'/'also_seen'/'enable','default'=>'Kunden haben sich auch angesehen aktivieren','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'customers'/'fieldset'/'also_seen'/'enable','default'=>'Kunden haben sich auch angesehen aktivieren','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Kunden haben sich auch angesehen aktivieren<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'customers'/'fieldset'/'also_seen'/'enable','default'=>'Kunden haben sich auch angesehen aktivieren','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                        name: 'customer[similarActive]',
                        helpText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'fieldset'/'customers'/'fieldset'/'help'/'also_seen'/'enable','default'=>'Über diese Funktion können Sie das Speichern der Daten beim abschließen einer Bestellung deaktivieren. Dies bietet sich an, wenn Sie die Funktion nicht benötigen und häufig Bestellungen mit sehr vielen Positionen im Shop haben, da jegliche Combinationen aktualisiert werden müssen.','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'customers'/'fieldset'/'help'/'also_seen'/'enable','default'=>'Über diese Funktion können Sie das Speichern der Daten beim abschließen einer Bestellung deaktivieren. Dies bietet sich an, wenn Sie die Funktion nicht benötigen und häufig Bestellungen mit sehr vielen Positionen im Shop haben, da jegliche Combinationen aktualisiert werden müssen.','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Über diese Funktion kannst du das Speichern der Daten beim Abschließen einer Bestellung deaktivieren. Dies bietet sich an, wenn du die Funktion nicht benötigst und häufig Bestellungen mit sehr vielen Positionen im Shop hast, da jegliche Kombinationen aktualisiert werden müssen.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'customers'/'fieldset'/'help'/'also_seen'/'enable','default'=>'Über diese Funktion können Sie das Speichern der Daten beim abschließen einer Bestellung deaktivieren. Dies bietet sich an, wenn Sie die Funktion nicht benötigen und häufig Bestellungen mit sehr vielen Positionen im Shop haben, da jegliche Combinationen aktualisiert werden müssen.','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                        xtype: 'checkbox',
                        uncheckedValue: false,
                        inputValue: true
                    },
                    {
                        fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'fieldset'/'customers'/'fieldset'/'alsobought'/'text'/'show','default'=>'Show','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'customers'/'fieldset'/'alsobought'/'text'/'show','default'=>'Show','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Anzeigen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'customers'/'fieldset'/'alsobought'/'text'/'show','default'=>'Show','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                        name: 'customer[similarViewedShow]',
                        xtype: 'checkbox',
                        uncheckedValue: false,
                        inputValue: true
                    },
                    {
                        fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'fieldset'/'customers'/'fieldset'/'alsobought'/'text'/'valid','default'=>'Neu generieren nach [n] Tagen','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'customers'/'fieldset'/'alsobought'/'text'/'valid','default'=>'Neu generieren nach [n] Tagen','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Neu generieren nach [n] Tagen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'customers'/'fieldset'/'alsobought'/'text'/'valid','default'=>'Neu generieren nach [n] Tagen','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                        name: 'customer[similarValidationTime]',
                        xtype: 'numberfield',
                        minValue: 1,
                        maxValue: 365
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
                        name: 'customer[similarRefreshStrategy]',
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
                    }
                ]
            }
        ];
    }
});
//
<?php }} ?>