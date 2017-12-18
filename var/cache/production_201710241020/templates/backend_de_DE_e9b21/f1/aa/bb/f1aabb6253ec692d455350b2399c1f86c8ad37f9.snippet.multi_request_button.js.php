<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 19:34:51
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/performance/view/tabs/settings/elements/multi_request_button.js" */ ?>
<?php /*%%SmartyHeaderCode:3589636535a380a4b309959-45167954%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1aabb6253ec692d455350b2399c1f86c8ad37f9' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/performance/view/tabs/settings/elements/multi_request_button.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3589636535a380a4b309959-45167954',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a380a4b313562_83298222',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a380a4b313562_83298222')) {function content_5a380a4b313562_83298222($_smarty_tpl) {?>/**
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
 * @package    Customer
 * @subpackage Order
 * @version    $Id$
 * @author shopware AG
 */

//

/**
 * Button which triggers the multi request dialog
 */
//
Ext.define('Shopware.apps.Performance.view.tabs.settings.elements.MultiRequestButton', {
    /**
     * Extend from our base grid
     * @string
     */
    extend:'Ext.container.Container',

    /**
     * List of short aliases for class names. Most useful for defining xtypes for widgets.
     * @string
     */
    alias:'widget.performance-multi-request-button',

    /**
     * Event and title needs to be passed as config params
     */
    event: '',
    title: '',
    showEvent: 'showMultiRequestDialog',

    /**
     * Initialize the button
     * @return void
     */
    initComponent:function () {
        var me = this;

        me.items = [ me.createButton() ];

        me.callParent(arguments);
    },

    createButton: function() {
        var me = this;

        return {
            xtype: 'button',
            cls: 'primary',
            margin: '0 0 10 0',
            text: me.title,
            handler: function() {
                me.fireEvent(me.showEvent, me.event, me.up('fieldset'));
            }
        };
    }

});
//
<?php }} ?>