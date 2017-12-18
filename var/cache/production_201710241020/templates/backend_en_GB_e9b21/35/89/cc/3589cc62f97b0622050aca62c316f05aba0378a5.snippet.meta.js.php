<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 15:50:14
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/view/detail/meta.js" */ ?>
<?php /*%%SmartyHeaderCode:5723430015a37d5a6cdd221-17992113%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3589cc62f97b0622050aca62c316f05aba0378a5' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/engine/Shopware/Plugins/Default/Backend/PluginManager/Views/backend/plugin_manager/view/detail/meta.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5723430015a37d5a6cdd221-17992113',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a37d5a6d05095_45977636',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a37d5a6d05095_45977636')) {function content_5a37d5a6d05095_45977636($_smarty_tpl) {?>/**
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
 * @package    PluginManager
 * @subpackage Detail
 * @version    $Id$
 * @author shopware AG
 */
//

//
Ext.define('Shopware.apps.PluginManager.view.detail.Meta', {
    extend: 'Ext.container.Container',

    cls: 'store-plugin-detail-meta-data',
    defaults: {
        xtype: 'component',
        cls: 'item',
        height: 40
    },

    mixins: {
        events: 'Shopware.apps.PluginManager.view.PluginHelper'
    },

    initComponent: function() {
        var me = this, items = [], commentCount = 0;

        if (me.plugin['getCommentsStore']) {
            commentCount = me.plugin['getCommentsStore'].getCount();
        }

        items.push({
            html: '<div class="label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"version",'default'=>'Version','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"version",'default'=>'Version','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Version<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"version",'default'=>'Version','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</div>' +
            '<div class="value">'+ me.plugin.get('version') +'</div>'
        });

        items.push({
            html: '<div class="label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"rating_short",'default'=>'Rating','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"rating_short",'default'=>'Rating','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Rating<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"rating_short",'default'=>'Rating','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</div>' +
                '<div class="value">'+
                    '<div class="store-plugin-rating star' + me.plugin.get('rating') + '">('+commentCount+')</div>' +
                '</div>'
        });

        if (me.plugin['getLicenceStore']) {

            try {
                var licence = me.plugin['getLicenceStore'].first();

                var price = licence['getPriceStore'].first();

                var type = me.getTextForPriceType(price.get('type'));

                var expiration = licence.get('expirationDate');

                var result = type;

                if (expiration) {
                    var date = me.formatDate(expiration.date);
                    result += '<span class="date"> (<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"till",'default'=>'until','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"till",'default'=>'until','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
until<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"till",'default'=>'until','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
: '+ Ext.util.Format.date(date) + ')</span>';
                }

                items.push({
                    html: '<div class="label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"licence",'default'=>'License','namespace'=>'backend/plugin_manager/translation')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"licence",'default'=>'License','namespace'=>'backend/plugin_manager/translation'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
License<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"licence",'default'=>'License','namespace'=>'backend/plugin_manager/translation'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
:</div><div class="value">'+result+'</div>'
                });
            } catch (e) {

            }
        }

        me.items = items;

        me.callParent(arguments);
    }
});
//<?php }} ?>