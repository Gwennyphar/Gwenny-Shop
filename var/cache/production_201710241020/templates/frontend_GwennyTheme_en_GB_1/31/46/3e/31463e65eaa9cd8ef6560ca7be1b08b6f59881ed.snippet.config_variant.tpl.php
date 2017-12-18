<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 18:53:09
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Frontend/Bare/frontend/detail/config_variant.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11195085195a3800853fc366-05625158%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31463e65eaa9cd8ef6560ca7be1b08b6f59881ed' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Frontend/Bare/frontend/detail/config_variant.tpl',
      1 => 1508840484,
      2 => 'file',
    ),
    '61495bf5b956ed1bd474a9cb69f8663522780947' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Frontend/Bare/frontend/detail/config_reset.tpl',
      1 => 1508840484,
      2 => 'snippet',
    ),
  ),
  'nocache_hash' => '11195085195a3800853fc366-05625158',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sArticle' => 0,
    'configurator' => 0,
    'configuratorGroup' => 0,
    'option' => 0,
    'theme' => 0,
    'media' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a3800855741a6_69523045',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3800855741a6_69523045')) {function content_5a3800855741a6_69523045($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['configurator'] = new Smarty_variable($_smarty_tpl->tpl_vars['sArticle']->value['sConfigurator'], null, 0);?>


    <div class="configurator--variant">

        
            <form method="post" action="<?php echo htmlspecialchars(Shopware()->Front()->Router()->assemble(array('sArticle' => $_smarty_tpl->tpl_vars['sArticle']->value['articleID'], 'sCategory' => $_smarty_tpl->tpl_vars['sArticle']->value['categoryID'], ))); ?>" class="configurator--form">

                <?php  $_smarty_tpl->tpl_vars['configuratorGroup'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['configuratorGroup']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['configurator']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['configuratorGroup']->key => $_smarty_tpl->tpl_vars['configuratorGroup']->value){
$_smarty_tpl->tpl_vars['configuratorGroup']->_loop = true;
?>
                    
                        <div class="variant--group">

                            
                                <p class="variant--name"><?php echo $_smarty_tpl->tpl_vars['configuratorGroup']->value['groupname'];?>
</p>
                            

                            
                                <?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['configuratorGroup']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value){
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>

                                    
                                        <div class="variant--option<?php if ($_smarty_tpl->tpl_vars['option']->value['media']){?> is--image<?php }?>">

                                            
                                                <input type="radio"
                                                       class="option--input"
                                                       id="group[<?php echo $_smarty_tpl->tpl_vars['option']->value['groupID'];?>
][<?php echo $_smarty_tpl->tpl_vars['option']->value['optionID'];?>
]"
                                                       name="group[<?php echo $_smarty_tpl->tpl_vars['option']->value['groupID'];?>
]"
                                                       value="<?php echo $_smarty_tpl->tpl_vars['option']->value['optionID'];?>
"
                                                       title="<?php echo $_smarty_tpl->tpl_vars['option']->value['optionname'];?>
"
                                                       <?php if ($_smarty_tpl->tpl_vars['theme']->value['ajaxVariantSwitch']){?>data-ajax-select-variants="true"<?php }else{ ?>data-auto-submit="true"<?php }?>
                                                       <?php if (!$_smarty_tpl->tpl_vars['option']->value['selectable']){?>disabled="disabled"<?php }?>
                                                       <?php if ($_smarty_tpl->tpl_vars['option']->value['selected']&&$_smarty_tpl->tpl_vars['option']->value['selectable']){?>checked="checked"<?php }?> />
                                            

                                            
                                                <label for="group[<?php echo $_smarty_tpl->tpl_vars['option']->value['groupID'];?>
][<?php echo $_smarty_tpl->tpl_vars['option']->value['optionID'];?>
]" class="option--label<?php if (!$_smarty_tpl->tpl_vars['option']->value['selectable']){?> is--disabled<?php }?>">

                                                    <?php if ($_smarty_tpl->tpl_vars['option']->value['media']){?>
                                                        <?php $_smarty_tpl->tpl_vars['media'] = new Smarty_variable($_smarty_tpl->tpl_vars['option']->value['media'], null, 0);?>

                                                        
                                                            <span class="image--element">
                                                                <span class="image--media">
                                                                    <?php if (isset($_smarty_tpl->tpl_vars['media']->value['thumbnails'])){?>
                                                                        <img srcset="<?php echo $_smarty_tpl->tpl_vars['media']->value['thumbnails'][0]['sourceSet'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['option']->value['optionname'];?>
" />
                                                                    <?php }else{ ?>
                                                                        <img src="/themes/Frontend/Responsive/frontend/_public/src/img/no-picture.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['option']->value['optionname'];?>
">
                                                                    <?php }?>
                                                                </span>
                                                            </span>
                                                        
                                                    <?php }else{ ?>
                                                        
                                                            <?php echo $_smarty_tpl->tpl_vars['option']->value['optionname'];?>

                                                        
                                                    <?php }?>
                                                </label>
                                            
                                        </div>
                                    
                                <?php } ?>
                            
                        </div>
                    
                <?php } ?>
            </form>
        
    </div>



    <?php /*  Call merged included template "frontend/detail/config_reset.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("frontend/detail/config_reset.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '11195085195a3800853fc366-05625158');
content_5a38008547c877_11156865($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/detail/config_reset.tpl" */?>

<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 18:53:09
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Frontend/Bare/frontend/detail/config_reset.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a38008547c877_11156865')) {function content_5a38008547c877_11156865($_smarty_tpl) {?>
    <?php  $_smarty_tpl->tpl_vars['sConfigurator'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sConfigurator']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sArticle']->value['sConfigurator']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sConfigurator']->key => $_smarty_tpl->tpl_vars['sConfigurator']->value){
$_smarty_tpl->tpl_vars['sConfigurator']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['sConfigurator']->value['user_selected']){?>
            
                <a class="btn is--icon-left reset--configuration" href="<?php echo htmlspecialchars(Shopware()->Front()->Router()->assemble(array('sArticle' => $_smarty_tpl->tpl_vars['sArticle']->value['articleID'], 'sCategory' => $_smarty_tpl->tpl_vars['sArticle']->value['categoryID'], ))); ?>">
                    <i class="icon--cross"></i>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"DetailConfiguratorReset",'namespace'=>'frontend/detail/config_reset','default'=>'Reset selection')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"DetailConfiguratorReset",'namespace'=>'frontend/detail/config_reset','default'=>'Reset selection'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Reset selection<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"DetailConfiguratorReset",'namespace'=>'frontend/detail/config_reset','default'=>'Reset selection'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </a>
            
            <?php break 1?>
        <?php }?>
    <?php } ?>
<?php }} ?>