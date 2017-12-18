<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 02:29:34
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/customer/model/billing.js" */ ?>
<?php /*%%SmartyHeaderCode:2630682425a3719fe393808-74128160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02b21588d963f36809d6fae43386f528b34e9cd4' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/customer/model/billing.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2630682425a3719fe393808-74128160',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a3719fe3a5d67_91713205',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3719fe3a5d67_91713205')) {function content_5a3719fe3a5d67_91713205($_smarty_tpl) {?>/**
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
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

// 

/**
 * Shopware Model - Customer list backend module.
 * The billing model represents a single data row of the s_user_billingaddress or
 * the Shopware\Models\Customer\Billing.
 */
// 
Ext.define('Shopware.apps.Customer.model.Billing', {

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend: 'Shopware.apps.Base.model.BillingAddress',

    /**
     * The fields used for this model
     * @array
     */
    fields: [
        // 
        { name: 'stateId', type: 'int', useNull: true }
    ],

    /**
     * Copy properties from the new address structure to legacy billing structure
     * @param Shopware.apps.Customer.model.Address
     * @returns Shopware.apps.Customer.model.Billing
     */
    fromAddress: function (address) {
        this.set('company', address.get('company'));
        this.set('department', address.get('department'));
        this.set('salutation', address.get('salutation'));
        this.set('title', address.get('title'));
        this.set('firstName', address.get('firstname'));
        this.set('lastName', address.get('lastname'));
        this.set('street', address.get('street'));
        this.set('city', address.get('city'));
        this.set('zipCode', address.get('zipcode'));
        this.set('additionalAddressLine1', address.get('additionalAddressLine1'));
        this.set('additionalAddressLine2', address.get('additionalAddressLine2'));
        this.set('phone', address.get('phone'));
        this.set('vatId', address.get('vatId'));
        this.set('countryId', address.get('country_id'));
        this.set('stateId', address.get('state_id'));

        return this;
    }
});
// 
<?php }} ?>