<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 15:50:02
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/product_stream/view/selected_list/product.js" */ ?>
<?php /*%%SmartyHeaderCode:1388398125a37d59ab4e001-49113501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92f7201625cec50aa4c46117395c1145e7ae12ac' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/product_stream/view/selected_list/product.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1388398125a37d59ab4e001-49113501',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a37d59abb4a99_91659274',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a37d59abb4a99_91659274')) {function content_5a37d59abb4a99_91659274($_smarty_tpl) {?>/**
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
 * @package    ProductStream
 * @subpackage Window
 * @version    $Id$
 * @author shopware AG
 */
//
//
Ext.define('Shopware.apps.ProductStream.view.selected_list.Product', {
    extend: 'Shopware.apps.ProductStream.view.SearchGrid',
    alias: 'widget.product-stream-selected-list-grid',

    enable: function() {
        this.grid.enable();
        this.callParent(arguments);
    },

    initComponent: function() {
        var me = this;
        me.store = Ext.create('Shopware.apps.ProductStream.store.SelectedProducts');
        me.searchStore = me.createSearchStore();
        me.callParent(arguments);
    },

    createGrid: function() {
        var grid = this.callParent(arguments);
        grid.disabled = true;
        return grid;
    },

    createSearchStore: function() {
        return Ext.create('Shopware.store.Search', {
            model: 'Shopware.apps.Base.model.Article',
            pageSize: 20,
            configure: function() {
                return { entity: "Shopware\\Models\\Article\\Article" }
            }
        });
    },

    addRecord: function(record) {
        this.callParent(arguments);
        this.sendAjaxRequest(
            '<?php echo '/backend/ProductStream/addSelectedProduct';?>',
            { streamId: this.streamId, articleId: record.get('id') }
        );
    },

    removeRecord: function(record) {
        this.callParent(arguments);
        this.sendAjaxRequest(
            '<?php echo '/backend/ProductStream/removeSelectedProduct';?>',
            { streamId: this.streamId, articleId: record.get('id') }
        );
    },

    sendAjaxRequest: function(url, params, callback) {
        Ext.Ajax.request({
            url: url,
            params: params,
            method: 'POST',
            success: function(operation, opts) {
                var response = Ext.decode(operation.responseText);

                if (Ext.isFunction(callback)) {
                    callback(response);
                }
            }
        });
    }
});
//<?php }} ?>