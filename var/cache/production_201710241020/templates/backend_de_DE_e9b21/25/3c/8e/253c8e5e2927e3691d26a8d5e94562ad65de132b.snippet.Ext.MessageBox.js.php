<?php /* Smarty version Smarty-3.1.12, created on 2017-12-19 00:30:28
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/engine/Library/ExtJs/overrides/Ext.MessageBox.js" */ ?>
<?php /*%%SmartyHeaderCode:19257018705a384f94814565-83482134%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '253c8e5e2927e3691d26a8d5e94562ad65de132b' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/engine/Library/ExtJs/overrides/Ext.MessageBox.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19257018705a384f94814565-83482134',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a384f94822b22_68798206',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a384f94822b22_68798206')) {function content_5a384f94822b22_68798206($_smarty_tpl) {?>/**
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
Ext.override(Ext.MessageBox, {
    afterRender: function() {
        var me = this,
            toolbar = me.dockedItems.getAt(1);

        toolbar.addCls('shopware-toolbar');
        toolbar.setUI('shopware-ui');

        Ext.each(me.msgButtons, function(button) {
            if(button.itemId === 'ok' || button.itemId === 'yes') {
                button.addCls('primary')

            } else {
                button.addCls('secondary');
            }
        });

        me.callOverridden(arguments);
    },
    reconfigure: function() {
        var me = this;

        me.msg.allowHtml = true;
        me.callParent(arguments);
    }
});
<?php }} ?>