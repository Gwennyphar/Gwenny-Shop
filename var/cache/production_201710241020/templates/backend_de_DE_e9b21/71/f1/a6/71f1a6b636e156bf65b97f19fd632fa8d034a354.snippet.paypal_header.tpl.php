<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 02:29:25
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/engine/Shopware/Plugins/Community/Frontend/SwagPaymentPaypal/Views/backend/index/paypal_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16251974545a3719f5868b41-80784768%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71f1a6b636e156bf65b97f19fd632fa8d034a354' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/engine/Shopware/Plugins/Community/Frontend/SwagPaymentPaypal/Views/backend/index/paypal_header.tpl',
      1 => 1513560225,
      2 => 'file',
    ),
    '015705a00501cbefadb55269569136b2d2e00019' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/index/index.tpl',
      1 => 1508840484,
      2 => 'file',
    ),
    '61f48b0f9c4e093e98070f330199537d0c45c398' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/base/index.tpl',
      1 => 1508840484,
      2 => 'snippet',
    ),
    'cf06ce24e7b60294e9d3cda3d232f8657e043b4f' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/base/header.tpl',
      1 => 1508840484,
      2 => 'snippet',
    ),
    'daaf853e950082f3efb2abf1e127ecb51228fb55' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/index/header.tpl',
      1 => 1508840484,
      2 => 'snippet',
    ),
  ),
  'nocache_hash' => '16251974545a3719f5868b41-80784768',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a3719f5b28c02_14090894',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3719f5b28c02_14090894')) {function content_5a3719f5b28c02_14090894($_smarty_tpl) {?><!DOCTYPE html>
<html>


    <?php /*  Call merged included template "backend/index/header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("backend/index/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '16251974545a3719f5868b41-80784768');
content_5a3719f5a614d2_91624652($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "backend/index/header.tpl" */?>


  <body <?php if ($_smarty_tpl->tpl_vars['product']->value){?>class="shopware-<?php echo mb_strtolower($_smarty_tpl->tpl_vars['product']->value, 'utf-8');?>
"<?php }?>>
    
    <div class="container">

    

    </div>
    
<form id="history-form" class="x-hide-display">
    <input type="hidden" id="x-history-field" />
    <iframe id="x-history-frame"></iframe>
</form>

  </body>
</html>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 02:29:25
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/base/header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a3719f5972311_02403508')) {function content_5a3719f5972311_02403508($_smarty_tpl) {?>
<head>



<meta charset="UTF-8" />
<meta name="robots" content="<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'meta'/'robots','default'=>'noindex,nofollow','namespace'=>'backend/base/index')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'meta'/'robots','default'=>'noindex,nofollow','namespace'=>'backend/base/index'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
noindex,nofollow<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'meta'/'robots','default'=>'noindex,nofollow','namespace'=>'backend/base/index'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" />

<meta http-equiv="X-UA-Compatible" content="IE=Edge" />



<title></title>


    <link rel="stylesheet" type="text/css" href="/themes/Backend/ExtJs/backend/_resources/resources/css/ext-all.css?<?php echo Shopware::REVISION;?>
" />
    <link rel="stylesheet" type="text/css" href="/themes/Backend/ExtJs/backend/_resources/resources/css/core-icon-set.css?<?php echo Shopware::REVISION;?>
" />
    <link rel="stylesheet" type="text/css" href="/themes/Backend/ExtJs/backend/_resources/resources/css/core-icon-set-new.css?<?php echo Shopware::REVISION;?>
" />
    <link rel="stylesheet" type="text/css" href="/engine/Library/CodeMirror/lib/codemirror.css?<?php echo Shopware::REVISION;?>
" />

    <style type="text/css">
        .paypal--icon {
            background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAABvFBMVEUAIHoAJn8AMIcAPJAARZkAkdUAlNkAldkAldoAltkAltoAl9oAmNsAmNwAmdsAmdwAmd0Amt0Am90AnN4And4AoOH///8AufgAMIcAMIcAMokAO48AmNsAIHoAMIcAMIcAmd0AmtwAMIcAJ4AAmdwAO5EAMIcAMIcAMIcAp+gAmNsAMIcAmNwAldkAMIcAmNwAMIcAmtwAlNcAMIcAfcIAMIcAMIcAmt0AnN4AnN4AMIcAqegAMIcAMIcAoeEAMIcAMIcAMIcAnN4AEW4AMIcAmdwAM4kAdb8And8AMIcAGnYAG3YAHXgAJ4AAKYIAK4IALH8ALIAALYAAMIYAMIcAMIgAMYcAMYgAMowAM4oAM40ANIwANI0AS54AWqgAaLMAbK8AmdsAmtsAm9wAm90AnN4And8AnuAAoOEAoOIAoeIAouMApOUApeYAqOkArO0Are0Ar/AAsO4AsPEAsvAAs/AAs/EAt/gAvf0BAEABAEUBCVIBDFQBD1QBE1wBGF8BGGUBGWEBHWEBHWIBH2MBH2UBIWcBIWkBImoBI2sBJGwBJnQBKHgBKXIBLH4BL3YBM3kBOX8BPoQBU5gN6zI6AAAASnRSTlMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAEFBhESEhcfMDw9Q0VFTFJdYGVmfHyAg4WWnZ6jpay6vb3ByMnQ2uDh4uTm6erq8PT1/JvflF8AAADISURBVBgZBcHBTsJAEIDhf6azW1vxggYIN+LFmxff/xH0ZEJEbzaYaCJi21DW3fH7ZMHXctMmRNLnDm4MiGsAWM2eQIEaFzMzu9sUDAioTy6uWQ0DAuGhr0CG7toViFBEVZPdzzFYtOAiIqf11GAQG9Ehn0tZvZaMgV3a8ary6nHy/ohBpG92F39h+XPeHoJBxOvZIOOvPneKQV25lPTe5XEfagxaXIzD1moAhfI9fbhMMTiAwVtVbkdJKasiGOx1nl/yKYpD0X/ZN1Ci2Gv4kwAAAABJRU5ErkJggg==');
        }
    </style>


    <link rel="icon" href="/themes/Backend/ExtJs/backend/_resources/images/index/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="/themes/Backend/ExtJs/backend/_resources/images/index/favicon.ico" type="image/x-icon" />



    <script type="text/javascript" src="/engine/Library/ExtJs/ext-all.js?<?php echo Shopware::REVISION;?>
"></script>
    <script type="text/javascript" src="<?php ob_start();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'script'/'ext'/'lang','default'=>'en_GB','namespace'=>'backend/base/index')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'script'/'ext'/'lang','default'=>'en_GB','namespace'=>'backend/base/index'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo "de";?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'script'/'ext'/'lang','default'=>'en_GB','namespace'=>'backend/base/index'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->smarty->loadPlugin("smarty_function_flink"); echo smarty_function_flink(array("file" => "ExtJs/locale/ext-lang-".$_tmp1.".js", "fullPath" => false), $_smarty_tpl); ?>?<?php echo Shopware::REVISION;?>
"></script>
    <script type="text/javascript" src="/engine/Library/TinyMce/tiny_mce.js?<?php echo Shopware::REVISION;?>
"></script>
    <script type="text/javascript" src="/engine/Library/CodeMirror/lib/codemirror.js?<?php echo Shopware::REVISION;?>
"></script>

    
    <script type="text/javascript">
        
        Ext.editorLang = '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'script'/'ext'/'lang','namespace'=>'backend/base/index')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'script'/'ext'/'lang','namespace'=>'backend/base/index'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
de<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'script'/'ext'/'lang','namespace'=>'backend/base/index'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
        Ext.shopwareRevision = '<?php echo Shopware::REVISION;?>
';
        Ext.userLanguage = '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'script'/'ext'/'lang','namespace'=>'backend/base/index')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'script'/'ext'/'lang','namespace'=>'backend/base/index'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
de<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'script'/'ext'/'lang','namespace'=>'backend/base/index'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
    </script>

    <?php if ($_smarty_tpl->tpl_vars['user']->value){?>
        <script type="text/javascript" src="<?php echo '/backend/base';?>?file=bootstrap&loggedIn=<?php echo time();?>
"></script>
    <?php }else{ ?>
        <script type="text/javascript" src="<?php echo '/backend/base';?>?file=bootstrap&<?php echo Shopware::REVISION;?>
"></script>
    <?php }?>

</head>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 02:29:25
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Backend/ExtJs/backend/index/header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a3719f5a614d2_91624652')) {function content_5a3719f5a614d2_91624652($_smarty_tpl) {?>
<head>



<meta charset="UTF-8" />
<meta name="robots" content="<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'meta'/'robots','default'=>'noindex,nofollow','namespace'=>'backend/base/index')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'meta'/'robots','default'=>'noindex,nofollow','namespace'=>'backend/base/index'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
noindex,nofollow<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'meta'/'robots','default'=>'noindex,nofollow','namespace'=>'backend/base/index'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" />

<meta http-equiv="X-UA-Compatible" content="IE=Edge" />



<title>Shopware <?php echo Shopware::VERSION;?>
 <?php echo Shopware::VERSION_TEXT;?>
 (Rev. <?php echo Shopware::REVISION;?>
) - Backend (c) shopware AG</title>


    <link rel="stylesheet" type="text/css" href="/themes/Backend/ExtJs/backend/_resources/resources/css/ext-all.css?<?php echo Shopware::REVISION;?>
" />
    <link rel="stylesheet" type="text/css" href="/themes/Backend/ExtJs/backend/_resources/resources/css/core-icon-set.css?<?php echo Shopware::REVISION;?>
" />
    <link rel="stylesheet" type="text/css" href="/themes/Backend/ExtJs/backend/_resources/resources/css/core-icon-set-new.css?<?php echo Shopware::REVISION;?>
" />
    <link rel="stylesheet" type="text/css" href="/engine/Library/CodeMirror/lib/codemirror.css?<?php echo Shopware::REVISION;?>
" />

<link rel="stylesheet" type="text/css" href="/themes/Backend/ExtJs/backend/_resources/styles/growl.css" />
<style type="text/css">
iframe { border: 0 none !important; width: 100%; height: 100%; }
#nav ul { top: 26px !important }
#header li.main { height: 28px !important }
.deprecated { color: #fff; font-size: 11px; font-weight: 700; text-align: center }
</style>

    <style type="text/css">
        .paypal--icon {
            background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAABvFBMVEUAIHoAJn8AMIcAPJAARZkAkdUAlNkAldkAldoAltkAltoAl9oAmNsAmNwAmdsAmdwAmd0Amt0Am90AnN4And4AoOH///8AufgAMIcAMIcAMokAO48AmNsAIHoAMIcAMIcAmd0AmtwAMIcAJ4AAmdwAO5EAMIcAMIcAMIcAp+gAmNsAMIcAmNwAldkAMIcAmNwAMIcAmtwAlNcAMIcAfcIAMIcAMIcAmt0AnN4AnN4AMIcAqegAMIcAMIcAoeEAMIcAMIcAMIcAnN4AEW4AMIcAmdwAM4kAdb8And8AMIcAGnYAG3YAHXgAJ4AAKYIAK4IALH8ALIAALYAAMIYAMIcAMIgAMYcAMYgAMowAM4oAM40ANIwANI0AS54AWqgAaLMAbK8AmdsAmtsAm9wAm90AnN4And8AnuAAoOEAoOIAoeIAouMApOUApeYAqOkArO0Are0Ar/AAsO4AsPEAsvAAs/AAs/EAt/gAvf0BAEABAEUBCVIBDFQBD1QBE1wBGF8BGGUBGWEBHWEBHWIBH2MBH2UBIWcBIWkBImoBI2sBJGwBJnQBKHgBKXIBLH4BL3YBM3kBOX8BPoQBU5gN6zI6AAAASnRSTlMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAEFBhESEhcfMDw9Q0VFTFJdYGVmfHyAg4WWnZ6jpay6vb3ByMnQ2uDh4uTm6erq8PT1/JvflF8AAADISURBVBgZBcHBTsJAEIDhf6azW1vxggYIN+LFmxff/xH0ZEJEbzaYaCJi21DW3fH7ZMHXctMmRNLnDm4MiGsAWM2eQIEaFzMzu9sUDAioTy6uWQ0DAuGhr0CG7toViFBEVZPdzzFYtOAiIqf11GAQG9Ehn0tZvZaMgV3a8ary6nHy/ohBpG92F39h+XPeHoJBxOvZIOOvPneKQV25lPTe5XEfagxaXIzD1moAhfI9fbhMMTiAwVtVbkdJKasiGOx1nl/yKYpD0X/ZN1Ci2Gv4kwAAAABJRU5ErkJggg==');
        }
    </style>


    <link rel="icon" href="/themes/Backend/ExtJs/backend/_resources/images/index/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="/themes/Backend/ExtJs/backend/_resources/images/index/favicon.ico" type="image/x-icon" />



    <script type="text/javascript" src="/engine/Library/ExtJs/ext-all.js?<?php echo Shopware::REVISION;?>
"></script>
    <script type="text/javascript" src="<?php ob_start();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'script'/'ext'/'lang','default'=>'en_GB','namespace'=>'backend/base/index')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'script'/'ext'/'lang','default'=>'en_GB','namespace'=>'backend/base/index'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo "de";?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'script'/'ext'/'lang','default'=>'en_GB','namespace'=>'backend/base/index'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->smarty->loadPlugin("smarty_function_flink"); echo smarty_function_flink(array("file" => "ExtJs/locale/ext-lang-".$_tmp1.".js", "fullPath" => false), $_smarty_tpl); ?>?<?php echo Shopware::REVISION;?>
"></script>
    <script type="text/javascript" src="/engine/Library/TinyMce/tiny_mce.js?<?php echo Shopware::REVISION;?>
"></script>
    <script type="text/javascript" src="/engine/Library/CodeMirror/lib/codemirror.js?<?php echo Shopware::REVISION;?>
"></script>

    
    <script type="text/javascript">
        
        Ext.editorLang = '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'script'/'ext'/'lang','namespace'=>'backend/base/index')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'script'/'ext'/'lang','namespace'=>'backend/base/index'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
de<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'script'/'ext'/'lang','namespace'=>'backend/base/index'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
        Ext.shopwareRevision = '<?php echo Shopware::REVISION;?>
';
        Ext.userLanguage = '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'script'/'ext'/'lang','namespace'=>'backend/base/index')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'script'/'ext'/'lang','namespace'=>'backend/base/index'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
de<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'script'/'ext'/'lang','namespace'=>'backend/base/index'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
';
    </script>

    <?php if ($_smarty_tpl->tpl_vars['user']->value){?>
        <script type="text/javascript" src="<?php echo '/backend/base';?>?file=bootstrap&loggedIn=<?php echo time();?>
"></script>
    <?php }else{ ?>
        <script type="text/javascript" src="<?php echo '/backend/base';?>?file=bootstrap&<?php echo Shopware::REVISION;?>
"></script>
    <?php }?>

<script type="text/javascript">
    var userName = '<?php echo $_smarty_tpl->tpl_vars['user']->value->name;?>
',
        maxParameterLength = '<?php echo $_smarty_tpl->tpl_vars['maxParameterLength']->value;?>
';

    Ext.define('Shopware.app.Application', {
        extend: 'Ext.app.Application',
        name: 'Shopware',
        singleton: true,
        autoCreateViewport: false,
        requires: [ 'Shopware.container.Viewport' ],
        baseComponents: {
            'Shopware.container.Viewport': false,
            'Shopware.apps.Index.view.Menu': false,
            'Shopware.apps.Index.view.Footer': false
        },
        viewport: null,
        launch: function() {
            var me = this,
                preloader = Ext.create('Shopware.component.Preloader').bindEvents(Shopware.app.Application),
                errorReporter = Ext.create('Shopware.global.ErrorReporter').bindEvents(Shopware.app.Application)

            /**
             * Activates the Ext.fx.Anim class globally and
             * drives the animations our CSS 3 if supported.
             */
            Ext.enableFx = true;

            this.addEvents('baseComponentsReady', 'subAppLoaded');

            // Disable currency sign
            Ext.apply(Ext.util.Format, {
                currencySign: ''
            });
            // Fix default date format
            Ext.Date.defaultFormat = Ext.util.Format.dateFormat;

            this.callParent(arguments);
<?php if ($_smarty_tpl->tpl_vars['user']->value){?>
            this.addSubApplication({
                name: "Shopware.apps.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['app']->value, ENT_QUOTES, 'utf-8', true);?>
",
                controller: <?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
,
                params: <?php echo $_smarty_tpl->tpl_vars['params']->value;?>
,
                localizedName: 'Shopware',
                firstRunWizardEnabled: <?php echo intval($_smarty_tpl->tpl_vars['firstRunWizardEnabled']->value);?>
,
                sbpLogin: <?php echo $_smarty_tpl->tpl_vars['sbpLogin']->value;?>
,
                updateWizardStarted: <?php echo intval($_smarty_tpl->tpl_vars['updateWizardStarted']->value);?>
,
                enableInstallationFeedback: <?php echo intval($_smarty_tpl->tpl_vars['installationSurvey']->value);?>
,
                enableBetaFeedback: <?php echo intval($_smarty_tpl->tpl_vars['feedbackRequired']->value);?>

            });
<?php }else{ ?>
            this.addSubApplication({
                name: "Shopware.apps.Login",
                localizedName: 'Login'
            });
<?php }?>

            // Start preloading the icon sets
            me.iconPreloader = Ext.create('Shopware.component.IconPreloader', {
                loadPath: "http://127.0.0.1:8080/themes/Backend/ExtJs/backend/_resources/resources/css"
            });
        },

        /**
         * Checks if all base components are loaded and rendered.
         * If truthy the preloader will be triggered.
         *
         * @param cmp - Component which calls the method
         * @return void
         */
        baseComponentIsReady: function(cmp) {
            var me = this,
                allReady = true;

            me.baseComponents[cmp.$className] = true;
            Ext.iterate(me.baseComponents, function(index, item) {
                if(!item) {
                    allReady = false;
                    return false;
                }
            });

            if(allReady) {
                window.setTimeout(function() {
                    me.fireEvent('baseComponentsReady', me);
                }, 1000);
            }
        }
    });

    /** Basic loader configuration  */
    Ext.Loader.setConfig({
        enabled: true,
        disableCaching: true,
        disableCachingParam: 'no-cache',
        disableCachingValue: '1513560565<?php if ($_smarty_tpl->tpl_vars['user']->value&&$_smarty_tpl->tpl_vars['user']->value->locale){?>+<?php echo $_smarty_tpl->tpl_vars['user']->value->locale->getId();?>
+<?php echo $_smarty_tpl->tpl_vars['user']->value->role->getId();?>
<?php }?>'
    });
    Ext.Loader.setPath('Shopware.apps', '<?php echo '/backend';?>', '?file=app');

    Ext.onReady(function() {
        var timeField = Ext.create('Ext.form.field.Time');
        this.timeFormat = timeField.format;
    });
</script>

</head>
<?php }} ?>