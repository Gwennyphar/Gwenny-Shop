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

{block name='frontend_detail_index_detail' append}
<div class="examplebox">
    <div class="content--title">Variablen</div>
    <div class="primary">Primärfarbe</div>
    <div class="primary-light">Primärfarbe hell</div>
    <div class="secondary">Sekundärfarbe</div>
    <div class="secondary-dark">Sekundärfarbe dunkel</div>
    <div class="content--title">Icons</div>
    <div class="spacer">Pfeil nach rechts<i class="icon--arrow-right"></i></div>
    <div class="spacer"><i class="icon--thumbsup"></i> ThumbsUp-Icon</div>

    <div class="content--title">Hinweisboxen mit Icons</div>
    <div class="alert is--success is--rounded">
      <div class="alert--icon">
        <i class="icon--element icon--check"></i>
      </div>
      <div class="alert--content">Erfolgsmeldung mit Icon</div>
    </div>
    <div class="alert is--warning is--rounded">
      <div class="alert--icon">
        <i class="icon--element icon--warning"></i>
      </div>
      <div class="alert--content">Warnmeldung mit Icon</div>
    </div>
    <div class="content--title">Badges</div>
    <div><span class="badge is--primary">1</span>Badge 1</div>
    <div><span class="badge is--secondary">2</span>Badge 2</div>
    <div><span class="badge is--minimal">3</span>Badge 3</div>
    <div class="content--title">Ribbons</div>
    <div class="ribbon-box">
      <div class="ribbon is--left">
        <p class="ribbon--content orange">Highlight!</p>
      </div>
      <div class="ribbon is--right">
        <p class="ribbon--content green">Highlight!</p>
      </div>
    </div>
</div>


{/block}
