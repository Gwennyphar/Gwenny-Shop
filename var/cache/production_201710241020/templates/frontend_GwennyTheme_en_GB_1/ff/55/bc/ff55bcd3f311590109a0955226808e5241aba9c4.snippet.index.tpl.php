<?php /* Smarty version Smarty-3.1.12, created on 2017-12-19 23:46:58
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Frontend/Bare/widgets/compare/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17560545485a3996e22ec965-02037139%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff55bcd3f311590109a0955226808e5241aba9c4' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Frontend/Bare/widgets/compare/index.tpl',
      1 => 1508840484,
      2 => 'file',
    ),
    '219cea3d7ab72d2dab0042c1bd55a99f5738d07a' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Frontend/Bare/frontend/compare/index.tpl',
      1 => 1508840484,
      2 => 'snippet',
    ),
  ),
  'nocache_hash' => '17560545485a3996e22ec965-02037139',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a3996e2346652_32307506',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3996e2346652_32307506')) {function content_5a3996e2346652_32307506($_smarty_tpl) {?>
    <?php /*  Call merged included template "frontend/compare/index.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("frontend/compare/index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '17560545485a3996e22ec965-02037139');
content_5a3996e22f2f73_66847216($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/compare/index.tpl" */?>

<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2017-12-19 23:46:58
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Frontend/Bare/frontend/compare/index.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a3996e22f2f73_66847216')) {function content_5a3996e22f2f73_66847216($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['sComparisons']->value){?>
    
        <i class="icon--compare"></i> <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"CompareInfoCount",'namespace'=>'frontend/compare/index')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"CompareInfoCount",'namespace'=>'frontend/compare/index'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Compare<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"CompareInfoCount",'namespace'=>'frontend/compare/index'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<span class="compare--quantity">(<?php echo count($_smarty_tpl->tpl_vars['sComparisons']->value);?>
)</span>
    
    
        <ul class="compare--list is--rounded" data-product-compare-menu="true" role="menu">
            <?php  $_smarty_tpl->tpl_vars['compare'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['compare']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sComparisons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['compare']->key => $_smarty_tpl->tpl_vars['compare']->value){
$_smarty_tpl->tpl_vars['compare']->_loop = true;
?>
                
                <li class="compare--entry" role="menuitem">
                    
                        <a href="<?php echo htmlspecialchars(Shopware()->Front()->Router()->assemble(array('controller' => 'detail', 'sArticle' => $_smarty_tpl->tpl_vars['compare']->value['articleId'], ))); ?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['compare']->value['articlename'], ENT_QUOTES, 'utf-8', true);?>
" class="compare--link"><?php echo $_smarty_tpl->tpl_vars['compare']->value['articlename'];?>
</a>
                    

                    
                        <form action="<?php echo htmlspecialchars(Shopware()->Front()->Router()->assemble(array('controller' => 'compare', 'action' => 'delete_article', 'articleID' => $_smarty_tpl->tpl_vars['compare']->value['articleID'], ))); ?>" method="post">
                            <button type="submit" class="btn btn--item-delete">
                                <i class="icon--cross compare--icon-remove"></i>
                            </button>
                        </form>
                    
                </li>
                
            <?php } ?>
            
                <li>
                    <a href="<?php echo 'http://127.0.0.1:8080/compare/overlay';?>" data-modal-title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"CompareInfoCount",'namespace'=>'frontend/compare/index')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"CompareInfoCount",'namespace'=>'frontend/compare/index'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Compare<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"CompareInfoCount",'namespace'=>'frontend/compare/index'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" rel="nofollow" class="btn--compare btn--compare-start btn is--primary is--full is--small is--icon-right">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"CompareActionStart",'namespace'=>'frontend/compare/index')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"CompareActionStart",'namespace'=>'frontend/compare/index'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Start comparison<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"CompareActionStart",'namespace'=>'frontend/compare/index'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        <i class="icon--arrow-right"></i>
                    </a>
                </li>
            
            
                <li>
                    <form action="<?php echo htmlspecialchars(Shopware()->Front()->Router()->assemble(array('controller' => 'compare', 'action' => 'delete_all', 'forceSecure' => '1', ))); ?>" method="post">
                        <button type="submit" class="btn--compare-delete btn--compare btn is--secondary is--small is--full">
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"CompareActionDelete",'namespace'=>'frontend/compare/index')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"CompareActionDelete",'namespace'=>'frontend/compare/index'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Delete comparison<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"CompareActionDelete",'namespace'=>'frontend/compare/index'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </button>
                    </form>
                </li>
            
        </ul>
    
<?php }?>
<?php }} ?>