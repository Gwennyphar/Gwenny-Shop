<?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 18:53:09
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Frontend/Bare/widgets/recommendation/viewed.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2661889925a380085a8f2d8-32299167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffdbbe8de5934e30e6a9186d60b069766aa97db0' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Frontend/Bare/widgets/recommendation/viewed.tpl',
      1 => 1508840484,
      2 => 'file',
    ),
    '57d9ddba79a950f0cd98830a4b4294fbb41e9905' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Frontend/Bare/frontend/listing/product-box/product-badges.tpl',
      1 => 1508840484,
      2 => 'snippet',
    ),
    'e21a7eb5c4b0747e6090f34c75a3081b83028ce6' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Frontend/Bare/frontend/listing/product-box/product-image.tpl',
      1 => 1508840484,
      2 => 'snippet',
    ),
    '10bfc34e7a2ad59f85a7acab73e627ab589002dc' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Frontend/Bare/frontend/_includes/rating.tpl',
      1 => 1508840484,
      2 => 'snippet',
    ),
    '263b4e7d41138e973fc3764ecbf88f17ca01f938' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Frontend/Bare/frontend/listing/product-box/product-price-unit.tpl',
      1 => 1508840484,
      2 => 'snippet',
    ),
    '05f2211e9a713f387bf2f99f1eaa9718552e8987' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Frontend/Bare/frontend/listing/product-box/product-price.tpl',
      1 => 1508840484,
      2 => 'snippet',
    ),
    'd07dbe6116b2f81cc47431670ad49ffc55452e4d' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Frontend/Bare/frontend/listing/product-box/button-buy.tpl',
      1 => 1508840484,
      2 => 'snippet',
    ),
    'f70c4b7c869b549357a520b3197bc5745a000f03' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Frontend/Bare/frontend/listing/product-box/button-detail.tpl',
      1 => 1508840484,
      2 => 'snippet',
    ),
    'b9457ad054d2c84d208dd78b6a7f88839bc67f9f' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Frontend/Bare/frontend/listing/product-box/product-actions.tpl',
      1 => 1508840484,
      2 => 'snippet',
    ),
    'f397fef68ab16a2d0b3ff41efb12e804f191dbea' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Frontend/Bare/frontend/listing/product-box/box-basic.tpl',
      1 => 1508840484,
      2 => 'snippet',
    ),
    'b94203945bb0c9ddc45f226d774d9afed17147ba' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Frontend/Bare/frontend/listing/box_article.tpl',
      1 => 1508840484,
      2 => 'snippet',
    ),
    'be79e9473d7fb181746cacca5fe4fdf44f4eb889' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Frontend/Bare/frontend/_includes/product_slider_item.tpl',
      1 => 1508840484,
      2 => 'snippet',
    ),
    'a80144bfa843713ffdbfb552c9ea54d89ae0e804' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Frontend/Bare/frontend/_includes/product_slider_items.tpl',
      1 => 1508840484,
      2 => 'snippet',
    ),
    '57acd56bfa7adc764021e96a3d4bc00f42dabbbb' => 
    array (
      0 => '/var/www/html/shopware/apps/shopware/htdocs/themes/Frontend/Bare/frontend/_includes/product_slider.tpl',
      1 => 1508840484,
      2 => 'snippet',
    ),
  ),
  'nocache_hash' => '2661889925a380085a8f2d8-32299167',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'viewedArticles' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5a380085f0d173_50502745',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a380085f0d173_50502745')) {function content_5a380085f0d173_50502745($_smarty_tpl) {?>
    <?php if ($_smarty_tpl->tpl_vars['viewedArticles']->value){?>
        
            <div class="viewed--content">
                <?php /*  Call merged included template "frontend/_includes/product_slider.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("frontend/_includes/product_slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('articles'=>$_smarty_tpl->tpl_vars['viewedArticles']->value,'sliderInitOnEvent'=>"onShowContent-alsoviewed"), 0, '2661889925a380085a8f2d8-32299167');
content_5a380085a9ad76_67796535($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/_includes/product_slider.tpl" */?>
            </div>
        
    <?php }?>

<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 18:53:09
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Frontend/Bare/frontend/_includes/product_slider.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a380085a9ad76_67796535')) {function content_5a380085a9ad76_67796535($_smarty_tpl) {?>

    <?php $_smarty_tpl->tpl_vars['productSliderCls'] = new Smarty_variable($_smarty_tpl->tpl_vars['productSliderCls']->value ? $_smarty_tpl->tpl_vars['productSliderCls']->value : '', null, 0);?>
    <?php $_smarty_tpl->tpl_vars['productBoxLayout'] = new Smarty_variable($_smarty_tpl->tpl_vars['productBoxLayout']->value ? $_smarty_tpl->tpl_vars['productBoxLayout']->value : "slider", null, 0);?>
    <?php $_smarty_tpl->tpl_vars['sliderMode'] = new Smarty_variable($_smarty_tpl->tpl_vars['sliderMode']->value ? $_smarty_tpl->tpl_vars['sliderMode']->value : '', null, 0);?>
    <?php $_smarty_tpl->tpl_vars['sliderOrientation'] = new Smarty_variable($_smarty_tpl->tpl_vars['sliderOrientation']->value ? $_smarty_tpl->tpl_vars['sliderOrientation']->value : '', null, 0);?>
    <?php $_smarty_tpl->tpl_vars['sliderItemMinWidth'] = new Smarty_variable($_smarty_tpl->tpl_vars['sliderItemMinWidth']->value ? $_smarty_tpl->tpl_vars['sliderItemMinWidth']->value : '', null, 0);?>
    <?php $_smarty_tpl->tpl_vars['sliderItemMinHeight'] = new Smarty_variable($_smarty_tpl->tpl_vars['sliderItemMinHeight']->value ? $_smarty_tpl->tpl_vars['sliderItemMinHeight']->value : '', null, 0);?>
    <?php $_smarty_tpl->tpl_vars['sliderItemsPerSlide'] = new Smarty_variable($_smarty_tpl->tpl_vars['sliderItemsPerSlide']->value ? $_smarty_tpl->tpl_vars['sliderItemsPerSlide']->value : '', null, 0);?>
    <?php $_smarty_tpl->tpl_vars['sliderItemsPerPage'] = new Smarty_variable($_smarty_tpl->tpl_vars['sliderItemsPerPage']->value ? $_smarty_tpl->tpl_vars['sliderItemsPerPage']->value : '', null, 0);?>
    <?php $_smarty_tpl->tpl_vars['sliderAutoSlide'] = new Smarty_variable($_smarty_tpl->tpl_vars['sliderAutoSlide']->value ? $_smarty_tpl->tpl_vars['sliderAutoSlide']->value : '', null, 0);?>
    <?php $_smarty_tpl->tpl_vars['sliderAutoSlideDirection'] = new Smarty_variable($_smarty_tpl->tpl_vars['sliderAutoSlideDirection']->value ? $_smarty_tpl->tpl_vars['sliderAutoSlideDirection']->value : '', null, 0);?>
    <?php $_smarty_tpl->tpl_vars['sliderAutoSlideSpeed'] = new Smarty_variable($_smarty_tpl->tpl_vars['sliderAutoSlideSpeed']->value ? $_smarty_tpl->tpl_vars['sliderAutoSlideSpeed']->value : '', null, 0);?>
    <?php $_smarty_tpl->tpl_vars['sliderAutoScroll'] = new Smarty_variable($_smarty_tpl->tpl_vars['sliderAutoScroll']->value ? $_smarty_tpl->tpl_vars['sliderAutoScroll']->value : '', null, 0);?>
    <?php $_smarty_tpl->tpl_vars['sliderAutoScrollDirection'] = new Smarty_variable($_smarty_tpl->tpl_vars['sliderAutoScrollDirection']->value ? $_smarty_tpl->tpl_vars['sliderAutoScrollDirection']->value : '', null, 0);?>
    <?php $_smarty_tpl->tpl_vars['sliderAutoScrollSpeed'] = new Smarty_variable($_smarty_tpl->tpl_vars['sliderAutoScrollSpeed']->value ? $_smarty_tpl->tpl_vars['sliderAutoScrollSpeed']->value : '', null, 0);?>
    <?php $_smarty_tpl->tpl_vars['sliderScrollDistance'] = new Smarty_variable($_smarty_tpl->tpl_vars['sliderScrollDistance']->value ? $_smarty_tpl->tpl_vars['sliderScrollDistance']->value : '', null, 0);?>
    <?php $_smarty_tpl->tpl_vars['sliderAnimationSpeed'] = new Smarty_variable($_smarty_tpl->tpl_vars['sliderAnimationSpeed']->value ? $_smarty_tpl->tpl_vars['sliderAnimationSpeed']->value : '', null, 0);?>
    <?php $_smarty_tpl->tpl_vars['sliderArrowControls'] = new Smarty_variable($_smarty_tpl->tpl_vars['sliderArrowControls']->value ? $_smarty_tpl->tpl_vars['sliderArrowControls']->value : '', null, 0);?>
    <?php $_smarty_tpl->tpl_vars['sliderArrowAction'] = new Smarty_variable($_smarty_tpl->tpl_vars['sliderArrowAction']->value ? $_smarty_tpl->tpl_vars['sliderArrowAction']->value : '', null, 0);?>
    <?php $_smarty_tpl->tpl_vars['sliderWrapperCls'] = new Smarty_variable($_smarty_tpl->tpl_vars['sliderWrapperCls']->value ? $_smarty_tpl->tpl_vars['sliderWrapperCls']->value : '', null, 0);?>
    <?php $_smarty_tpl->tpl_vars['sliderHorizontalCls'] = new Smarty_variable($_smarty_tpl->tpl_vars['sliderHorizontalCls']->value ? $_smarty_tpl->tpl_vars['sliderHorizontalCls']->value : '', null, 0);?>
    <?php $_smarty_tpl->tpl_vars['sliderVerticalCls'] = new Smarty_variable($_smarty_tpl->tpl_vars['sliderVerticalCls']->value ? $_smarty_tpl->tpl_vars['sliderVerticalCls']->value : '', null, 0);?>
    <?php $_smarty_tpl->tpl_vars['sliderArrowCls'] = new Smarty_variable($_smarty_tpl->tpl_vars['sliderArrowCls']->value ? $_smarty_tpl->tpl_vars['sliderArrowCls']->value : '', null, 0);?>
    <?php $_smarty_tpl->tpl_vars['sliderPrevArrowCls'] = new Smarty_variable($_smarty_tpl->tpl_vars['sliderPrevArrowCls']->value ? $_smarty_tpl->tpl_vars['sliderPrevArrowCls']->value : '', null, 0);?>
    <?php $_smarty_tpl->tpl_vars['sliderNextArrowCls'] = new Smarty_variable($_smarty_tpl->tpl_vars['sliderNextArrowCls']->value ? $_smarty_tpl->tpl_vars['sliderNextArrowCls']->value : '', null, 0);?>
    <?php $_smarty_tpl->tpl_vars['sliderAjaxCtrlUrl'] = new Smarty_variable($_smarty_tpl->tpl_vars['sliderAjaxCtrlUrl']->value ? $_smarty_tpl->tpl_vars['sliderAjaxCtrlUrl']->value : '', null, 0);?>
    <?php $_smarty_tpl->tpl_vars['sliderAjaxCategoryID'] = new Smarty_variable($_smarty_tpl->tpl_vars['sliderAjaxCategoryID']->value ? $_smarty_tpl->tpl_vars['sliderAjaxCategoryID']->value : '', null, 0);?>
    <?php $_smarty_tpl->tpl_vars['sliderAjaxMaxShow'] = new Smarty_variable($_smarty_tpl->tpl_vars['sliderAjaxMaxShow']->value ? $_smarty_tpl->tpl_vars['sliderAjaxMaxShow']->value : '', null, 0);?>
    <?php $_smarty_tpl->tpl_vars['sliderAjaxShowLoadingIndicator'] = new Smarty_variable($_smarty_tpl->tpl_vars['sliderAjaxShowLoadingIndicator']->value ? $_smarty_tpl->tpl_vars['sliderAjaxShowLoadingIndicator']->value : '', null, 0);?>
    <?php $_smarty_tpl->tpl_vars['sliderInitOnEvent'] = new Smarty_variable($_smarty_tpl->tpl_vars['sliderInitOnEvent']->value ? $_smarty_tpl->tpl_vars['sliderInitOnEvent']->value : '', null, 0);?>
    <?php $_smarty_tpl->tpl_vars['fixedImageSize'] = new Smarty_variable($_smarty_tpl->tpl_vars['fixedImageSize']->value ? $_smarty_tpl->tpl_vars['fixedImageSize']->value : '', null, 0);?>




    <div class="product-slider <?php echo $_smarty_tpl->tpl_vars['productSliderCls']->value;?>
"
         <?php if ($_smarty_tpl->tpl_vars['sliderMode']->value){?>data-mode="<?php echo $_smarty_tpl->tpl_vars['sliderMode']->value;?>
"<?php }?>
         <?php if ($_smarty_tpl->tpl_vars['sliderOrientation']->value){?>data-orientation="<?php echo $_smarty_tpl->tpl_vars['sliderOrientation']->value;?>
"<?php }?>
         <?php if ($_smarty_tpl->tpl_vars['sliderItemMinWidth']->value){?>data-itemMinWidth="<?php echo $_smarty_tpl->tpl_vars['sliderItemMinWidth']->value;?>
"<?php }?>
         <?php if ($_smarty_tpl->tpl_vars['sliderItemMinHeight']->value){?>data-itemMinHeight="<?php echo $_smarty_tpl->tpl_vars['sliderItemMinHeight']->value;?>
"<?php }?>
         <?php if ($_smarty_tpl->tpl_vars['sliderItemsPerSlide']->value){?>data-itemsPerSlide="<?php echo $_smarty_tpl->tpl_vars['sliderItemsPerSlide']->value;?>
"<?php }?>
         <?php if ($_smarty_tpl->tpl_vars['sliderItemsPerPage']->value){?>data-itemsPerPage="<?php echo $_smarty_tpl->tpl_vars['sliderItemsPerPage']->value;?>
"<?php }?>
         <?php if ($_smarty_tpl->tpl_vars['sliderAutoSlide']->value){?>data-autoSlide="<?php echo $_smarty_tpl->tpl_vars['sliderAutoSlide']->value;?>
"<?php }?>
         <?php if ($_smarty_tpl->tpl_vars['sliderAutoSlideDirection']->value){?>data-autoSlideDirection="<?php echo $_smarty_tpl->tpl_vars['sliderAutoSlideDirection']->value;?>
"<?php }?>
         <?php if ($_smarty_tpl->tpl_vars['sliderAutoSlideSpeed']->value){?>data-autoSlideSpeed="<?php echo $_smarty_tpl->tpl_vars['sliderAutoSlideSpeed']->value;?>
"<?php }?>
         <?php if ($_smarty_tpl->tpl_vars['sliderAutoScroll']->value){?>data-autoScroll="<?php echo $_smarty_tpl->tpl_vars['sliderAutoScroll']->value;?>
"<?php }?>
         <?php if ($_smarty_tpl->tpl_vars['sliderAutoScrollDirection']->value){?>data-autoScrollDirection="<?php echo $_smarty_tpl->tpl_vars['sliderAutoScrollDirection']->value;?>
"<?php }?>
         <?php if ($_smarty_tpl->tpl_vars['sliderAutoScrollSpeed']->value){?>data-autoScrollSpeed="<?php echo $_smarty_tpl->tpl_vars['sliderAutoScrollSpeed']->value;?>
"<?php }?>
         <?php if ($_smarty_tpl->tpl_vars['sliderScrollDistance']->value){?>data-scrollDistance="<?php echo $_smarty_tpl->tpl_vars['sliderScrollDistance']->value;?>
"<?php }?>
         <?php if ($_smarty_tpl->tpl_vars['sliderAnimationSpeed']->value){?>data-animationSpeed="<?php echo $_smarty_tpl->tpl_vars['sliderAnimationSpeed']->value;?>
"<?php }?>
         <?php if ($_smarty_tpl->tpl_vars['sliderArrowControls']->value){?>data-arrowControls="<?php echo $_smarty_tpl->tpl_vars['sliderArrowControls']->value;?>
"<?php }?>
         <?php if ($_smarty_tpl->tpl_vars['sliderArrowAction']->value){?>data-arrowAction="<?php echo $_smarty_tpl->tpl_vars['sliderArrowAction']->value;?>
"<?php }?>
         <?php if ($_smarty_tpl->tpl_vars['sliderWrapperCls']->value){?>data-wrapperCls="<?php echo $_smarty_tpl->tpl_vars['sliderWrapperCls']->value;?>
"<?php }?>
         <?php if ($_smarty_tpl->tpl_vars['sliderHorizontalCls']->value){?>data-horizontalCls="<?php echo $_smarty_tpl->tpl_vars['sliderHorizontalCls']->value;?>
"<?php }?>
         <?php if ($_smarty_tpl->tpl_vars['sliderVerticalCls']->value){?>data-verticalCls="<?php echo $_smarty_tpl->tpl_vars['sliderVerticalCls']->value;?>
"<?php }?>
         <?php if ($_smarty_tpl->tpl_vars['sliderArrowCls']->value){?>data-arrowCls="<?php echo $_smarty_tpl->tpl_vars['sliderArrowCls']->value;?>
"<?php }?>
         <?php if ($_smarty_tpl->tpl_vars['sliderPrevArrowCls']->value){?>data-prevArrowCls="<?php echo $_smarty_tpl->tpl_vars['sliderPrevArrowCls']->value;?>
"<?php }?>
         <?php if ($_smarty_tpl->tpl_vars['sliderNextArrowCls']->value){?>data-nextArrowCls="<?php echo $_smarty_tpl->tpl_vars['sliderNextArrowCls']->value;?>
"<?php }?>
         <?php if ($_smarty_tpl->tpl_vars['sliderAjaxCtrlUrl']->value){?>data-ajaxCtrlUrl="<?php echo $_smarty_tpl->tpl_vars['sliderAjaxCtrlUrl']->value;?>
"<?php }?>
         <?php if ($_smarty_tpl->tpl_vars['sliderAjaxCategoryID']->value){?>data-ajaxCategoryID="<?php echo $_smarty_tpl->tpl_vars['sliderAjaxCategoryID']->value;?>
"<?php }?>
         <?php if ($_smarty_tpl->tpl_vars['sliderAjaxMaxShow']->value){?>data-ajaxMaxShow="<?php echo $_smarty_tpl->tpl_vars['sliderAjaxMaxShow']->value;?>
"<?php }?>
         <?php if ($_smarty_tpl->tpl_vars['sliderAjaxShowLoadingIndicator']->value){?>data-ajaxShowLoadingIndicator="<?php echo $_smarty_tpl->tpl_vars['sliderAjaxShowLoadingIndicator']->value;?>
"<?php }?>
         <?php if ($_smarty_tpl->tpl_vars['sliderInitOnEvent']->value){?>data-initOnEvent="<?php echo $_smarty_tpl->tpl_vars['sliderInitOnEvent']->value;?>
"<?php }?>
         data-product-slider="true">

        
            <div class="product-slider--container">
                <?php /*  Call merged included template "frontend/_includes/product_slider_items.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("frontend/_includes/product_slider_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('articles'=>$_smarty_tpl->tpl_vars['articles']->value), 0, '2661889925a380085a8f2d8-32299167');
content_5a380085bcfb93_87561294($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/_includes/product_slider_items.tpl" */?>
            </div>
        

    </div>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 18:53:09
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Frontend/Bare/frontend/_includes/product_slider_items.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a380085bcfb93_87561294')) {function content_5a380085bcfb93_87561294($_smarty_tpl) {?>
    <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value){
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
        <?php /*  Call merged included template "frontend/_includes/product_slider_item.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("frontend/_includes/product_slider_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '2661889925a380085a8f2d8-32299167');
content_5a380085be33f5_20769414($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/_includes/product_slider_item.tpl" */?>
    <?php } ?>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 18:53:09
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Frontend/Bare/frontend/_includes/product_slider_item.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a380085be33f5_20769414')) {function content_5a380085be33f5_20769414($_smarty_tpl) {?>
    <?php $_smarty_tpl->tpl_vars['productBoxLayout'] = new Smarty_variable($_smarty_tpl->tpl_vars['productBoxLayout']->value ? $_smarty_tpl->tpl_vars['productBoxLayout']->value : '', null, 0);?>
    <?php $_smarty_tpl->tpl_vars['fixedImageSize'] = new Smarty_variable($_smarty_tpl->tpl_vars['fixedImageSize']->value ? $_smarty_tpl->tpl_vars['fixedImageSize']->value : '', null, 0);?>



    <div class="product-slider--item">
        <?php /*  Call merged included template "frontend/listing/box_article.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("frontend/listing/box_article.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('sArticle'=>$_smarty_tpl->tpl_vars['article']->value,'productBoxLayout'=>$_smarty_tpl->tpl_vars['productBoxLayout']->value,'fixedImageSize'=>$_smarty_tpl->tpl_vars['fixedImageSize']->value), 0, '2661889925a380085a8f2d8-32299167');
content_5a380085bf9754_94155859($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/listing/box_article.tpl" */?>
    </div>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 18:53:09
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Frontend/Bare/frontend/listing/box_article.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a380085bf9754_94155859')) {function content_5a380085bf9754_94155859($_smarty_tpl) {?>
    <?php $_smarty_tpl->tpl_vars['path'] = new Smarty_variable('', null, 0);?>
    
    <?php if ($_smarty_tpl->tpl_vars['productBoxLayout']->value=='minimal'){?>
        <?php $_smarty_tpl->tpl_vars['path'] = new Smarty_variable("frontend/listing/product-box/box-minimal.tpl", null, 0);?>

    <?php }elseif($_smarty_tpl->tpl_vars['productBoxLayout']->value=='image'){?>
        <?php $_smarty_tpl->tpl_vars['path'] = new Smarty_variable("frontend/listing/product-box/box-big-image.tpl", null, 0);?>

    <?php }elseif($_smarty_tpl->tpl_vars['productBoxLayout']->value=='slider'){?>
        <?php $_smarty_tpl->tpl_vars['path'] = new Smarty_variable("frontend/listing/product-box/box-product-slider.tpl", null, 0);?>

    <?php }elseif($_smarty_tpl->tpl_vars['productBoxLayout']->value=='emotion'){?>
        <?php $_smarty_tpl->tpl_vars['path'] = new Smarty_variable("frontend/listing/product-box/box-emotion.tpl", null, 0);?>

    <?php }elseif($_smarty_tpl->tpl_vars['productBoxLayout']->value=='list'){?>
        <?php $_smarty_tpl->tpl_vars['path'] = new Smarty_variable("frontend/listing/product-box/box-list.tpl", null, 0);?>
    <?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['path']->value==''){?>
        
            <?php /*  Call merged included template "frontend/listing/product-box/box-basic.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("frontend/listing/product-box/box-basic.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('productBoxLayout'=>"basic"), 0, '2661889925a380085a8f2d8-32299167');
content_5a380085c21401_07694489($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/listing/product-box/box-basic.tpl" */?>
        
    <?php }else{ ?>
        <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['path']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php }?>

<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 18:53:09
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Frontend/Bare/frontend/listing/product-box/box-basic.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a380085c21401_07694489')) {function content_5a380085c21401_07694489($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/html/shopware/apps/shopware/htdocs/engine/Library/Smarty/plugins/modifier.truncate.php';
?>


    <div class="product--box box--<?php echo $_smarty_tpl->tpl_vars['productBoxLayout']->value;?>
"
         data-page-index="<?php echo $_smarty_tpl->tpl_vars['pageIndex']->value;?>
"
         data-ordernumber="<?php echo $_smarty_tpl->tpl_vars['sArticle']->value['ordernumber'];?>
"
         <?php ob_start();?><?php echo 0;?><?php $_tmp1=ob_get_clean();?><?php if (!$_tmp1){?> data-category-id="<?php echo $_smarty_tpl->tpl_vars['sCategoryCurrent']->value;?>
"<?php }?>>

        
            <div class="box--content is--rounded">

                
                
                    <?php /*  Call merged included template "frontend/listing/product-box/product-badges.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("frontend/listing/product-box/product-badges.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '2661889925a380085a8f2d8-32299167');
content_5a380085c34b96_16134381($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/listing/product-box/product-badges.tpl" */?>
                

                
                    <div class="product--info">

                        
                        
                            <?php /*  Call merged included template "frontend/listing/product-box/product-image.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("frontend/listing/product-box/product-image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '2661889925a380085a8f2d8-32299167');
content_5a380085c67999_12206452($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/listing/product-box/product-image.tpl" */?>
                        

                        
                        
                            <?php ob_start();?><?php echo false;?><?php $_tmp2=ob_get_clean();?><?php if (!$_tmp2){?>
                                <div class="product--rating-container">
                                    <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['sVoteAverage']['average']){?>
                                        <?php /*  Call merged included template "frontend/_includes/rating.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('frontend/_includes/rating.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('points'=>$_smarty_tpl->tpl_vars['sArticle']->value['sVoteAverage']['average'],'type'=>"aggregated",'label'=>false,'microData'=>false), 0, '2661889925a380085a8f2d8-32299167');
content_5a380085cc0657_92841567($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/_includes/rating.tpl" */?>
                                    <?php }?>
                                </div>
                            <?php }?>
                        

                        
                        
                            <a href="<?php echo $_smarty_tpl->tpl_vars['sArticle']->value['linkDetails'];?>
"
                               class="product--title"
                               title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escapeHtml'][0][0]->escapeHtml($_smarty_tpl->tpl_vars['sArticle']->value['articleName']);?>
">
                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escapeHtml'][0][0]->escapeHtml(smarty_modifier_truncate($_smarty_tpl->tpl_vars['sArticle']->value['articleName'],50));?>

                            </a>
                        

                        
                        
                            <div class="product--description">
                                <?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['sArticle']->value['description_long']),240);?>

                            </div>
                        

                        
                            <div class="product--price-info">

                                
                                
                                    <?php /*  Call merged included template "frontend/listing/product-box/product-price-unit.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("frontend/listing/product-box/product-price-unit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '2661889925a380085a8f2d8-32299167');
content_5a380085d88479_84900771($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/listing/product-box/product-price-unit.tpl" */?>
                                

                                
                                
                                    <?php /*  Call merged included template "frontend/listing/product-box/product-price.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("frontend/listing/product-box/product-price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '2661889925a380085a8f2d8-32299167');
content_5a380085dc4028_21085558($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/listing/product-box/product-price.tpl" */?>
                                
                            </div>
                        

                        
                            <?php ob_start();?><?php echo false;?><?php $_tmp3=ob_get_clean();?><?php if ($_tmp3){?>
                                <div class="product--btn-container">
                                    <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['allowBuyInListing']){?>
                                        <?php /*  Call merged included template "frontend/listing/product-box/button-buy.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("frontend/listing/product-box/button-buy.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '2661889925a380085a8f2d8-32299167');
content_5a380085e14a91_19252300($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/listing/product-box/button-buy.tpl" */?>
                                    <?php }else{ ?>
                                        <?php /*  Call merged included template "frontend/listing/product-box/button-detail.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("frontend/listing/product-box/button-detail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '2661889925a380085a8f2d8-32299167');
content_5a380085e480f8_22778485($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/listing/product-box/button-detail.tpl" */?>
                                    <?php }?>
                                </div>
                            <?php }?>
                        

                        
                        
                            <?php /*  Call merged included template "frontend/listing/product-box/product-actions.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("frontend/listing/product-box/product-actions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '2661889925a380085a8f2d8-32299167');
content_5a380085e8e186_90273100($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/listing/product-box/product-actions.tpl" */?>
                        
                    </div>
                
            </div>
        
    </div>

<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 18:53:09
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Frontend/Bare/frontend/listing/product-box/product-badges.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a380085c34b96_16134381')) {function content_5a380085c34b96_16134381($_smarty_tpl) {?>



    <div class="product--badges">

        
        
            <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['has_pseudoprice']){?>
                <div class="product--badge badge--discount">
                    <i class="icon--percent2"></i>
                </div>
            <?php }?>
        

        
        
            <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['highlight']){?>
                <div class="product--badge badge--recommend">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"ListingBoxTip",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingBoxTip",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Hint!<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingBoxTip",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
            <?php }?>
        

        
        
            <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['newArticle']){?>
                <div class="product--badge badge--newcomer">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"ListingBoxNew",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingBoxNew",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
NEW<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingBoxNew",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
            <?php }?>
        

        
        
            <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['esd']){?>
                <div class="product--badge badge--esd">
                    <i class="icon--download"></i>
                </div>
            <?php }?>
        
    </div>







<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 18:53:09
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Frontend/Bare/frontend/listing/product-box/product-image.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a380085c67999_12206452')) {function content_5a380085c67999_12206452($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/html/shopware/apps/shopware/htdocs/engine/Library/Smarty/plugins/modifier.truncate.php';
?>
<a href="<?php echo $_smarty_tpl->tpl_vars['sArticle']->value['linkDetails'];?>
"
   title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sArticle']->value['articleName'], ENT_QUOTES, 'utf-8', true);?>
"
   class="product--image">
    
        <span class="image--element">
            
                <span class="image--media">

                    <?php $_smarty_tpl->tpl_vars['desc'] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['sArticle']->value['articleName'], ENT_QUOTES, 'utf-8', true), null, 0);?>

                    <?php if (isset($_smarty_tpl->tpl_vars['sArticle']->value['image']['thumbnails'])){?>

                        <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['image']['description']){?>
                            <?php $_smarty_tpl->tpl_vars['desc'] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['sArticle']->value['image']['description'], ENT_QUOTES, 'utf-8', true), null, 0);?>
                        <?php }?>

                        
                            <img srcset="<?php echo $_smarty_tpl->tpl_vars['sArticle']->value['image']['thumbnails'][0]['sourceSet'];?>
"
                                 alt="<?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
"
                                 title="<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['desc']->value,160);?>
" />
                        
                    <?php }else{ ?>
                        <img src="/themes/Frontend/Responsive/frontend/_public/src/img/no-picture.jpg"
                             alt="<?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
"
                             title="<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['desc']->value,160);?>
" />
                    <?php }?>
                </span>
            
        </span>
    
</a>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 18:53:09
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Frontend/Bare/frontend/_includes/rating.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a380085cc0657_92841567')) {function content_5a380085cc0657_92841567($_smarty_tpl) {?>

    <?php $_smarty_tpl->tpl_vars['isType'] = new Smarty_variable('single', null, 0);?> 
    <?php if (isset($_smarty_tpl->tpl_vars['type']->value)){?>
        <?php $_smarty_tpl->tpl_vars['isType'] = new Smarty_variable($_smarty_tpl->tpl_vars['type']->value, null, 0);?>
    <?php }?>




    <?php $_smarty_tpl->tpl_vars['isBase'] = new Smarty_variable(10, null, 0);?> 
    <?php if (isset($_smarty_tpl->tpl_vars['base']->value)){?>
        <?php $_smarty_tpl->tpl_vars['isBase'] = new Smarty_variable($_smarty_tpl->tpl_vars['base']->value, null, 0);?>
    <?php }?>




    <?php $_smarty_tpl->tpl_vars['hasMicroData'] = new Smarty_variable(true, null, 0);?>
    <?php if (isset($_smarty_tpl->tpl_vars['microData']->value)){?>
        <?php $_smarty_tpl->tpl_vars['hasMicroData'] = new Smarty_variable($_smarty_tpl->tpl_vars['microData']->value, null, 0);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['hasMicroData']->value&&$_smarty_tpl->tpl_vars['isType']->value==='aggregated'&&$_smarty_tpl->tpl_vars['count']->value===0){?> 
        <?php $_smarty_tpl->tpl_vars['hasMicroData'] = new Smarty_variable(false, null, 0);?>
    <?php }?>




    <?php if ($_smarty_tpl->tpl_vars['isType']->value==='single'){?>
        <?php $_smarty_tpl->tpl_vars['data'] = new Smarty_variable('itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating"', null, 0);?>
    <?php }else{ ?>
        <?php $_smarty_tpl->tpl_vars['data'] = new Smarty_variable('itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating"', null, 0);?>
    <?php }?>




    <?php if (isset($_smarty_tpl->tpl_vars['label']->value)){?>
        <?php $_smarty_tpl->tpl_vars['hasLabel'] = new Smarty_variable($_smarty_tpl->tpl_vars['label']->value, null, 0);?>
    <?php }?>




    <?php if ($_smarty_tpl->tpl_vars['isType']->value==='aggregated'){?>
        <?php $_smarty_tpl->tpl_vars['hasLabel'] = new Smarty_variable(true, null, 0);?>
    <?php }else{ ?>
        <?php $_smarty_tpl->tpl_vars['hasLabel'] = new Smarty_variable(false, null, 0);?>
    <?php }?>




    <span class="product--rating"<?php if ($_smarty_tpl->tpl_vars['hasMicroData']->value){?> <?php echo $_smarty_tpl->tpl_vars['data']->value;?>
<?php }?>>

        
        
            <?php $_smarty_tpl->tpl_vars['average'] = new Smarty_variable($_smarty_tpl->tpl_vars['points']->value/2, null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['isBase']->value==5){?>
                <?php $_smarty_tpl->tpl_vars['average'] = new Smarty_variable($_smarty_tpl->tpl_vars['points']->value, null, 0);?>
            <?php }?>
        

        
        
            <?php if ($_smarty_tpl->tpl_vars['hasMicroData']->value){?>
                <meta itemprop="ratingValue" content="<?php echo $_smarty_tpl->tpl_vars['points']->value;?>
">
                <meta itemprop="worstRating" content="1">
                <meta itemprop="bestRating" content="<?php echo $_smarty_tpl->tpl_vars['isBase']->value;?>
">
                <?php if ($_smarty_tpl->tpl_vars['isType']->value==='aggregated'){?>
                    <meta itemprop="ratingCount" content="<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
">
                <?php }?>
            <?php }?>
        

        
        
            <?php if ($_smarty_tpl->tpl_vars['points']->value!=0){?>
                <?php $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['value']->step = 1;$_smarty_tpl->tpl_vars['value']->total = (int)ceil(($_smarty_tpl->tpl_vars['value']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['value']->step));
if ($_smarty_tpl->tpl_vars['value']->total > 0){
for ($_smarty_tpl->tpl_vars['value']->value = 1, $_smarty_tpl->tpl_vars['value']->iteration = 1;$_smarty_tpl->tpl_vars['value']->iteration <= $_smarty_tpl->tpl_vars['value']->total;$_smarty_tpl->tpl_vars['value']->value += $_smarty_tpl->tpl_vars['value']->step, $_smarty_tpl->tpl_vars['value']->iteration++){
$_smarty_tpl->tpl_vars['value']->first = $_smarty_tpl->tpl_vars['value']->iteration == 1;$_smarty_tpl->tpl_vars['value']->last = $_smarty_tpl->tpl_vars['value']->iteration == $_smarty_tpl->tpl_vars['value']->total;?>
                    <?php $_smarty_tpl->tpl_vars['cls'] = new Smarty_variable('icon--star', null, 0);?>

                    <?php if ($_smarty_tpl->tpl_vars['value']->value>$_smarty_tpl->tpl_vars['average']->value){?>
                        <?php $_smarty_tpl->tpl_vars['diff'] = new Smarty_variable($_smarty_tpl->tpl_vars['value']->value-$_smarty_tpl->tpl_vars['average']->value, null, 0);?>

                        <?php if ($_smarty_tpl->tpl_vars['diff']->value>0&&$_smarty_tpl->tpl_vars['diff']->value<=0.5){?>
                            <?php $_smarty_tpl->tpl_vars['cls'] = new Smarty_variable('icon--star-half', null, 0);?>
                        <?php }else{ ?>
                            <?php $_smarty_tpl->tpl_vars['cls'] = new Smarty_variable('icon--star-empty', null, 0);?>
                        <?php }?>
                    <?php }?>

                    <i class="<?php echo $_smarty_tpl->tpl_vars['cls']->value;?>
"></i>
                <?php }} ?>
            <?php }?>
        

        
        
            <?php if ($_smarty_tpl->tpl_vars['hasLabel']->value&&$_smarty_tpl->tpl_vars['count']->value){?>
                <span class="rating--count-wrapper">
                    (<span class="rating--count"><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</span>)
                </span>
            <?php }?>
        
    </span>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 18:53:09
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Frontend/Bare/frontend/listing/product-box/product-price-unit.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a380085d88479_84900771')) {function content_5a380085d88479_84900771($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_currency')) include '/var/www/html/shopware/apps/shopware/htdocs/engine/Library/Enlight/Template/Plugins/modifier.currency.php';
?>

<div class="price--unit">

    
    <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['purchaseunit']&&$_smarty_tpl->tpl_vars['sArticle']->value['purchaseunit']!=0){?>

        
        
            <span class="price--label label--purchase-unit is--bold is--nowrap">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"ListingBoxArticleContent",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingBoxArticleContent",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Content<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingBoxArticleContent",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </span>
        

        
        
            <span class="is--nowrap">
                <?php echo $_smarty_tpl->tpl_vars['sArticle']->value['purchaseunit'];?>
 <?php echo $_smarty_tpl->tpl_vars['sArticle']->value['sUnit']['description'];?>

            </span>
        
    <?php }?>

    
    <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['purchaseunit']&&$_smarty_tpl->tpl_vars['sArticle']->value['purchaseunit']!=$_smarty_tpl->tpl_vars['sArticle']->value['referenceunit']){?>

        
        
            <span class="is--nowrap">
                (<?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['sArticle']->value['referenceprice']);?>

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"Star",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
*<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 / <?php echo $_smarty_tpl->tpl_vars['sArticle']->value['referenceunit'];?>
 <?php echo $_smarty_tpl->tpl_vars['sArticle']->value['sUnit']['description'];?>
)
            </span>
        
    <?php }?>
</div><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 18:53:09
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Frontend/Bare/frontend/listing/product-box/product-price.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a380085dc4028_21085558')) {function content_5a380085dc4028_21085558($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_currency')) include '/var/www/html/shopware/apps/shopware/htdocs/engine/Library/Enlight/Template/Plugins/modifier.currency.php';
?>

<div class="product--price">

    
    
        <span class="price--default is--nowrap<?php if ($_smarty_tpl->tpl_vars['sArticle']->value['has_pseudoprice']){?> is--discount<?php }?>">
            <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['priceStartingFrom']&&!$_smarty_tpl->tpl_vars['sArticle']->value['liveshoppingData']){?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'ListingBoxArticleStartsAt','namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxArticleStartsAt','namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
From<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxArticleStartsAt','namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php }?>
            <?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['sArticle']->value['price']);?>

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"Star",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
*<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </span>
    

    
    
        <?php if ($_smarty_tpl->tpl_vars['sArticle']->value['has_pseudoprice']){?>
            <span class="price--pseudo">

                
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"priceDiscountLabel",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"priceDiscountLabel",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"priceDiscountLabel",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                

                <span class="price--discount is--nowrap">
                    <?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['sArticle']->value['pseudoprice']);?>

                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"Star",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
*<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </span>

                
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"priceDiscountInfo",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"priceDiscountInfo",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"priceDiscountInfo",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                
            </span>
        <?php }?>
    
</div>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 18:53:09
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Frontend/Bare/frontend/listing/product-box/button-buy.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a380085e14a91_19252300')) {function content_5a380085e14a91_19252300($_smarty_tpl) {?>

    
        <?php ob_start();?><?php echo 'http://127.0.0.1:8080/checkout/addArticle';?><?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable($_tmp1, null, 0);?>
    

    
        <form name="sAddToBasket"
              method="post"
              action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"
              class="buybox--form"
              data-add-article="true"
              data-eventName="submit"
              <?php if ($_smarty_tpl->tpl_vars['theme']->value['offcanvasCart']){?>
              data-showModal="false"
              data-addArticleUrl="<?php echo 'http://127.0.0.1:8080/checkout/ajaxAddArticleCart';?>"
              <?php }?>>

            
                <input type="hidden" name="sAdd" value="<?php echo $_smarty_tpl->tpl_vars['sArticle']->value['ordernumber'];?>
"/>
            

            
                <button class="buybox--button block btn is--primary is--icon-right is--center is--large">
                    
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('namespace'=>'frontend/listing/product-box/button-buy','name'=>"ListingBuyActionAdd")); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'frontend/listing/product-box/button-buy','name'=>"ListingBuyActionAdd"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<span class="buy-btn--cart-add">Add to</span> <span class="buy-btn--cart-text">cart</span><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'frontend/listing/product-box/button-buy','name'=>"ListingBuyActionAdd"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<i class="icon--basket"></i> <i class="icon--arrow-right"></i>
                    
                </button>
            
        </form>
    

<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 18:53:09
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Frontend/Bare/frontend/listing/product-box/button-detail.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a380085e480f8_22778485')) {function content_5a380085e480f8_22778485($_smarty_tpl) {?>

    
        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['sArticle']->value['linkDetails'];?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable($_tmp1, null, 0);?>
    

    
        <?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escapeHtml'][0][0]->escapeHtml($_smarty_tpl->tpl_vars['sArticle']->value['articleName']);?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['title'] = new Smarty_variable($_tmp2, null, 0);?>
    

    
        <?php ob_start();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"ListingButtonDetail",'namespace'=>'frontend/listing/product-box/button-detail','default'=>'Details')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingButtonDetail",'namespace'=>'frontend/listing/product-box/button-detail','default'=>'Details'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo "Details";?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ListingButtonDetail",'namespace'=>'frontend/listing/product-box/button-detail','default'=>'Details'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['label'] = new Smarty_variable($_tmp3, null, 0);?>
    

    
        <div class="product--detail-btn">

            
                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" class="buybox--button block btn is--icon-right is--center is--large" title="<?php echo $_smarty_tpl->tpl_vars['label']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
">
                    
                        <?php echo $_smarty_tpl->tpl_vars['label']->value;?>
 <i class="icon--arrow-right"></i>
                    
                </a>
            
        </div>
    

<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2017-12-18 18:53:09
         compiled from "/var/www/html/shopware/apps/shopware/htdocs/themes/Frontend/Bare/frontend/listing/product-box/product-actions.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5a380085e8e186_90273100')) {function content_5a380085e8e186_90273100($_smarty_tpl) {?>



    <div class="product--actions">

        
        
            <?php ob_start();?><?php echo 1;?><?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>
                <form action="<?php echo htmlspecialchars(Shopware()->Front()->Router()->assemble(array('controller' => 'compare', 'action' => 'add_article', 'articleID' => $_smarty_tpl->tpl_vars['sArticle']->value['articleID'], '_seo' => false, ))); ?>" method="post">
                    <button type="submit"
                       title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'ListingBoxLinkCompare','namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxLinkCompare','namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Compare<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxLinkCompare','namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"
                       class="product--action action--compare"
                       data-product-compare-add="true">
                        <i class="icon--compare"></i> <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'ListingBoxLinkCompare','namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxLinkCompare','namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Compare<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'ListingBoxLinkCompare','namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </button>
                </form>
            <?php }?>
        

        
        
            <form action="<?php echo htmlspecialchars(Shopware()->Front()->Router()->assemble(array('controller' => 'note', 'action' => 'add', 'ordernumber' => $_smarty_tpl->tpl_vars['sArticle']->value['ordernumber'], '_seo' => false, ))); ?>" method="post">
                <button type="submit"
                   title="<?php ob_start();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'DetailLinkNotepad','namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'DetailLinkNotepad','namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo "Add to wish list";?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'DetailLinkNotepad','namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_tmp2=ob_get_clean();?><?php echo htmlspecialchars($_tmp2, ENT_QUOTES, 'utf-8', true);?>
"
                   class="product--action action--note"
                   data-ajaxUrl="<?php echo htmlspecialchars(Shopware()->Front()->Router()->assemble(array('controller' => 'note', 'action' => 'ajaxAdd', 'ordernumber' => $_smarty_tpl->tpl_vars['sArticle']->value['ordernumber'], '_seo' => false, ))); ?>"
                   data-text="<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"DetailNotepadMarked",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"DetailNotepadMarked",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Saved<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"DetailNotepadMarked",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
">
                    <i class="icon--heart"></i> <span class="action--text"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"DetailLinkNotepadShort",'namespace'=>'frontend/listing/box_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"DetailLinkNotepadShort",'namespace'=>'frontend/listing/box_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Remember<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"DetailLinkNotepadShort",'namespace'=>'frontend/listing/box_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
                </button>
            </form>
        

        
        

        
        
    </div>

<?php }} ?>