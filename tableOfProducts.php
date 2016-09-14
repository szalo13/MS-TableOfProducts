{if 'full' == $view || $view == 'desc'}
<div class="product-grid clearfix view{$view}">
    {foreach from=$products item=product name=prodlist}
    <div class="product">
        <div class="photo">
            <a class="prodimage f-row" href="{route function=$productRoute key=$product->product->product_id productName=$product->translation->name
        productId=$product->product->product_id}" title="{$product->translation->name|escape}" rel="dofollow">
          <img class="k-main" src="{imageUrl type='productGfx' width=$skin_settings->img->medium height=$skin_settings->img->medium
          image=$product->mainImageName() overlay=1}" alt="{$product->translation->name|escape}" />
          {foreach from=$product->galleryImages item=img name=gal}
          {if $smarty.foreach.gal.index == 1}
          <img class="none" src="{imageUrl type='productGfx' width=$skin_settings->img->medium image=$img->unic_name}" alt="{$product->translation->name|escape}">
          {/if}
          {/foreach}
        <span class="details">Szczegóły &raquo;</span>
      </a> {if $product->specialOffer || $product->isNew()}
            <ul>
                {if $product->specialOffer}<span class="label promo">{translate key="promotion"}</span>{/if} {if $product->isNew()}<span class="label new">{translate key="new"}</span>{/if}
            </ul>
            {/if}
        </div>

        <h2><a class="prodname f-row" href="{route function=$productRoute key=$product->product->product_id productName=$product->translation->name
        productId=$product->product->product_id}" title="{$product->translation->name|escape}">
        <span class="productname">{$product->translation->name|escape}</span>
      </a>
      </h2>

        <div class="price">
            {if $enablebasket && $product->canBuyStock()} {if $showprices} {if $skin_settings->global->pricemode == '1' || $skin_settings->global->pricemode == '3'} {if $product->specialOffer}
            <span class="old">{currency value=$product->defaultStock->getPrice()}</span>
            <span class="promo">{currency value=$product->defaultStock->getSpecialOfferPrice()}</span> {else}
            <span class="normal">{currency value=$product->defaultStock->getPrice()}</span> {/if} {/if} {if $skin_settings->global->pricemode == '1' || $skin_settings->global->pricemode == '2'} {if $skin_settings->global->pricemode == '1'} {/if} {if $product->specialOffer}
            <em>{currency value=$product->defaultStock->getSpecialOfferPrice(true)}</em>
            <del>{currency value=$product->defaultStock->getPrice(true)}</del> {else}
            <em>{currency value=$product->defaultStock->getPrice(true)}</em> {/if} {if $skin_settings->global->pricemode == '1'} )
            </i>
            {/if} {/if} {/if} {/if}
        </div>

    </div>
    {/foreach}
</div>
{elseif 'phot' == $view}
<div class="container-fluid clearfix view{$view}" {if $skin_settings->global->pricemode == '2'}data-netto="true"{/if}>
    <div class="row">
        {foreach from=$products item=product name=prodlist}
        <div class="col-lg-4 col-sm-6 cat-prod-box">
            <div class="cat-photo-box">
                <div class="marker-box">
                </div>
                <a href="#" class="cat-prod-arr cat-prod-prev">
                    < </a>
                        <a href="#" class="cat-prod-arr cat-prod-next"> > </a>
                        <a class="cat-photo" href="{route function=$productRoute key=$product->product->product_id productName=$product->translation->name
          productId=$product->product->product_id}" title="{$product->translation->name|escape}" rel="dofollow">

            <img class="k-main cat-img img-responsive" src="{imageUrl type='productGfx' width=$skin_settings->img->medium height=$skin_settings->img->medium
            image=$product->mainImageName() overlay=1}" alt="{$product->translation->name|escape}"
            {foreach from=$product->galleryImages item=img name=gal}
            {if $smarty.foreach.gal.index <= 2}
             data-gallery-{$smarty.foreach.gal.index}="{imageUrl type='productGfx' width=$skin_settings->img->medium image=$img->unic_name}"
            {/if}
            {/foreach}
            />

            {foreach from=$product->galleryImages item=img name=gal}
            {if $smarty.foreach.gal.index == 1}
            <img class="second cat-img img-responsive" src="{imageUrl type='productGfx' width=$skin_settings->img->medium image=$img->unic_name}" alt="{$product->translation->name|escape}">         
            {/if}
            {/foreach}

        </a> {if $product->specialOffer || $product->isNew()}
                        <ul class="label-box">
                            {if $product->specialOffer}<span class="label promo">{translate key="promotion"}</span>{/if} {if $product->isNew()}<span class="label new">{translate key="new"}</span>{/if}
                        </ul>
                        {/if}
            </div>

            <h2><a class="" href="{route function=$productRoute key=$product->product->product_id productName=$product->translation->name
          productId=$product->product->product_id}" title="{$product->translation->name|escape}">
          <span class="productname">{$product->translation->name|escape}</span>
        </a>
        </h2>

            <div class="price">
                {if $enablebasket && $product->canBuyStock()} {if $showprices} {if $skin_settings->global->pricemode == '1' || $skin_settings->global->pricemode == '3'} {if $product->specialOffer}
                <span class="old">{currency value=$product->defaultStock->getPrice()}</span>
                <span class="promo">{currency value=$product->defaultStock->getSpecialOfferPrice()}</span> {else}
                <span class="normal">{currency value=$product->defaultStock->getPrice()}</span> {/if} {/if} {if $skin_settings->global->pricemode == '1' || $skin_settings->global->pricemode == '2'} {if $skin_settings->global->pricemode == '1'} {/if} {if $product->specialOffer}
                <em>{currency value=$product->defaultStock->getSpecialOfferPrice(true)}</em>
                <del>{currency value=$product->defaultStock->getPrice(true)}</del> {else}
                <em>{currency value=$product->defaultStock->getPrice(true)}</em> {/if} {if $skin_settings->global->pricemode == '1'} )
                </i>
                {/if} {/if} {/if} {/if}
            </div>





        </div>
        {/foreach}
    </div>
</div>
{/if}