<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 15:49:50
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/base/attribute/field/Shopware.form.field.MailGrid.js" */ ?>
<?php /*%%SmartyHeaderCode:4770579205a37d58e483723-42501920%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34ac356767d89c0724d0a9d4b349bb6761bc9f85' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/base/attribute/field/Shopware.form.field.MailGrid.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4770579205a37d58e483723-42501920',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a37d58e489261_77979714',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a37d58e489261_77979714')) {function content_5a37d58e489261_77979714($_smarty_tpl) {?>/**
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
 * @category    Shopware
 * @package     Base
 * @subpackage  Attribute
 * @version     $Id$
 * @author      shopware AG
 */

//

Ext.define('Shopware.form.field.MailGrid', {
    extend: 'Shopware.form.field.Grid',
    alias: 'widget.shopware-form-field-mail-grid',
    createColumns: function() {
        var me = this;
        return [
            me.createSortingColumn(),
            { dataIndex: 'name', flex: 1 },
            { dataIndex: 'subject', flex: 1 },
            me.createActionColumn()
        ];
    },

    createSearchField: function() {
        return Ext.create('Shopware.form.field.MailSingleSelection', this.getComboConfig());
    }
});<?php }} ?>