{extends file='parent:frontend/blog/index.tpl'}
{* Hide sidebar *}
{block name='frontend_blog_listing_sidebar'}{/block}
{extends file="parent:frontend/blog/box.tpl"}
{* Kurzbeschreibung auf 100 Zeichen kuerzen *}
{block name='frontend_blog_col_description_short'}
   <div class="blog--box-description-short">
     {if $sArticle.shortDescription}
         {$sArticle.shortDescription|truncate:100|nl2br}
     {else}
         {$sArticle.shortDescription}
     {/if}
   </div>
{/block}
