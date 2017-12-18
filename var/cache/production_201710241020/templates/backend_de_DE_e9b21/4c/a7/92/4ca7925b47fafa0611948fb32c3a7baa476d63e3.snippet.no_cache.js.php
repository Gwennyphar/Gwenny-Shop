<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 19:34:51
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/performance/view/tabs/settings/elements/no_cache.js" */ ?>
<?php /*%%SmartyHeaderCode:5968092485a380a4b2deb91-25499371%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ca7925b47fafa0611948fb32c3a7baa476d63e3' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/performance/view/tabs/settings/elements/no_cache.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5968092485a380a4b2deb91-25499371',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a380a4b301de8_50114982',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a380a4b301de8_50114982')) {function content_5a380a4b301de8_50114982($_smarty_tpl) {?>/**
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
 * @subpackage Order
 * @version    $Id$
 * @author shopware AG
 */

//

/**
 * Shopware UI - Customer list backend module
 *
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.Performance.view.tabs.settings.elements.NoCache', {
    /**
     * Extend from our base grid
     * @string
     */
    extend:'Shopware.apps.Performance.view.tabs.settings.elements.BaseGrid',

    /**
     * List of short aliases for class names. Most useful for defining xtypes for widgets.
     * @string
     */
    alias:'widget.performance-tabs-settings-elements-no-cache',

    /**
     * Desciptive title for the grid
     */
    title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'grid'/'noCache','default'=>'Controller tags not to be cached','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'grid'/'noCache','default'=>'Controller tags not to be cached','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Nicht gecachte Controller Tags<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'grid'/'noCache','default'=>'Controller tags not to be cached','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

    /**
     * Initialize the Shopware.apps.Customer.view.main.List and defines the necessary
     * default configuration
     * @return void
     */
    initComponent:function () {
        var me = this;

        me.columns = me.getColumns();

        me.callParent(arguments);
    },


    /**
     * Registers the "openOrder" event which is fired when
     * the user clicks on the action column of the grid
     * to open the order in a new window.
     * @return void
     */
    registerEvents:function () {
        this.addEvents(
        );
    },

    /**
     * Creates the grid columns
     *
     * @return [array] grid columns
     */
    getColumns:function () {
        var me = this;

        return [
            {
                header: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'grid'/'column'/'controller','default'=>'Controller','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'grid'/'column'/'controller','default'=>'Controller','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Controller<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'grid'/'column'/'controller','default'=>'Controller','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                dataIndex: 'key',
                flex: 2,
                editor: {
                    allowBlank: false,
                    enableKeyEvents:true
                }
            },
            {
                header: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'grid'/'column'/'controllerTag','default'=>'Tag','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'grid'/'column'/'controllerTag','default'=>'Tag','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Tag<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'grid'/'column'/'controllerTag','default'=>'Tag','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                dataIndex: 'value',
                flex: 1,
                editor: {
                    allowBlank: false,
                    enableKeyEvents:true
                }
            },
            {
                /**
                 * Special column type which provides
                 * clickable icons in each row
                 */
                xtype:'actioncolumn',
                width:50,
                items:[
                    {
                        cls:'delteBtn',
                        iconCls:'sprite-minus-circle-frame',
                        action:'http-cache-delete-controller-time',
                        tooltip:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'grid'/'actionButton'/'delete','default'=>'Delete entry','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'grid'/'actionButton'/'delete','default'=>'Delete entry','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Eintrag löschen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'grid'/'actionButton'/'delete','default'=>'Delete entry','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                        /**
                         * Add button handler to fire the generatePassword event which is handled
                         * in the detail controller. The detail controller generates a password and set it into the password field
                         */
                        handler:function (view, rowIndex, colIndex, item) {
                            var store = view.getStore(),
                                record = store.getAt(rowIndex);

                            store.remove(record);
                        }
                    }
                ]
            }
        ];

    }

});
//
<?php }} ?>