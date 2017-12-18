<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 02:29:27
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/base/model/payment_status.js" */ ?>
<?php /*%%SmartyHeaderCode:825808905a3719f7410912-72482879%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '638a834cb0eb30d1a3ba5cc054c915d1aabbc050' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/base/model/payment_status.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '825808905a3719f7410912-72482879',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a3719f74779d2_77948307',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3719f74779d2_77948307')) {function content_5a3719f74779d2_77948307($_smarty_tpl) {?>/**
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
 * Shopware Model - Global Stores and Models
 *
 * The payment model represents a data row of the s_core_states or the
 * Shopware\Models\State\State doctrine model.
 */
//
//
Ext.define('Shopware.apps.Base.model.PaymentStatus', {

    snippets: {
        //
        partially_invoiced: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'partially_invoiced','default'=>'Partially invoiced','namespace'=>'backend/static/payment_status')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'partially_invoiced','default'=>'Partially invoiced','namespace'=>'backend/static/payment_status'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Teilweise in Rechnung gestellt<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'partially_invoiced','default'=>'Partially invoiced','namespace'=>'backend/static/payment_status'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        completely_invoiced: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'completely_invoiced','default'=>'Completely invoiced','namespace'=>'backend/static/payment_status')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'completely_invoiced','default'=>'Completely invoiced','namespace'=>'backend/static/payment_status'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Komplett in Rechnung gestellt<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'completely_invoiced','default'=>'Completely invoiced','namespace'=>'backend/static/payment_status'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        partially_paid: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'partially_paid','default'=>'Partially paid','namespace'=>'backend/static/payment_status')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'partially_paid','default'=>'Partially paid','namespace'=>'backend/static/payment_status'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Teilweise bezahlt<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'partially_paid','default'=>'Partially paid','namespace'=>'backend/static/payment_status'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        completely_paid: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'completely_paid','default'=>'Completely paid','namespace'=>'backend/static/payment_status')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'completely_paid','default'=>'Completely paid','namespace'=>'backend/static/payment_status'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Komplett bezahlt<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'completely_paid','default'=>'Completely paid','namespace'=>'backend/static/payment_status'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        '1st_reminder': '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'1st_reminder','default'=>'1st reminder','namespace'=>'backend/static/payment_status')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'1st_reminder','default'=>'1st reminder','namespace'=>'backend/static/payment_status'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
1. Mahnung<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'1st_reminder','default'=>'1st reminder','namespace'=>'backend/static/payment_status'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        '2nd_reminder': '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'2nd_reminder','default'=>'2nd reminder','namespace'=>'backend/static/payment_status')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'2nd_reminder','default'=>'2nd reminder','namespace'=>'backend/static/payment_status'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
2. Mahnung<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'2nd_reminder','default'=>'2nd reminder','namespace'=>'backend/static/payment_status'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        '3rd_reminder': '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'3rd_reminder','default'=>'3rd reminder','namespace'=>'backend/static/payment_status')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'3rd_reminder','default'=>'3rd reminder','namespace'=>'backend/static/payment_status'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
3. Mahnung<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'3rd_reminder','default'=>'3rd reminder','namespace'=>'backend/static/payment_status'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        encashment: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'encashment','default'=>'Encashment','namespace'=>'backend/static/payment_status')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'encashment','default'=>'Encashment','namespace'=>'backend/static/payment_status'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Inkasso<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'encashment','default'=>'Encashment','namespace'=>'backend/static/payment_status'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        open: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'open','default'=>'Open','namespace'=>'backend/static/payment_status')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'open','default'=>'Open','namespace'=>'backend/static/payment_status'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Offen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'open','default'=>'Open','namespace'=>'backend/static/payment_status'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        reserved: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'reserved','default'=>'Reserved','namespace'=>'backend/static/payment_status')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'reserved','default'=>'Reserved','namespace'=>'backend/static/payment_status'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Reserviert<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'reserved','default'=>'Reserved','namespace'=>'backend/static/payment_status'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        delayed: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'delayed','default'=>'Delayed','namespace'=>'backend/static/payment_status')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'delayed','default'=>'Delayed','namespace'=>'backend/static/payment_status'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Verzoegert<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'delayed','default'=>'Delayed','namespace'=>'backend/static/payment_status'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        re_crediting: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'re_crediting','default'=>'Re-crediting','namespace'=>'backend/static/payment_status')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'re_crediting','default'=>'Re-crediting','namespace'=>'backend/static/payment_status'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Wiedergutschrift<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'re_crediting','default'=>'Re-crediting','namespace'=>'backend/static/payment_status'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        review_necessary: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'review_necessary','default'=>'Review necessary','namespace'=>'backend/static/payment_status')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'review_necessary','default'=>'Review necessary','namespace'=>'backend/static/payment_status'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Überprüfung notwendig<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'review_necessary','default'=>'Review necessary','namespace'=>'backend/static/payment_status'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        no_credit_approved: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'no_credit_approved','default'=>'No credit approved','namespace'=>'backend/static/payment_status')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'no_credit_approved','default'=>'No credit approved','namespace'=>'backend/static/payment_status'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Es wurde kein Kredit genehmigt<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'no_credit_approved','default'=>'No credit approved','namespace'=>'backend/static/payment_status'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        the_credit_has_been_preliminarily_accepted: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'the_credit_has_been_preliminarily_accepted','default'=>'The credit has been preliminarily accepted','namespace'=>'backend/static/payment_status')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'the_credit_has_been_preliminarily_accepted','default'=>'The credit has been preliminarily accepted','namespace'=>'backend/static/payment_status'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Der Kredit wurde vorlaeufig akzeptiert<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'the_credit_has_been_preliminarily_accepted','default'=>'The credit has been preliminarily accepted','namespace'=>'backend/static/payment_status'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        the_credit_has_been_accepted: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'the_credit_has_been_accepted','default'=>'The credit has been accepted','namespace'=>'backend/static/payment_status')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'the_credit_has_been_accepted','default'=>'The credit has been accepted','namespace'=>'backend/static/payment_status'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Der Kredit wurde genehmigt<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'the_credit_has_been_accepted','default'=>'The credit has been accepted','namespace'=>'backend/static/payment_status'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        the_payment_has_been_ordered_by_hanseatic_bank: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'the_payment_has_been_ordered_by_hanseatic_bank','default'=>'The payment has been ordered by Hanseatic Bank.','namespace'=>'backend/static/payment_status')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'the_payment_has_been_ordered_by_hanseatic_bank','default'=>'The payment has been ordered by Hanseatic Bank.','namespace'=>'backend/static/payment_status'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Die Zahlung wurde von der Hanseatic Bank angewiesen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'the_payment_has_been_ordered_by_hanseatic_bank','default'=>'The payment has been ordered by Hanseatic Bank.','namespace'=>'backend/static/payment_status'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        a_time_extension_has_been_registered: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'a_time_extension_has_been_registered','default'=>'A time extension has been registered','namespace'=>'backend/static/payment_status')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'a_time_extension_has_been_registered','default'=>'A time extension has been registered','namespace'=>'backend/static/payment_status'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Es wurde eine Zeitverlaengerung eingetragen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'a_time_extension_has_been_registered','default'=>'A time extension has been registered','namespace'=>'backend/static/payment_status'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        the_process_has_been_cancelled: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'the_process_has_been_cancelled','default'=>'The process has been cancelled.','namespace'=>'backend/static/payment_status')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'the_process_has_been_cancelled','default'=>'The process has been cancelled.','namespace'=>'backend/static/payment_status'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Vorgang wurde abgebrochen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'the_process_has_been_cancelled','default'=>'The process has been cancelled.','namespace'=>'backend/static/payment_status'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },

    /**
     * Defines an alternate name for this class.
     */
    alternateClassName: 'Shopware.model.PaymentStatus',

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Shopware.data.Model',

    /**
     * unique id
     * @int
     */
    idProperty:'id',

    /**
     * The fields used for this model
     * @array
     */
    fields:[
        //
        { name:'id', type: 'int' },
        { name:'name', type: 'string' },
        {
            name:'description',
            type: 'string',
            convert: function(value, record) {
                var snippet = value;
                if (record && record.snippets) {
                    snippet = record.snippets[record.get('name')];
                }
                if (Ext.isString(snippet) && snippet.length > 0) {
                    return snippet;
                } else {
                    return value;
                }
            }
        }
    ]
});
//

<?php }} ?>