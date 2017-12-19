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

{block name='frontend_blog_col_read_more'}
    <div class="blog--box-readmore" data-url="{url controller=blog
    action=detail sCategory=$sArticle.categoryId blogArticle=$sArticle.id}">
      <a href="{url controller=blog action=detail sCategory=$sArticle.categoryId blogArticle=$sArticle.id}" 
         title="{$sArticle.title|escape}" class="btn is--primary is--small">
        {s name="BlogLinkMore"}{/s}</a>
    </div>
{/block}