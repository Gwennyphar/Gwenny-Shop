<?php /* Smarty version Smarty-3.1.12, created on 2017-12-19 01:10:53
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/performance/view/tabs/settings/fields/base.js" */ ?>
<?php /*%%SmartyHeaderCode:15844563245a38590d744254-71785921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c4990f41a91bf04edcb849767a344471a75924d' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/performance/view/tabs/settings/fields/base.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15844563245a38590d744254-71785921',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a38590d74b7e8_93281258',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a38590d74b7e8_93281258')) {function content_5a38590d74b7e8_93281258($_smarty_tpl) {?>/**
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
 * @subpackage Detail
 * @version    $Id$
 * @author shopware AG
 */

//

/**
 * Default fieldSet which is extended by all other fieldSets in this module
 *
 */
//
Ext.define('Shopware.apps.Performance.view.tabs.settings.fields.Base', {
    /**
     * Define that the base field set is an extension of the Ext.form.FieldSet
     * @string
     */
    extend:'Ext.form.FieldSet',
    /**
     * List of short aliases for class names. Most useful for defining xtypes for widgets.
     * @string
     */
    alias:'widget.performance-tabs-settings-base',

    /**
     * Layout
     */
    layout: 'anchor',

    /**
     * Default settings for the child elements
     */
    defaults: {
        labelWidth: 210,
        labelStyle: 'font-weight: 700;',
        anchor: '100%'
    },

    /**
     * Hide elements by default, they will be shown once the users selects them in the navigation tree
     */
    hidden: true,
    border: false,

    /**
     * Required minimum width of the fieldSet
     */
    minWidth:155,

    /**
     * Helper method to create a descriptive text
     * @param html
     * @returns Ext.container.Container
     */
    createDescriptionContainer: function(html) {
        return Ext.create('Ext.container.Container', {
            style: 'color: #999; font-style: italic; margin: 0 0 15px 0;',
            html: html
        });
    },

    /**
     * Deprecated due to typo in name
     * @param html
     * @returns Ext.container.Container
     */
    createDecriptionContainer: function(html) {
        var me = this;

        return me.createDescriptionContainer(html);
    }

});
//
<?php }} ?>