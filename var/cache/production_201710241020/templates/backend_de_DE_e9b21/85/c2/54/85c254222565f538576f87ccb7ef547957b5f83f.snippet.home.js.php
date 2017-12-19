<?php /* Smarty version Smarty-3.1.12, created on 2017-12-19 01:10:53
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/performance/view/tabs/settings/fields/home.js" */ ?>
<?php /*%%SmartyHeaderCode:1564018315a38590d7500b5-77903843%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85c254222565f538576f87ccb7ef547957b5f83f' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/performance/view/tabs/settings/fields/home.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1564018315a38590d7500b5-77903843',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a38590d774374_25068466',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a38590d774374_25068466')) {function content_5a38590d774374_25068466($_smarty_tpl) {?>/**
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
 * Check fieldSet
 */
//
Ext.define('Shopware.apps.Performance.view.tabs.settings.fields.Home', {
    /**
     * Define that the base field set is an extension of the "Base" fieldSet
     * @string
     */
    extend:'Shopware.apps.Performance.view.tabs.settings.fields.Base',

    /**
     * List of short aliases for class names. Most useful for defining xtypes for widgets.
     * @string
     */
    alias:'widget.performance-tabs-settings-home',

    /**
     * Description of the fieldSet
     */
    caption: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'tabs'/'settings'/'home'/'title','default'=>'Home','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'settings'/'home'/'title','default'=>'Home','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Home<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'settings'/'home'/'title','default'=>'Home','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

    layout: {
        type: 'vbox',
        align: 'stretch'
    },

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
        var me = this,
            warning = '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'fieldset'/'main'/'warning','default'=>'Zu jedem Menüpunkt erhalten Sie korrespondierende Informationen in unserem Wiki. Bevor Sie Einstellungen modifizieren, sollten Sie also die Hinweise in unserer Dokumentation beachten!','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'main'/'warning','default'=>'Zu jedem Menüpunkt erhalten Sie korrespondierende Informationen in unserem Wiki. Bevor Sie Einstellungen modifizieren, sollten Sie also die Hinweise in unserer Dokumentation beachten!','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Zu jedem Menüpunkt erhälst du korrespondierende Informationen in unserer Dokumentation. Bevor du Einstellungen modifizierst, solltest du also die Hinweise in unserer Dokumentation beachten!<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'main'/'warning','default'=>'Zu jedem Menüpunkt erhalten Sie korrespondierende Informationen in unserem Wiki. Bevor Sie Einstellungen modifizieren, sollten Sie also die Hinweise in unserer Dokumentation beachten!','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            info = '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'fieldset'/'main'/'information','default'=>'In diesem Bereich können Sie verschiedene Einstellungen vornehmen, die die Performance Ihrer Shopware-Installation betreffen.<br><br>Bitte beachten Sie auch unseren allgemeinen Performance-Guide unter <a target=link href=_blank>Performance Tipps Shopware 5</a>','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'main'/'information','default'=>'In diesem Bereich können Sie verschiedene Einstellungen vornehmen, die die Performance Ihrer Shopware-Installation betreffen.<br><br>Bitte beachten Sie auch unseren allgemeinen Performance-Guide unter <a target=link href=_blank>Performance Tipps Shopware 5</a>','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
In diesem Bereich kannst du verschiedene Einstellungen vornehmen, die die Performance deiner Shopware-Installation betreffen.<br><br>Bitte beachte auch unseren allgemeinen Performance-Guide unter <a target=\'blank\' href=\'https://developers.shopware.com/sysadmins-guide/shopware-5-performance-for-sysadmins/\'>Performance Tipps für Shopware</a><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'main'/'information','default'=>'In diesem Bereich können Sie verschiedene Einstellungen vornehmen, die die Performance Ihrer Shopware-Installation betreffen.<br><br>Bitte beachten Sie auch unseren allgemeinen Performance-Guide unter <a target=link href=_blank>Performance Tipps Shopware 5</a>','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';

        return [
            {
                xtype: 'fieldset',
                title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'fieldset'/'main'/'headline','default'=>'Performance Einstellungen','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'main'/'headline','default'=>'Performance Einstellungen','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Performance Einstellungen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'main'/'headline','default'=>'Performance Einstellungen','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                items: [
                    {
                        xtype: 'container',
                        border: false,
                        bodyPadding: 20,
                        style: 'font-weight: 700; line-height: 20px;',
                        html: '<span style="color: #4d4d4d;">' +  info + '</span><br><br>' + '<p style="color: #ba2323">' + warning + '</p>'
                    }
                ]
            },
            me.createGrid()

        ];
    },

    createGrid: function() {
        var me = this;

        return Ext.create('Ext.grid.Panel', {
            columns: me.createColumns(),
            flex: 1,
            minHeight: 150,
            border: false
        });
    },

    createColumns: function() {
        var me = this;

        return [
            {
                header: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'fieldset'/'check'/'name','default'=>'Name','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'check'/'name','default'=>'Name','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'check'/'name','default'=>'Name','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                dataIndex: 'name',
                flex: 1
            },
            {
                header: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'fieldset'/'check'/'value','default'=>'Value','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'check'/'value','default'=>'Value','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Value<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'fieldset'/'check'/'value','default'=>'Value','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                dataIndex: 'valid',
                flex: 1,
                renderer: me.validRenderer
            }
        ];
    },

    validRenderer: function(value, metaData, record) {
        var me = this,
            sprite = 0;

        if (value === 2) {
            sprite = 'sprite-exclamation';
        } else if (value === 1) {
            sprite = 'sprite-tick';
        } else if (value === 0) {
            sprite = 'sprite-cross';
        }

        return Ext.String.format('<div class="[0]" title="[1]" style="width:16px; height:16px;"></div>', sprite, record.get('description'));
    }



});
//
<?php }} ?>