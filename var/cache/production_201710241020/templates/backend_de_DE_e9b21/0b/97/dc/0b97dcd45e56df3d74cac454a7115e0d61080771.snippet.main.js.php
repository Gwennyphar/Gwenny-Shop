<?php /* Smarty version Smarty-3.1.12, created on 2017-12-19 01:10:53
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/performance/view/tabs/cache/main.js" */ ?>
<?php /*%%SmartyHeaderCode:12312863785a38590d5ac1d9-59448180%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b97dcd45e56df3d74cac454a7115e0d61080771' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/performance/view/tabs/cache/main.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12312863785a38590d5ac1d9-59448180',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a38590d5cc184_93664169',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a38590d5cc184_93664169')) {function content_5a38590d5cc184_93664169($_smarty_tpl) {?>/**
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
 * @package    CanceledOrder
 * @subpackage View
 * @version    $Id$
 * @author shopware AG
 */

//

//
Ext.define('Shopware.apps.Performance.view.tabs.cache.Main', {
    extend: 'Ext.form.Panel',
    alias: 'widget.performance-tabs-cache-main',
    title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'tabs'/'cache'/'title','default'=>'Cache','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'cache'/'title','default'=>'Cache','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Cache<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'tabs'/'cache'/'title','default'=>'Cache','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',

    layout:'vbox',

    defaults:  {
        width: '100%'
    },

    /**
     * Initializes the component, sets up toolbar and pagingbar and and registers some events
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
     * @return Array
     */
    getItems: function() {
        var me = this;
        var info = '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'cache'/'info'/'text','default'=>'Erfahren Sie genaueres über das Performance Module unter : <a href=http://wiki.shopware.de/Shopcache-leeren_detail_845_641.html target=_blank>Wiki</a>  ','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'cache'/'info'/'text','default'=>'Erfahren Sie genaueres über das Performance Module unter : <a href=http://wiki.shopware.de/Shopcache-leeren_detail_845_641.html target=_blank>Wiki</a>  ','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Erfahre Genaueres über das Performance-Modul in unserer <a href=\'http://community.shopware.com/performance-module\' target=\'_blank\'>Dokumentation</a>.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'cache'/'info'/'text','default'=>'Erfahren Sie genaueres über das Performance Module unter : <a href=http://wiki.shopware.de/Shopcache-leeren_detail_845_641.html target=_blank>Wiki</a>  ','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';

        return [
        {
            xtype: 'container',
            html: info,
            height: 30,
            padding: 10
        },
        {
            xtype: 'performance-tabs-cache-info',
            store: me.infoStore,
            flex: 1
        }
        /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'clear'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2){?>*/
        ,{
            xtype: 'performance-tabs-cache-form',
            flex: 1
        }
        /*<?php }?>*/
        ];
    },

    /**
     * @return Array
     */
    getButtons: function() {
        var me = this;

        return ['->', {
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'form'/'buttons'/'select_all','default'=>'Select all','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'form'/'buttons'/'select_all','default'=>'Select all','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Alle auswählen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'form'/'buttons'/'select_all','default'=>'Select all','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            action: 'select-all',
            cls: 'secondary'
        },{
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'form'/'buttons'/'submit','default'=>'Clear','namespace'=>'backend/performance/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'form'/'buttons'/'submit','default'=>'Clear','namespace'=>'backend/performance/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Leeren<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'form'/'buttons'/'submit','default'=>'Clear','namespace'=>'backend/performance/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            action: 'clear',
            cls: 'primary'
        }];
    }

});
//
<?php }} ?>