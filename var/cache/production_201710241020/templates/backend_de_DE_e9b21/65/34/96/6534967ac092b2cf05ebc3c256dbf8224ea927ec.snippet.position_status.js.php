<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 02:29:27
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/base/model/position_status.js" */ ?>
<?php /*%%SmartyHeaderCode:7823750605a3719f76526f0-63377206%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6534967ac092b2cf05ebc3c256dbf8224ea927ec' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/base/model/position_status.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7823750605a3719f76526f0-63377206',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a3719f769e7e5_68951361',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3719f769e7e5_68951361')) {function content_5a3719f769e7e5_68951361($_smarty_tpl) {?>/**
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
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Global Stores and Models
 *
 * The payment model represents a data row of the s_core_detail_states or the
 * Shopware\Models\Order\DetailStatus doctrine model.
 */

//
//
Ext.define('Shopware.apps.Base.model.PositionStatus', {

    snippets: {
        //
        state0: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'open','default'=>'Open','namespace'=>'backend/static/position_status')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'open','default'=>'Open','namespace'=>'backend/static/position_status'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Offen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'open','default'=>'Open','namespace'=>'backend/static/position_status'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        state1: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'in_process','default'=>'In process','namespace'=>'backend/static/position_status')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'in_process','default'=>'In process','namespace'=>'backend/static/position_status'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
In Bearbeitung (Wartet)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'in_process','default'=>'In process','namespace'=>'backend/static/position_status'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        state2: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'cancelled','default'=>'Cancelled','namespace'=>'backend/static/position_status')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'cancelled','default'=>'Cancelled','namespace'=>'backend/static/position_status'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Abgebrochen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'cancelled','default'=>'Cancelled','namespace'=>'backend/static/position_status'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        state3: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'completed','default'=>'Completed','namespace'=>'backend/static/position_status')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'completed','default'=>'Completed','namespace'=>'backend/static/position_status'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Komplett abgeschlossen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'completed','default'=>'Completed','namespace'=>'backend/static/position_status'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },

    /**
     * Defines an alternate name for this class.
     */
    alternateClassName: 'Shopware.model.PositionStatus',
    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Shopware.data.Model',

    /**
     * The fields used for this model
     * @array
     */
    fields:[
        //
        { name:'id', type: 'int' },
        {
            name:'description',
            type: 'string',
            convert: function(value, record) {
                var snippet = value;

                if (record && record.snippets) {
                    snippet = record.snippets['state' + record.get('id')];
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