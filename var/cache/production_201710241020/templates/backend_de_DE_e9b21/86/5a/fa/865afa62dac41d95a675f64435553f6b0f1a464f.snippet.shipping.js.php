<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 02:29:35
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/order/view/detail/shipping.js" */ ?>
<?php /*%%SmartyHeaderCode:6256216175a3719ff983ff6-02938387%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '865afa62dac41d95a675f64435553f6b0f1a464f' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/order/view/detail/shipping.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6256216175a3719ff983ff6-02938387',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a3719ffbe8933_46943393',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3719ffbe8933_46943393')) {function content_5a3719ffbe8933_46943393($_smarty_tpl) {?>/**
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
 * Shopware UI - Order detail page
 *
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.Order.view.detail.Shipping', {
    /**
     * Define that the shipping field set is an extension of the Ext.form.FieldSet
     * @string
     */
    extend: 'Ext.form.FieldSet',

    /**
     * List of short aliases for class names. Most useful for defining xtypes for widgets.
     * @string
     */
    alias: 'widget.order-shipping-field-set',

    /**
     * Set css class for this component
     * @string
     */
    cls: Ext.baseCSSPrefix + 'shipping-field-set',

    /**
     * Enable field set collapse
     * @boolean
     */
    collapsible: true,

    /**
     * Marks that the field set is collapsed at the start.
     * @boolean
     */
    collapsed: false,

    /**
     * Layout of the component.
     * @string
     */
    layout: 'column',

    /**
     * Contains all snippets for the view component
     * @object
     */
    snippets: {
        title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'shipping'/'title','default'=>'Alternative shipping address','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'title','default'=>'Alternative shipping address','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Alternative Lieferadresse<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'title','default'=>'Alternative shipping address','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        titleField: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'address'/'title_field','default'=>'Title','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'title_field','default'=>'Title','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Titel<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'title_field','default'=>'Title','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        firstName: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'address'/'first_name','default'=>'First name','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'first_name','default'=>'First name','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Vorname<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'first_name','default'=>'First name','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        lastName: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'address'/'last_name','default'=>'Last name','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'last_name','default'=>'Last name','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Nachname<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'last_name','default'=>'Last name','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        street: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'address'/'street','default'=>'street','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'street','default'=>'street','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Straße<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'street','default'=>'street','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        zipCode: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'address'/'zip_code','default'=>'Zip code','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'zip_code','default'=>'Zip code','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Postleitzahl<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'zip_code','default'=>'Zip code','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        city: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'address'/'city','default'=>'City','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'city','default'=>'City','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Stadt<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'city','default'=>'City','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        additionalAddressLine1: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'address'/'additionalAddressLine1','default'=>'Additional address line 1','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'additionalAddressLine1','default'=>'Additional address line 1','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Adresszusatz 1<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'additionalAddressLine1','default'=>'Additional address line 1','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        additionalAddressLine2: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'address'/'additionalAddressLine2','default'=>'Additional address line 2','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'additionalAddressLine2','default'=>'Additional address line 2','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Adresszusatz 2<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'additionalAddressLine2','default'=>'Additional address line 2','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        salutation: {
            label: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'address'/'salutation','default'=>'Salutation','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'salutation','default'=>'Salutation','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Anrede<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'salutation','default'=>'Salutation','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        },
        country: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'address'/'country','default'=>'Country','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'country','default'=>'Country','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Land<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'country','default'=>'Country','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        phone: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'address'/'phone','default'=>'Phone','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'phone','default'=>'Phone','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Telefon<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'phone','default'=>'Phone','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        state: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'address'/'state','default'=>'State','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'state','default'=>'State','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Bundesland<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'state','default'=>'State','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        company: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'address'/'company','default'=>'Company','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'company','default'=>'Company','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Firma<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'company','default'=>'Company','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        department: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'address'/'department','default'=>'Department','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'department','default'=>'Department','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Abteilung<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'address'/'department','default'=>'Department','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        copyBilling: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'shipping'/'copy_billing','default'=>'For usability purposes, click here to use the billing address as shipping address.','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'copy_billing','default'=>'For usability purposes, click here to use the billing address as shipping address.','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Aus Usability-Gründen kannst du hier klicken, um die Rechnungsadresse als Lieferadresse zu nutzen.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'copy_billing','default'=>'For usability purposes, click here to use the billing address as shipping address.','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        copyButton: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'shipping'/'copy_button','default'=>'Copy data','namespace'=>'backend/order/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'copy_button','default'=>'Copy data','namespace'=>'backend/order/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Daten kopieren<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shipping'/'copy_button','default'=>'Copy data','namespace'=>'backend/order/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
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
    initComponent: function () {
        var me = this;
        me.title = me.snippets.title;
        me.items = me.createElements();
        me.addEvents(
            /**
             * Fired when the user changes his country. Used to fill the state box
             * @param field
             * @param newValue
             */
            'countryChanged'
        );
        me.callParent(arguments);
    },

    /**
     * Creates the three containers for the field set
     * to display the form fields in two columns.
     *
     * @return { Array } Contains the left and right container
     */
    createElements: function () {
        var leftContainer, rightContainer, me = this;

        leftContainer = Ext.create('Ext.container.Container', {
            columnWidth: .5,
            border: false,
            layout: 'anchor',
            defaults: {
                anchor: '95%',
                labelWidth: 155,
                minWidth: 250,
                labelStyle: 'font-weight: 700;',
                style: {
                    margin: '0 0 10px'
                },
                xtype: 'textfield'
            },
            items: me.createLeftElements()
        });

        rightContainer = Ext.create('Ext.container.Container', {
            columnWidth: .5,
            border: false,
            layout: 'anchor',
            defaults: {
                anchor: '95%',
                labelWidth: 155,
                minWidth: 250,
                labelStyle: 'font-weight: 700;',
                style: {
                    margin: '0 0 10px'
                },
                xtype: 'textfield'
            },
            items: me.createRightElements()
        });

        me.attributeForm = Ext.create('Shopware.attribute.Form', {
            name: 'shipping-attributes',
            table: 's_order_shippingaddress_attributes',
            columnWidth: 1
        });

        var id = null;
        if (me.record && me.record.getShipping() && me.record.getShipping().first()) {
            id = me.record.getShipping().first().get('id');
        }

        me.attributeForm.loadAttribute(id);

        return [leftContainer, rightContainer, me.attributeForm];
    },


    /**
     * Creates the left container of the shipping field set.
     *
     * @return { Array } Contains the different form fields of the left container
     */
    createLeftElements: function () {
        var me = this;

        return [{
            xtype: 'combobox',
            queryMode: 'local',
            triggerAction: 'all',
            name: 'shipping[salutation]',
            fieldLabel: me.snippets.salutation.label,
            mode: 'local',
            editable: false,
            valueField: 'key',
            displayField: 'label',
            store: Ext.create('Shopware.apps.Base.store.Salutation').load()
        }, {
            name: 'shipping[title]',
            fieldLabel: me.snippets.titleField,
            allowBlank: true
        }, {
            name: 'shipping[firstName]',
            fieldLabel: me.snippets.firstName
        }, {
            name: 'shipping[lastName]',
            fieldLabel: me.snippets.lastName
        }, {
            name: 'shipping[company]',
            fieldLabel: me.snippets.company
        }, {
            name: 'shipping[department]',
            fieldLabel: me.snippets.department
        }, {
            name: 'shipping[phone]',
            fieldLabel: me.snippets.phone
        }];
    },

    /**
     * Creates the right container of the shipping field set.
     *
     * @return { Array } Contains the different form fields for the right container
     */
    createRightElements: function () {
        var me = this;

        me.countryStateCombo = Ext.create('Ext.form.field.ComboBox', {
            name: 'shipping[stateId]',
            action: 'shippingStateId',
            fieldLabel: me.snippets.state,
            valueField: 'id',
            displayField: 'name',
            forceSelection: true,
            labelWidth: 155,
            store: Ext.create('Shopware.store.CountryState'),
            minWidth: 250,
            editable: false,
            hidden: true,
            triggerAction: 'all',
            queryMode: 'local'
        });

        me.countryCombo = Ext.create('Ext.form.field.ComboBox', {
            triggerAction: 'all',
            name: 'shipping[countryId]',
            fieldLabel: me.snippets.country,
            valueField: 'id',
            queryMode: 'local',
            displayField: 'name',
            forceSelection: true,
            store: me.countriesStore,
            labelWidth: 155,
            minWidth: 250,
            required: true,
            editable: false,
            allowBlank: false,
            listeners: {
                change: function (field, newValue, oldValue, record) {
                    me.fireEvent('countryChanged', field, newValue, me.countryStateCombo, me.record.getShipping().first());
                }
            }
        });

        return [{
            name: 'shipping[street]',
            fieldLabel: me.snippets.street
        }, {
            name: 'shipping[additionalAddressLine1]',
            fieldLabel: me.snippets.additionalAddressLine1
        }, {
            name: 'shipping[additionalAddressLine2]',
            fieldLabel: me.snippets.additionalAddressLine2
        }, {
            name: 'shipping[zipCode]',
            fieldLabel: me.snippets.zipCode
        }, {
            name: 'shipping[city]',
            fieldLabel: me.snippets.city
        }, me.countryStateCombo, me.countryCombo];
    }
});
//
<?php }} ?>