<?php /* Smarty version Smarty-3.1.12, created on 2017-12-19 21:55:44
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Frontend/Bare/widgets/listing/get_category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12085912015a397cd0df0ff7-60049901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a2866b8f174ccf7009881689b29799ee7256190' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Frontend/Bare/widgets/listing/get_category.tpl',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12085912015a397cd0df0ff7-60049901',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'categoryLink' => 0,
    'children' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a397cd1047448_33133077',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a397cd1047448_33133077')) {function content_5a397cd1047448_33133077($_smarty_tpl) {?>


    <div class="offcanvas--overlay">

        
            <div class="overlay--headline">
                
                    <a class="navigation--link link--go-main" href="#" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"MainMenu",'namespace'=>'frontend/listing/get_category')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"MainMenu",'namespace'=>'frontend/listing/get_category'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Main menu<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"MainMenu",'namespace'=>'frontend/listing/get_category'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
">
                        <i class="icon--menu"></i> <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"MainMenu",'namespace'=>'frontend/listing/get_category')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"MainMenu",'namespace'=>'frontend/listing/get_category'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Main menu<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"MainMenu",'namespace'=>'frontend/listing/get_category'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </a>
                
            </div>
        

        
            <div class="overlay--category">
                
                    <a href="<?php echo $_smarty_tpl->tpl_vars['category']->value['link'];?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'utf-8', true);?>
">
                        <span class="category--headline"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</span>
                    </a>
                
            </div>
        

        
            <ul class="sidebar--navigation categories--sublevel navigation--list" role="menu">

                
                
                    <li class="navigation--entry" role="menuitem">
                        
                            <a href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['category']->value['parentId'];?>
<?php $_tmp1=ob_get_clean();?><?php echo htmlspecialchars(Shopware()->Front()->Router()->assemble(array('module' => 'widgets', 'controller' => 'listing', 'action' => 'getCategory', 'categoryId' => $_tmp1, ))); ?>" data-parentId="<?php echo $_smarty_tpl->tpl_vars['category']->value['parentId'];?>
" class="navigation--link is--back-button link--go-back" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"ButtonBack",'namespace'=>'frontend/listing/get_category')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ButtonBack",'namespace'=>'frontend/listing/get_category'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Back<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ButtonBack",'namespace'=>'frontend/listing/get_category'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
">
                                
                                    <span class="is--icon-left">
                                        <i class="icon--arrow-left"></i>
                                    </span>
                                

                                
                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"ButtonBack",'namespace'=>'frontend/listing/get_category')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ButtonBack",'namespace'=>'frontend/listing/get_category'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Back<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ButtonBack",'namespace'=>'frontend/listing/get_category'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                
                            </a>
                        
                    </li>
                

                
                
                    <li class="navigation--entry" role="menuitem">
                        

                            <?php $_smarty_tpl->tpl_vars['categoryLink'] = new Smarty_variable($_smarty_tpl->tpl_vars['category']->value['link'], null, 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['category']->value['external']){?>
                                <?php $_smarty_tpl->tpl_vars['categoryLink'] = new Smarty_variable($_smarty_tpl->tpl_vars['category']->value['external'], null, 0);?>
                            <?php }?>

                            <a href="<?php echo $_smarty_tpl->tpl_vars['categoryLink']->value;?>
" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"ButtonShowPrepend",'namespace'=>'frontend/listing/get_category')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ButtonShowPrepend",'namespace'=>'frontend/listing/get_category'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Show<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ButtonShowPrepend",'namespace'=>'frontend/listing/get_category'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'utf-8', true);?>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"ButtonShowAppend",'namespace'=>'frontend/listing/get_category')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ButtonShowAppend",'namespace'=>'frontend/listing/get_category'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ButtonShowAppend",'namespace'=>'frontend/listing/get_category'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"
                               class="navigation--link is--display-button"
                               <?php if ($_smarty_tpl->tpl_vars['category']->value['external']&&$_smarty_tpl->tpl_vars['category']->value['externalTarget']){?>target="<?php echo $_smarty_tpl->tpl_vars['category']->value['externalTarget'];?>
"<?php }?>>
                                
                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"ButtonShowPrepend",'namespace'=>'frontend/listing/get_category')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ButtonShowPrepend",'namespace'=>'frontend/listing/get_category'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Show<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ButtonShowPrepend",'namespace'=>'frontend/listing/get_category'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"ButtonShowAppend",'namespace'=>'frontend/listing/get_category')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ButtonShowAppend",'namespace'=>'frontend/listing/get_category'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ButtonShowAppend",'namespace'=>'frontend/listing/get_category'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                
                            </a>
                        
                    </li>
                

                
                <?php  $_smarty_tpl->tpl_vars['children'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['children']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['children']->key => $_smarty_tpl->tpl_vars['children']->value){
$_smarty_tpl->tpl_vars['children']->_loop = true;
?>
                    
                        <?php if ($_smarty_tpl->tpl_vars['children']->value['active']){?>
                            <li class="navigation--entry" role="menuitem">
                                
                                
                                    <?php $_smarty_tpl->tpl_vars['link'] = new Smarty_variable($_smarty_tpl->tpl_vars['children']->value['link'], null, 0);?>
                                    <?php if ($_smarty_tpl->tpl_vars['children']->value['external']){?>
                                        <?php $_smarty_tpl->tpl_vars['link'] = new Smarty_variable($_smarty_tpl->tpl_vars['children']->value['external'], null, 0);?>
                                    <?php }?>

                                    <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['children']->value['name'], ENT_QUOTES, 'utf-8', true);?>
"
                                       class="navigation--link<?php if ($_smarty_tpl->tpl_vars['children']->value['childrenCount']){?> link--go-forward<?php }?>"
                                       data-category-id="<?php echo $_smarty_tpl->tpl_vars['children']->value['id'];?>
"
                                       data-fetchUrl="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['children']->value['id'];?>
<?php $_tmp2=ob_get_clean();?><?php echo htmlspecialchars(Shopware()->Front()->Router()->assemble(array('module' => 'widgets', 'controller' => 'listing', 'action' => 'getCategory', 'categoryId' => $_tmp2, ))); ?>"
                                       <?php if ($_smarty_tpl->tpl_vars['children']->value['external']&&$_smarty_tpl->tpl_vars['category']->value['externalTarget']){?>target="<?php echo $_smarty_tpl->tpl_vars['children']->value['externalTarget'];?>
"<?php }?>>

                                        
                                            <?php echo $_smarty_tpl->tpl_vars['children']->value['name'];?>

                                        

                                        
                                            <?php if ($_smarty_tpl->tpl_vars['children']->value['childrenCount']){?>
                                                <span class="is--icon-right">
                                                    <i class="icon--arrow-right"></i>
                                                </span>
                                            <?php }?>
                                        
                                    </a>
                                
                            </li>
                        <?php }?>
                    
                <?php } ?>
            </ul>
        
    </div>

<?php }} ?>