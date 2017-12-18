{extends file='parent:frontend/detail/index.tpl'}
{*article name*}
{block name='frontend_detail_index_name'}
    <h1 class="product--title" itemprop="name">
{*      {$sArticle.attributes.core->get('alternative_article_name')}*}
      {assign var=alternative_name value=$sArticle.attributes.core->get('alternative_article_name')}
      {if $alternative_name}
          {$alternative_name}
      {else}
          {$sArticle.articleName}
      {/if}
    </h1>
{/block}
{*Lagerbestand*}
{block name='frontend_detail_data_ordernumber' append}
    <li class="base-info--entry entry--instock">
      <strong class="entry--label">Lagerbestand</strong>
      <span class="entry--content">
        {$sArticle.instock}
      </span>
    </li>
{/block}