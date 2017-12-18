<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 15:49:49
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/base/component/element/boolean_select.js" */ ?>
<?php /*%%SmartyHeaderCode:3849036805a37d58d6ee7e3-30165147%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '708f0e9036dae4402ecb9f5a98334930076a20a1' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/base/component/element/boolean_select.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3849036805a37d58d6ee7e3-30165147',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a37d58d6fcdd5_26500352',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a37d58d6fcdd5_26500352')) {function content_5a37d58d6fcdd5_26500352($_smarty_tpl) {?>/**
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
 * config element used to replace the checkbox to a combobox
 * This is necessary because checkboxes have only two states,
 * but we need a third state as a fallback to the default shop value
 */

//

//
Ext.define('Shopware.apps.Base.view.element.BooleanSelect', {
    extend:'Ext.form.field.ComboBox',
    alias:[
        'widget.base-element-boolean-select'
    ],

    queryMode: 'local',
    forceSelection: true,
    editable: false,

    store: [
        ["", 'Inherited'],
        [true, 'Yes'],
        [false, 'No']
    ]
});
//
<?php }} ?>