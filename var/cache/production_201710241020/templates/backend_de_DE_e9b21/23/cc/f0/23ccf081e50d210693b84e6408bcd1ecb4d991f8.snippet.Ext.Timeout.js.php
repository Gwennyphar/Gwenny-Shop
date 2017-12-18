<?php /* Smarty version Smarty-3.1.12, created on 2017-12-19 00:30:28
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/engine/Library/ExtJs/overrides/Ext.Timeout.js" */ ?>
<?php /*%%SmartyHeaderCode:21346756885a384f94882c95-92488102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23ccf081e50d210693b84e6408bcd1ecb4d991f8' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/engine/Library/ExtJs/overrides/Ext.Timeout.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21346756885a384f94882c95-92488102',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a384f948a56d9_75083236',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a384f948a56d9_75083236')) {function content_5a384f948a56d9_75083236($_smarty_tpl) {?>/**
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

var ajaxTimeout = <?php ob_start();?><?php echo 30;?><?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?><?php echo 30;?><?php }else{ ?>30<?php }?>;

if (ajaxTimeout >= 6) {
    Ext.Ajax.timeout= ajaxTimeout * 1000;

    Ext.override(Ext.form.Basic,
        { timeout: ajaxTimeout }
    );
    Ext.override(Ext.data.proxy.Server,
        { timeout: Ext.Ajax.timeout }
    );
    Ext.override(Ext.data.Connection,
        { timeout: Ext.Ajax.timeout }
    );
}
<?php }} ?>