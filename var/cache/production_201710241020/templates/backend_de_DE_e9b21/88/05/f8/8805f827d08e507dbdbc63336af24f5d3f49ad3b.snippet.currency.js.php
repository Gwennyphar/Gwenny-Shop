<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 19:30:26
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/base/model/currency.js" */ ?>
<?php /*%%SmartyHeaderCode:20570936395a380942c62208-97654122%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8805f827d08e507dbdbc63336af24f5d3f49ad3b' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/base/model/currency.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20570936395a380942c62208-97654122',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a380942c6ccf2_78512158',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a380942c6ccf2_78512158')) {function content_5a380942c6ccf2_78512158($_smarty_tpl) {?>/**
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
 * @package    Base
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware UI - Global Stores and Models
 */
//
Ext.define('Shopware.apps.Base.model.Currency', {

    /**
     * Defines an alternate name for this class.
     */
    alternateClassName: 'Shopware.model.Currency',

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend: 'Shopware.data.Model',

    /**
     * unique id
     * @int
     */
    idProperty : 'id',

    /**
     * The fields used for this model
     * @array
     */
    fields: [
        //
        { name : 'id', type : 'int' },
        { name : 'name', type : 'string' },
        { name : 'currency', type : 'string' }
    ]
});
//

<?php }} ?>