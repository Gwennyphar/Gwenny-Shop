<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 20:30:39
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/login/view/main/form.js" */ ?>
<?php /*%%SmartyHeaderCode:2517101425a38175f9857e4-20554832%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '078060db66b4cee376edcc81df7940ac08bc0137' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/login/view/main/form.js',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2517101425a38175f9857e4-20554832',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a38175fa0d5d7_66680807',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a38175fa0d5d7_66680807')) {function content_5a38175fa0d5d7_66680807($_smarty_tpl) {?>/**
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
 * @package    Login
 * @subpackage Main
 * @version    $Id$
 * @author shopware AG
 */

//

/**
 * Shopware UI - Login - Form View
 *
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.Login.view.main.Form', {
    extend: 'Ext.form.Panel',
    plain: true,
    frame: false,
    border: false,
    alias: 'widget.login-main-form',
    bodyStyle: 'border-bottom-color: transparent',
    preventHeader: true,
    defaults: {
        labelWidth: 100,
        width: 370
    },

    /**
     * Initializes the view
     *
     * @return void
     */
    initComponent: function() {
        var me = this;

        if(Ext.ieVersion === 0 || Ext.ieVersion >= 9) {
            // Create the headline
            me.headline = Ext.create('Ext.container.Container', {
                html: '<h1><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'title'/'login','default'=>'Login Shopware Backend','namespace'=>'backend/login/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'title'/'login','default'=>'Login Shopware Backend','namespace'=>'backend/login/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Shopware Backend Login<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'title'/'login','default'=>'Login Shopware Backend','namespace'=>'backend/login/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h1>'
            });

            // Username field
            me.userName = Ext.create('Ext.form.field.Text', {
                name: 'username',
                allowBlank: true,
                emptyText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'field'/'username','default'=>'Username','namespace'=>'backend/login/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'field'/'username','default'=>'Username','namespace'=>'backend/login/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Benutzername<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'field'/'username','default'=>'Username','namespace'=>'backend/login/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
            });

            // Passwort field
            me.password = Ext.create('Ext.form.field.Text', {
                inputType: 'password',
                name: 'password',
                allowBlank: true,
                emptyText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'field'/'password','default'=>'Password','namespace'=>'backend/login/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'field'/'password','default'=>'Password','namespace'=>'backend/login/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Passwort<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'field'/'password','default'=>'Password','namespace'=>'backend/login/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
            });

            // Language switcher
            me.language = Ext.create('Ext.form.field.ComboBox', {
                type: 'remote',
                name: 'locale',
                store: me.localeStore,
                queryMode: 'local',
                emptyText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'field'/'locale'/'empty_text','default'=>'Select other language...','namespace'=>'backend/login/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'field'/'locale'/'empty_text','default'=>'Select other language...','namespace'=>'backend/login/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Sprache<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'field'/'locale'/'empty_text','default'=>'Select other language...','namespace'=>'backend/login/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                displayField: 'name',
                valueField: 'id',
                cls: Ext.baseCSSPrefix + 'form-combo'
            });

            me.items = [ me.headline, me.userName, me.password, me.language ];

            //set the focus on the first textbox
            me.userName.focus(false, 125);

            me.dockedItems = [{
                xtype: 'toolbar',
                dock: 'bottom',
                ui: 'shopware-ui',
                cls: 'shopware-toolbar',
                style: 'background: transparent;box-shadow: none',
                items: ['->',{
                    xtype: 'button',
                    cls: 'primary',
                    text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'button'/'login','default'=>'Login','namespace'=>'backend/login/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'button'/'login','default'=>'Login','namespace'=>'backend/login/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Anmelden<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'button'/'login','default'=>'Login','namespace'=>'backend/login/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
                    action: 'login',
                    margin: '0 48 0 0'
                }]
            }];
        } else {
            me.headline = Ext.create('Ext.container.Container', {
                html: '<h1><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'title'/'login','default'=>'Login Shopware Backend','namespace'=>'backend/login/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'title'/'login','default'=>'Login Shopware Backend','namespace'=>'backend/login/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Shopware Backend Login<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'title'/'login','default'=>'Login Shopware Backend','namespace'=>'backend/login/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h1>'
            });

            me.items = [me.headline, {
                xtype: 'box',
                cls: Ext.baseCSSPrefix + 'ie-notice',
                html: me.getIEWarning()
            }];
        }

        me.callParent(arguments);

        // Show hint if the browser is not Google Chrome
        if(!Ext.isChrome) {
            me.chromeHint = Ext.create('Ext.container.Container', {
                cls: Ext.baseCSSPrefix + 'google-chrome-hint',
                html: me.getInfoTemplate().applyTemplate({
                    link: '<a href="http://www.google.com/chrome" target="_blank">Google Chrome</a>'
                })
            });
            me.add(me.chromeHint);
        }
    },

    getIEWarning: function() {
        return new Ext.Template(
            '<div class="inner">',
                '<h2 class="teaser"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'content'/'ie'/'teaser','namespace'=>'backend/login/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'content'/'ie'/'teaser','namespace'=>'backend/login/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Die von dir verwendete Version des Internet Explorers wird nicht mehr unterstützt.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'content'/'ie'/'teaser','namespace'=>'backend/login/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h2>',
                '<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'content'/'ie'/'text','namespace'=>'backend/login/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'content'/'ie'/'text','namespace'=>'backend/login/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Um dir die bestmögliche Erfahrung im Backend zu bieten, empfehlen wir dir ein Upgrade auf die aktuelle Version deines Browsers oder ein Wechsel zu einen anderen Browser. Eine Liste von unterstützten Browsern findest du hier:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'content'/'ie'/'text','namespace'=>'backend/login/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>',
                '<ul class="browsers">',
                    '<li class="chrome"><a href="<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'content'/'ie'/'link'/'chrome','default'=>'http://www.google.com/chrome','namespace'=>'backend/login/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'content'/'ie'/'link'/'chrome','default'=>'http://www.google.com/chrome','namespace'=>'backend/login/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
http://www.google.com/chrome<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'content'/'ie'/'link'/'chrome','default'=>'http://www.google.com/chrome','namespace'=>'backend/login/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" target="_blank"></a></li>',
                    '<li class="firefox"><a href="<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'content'/'ie'/'link'/'firefox','default'=>'http://www.mozilla.org/de/firefox/new/','namespace'=>'backend/login/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'content'/'ie'/'link'/'firefox','default'=>'http://www.mozilla.org/de/firefox/new/','namespace'=>'backend/login/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
http://www.mozilla.org/de/firefox/new/<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'content'/'ie'/'link'/'firefox','default'=>'http://www.mozilla.org/de/firefox/new/','namespace'=>'backend/login/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" target="_blank"></a></li>',
                    '<li class="safari"><a href="<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'content'/'ie'/'link'/'safari','default'=>'http://www.apple.com/safari/','namespace'=>'backend/login/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'content'/'ie'/'link'/'safari','default'=>'http://www.apple.com/safari/','namespace'=>'backend/login/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
http://www.apple.com/de/safari/<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'content'/'ie'/'link'/'safari','default'=>'http://www.apple.com/safari/','namespace'=>'backend/login/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" target="_blank"></a></li>',
                    '<li class="ie"><a href="<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'content'/'ie'/'link'/'ie','default'=>'http://windows.microsoft.com/de-DE/internet-explorer/downloads/ie','namespace'=>'backend/login/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'content'/'ie'/'link'/'ie','default'=>'http://windows.microsoft.com/de-DE/internet-explorer/downloads/ie','namespace'=>'backend/login/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
http://windows.microsoft.com/de-DE/internet-explorer/downloads/ie<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'content'/'ie'/'link'/'ie','default'=>'http://windows.microsoft.com/de-DE/internet-explorer/downloads/ie','namespace'=>'backend/login/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" target="_blank"></a></li>',
                '</ul>',
            '</div>'
        )
    },

    getInfoTemplate: function() {
        return new Ext.Template(
            '<div class="inner">',
                '<a href="http://www.google.com/chrome" class="logo-chrome" target="_blank">&nbsp;</a>',
                '<div class="right-content"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'content'/'google_chrome_hint','default'=>'For optimum browser performance we recommend using [link].','namespace'=>'backend/login/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'content'/'google_chrome_hint','default'=>'For optimum browser performance we recommend using [link].','namespace'=>'backend/login/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Für die beste Performance empfehlen wir die Verwendung von [link].<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'content'/'google_chrome_hint','default'=>'For optimum browser performance we recommend using [link].','namespace'=>'backend/login/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>',
                '<div class="x-clear"></div>',
            '</div>'
        );
    }
});
//
<?php }} ?>