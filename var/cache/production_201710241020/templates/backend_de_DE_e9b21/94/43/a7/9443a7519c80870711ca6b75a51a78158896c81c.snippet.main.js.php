<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 19:34:50
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/performance/view/tabs/settings/main.js" */ ?>
<?php /*%%SmartyHeaderCode:18236979725a380a4ade15e5-00592726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9443a7519c80870711ca6b75a51a78158896c81c' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/performance/view/tabs/settings/main.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18236979725a380a4ade15e5-00592726',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a380a4adfc815_19054705',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a380a4adfc815_19054705')) {function content_5a380a4adfc815_19054705($_smarty_tpl) {?>/**
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
 * @package    Order
 * @subpackage View
 * @version    $Id$
 * @author shopware AG
 */

//

//
Ext.define('Shopware.apps.Performance.view.tabs.settings.Main', {

    /**
     * Define that the additional information is an Ext.panel.Panel extension
     * @string
     */
    extend:'Ext.panel.Panel',

    /**
     * List of short aliases for class names. Most useful for defining xtypes for widgets.
     * @string
     */
    alias:'widget.performance-tabs-settings-main',

    // Title of the panel shown in the tab
    title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'tabs'/'settings'/'title','default'=>'Settings','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'settings'/'title','default'=>'Settings','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Einstellungen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'settings'/'title','default'=>'Settings','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

    // Define the layout of the panel to be a border layut
    layout: 'border',

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
    initComponent:function () {
        var me = this;

        me.items = me.createItems();

        me.dockedItems = [{
            xtype: 'toolbar',
            dock: 'bottom',
            ui: 'shopware-ui',
            cls: 'shopware-toolbar',
            items: me.getButtons()
        }];

        me.callParent(arguments);
    },

    /*
     * Helper method which creates the items of the panel
     * @return Array
     */
    createItems: function() {
        var me = this;

        me.panel = Ext.create('Ext.form.Panel', {
            region: 'center',
            trackResetOnLoad: true,
            autoScroll: true,
            items: [
                {
                    xtype: 'performance-tabs-settings-home'
                },{
                    xtype: 'performance-tabs-settings-seo'
                },{
                    xtype: 'performance-tabs-settings-http-cache'
                },{
                    xtype: 'performance-tabs-settings-theme-cache'
                },{
                    xtype: 'performance-tabs-settings-search'
                },{
                    xtype: 'performance-tabs-settings-topseller'
                },{
                    xtype: 'performance-tabs-settings-various'
                },{
                    xtype: 'performance-tabs-settings-customers'
                },{
                    xtype: 'performance-tabs-settings-categories'
                },{
                    xtype: 'performance-tabs-settings-filter'
                }]
        });

        me.navigation = Ext.create('Shopware.apps.Performance.view.tabs.settings.Navigation', {
            region: 'west',
            bodyStyle: 'background: #ffffff;'
        });

        return [
            me.navigation,
            me.panel
        ];
    },

    /**
     * @return Array
     */
    getButtons: function() {
        var me = this;

        return ['->', {
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'settings'/'buttons'/'save','default'=>'Save','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings'/'buttons'/'save','default'=>'Save','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Speichern<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings'/'buttons'/'save','default'=>'Save','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            action: 'save-settings',
            cls: 'primary'
        }];
    }

});
//
<?php }} ?>