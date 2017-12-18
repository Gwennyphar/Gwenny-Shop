<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 19:34:50
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/performance/view/tabs/start/main.js" */ ?>
<?php /*%%SmartyHeaderCode:16258452665a380a4ad65e70-10814640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8daf03ab789c73e11de637cf603883203a116c8c' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/performance/view/tabs/start/main.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16258452665a380a4ad65e70-10814640',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a380a4add5526_79356237',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a380a4add5526_79356237')) {function content_5a380a4add5526_79356237($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Performance.view.tabs.start.Main', {
    extend: 'Ext.panel.Panel',
    alias: 'widget.performance-tabs-start-main',
    title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'tabs'/'start'/'title','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'start'/'title','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Start<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'start'/'title','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
    cls: 'performance-view-start',
    bodyCls: 'performance-view-start-body',

    layout: {
        type: 'vbox',
        align: 'stretch'
    },

    bodyPadding: 20,

    listeners: {
        afterrender: function () {
            var me = this;

            me.fireEvent('init-toggle-productive', me);
        }
    },

    /**
     * Initializes the component, sets up toolbar and registers some events
     *
     * @return void
     */
    initComponent: function() {
        var me = this;

        // Create the items of the container
        me.items = me.getItems();

        /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'clear'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>*/
        me.dockedItems = [{
            xtype: 'toolbar',
            dock: 'bottom',
            ui: 'shopware-ui',
            cls: 'shopware-toolbar',
            items: me.getButtons()
        }];
        /*<?php }?>*/

        me.callParent(arguments);
    },

    /**
     * get toolbar buttons
     * @return Array
     */
    getButtons: function() {
        var me = this;

        return ['->', {
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'form'/'buttons'/'clear_all','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'form'/'buttons'/'clear_all','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Cache leeren<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'form'/'buttons'/'clear_all','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            action: 'clear-all',
            cls: 'primary'
        }];
    },

    /**
     * get Panel Items
     * @return Array
     */
    getItems: function() {
        var me = this;

        var clearText = '';
        clearText += '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'tabs'/'start'/'info_text_clear_all','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'start'/'info_text_clear_all','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Klicke den Button \'Cache leeren\', um die folgenden Cache Dateien zu löschen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'start'/'info_text_clear_all','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:<br/>';
        clearText += '<ul>';
        clearText += '<li><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'tabs'/'start'/'info_text_clear_all_line1','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'start'/'info_text_clear_all_line1','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Einstellungen und Konfigurationen deines Shops<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'start'/'info_text_clear_all_line1','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</li>';
        clearText += '<li><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'tabs'/'start'/'info_text_clear_all_line3','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'start'/'info_text_clear_all_line3','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Suchanfragen Ihrer Kunden<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'start'/'info_text_clear_all_line3','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</li>';
        clearText += '<li><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'tabs'/'start'/'info_text_clear_all_line4','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'start'/'info_text_clear_all_line4','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Suchmaschinenfreundliche Urls<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'start'/'info_text_clear_all_line4','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</li>';
        clearText += '</ul>';

        me.radioGroup = me.createRadioGroup();
        return [{
            xtype   : 'container',
            cls     : 'radiogroup-container',
            padding : 20,
            items   : [me.radioGroup]
        }, {
            xtype   : 'component',
            flex    : 1,
            html    : clearText
        }];
    },

    /**
     * get Radiogroup to change productive mode
     * @return Ext.Component button
     */
    createRadioGroup: function() {
        var me = this;

        return Ext.create('Ext.form.RadioGroup', {
            columns : 1,
            items   : [
                { name: 'productiveMode', inputValue: true, boxLabel: '<b><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'tabs'/'start'/'production_mode_title','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'start'/'production_mode_title','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Shop im Produktivmodus verwenden<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'start'/'production_mode_title','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</b>'/*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'update'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php if (!$_tmp2){?>*/, disabled: true/*<?php }?>*/ },
                { xtype: 'component', cls:'component-first', html: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'tabs'/'start'/'production_mode_description','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'start'/'production_mode_description','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Der Shop soll produktiv genutzt werden. Um eine optimale Performance zu erzielen, wird der HTTP-Cache aktiviert. Damit Änderungen im Frontend sichtbar werden, ist es notwendig, den HTTP-Cache manuell zu leeren (Einstellungen > Caches / Performance > Shop cache leeren).<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'start'/'production_mode_description','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'},
                { name: 'productiveMode', inputValue: false, boxLabel: '<b><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'tabs'/'start'/'development_mode_title','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'start'/'development_mode_title','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Shop im Bearbeitungsmodus verwenden<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'start'/'development_mode_title','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</b>'/*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'update'),$_smarty_tpl);?>
<?php $_tmp3=ob_get_clean();?><?php if (!$_tmp3){?>*/, disabled: true/*<?php }?>*/ },
                { xtype: 'component', html: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'tabs'/'start'/'development_mode_description','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'start'/'development_mode_description','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Zur besseren Einrichtung des Shops ist der HTTP-Cache deaktiviert. Im Bearbeitungsmodus werden Anpassungen im Shop zumeist direkt im Frontend sichtbar, der Shop ist dadurch aber deutlich langsamer. Sobald du die initiale Einrichtung abgeschlossen hast, empfehlen wir, in den Produktivmodus zu wechseln.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'start'/'development_mode_description','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
' }
            ],
            listeners: {
                change: function (elem, newValue, oldValue) {
                    if (
                        !Ext.isEmpty(oldValue.productiveMode)
                        && !Ext.isEmpty(newValue.productiveMode)
                        && oldValue.productiveMode !== newValue.productiveMode
                    ) {
                        me.fireEvent('toggle-productive', me)
                    }
                }
            }
        });
    },

    setState: function(state) {
        var me = this,
            productiveMode = (state === true);

        me.radioGroup.setValue({
            productiveMode: productiveMode
        });
    },

    resetState: function(state) {
        var me =  this;

        me.radioGroup.setValue({ productiveMode: !me.radioGroup.getValue().productiveMode });
    }
});
//<?php }} ?>