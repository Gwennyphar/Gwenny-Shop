<?php /* Smarty version Smarty-3.1.12, created on 2017-12-19 00:30:35
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/login/model/locale.js" */ ?>
<?php /*%%SmartyHeaderCode:17553439045a384f9b2003e6-26833780%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a4f32b7dd1cf2676c0b4ab1b7179c06f06d9bcb' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/login/model/locale.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17553439045a384f9b2003e6-26833780',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a384f9b20dd78_74034747',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a384f9b20dd78_74034747')) {function content_5a384f9b20dd78_74034747($_smarty_tpl) {?>/**
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
 * @package    Login
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Backend - ErrorReporter Main Model
 *
 * todo@all: Documentation
 */
Ext.define('Shopware.apps.Login.model.Locale', {
    extend: 'Ext.data.Model',
    fields: [ 'name', 'value' ],
    proxy: {
        type: 'ajax',
        url: '<?php echo '/backend/Login/getLocales';?>',
        reader: {
            type: 'json',
            root: 'data'
        }
    }
});
<?php }} ?>