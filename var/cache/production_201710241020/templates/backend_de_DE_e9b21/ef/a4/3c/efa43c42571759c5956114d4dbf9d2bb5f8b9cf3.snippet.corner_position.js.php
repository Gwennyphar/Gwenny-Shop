<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 02:29:27
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/base/store/corner_position.js" */ ?>
<?php /*%%SmartyHeaderCode:1949110295a3719f7a48dd1-89308954%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efa43c42571759c5956114d4dbf9d2bb5f8b9cf3' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/base/store/corner_position.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1949110295a3719f7a48dd1-89308954',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a3719f7a84755_77602699',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3719f7a84755_77602699')) {function content_5a3719f7a84755_77602699($_smarty_tpl) {?>/**
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
 * @subpackage Store
 * @version    $Id$
 * @author shopware AG
 */

//
// 
Ext.define('Shopware.apps.Base.store.CornerPosition', {
    extend: 'Ext.data.Store',

    alternateClassName: 'Shopware.store.CornerPosition',
    storeId: 'base.CornerPosition',
    model: 'Shopware.apps.Base.model.CornerPosition',

    data: [
        { position: 'top-right', displayName: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"corner_position/top_right",'default'=>'Top right','namespace'=>'backend/application/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"corner_position/top_right",'default'=>'Top right','namespace'=>'backend/application/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Oben rechts<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"corner_position/top_right",'default'=>'Top right','namespace'=>'backend/application/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
' },
        { position: 'bottom-right', displayName: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"corner_position/bottom_right",'default'=>'Bottom right','namespace'=>'backend/application/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"corner_position/bottom_right",'default'=>'Bottom right','namespace'=>'backend/application/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Unten rechts<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"corner_position/bottom_right",'default'=>'Bottom right','namespace'=>'backend/application/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
' },
        { position: 'top-left', displayName: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"corner_position/top_left",'default'=>'Top left','namespace'=>'backend/application/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"corner_position/top_left",'default'=>'Top left','namespace'=>'backend/application/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Oben links<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"corner_position/top_left",'default'=>'Top left','namespace'=>'backend/application/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
' },
        { position: 'bottom-left', displayName: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"corner_position/bottom_left",'default'=>'Bottom left','namespace'=>'backend/application/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"corner_position/bottom_left",'default'=>'Bottom left','namespace'=>'backend/application/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Unten links<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"corner_position/bottom_left",'default'=>'Bottom left','namespace'=>'backend/application/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
' }
    ]
}).create();
//<?php }} ?>