<?php /* Smarty version Smarty-3.1.12, created on 2017-12-19 00:31:36
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/order/view/list/list.js" */ ?>
<?php /*%%SmartyHeaderCode:18660424865a384fd8e7db56-05929925%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7dbd7b39eda34f3e9faa16ccc274ae34d9d70012' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/order/view/list/list.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18660424865a384fd8e7db56-05929925',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a384fd92cce54_57912953',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a384fd92cce54_57912953')) {function content_5a384fd92cce54_57912953($_smarty_tpl) {?>/**
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
 * @package    Order
 * @subpackage View
 * @version    $Id$
 * @author shopware AG
 */

//

/**
 * Shopware UI - Order list backend module
 * The order list view displays the data of the list store.
 * One row displays the head data of a order.
 */
//
Ext.define('Shopware.apps.Order.view.list.List', {

    /**
     * Extend from the standard ExtJS 4
     * @string
     */
    extend:'Ext.grid.Panel',

    /**
     * List of short aliases for class names. Most useful for defining xtypes for widgets.
     * @string
    */
    alias:'widget.order-list',

    /**
     * Set css class
     * @string
     */
    cls:Ext.baseCSSPrefix + 'order-grid',

    /**
     * The window uses a border layout, so we need to set
     * a region for the grid panel
     * @string
     */
    region:'center',

    /**
     * The view needs to be scrollable
     * @string
     */
    autoScroll:true,

    /**
     * Contains all snippets for the view component
     * @object
     */
    snippets:{
        columns: {
            number:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'column'/'number','default'=>'Order number','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'number','default'=>'Order number','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Bestellnummer<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'number','default'=>'Order number','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            invoiceAmount:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'column'/'amount','default'=>'Amount','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'amount','default'=>'Amount','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Betrag<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'amount','default'=>'Amount','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            orderTime:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'column'/'order_time','default'=>'Order time','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'order_time','default'=>'Order time','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Bestell-Zeit<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'order_time','default'=>'Order time','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            transactionId:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'column'/'transaction','default'=>'Transaction','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'transaction','default'=>'Transaction','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Transaktion<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'transaction','default'=>'Transaction','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            dispatchName:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'column'/'dispatch_name','default'=>'Shipping','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'dispatch_name','default'=>'Shipping','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Versand<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'dispatch_name','default'=>'Shipping','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            shopName:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'column'/'shop','default'=>'Shop','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'shop','default'=>'Shop','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Shop<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'shop','default'=>'Shop','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            customer:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'column'/'customer','default'=>'Customer','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'customer','default'=>'Customer','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Kunde<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'customer','default'=>'Customer','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            customerEmail:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'column'/'customer_email','default'=>'E-Mail','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'customer_email','default'=>'E-Mail','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
E-Mail<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'customer_email','default'=>'E-Mail','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            paymentName:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'column'/'payment_name','default'=>'Payment','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'payment_name','default'=>'Payment','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Zahlungsart<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'payment_name','default'=>'Payment','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            orderStatus:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'column'/'order_status','default'=>'Order Status','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'order_status','default'=>'Order Status','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Aktueller Bestellstatus<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'order_status','default'=>'Order Status','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            paymentStatus:'<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'column'/'payment_status','default'=>'Payment Status','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'payment_status','default'=>'Payment Status','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Aktueller Zahlungsstatus<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'payment_status','default'=>'Payment Status','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            openCustomer: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'column'/'open_customer','default'=>'Open customer','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'open_customer','default'=>'Open customer','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Kunde öffnen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'open_customer','default'=>'Open customer','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            deleteOrder: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'column'/'delete_order','default'=>'Delete order','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'delete_order','default'=>'Delete order','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Bestellung löschen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'delete_order','default'=>'Delete order','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            detail: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'column'/'detail','default'=>'Show details','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'detail','default'=>'Show details','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Zeige Details<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'column'/'detail','default'=>'Show details','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        externalComment: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'external_comment','default'=>'External comment','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'external_comment','default'=>'External comment','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Externer Kommentar<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'external_comment','default'=>'External comment','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        customerComment: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'customer_comment','default'=>'Customer comment','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'customer_comment','default'=>'Customer comment','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Kundenkommentar<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'customer_comment','default'=>'Customer comment','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        internalComment: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'internal_comment','default'=>'Internal comment','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'internal_comment','default'=>'Internal comment','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Interner Kommentar<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'internal_comment','default'=>'Internal comment','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        toolbar: {
            search: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'toolbar'/'search','default'=>'Search...','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'toolbar'/'search','default'=>'Search...','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Suche...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'toolbar'/'search','default'=>'Search...','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            action: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'toolbar'/'action','default'=>'Perform action','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'toolbar'/'action','default'=>'Perform action','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Aktion ausführen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'toolbar'/'action','default'=>'Perform action','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            states: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'toolbar'/'states','default'=>'Order status','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'toolbar'/'states','default'=>'Order status','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Bestellstatus<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'toolbar'/'states','default'=>'Order status','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            batch: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'toolbar'/'batch','default'=>'Batch processing','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'toolbar'/'batch','default'=>'Batch processing','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Stapelverarbeitung<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'toolbar'/'batch','default'=>'Batch processing','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        paging: {
            pageSize: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'paging_bar'/'page_size','default'=>'Number of orders','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'paging_bar'/'page_size','default'=>'Number of orders','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Anzahl der Bestellungen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'paging_bar'/'page_size','default'=>'Number of orders','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        }
    },

    viewConfig: {
        enableTextSelection: true
    },

    /**
     * The initComponent template method is an important initialization step for a Component.
     * It is intended to be implemented by each subclass of Ext.Component to provide any needed constructor logic.
     * The initComponent method of the class being created is called first,
     * with each initComponent method up the hierarchy to Ext.Component being called thereafter.
     * This makes it easy to implement and, if needed, override the constructor logic of the Component at any step in the hierarchy.
     * The initComponent method must contain a call to callParent in order to ensure that the parent class' initComponent method is also called.
     *
     * @return void
     */
    initComponent:function () {
        var me = this;

        me.store = me.listStore;
        me.selModel = me.getGridSelModel();
        me.columns = me.getColumns();
        me.toolbar = me.getToolbar();
        me.pagingbar = me.getPagingBar();
        me.dockedItems = [ me.toolbar, me.pagingbar ];
        me.plugins = me.createPlugins();
        me.callParent(arguments);
    },

    createPlugins: function() {
        var me = this,
            rowEditor = Ext.create('Ext.grid.plugin.RowEditing', {
            clicksToEdit: 2,
            autoCancel: true,
            listeners: {
                scope: me,
                edit: function(editor, e) {
                    me.fireEvent('saveOrder', editor, e, me.listStore)
                }
            }
        });

        return [ rowEditor ];
    },

    /**
     * Adds the specified events to the list of events which this Observable may fire.
     */
    registerEvents: function() {
        this.addEvents(
            /**
             * Event will be fired when the user clicks the "delete order" action column icon
             * which is placed in the order list in the options column
             *
             * @event
             * @param [object] - Form values
             */
            'deleteOrder',

            /**
             * Event will be fired when the user clicks the "display detail" action column icon
             * which is placed in the order list in the options column
             *
             * @event
             * @param [object] - Form values
             */
            'showDetail',

            /**
             * Event will be fired when the user clicks the "open customer" action column icon
             * which is placed in the order list in the options column
             *
             * @event
             * @param [object] - Form
             */
            'openCustomer',

            /**
             * Event will be fired when the user insert a search string into the search field which displayed
             * in the grid toolbar on the right hand. Will be handled in the filter controller.
             *
             * @event
             * @param [string] - Text field value
             */
            'searchOrders',
            /**
             * Event will be fired when the user select some orders and clicks the batch button
             *
             * @event
             * @param [Ext.grid.Panel] This component
             */
            'showBatch',

            /**
             * Event will be fired when the user changes one of the order status fields
             *
             * @event
             */
            'saveOrder'
        );
    },

    /**
     * Creates the paging toolbar for the customer grid to allow
     * and store paging. The paging toolbar uses the same store as the Grid
     *
     * @return Ext.toolbar.Paging The paging toolbar for the customer grid
     */
    getPagingBar:function () {
        var me = this;

        var pageSize = Ext.create('Ext.form.field.ComboBox', {
            fieldLabel: me.snippets.paging.pageSize,
            labelWidth: 155,
            cls: Ext.baseCSSPrefix + 'page-size',
            queryMode: 'local',
            width: 250,
            listeners: {
                scope: me,
                select: me.onPageSizeChange
            },
            store: Ext.create('Ext.data.Store', {
                fields: [ 'value' ],
                data: [
                    { value: '20' },
                    { value: '40' },
                    { value: '60' },
                    { value: '80' },
                    { value: '100' }
                ]
            }),
            displayField: 'value',
            valueField: 'value'
        });
        pageSize.setValue(me.listStore.pageSize);

        var pagingBar = Ext.create('Ext.toolbar.Paging', {
            store: me.listStore,
            dock:'bottom',
            displayInfo:true
        });

        pagingBar.insert(pagingBar.items.length - 2, [ { xtype: 'tbspacer', width: 6 }, pageSize ]);

        return pagingBar;

    },

    /**
     * Event listener method which fires when the user selects
     * a entry in the "number of orders"-combo box.
     *
     * @event select
     * @param [object] combo - Ext.form.field.ComboBox
     * @param [array] records - Array of selected entries
     * @return void
     */
    onPageSizeChange: function(combo, records) {
        var record = records[0],
            me = this;

        me.listStore.pageSize = record.get('value');
        me.listStore.loadPage(1);
    },

    /**
     * Creates the grid columns
     *
     * @return [array] grid columns
     */
    getColumns:function () {
        var me = this;

        var columns = [
            {
                header: me.snippets.columns.orderTime,
                dataIndex: 'orderTime',
                flex:1,
                renderer:me.dateColumn
            },
            {
                header: me.snippets.columns.number,
                dataIndex: 'number',
                flex:1
            },
            {
                header: me.snippets.columns.invoiceAmount,
                dataIndex: 'invoiceAmount',
                flex:1,
                renderer:me.amountColumn
            },
            {
                header: me.snippets.columns.transactionId,
                dataIndex: 'transactionId',
                flex:1
            },
            {
                header: me.snippets.columns.paymentName,
                dataIndex: 'paymentId',
                flex:1,
                renderer: me.paymentColumn
            },
            {
                header: me.snippets.columns.dispatchName,
                dataIndex: 'dispatchId',
                flex:1,
                renderer: me.dispatchColumn
            },
            {
                header: me.snippets.columns.shopName,
                dataIndex: 'shopId',
                flex:1,
                renderer: me.shopColumn
            },
            {
                header: me.snippets.columns.customer,
                dataIndex: 'customerId',
                flex: 3,
                renderer: me.customerColumn,
                getSortParam: function() {
                    return 'customerName';
                }
            },
            {
                header: me.snippets.columns.customerEmail,
                dataIndex: 'customerEmail',
                flex:2,
                renderer: me.customerEmailColumn
            },
            {
                header: me.snippets.columns.orderStatus,
                dataIndex: 'status',
                flex:2,
                renderer: me.orderStatusColumn,
                editor: {
                    xtype: 'combobox',
                    queryMode: 'local',
                    allowBlank: false,
                    valueField: 'id',
                    displayField: 'description',
                    store : me.orderStatusStore,
                    editable: false

                }
            },
            {
                header: me.snippets.columns.paymentStatus,
                dataIndex: 'cleared',
                flex:2,
                renderer: me.paymentStatusColumn,
                editor: {
                    xtype: 'combobox',
                    queryMode: 'local',
                    allowBlank: false,
                    valueField: 'id',
                    displayField: 'description',
                    store : me.paymentStatusStore,
                    editable: false
                }
            },
            me.createActionColumn()
        ];

        return columns;
    },

    createActionColumn: function() {
        var me = this;

        return Ext.create('Ext.grid.column.Action', {
            width:90,
            items:[
                me.createOpenCustomerColumn(),
                /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'delete'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>*/
                    me.createDeleteOrderColumn(),
                /*<?php }?>*/
                me.createEditOrderColumn()
            ]
        });
    },

    createEditOrderColumn: function () {
        var me = this;

        return {
            iconCls:'sprite-pencil',
            action:'editOrder',
            tooltip:me.snippets.columns.detail,
            /**
             * Add button handler to fire the showDetail event which is handled
             * in the list controller.
             */
            handler:function (view, rowIndex, colIndex, item) {
                var store = view.getStore(),
                        record = store.getAt(rowIndex);

                me.fireEvent('showDetail', record);
            }
        }
    },


    createDeleteOrderColumn: function() {
        var me = this;
        return {
            iconCls:'sprite-minus-circle-frame',
            action:'deleteOrder',
            tooltip:me.snippets.columns.deleteOrder,
            /**
             * Add button handler to fire the deleteOrder event which is handled
             * in the list controller.
             */
            handler:function (view, rowIndex, colIndex, item) {
                var store = view.getStore(),
                        record = store.getAt(rowIndex);

                me.fireEvent('deleteOrder', record);
            }
        };
    },

    createOpenCustomerColumn: function() {
        var me = this;
        return {
            iconCls:'sprite-user',
            action:'openCustomer',
            tooltip: me.snippets.columns.openCustomer,
            /**
            * Add button handler to fire the openCustomer event which is handled
            * in the list controller.
            */
            handler:function (view, rowIndex, colIndex, item) {
                var store = view.getStore(),
                record = store.getAt(rowIndex);

               me.fireEvent('openCustomer', record);
            }
        };
    },


    /**
     * Creates the grid selection model for checkboxes
     *
     * @return [Ext.selection.CheckboxModel] grid selection model
     */
    getGridSelModel:function () {
        var me = this;

        var selModel = Ext.create('Ext.selection.CheckboxModel', {
            checkOnly: true,
            listeners:{
                // Unlocks the save button if the user has checked at least one checkbox
                selectionchange:function (sm, selections) {
                    if (me.createDocumentButton !== null) {
                        me.createDocumentButton.setDisabled(selections.length === 0);
                    }
                }
            }
        });
        return selModel;
    },

    /**
     * Creates the grid toolbar with the add and delete button
     *
     * @return [Ext.toolbar.Toolbar] grid toolbar
     */
    getToolbar:function () {
        var me = this;

        me.createDocumentButton = Ext.create('Ext.button.Button', {
            iconCls:'sprite-documents-stack',
            text:me.snippets.toolbar.batch,
            action:'batchProcessing',
            disabled:true,
            handler: function() {
                me.fireEvent('showBatch', me);
            }
        });

        return Ext.create('Ext.toolbar.Toolbar', {
            dock:'top',
            ui: 'shopware-ui',
            items:[
                /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'update'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2){?>*/
                me.createDocumentButton,
                /*<?php }?>*/
                '->',
                {
                    xtype:'textfield',
                    name:'searchfield',
                    cls:'searchfield',
                    width:175,
                    emptyText: me.snippets.toolbar.search,
                    enableKeyEvents:true,
                    checkChangeBuffer:500,
                    listeners: {
                        change: function(field, value) {
                            me.fireEvent('searchOrders', value);
                        }
                    }
                },
                { xtype:'tbspacer', width:6 }
            ]
        });
    },

    /**
     * Formats the date column
     *
     * @param [string] - The order time value
     * @return [string] - The passed value, formatted with Ext.util.Format.date()
     */
    dateColumn:function (value, metaData, record) {
        if ( value === Ext.undefined ) {
            return value;
        }

        return Ext.util.Format.date(value) + ' ' + Ext.util.Format.date(value, timeFormat);
    },

    /**
     * Formats the amount column
     * @param [string] - The amount value
     * @return [string] - The passed value, formatted with Ext.util.Format.currency()
     */
    amountColumn:function (value, metaData, record) {
        if ( value === Ext.undefined ) {
            return value;
        }
        return Ext.util.Format.currency(value);
    },

    /**
     * Column renderer function for the payment column of the list grid.
     * @param [string] value    - The field value
     * @param [string] metaData - The model meta data
     * @param [string] record   - The whole data model
     */
    paymentColumn: function(value, metaData, record) {
        var payment = null;

        if (record instanceof Ext.data.Model && record.getPayment() instanceof Ext.data.Store && record.getPayment().first() instanceof Ext.data.Model) {
            payment = record.getPayment().first();
        }

        if (payment instanceof Ext.data.Model) {
            return payment.get('description');
        } else {
            return value;
        }
    },

    /**
     * Column renderer function for the payment column of the list grid.
     * @param [string] value    - The field value
     * @param [string] metaData - The model meta data
     * @param [string] record   - The whole data model
     */
    orderStatusColumn: function(value) {
        var me = this,
            record;

        if (value === Ext.undefined) {
            return value;
        }

        record =  me.orderStatusStore.getById(value);

        if (record instanceof Ext.data.Model) {
            return record.get('description');
        } else {
            return value;
        }

    },

    /**
     * Column renderer function for the payment column of the list grid.
     * @param [string] value    - The field value
     * @param [string] metaData - The model meta data
     * @param [string] record   - The whole data model
     */
    paymentStatusColumn: function(value, metaData, record) {
        var me = this,
            record;

        if (value === Ext.undefined) {
            return value;
        }

        record =  me.paymentStatusStore.getById(value);

        if (record instanceof Ext.data.Model) {
            return record.get('description');
        } else {
            return value;
        }
    },

    /**
     * Column renderer function for the payment column of the list grid.
     * @param [string] value    - The field value
     * @param [string] metaData - The model meta data
     * @param [string] record   - The whole data model
     */
    shopColumn: function(value, metaData, record) {
        var shop = record.getShop().first();

        if (shop instanceof Ext.data.Model) {
            return shop.get('name');
        } else {
            return value;
        }
    },

    /**
     * Column renderer function for the dispatch column of the list grid.
     * @param [string] value    - The field value
     * @param [string] metaData - The model meta data
     * @param [string] record   - The whole data model
     */
    dispatchColumn: function(value, metaData, record) {
        var dispatch = record.getDispatch().first();

        if (dispatch instanceof Ext.data.Model) {
            return dispatch.get('name');
        } else {
            return value;
        }
    },

    /**
     * Formats the customerEmail column.
     * If no email is set, the function will not change the given value.
     * Otherwise the email is formatted as mailto link.
     *
     * @param string value    - The field value
     * @return string
     */
    customerEmailColumn: function (value) {
        return (Ext.isDefined(value)) ? Ext.String.format('<a href="mailto:[0]" data-qtip="[0]">[0]</a>', value) : value;
    },

    /**
     * Formats the customer column.
     * If no company name is set, the function will return the customer firstName + lastName.
     * If the order contains some comments (customer, internal, external) the return value
     * will be extend with a xTemplate which displays a comment image with a tooltip.
     *
     * @param [string] value    - The field value
     * @param [string] metaData - The model meta data
     * @param [string] record   - The whole data model
     * @return [string]
     */
    customerColumn: function(value, metaData, record, colIndex, store, view) {
        var me = this,
            name = '',
            billing = record.getBilling(),
            comments = [];

        if (billing instanceof Ext.data.Store && billing.first() instanceof Ext.data.Model) {
            billing = billing.first();

            name = Ext.String.trim(
                billing.get('lastName') + ', ' + billing.get('firstName')
            );

            if (billing.get('company').length > 0) {
                name += ' (' + billing.get('company') + ')';
            }
        }

        var tpl = new Ext.XTemplate(
            '<div class="sprite-balloon customer-column-icon">',
            '</div>',
            '<p class="customer-column-text">' + name + '</p>'
        );

        if (record.get('customerComment').length > 0) {
            comments.push("<b>" + me.snippets.customerComment + "</b><br/>" + Ext.String.htmlEncode(record.get('customerComment')));
        }
        if (record.get('internalComment').length > 0) {
            comments.push("<b>" + me.snippets.internalComment + "</b><br/>" + Ext.String.htmlEncode(record.get('internalComment')));
        }
        if (record.get('comment').length > 0) {
            comments.push("<b>" + me.snippets.externalComment + "</b><br/>" + Ext.String.htmlEncode(record.get('comment')));
        }

        if (comments.length > 0) {
            metaData.tdAttr = 'data-qtip="' + comments.join('<br/><br/>') + '"';
            return tpl.html;
        } else {
            return name;
        }
    }

});
//

<?php }} ?>