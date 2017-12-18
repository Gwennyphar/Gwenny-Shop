<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 15:50:00
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/customer/model/shipping.js" */ ?>
<?php /*%%SmartyHeaderCode:17995631145a37d598e82204-44228683%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb8bca9d91f6c2011e8ff3acf89502ca7365cdd3' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/customer/model/shipping.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17995631145a37d598e82204-44228683',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a37d598e8ca47_43076744',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a37d598e8ca47_43076744')) {function content_5a37d598e8ca47_43076744($_smarty_tpl) {?>/**
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
 *
 * The shipping model represents a single data row of the s_user_shippingaddress table
 * or the Shopware\Models\Customer\Shipping doctrine model which contains the data about
 * the customer shipping address.
 */
// 
Ext.define('Shopware.apps.Customer.model.Shipping', {

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend: 'Shopware.apps.Base.model.Address',

    /**
     * The fields used for this model
     * @array
     */
    fields: [
        // 
        { name: 'stateId', type: 'int', useNull: true }
    ],

    /**
     * Copy properties from the new address structure to legacy shipping structure
     * @param Shopware.apps.Customer.model.Address
     * @returns Shopware.apps.Customer.model.Shipping
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
        this.set('countryId', address.get('country_id'));
        this.set('stateId', address.get('state_id'));

        return this;
    }

});
// 
<?php }} ?>