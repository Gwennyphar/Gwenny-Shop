<?php /* Smarty version Smarty-3.1.12, created on 2017-12-19 00:31:34
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/article/model/esd_file.js" */ ?>
<?php /*%%SmartyHeaderCode:20179459495a384fd6697bc3-99521371%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f6ba4e7190f0277d184f706452d082f54974933' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/article/model/esd_file.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20179459495a384fd6697bc3-99521371',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a384fd66fc4d5_54887214',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a384fd66fc4d5_54887214')) {function content_5a384fd66fc4d5_54887214($_smarty_tpl) {?>/**
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
 * @package    Article
 * @subpackage Esd
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Article backend module.
 */
//
Ext.define('Shopware.apps.Article.model.EsdFile', {
    /**
     * Extends the standard Ext Model
     * @string
     */
    extend: 'Ext.data.Model',

    /**
     * The fields used  for this model
     * @array
     */
    fields: [
        //
        { name: 'id', type: 'int' },
        { name: 'filename' }
    ],

    /**
     * Configure the data communication
     * @object
     */
    proxy:{
        /**
         * Set proxy type to ajax
         * @string
         */
        type:'ajax',

        /**
         * Configure the url mapping for the different
         * store operations based on
         * @object
         */
        api: {
            read: '<?php echo '/backend/Article/getEsdFiles';?>'
        },

        reader:{
            type:'json',
            root:'data',
            totalProperty:'total',
            messageProperty : 'message'
        }
    }

});
//
<?php }} ?>