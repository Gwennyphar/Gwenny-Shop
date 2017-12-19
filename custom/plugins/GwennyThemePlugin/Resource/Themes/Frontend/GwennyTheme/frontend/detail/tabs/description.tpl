{*description*}
{extends file='parent:frontend/detail/tabs/description.tpl'}
{block name='frontend_detail_description_links_list' append}
    <div class="content--title">
      {s name="my_similar_articles"}Diese Artikel könnten Sie auch interessieren{/s}
    </div>
      <ul class="content--list list--unstyled">
        {foreach $sArticle.sSimilarArticles as $similar}
            <li class="list--entry">
              <a href="{$similar.linkDetails}"
                 class="content--link link--further-links"
                 title="{$similar.articleName}">
                <i class="icon--arrow-right"></i>
                {$similar.articleName}, ab {$similar.prices.0.price|currency}
              </a>
            </li>
        {/foreach}
      </ul>
{/block}