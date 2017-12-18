<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 15:50:01
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/feedback/view/survey/window.js" */ ?>
<?php /*%%SmartyHeaderCode:8376316205a37d599d26c87-70418773%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdf197cf4e7ea5eb2434ae41672cb8998cb238ea' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/feedback/view/survey/window.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8376316205a37d599d26c87-70418773',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a37d599ddc014_92726829',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a37d599ddc014_92726829')) {function content_5a37d599ddc014_92726829($_smarty_tpl) {?>/**
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
 */

//

/**
 * Shopware UI - Feedback preview Window
 *
 * This file contains the business logic for the User Manager module. The module
 * handles the whole administration of the backend users.
 */
//
Ext.define('Shopware.apps.Feedback.view.survey.Window', {
    extend: 'Enlight.app.Window',
    title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'window'/'title','namespace'=>'backend/feedback/view/survey')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window'/'title','namespace'=>'backend/feedback/view/survey'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Feedback<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window'/'title','namespace'=>'backend/feedback/view/survey'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
    alias: 'widget.installation-survey-window',
    border: false,
    layout: 'fit',
    autoShow: true,
    height: 650,
    width: 550,
    maximizable: false,
    resizable: false,
    stateful: true,
    stateId: 'installation-survey-window',

    /**
     * Initializes the component and builds up the main interface
     *
     * @return void
     */
    initComponent: function() {
        var me = this;

        me.items = [{
            xtype : "component",
            autoEl : {
                tag : "iframe",
                src : Ext.String.format('https://api.shopware.com/survey/[0]/firstinstallation', Ext.userLanguage !== 'de' ? 'en' : Ext.userLanguage)
            }
        }];

        me.checkbox = Ext.create('Ext.form.field.Checkbox', {
            padding: '0 0 0 5px',
            itemId: 'disableInstallationSurvey',
            width: 150,
            boxLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'window'/'do_not_show_again','namespace'=>'backend/feedback/view/survey')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window'/'do_not_show_again','namespace'=>'backend/feedback/view/survey'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Do not show again<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window'/'do_not_show_again','namespace'=>'backend/feedback/view/survey'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
        });

        me.cancelButton = Ext.create('Ext.button.Button', {
            cls: 'primary',
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'window'/'close','namespace'=>'backend/feedback/view/survey')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window'/'close','namespace'=>'backend/feedback/view/survey'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Close<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'window'/'close','namespace'=>'backend/feedback/view/survey'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            handler: function() {
                me.close();
            }
        });

        me.dockedItems = [{
            xtype: 'toolbar',
            dock: 'bottom',
            items:[me.checkbox, '->', me.cancelButton]
        }];

        me.callParent(arguments);
    }
});
//<?php }} ?>