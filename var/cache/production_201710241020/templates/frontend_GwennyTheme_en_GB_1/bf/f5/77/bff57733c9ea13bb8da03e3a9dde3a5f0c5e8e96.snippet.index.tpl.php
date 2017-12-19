<?php /* Smarty version Smarty-3.1.12, created on 2017-12-19 01:13:20
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Frontend/Bare/frontend/plugins/seo/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14463979375a3859a029e503-45679709%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bff57733c9ea13bb8da03e3a9dde3a5f0c5e8e96' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Frontend/Bare/frontend/plugins/seo/index.tpl',
      1 => 1508840484,
      2 => 'file',
    ),
    '852b223e6910b2f9291dc318d32565e41a6aef0c' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Frontend/Bare/frontend/detail/product_quick_view.tpl',
      1 => 1508840484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14463979375a3859a029e503-45679709',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sArticle' => 0,
    'alt' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a3859a033dc46_80462334',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3859a033dc46_80462334')) {function content_5a3859a033dc46_80462334($_smarty_tpl) {?>
    <div class="product--quick-view">
        

            
                <a class="quick-view--image-link" href="<?php echo $_smarty_tpl->tpl_vars['sArticle']->value['linkDetails'];?>
" title="<?php if ($_smarty_tpl->tpl_vars['sArticle']->value['image']['res']['description']){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sArticle']->value['image']['res']['description'], ENT_QUOTES, 'utf-8', true);?>
<?php }else{ ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sArticle']->value['articlename'], ENT_QUOTES, 'utf-8', true);?>
<?php }?>">
                    

                        <?php $_smarty_tpl->tpl_vars['alt'] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['sArticle']->value['articlename'], ENT_QUOTES, 'utf-8', true), null, 0);?>

                        <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['image']['description']){?>
                            <?php $_smarty_tpl->tpl_vars['alt'] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['sArticle']->value['image']['description'], ENT_QUOTES, 'utf-8', true), null, 0);?>
                        <?php }?>

                        <span class="quick-view--image">
                            
                                <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['image']['thumbnails']){?>
                                    <img srcset="<?php echo $_smarty_tpl->tpl_vars['sArticle']->value['image']['thumbnails'][1]['sourceSet'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['alt']->value;?>
" />
                                <?php }else{ ?>
                                    
                                        <img src="/themes/Frontend/Responsive/frontend/_public/src/img/no-picture.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['alt']->value;?>
">
                                    
                                <?php }?>
                            
                        </span>
                    
                </a>
            

            
                <div class="quick-view--header">
                    
                        
                            <a href="<?php echo $_smarty_tpl->tpl_vars['sArticle']->value['linkDetails'];?>
" class="quick-view--title" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sArticle']->value['articleName'], ENT_QUOTES, 'utf-8', true);?>
">
                                
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sArticle']->value['articleName'], ENT_QUOTES, 'utf-8', true);?>

                                
                            </a>
                        

                        
                            <div class="quick-view--supplier">
                                
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sArticle']->value['supplierName'], ENT_QUOTES, 'utf-8', true);?>

                                
                            </div>
                        
                    
                </div>
            

            
                <div class="quick-view--description-title">
                    
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"DetailDescriptionHeader",'namespace'=>'frontend/detail/product_quick_view')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"DetailDescriptionHeader",'namespace'=>'frontend/detail/product_quick_view'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Product information<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"DetailDescriptionHeader",'namespace'=>'frontend/detail/product_quick_view'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    
                </div>
            

            
                <div class="quick-view--description">
                    
                        <?php echo $_smarty_tpl->tpl_vars['sArticle']->value['description_long'];?>

                    
                </div>
            
        
    </div>

<?php }} ?>