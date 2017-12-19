<?php /* Smarty version Smarty-3.1.12, created on 2017-12-19 01:10:53
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/performance/view/main/window.js" */ ?>
<?php /*%%SmartyHeaderCode:8113604195a38590d3fa238-39507462%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68539d1c561558efabe70a1b178a5c6a8f9d9d50' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/performance/view/main/window.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8113604195a38590d3fa238-39507462',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a38590d45fed8_58042020',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a38590d45fed8_58042020')) {function content_5a38590d45fed8_58042020($_smarty_tpl) {?>/**
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
 * @subpackage Main
 * @version    $Id$
 * @author shopware AG
 */

//

/**
 * Shopware UI - Performance list main window.
 */
//
Ext.define('Shopware.apps.Performance.view.main.Window', {
    id: 'performanceWindow',

    /**
     * Define that the customer main window is an extension of the enlight application window
     * @string
     */
    extend:'Enlight.app.Window',

    /**
     * List of short aliases for class names. Most useful for defining xtypes for widgets.
     * @string
     */
    alias:'widget.performance-main-window',

    cls: 'performance-main-window',

    /**
     * Set no border for the window
     * @boolean
     */
    border:false,

    /**
     * Do not show the window automatically
     * @boolean
     */
    autoShow:false,

    /**
     * Set border layout for the window
     * @string
     */
    layout:'fit',

    /**
     * Define window width
     * @integer
     */
    width:830,
    /**
     * Define window height
     * @integer
     */
    height: '80%',

    /**
     * True to display the 'maximize' tool button and allow the user to maximize the window, false to hide the button and disallow maximizing the window.
     * @boolean
     */
    maximizable:true,

    /**
     * True to display the 'minimize' tool button and allow the user to minimize the window, false to hide the button and disallow minimizing the window.
     * @boolean
     */
    minimizable:true,

    /**
     * A flag which causes the object to attempt to restore the state of internal properties from a saved state on startup.
     */
    stateful:true,

    /**
     * The unique id for this object to use for state management purposes.
     */
    stateId:'shopware-performance-main-window',

    /**
     * Set window title which is displayed in the window header
     * @string
     */
    title:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'window_title','default'=>'Performance','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window_title','default'=>'Performance','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Performance<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window_title','default'=>'Performance','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

    /**
     * Initializes the component and builds up the main interface
     *
     * @return void
     */
    initComponent: function () {
        var me = this;


        //add the customer list grid panel and set the store
        me.items = me.getTabPanel();
        me.callParent(arguments);
    },

    getTabPanel: function() {
        var me = this;

        return [
            Ext.create('Ext.tab.Panel', {
                items: me.getTabs()
            })
        ];
    },

    getTabs: function() {
        var me = this;

        return [
            {
                xtype: 'performance-tabs-start-main'
            },
            {
                xtype: 'performance-tabs-cache-main',
                infoStore: me.infoStore
            }
            /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'update'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>*/
            ,{
                xtype: 'performance-tabs-settings-main'
            }
            /*<?php }?>*/
        ];
    }

});
//
<?php }} ?>