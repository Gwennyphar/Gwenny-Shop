<?php /* Smarty version Smarty-3.1.12, created on 2017-12-19 00:30:28
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/engine/Library/ExtJs/overrides/Ext.Template.js" */ ?>
<?php /*%%SmartyHeaderCode:5949846875a384f947344d4-14613894%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abb12f7e758c08f92d655083d40eabb0c37bca6c' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/engine/Library/ExtJs/overrides/Ext.Template.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5949846875a384f947344d4-14613894',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a384f94739887_36653425',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a384f94739887_36653425')) {function content_5a384f94739887_36653425($_smarty_tpl) {?>/**
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

/**
 * Override template syntax for smarty support.
 */
//
Ext.override(Ext.Template, {
    re: /[{\[]([\w\-]+)(?:\:([\w\.]*)(?:\((.*?)?\))?)?[}\]]/g
});
Ext.override(Ext.String, {
    format: function(format) {
        var formatRe = /[{\[](\d+)[}\]]/g;
        var args = Ext.Array.toArray(arguments, 1);
        return format.replace(formatRe, function(m, i) {
            return args[i];
        });
    }
});
//
<?php }} ?>