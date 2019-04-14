<div id="product-sideshow-wrap">
        <div id="product-sideshow">
            <!-- PRODUCT SHOWCASE -->
            <div class="product-showcase">
                <!-- HEADLINE -->
                <div class="headline primary">
                    <h4>Latest Online Products</h4>

                    <!-- SLIDE CONTROLS -->
                    <div class="slide-control-wrap">
                        <div class="slide-control left">
                            <!-- SVG ARROW -->
                            <svg class="svg-arrow">
                                <use xlink:href="#svg-arrow"></use>
                            </svg>
                            <!-- /SVG ARROW -->
                        </div>

                        <div class="slide-control right">
                            <!-- SVG ARROW -->
                            <svg class="svg-arrow">
                                <use xlink:href="#svg-arrow"></use>
                            </svg>
                            <!-- /SVG ARROW -->
                        </div>
                    </div>
                    <!-- /SLIDE CONTROLS -->
                </div>
                <!-- /HEADLINE -->

                <!-- PRODUCT LIST -->
                <div id="pl-3" class="product-list grid column4-wrap owl-carousel">

                </div>

                <div id="plist" class="">

                </div>
                <!-- /PRODUCT LIST -->
            </div>

@section('js')
<script type="text/javascript">
$(document).ready(() => {
  // get items
  $.get("{{route('items')}}")
  // display items
  .done((res) => loadItems(res))
  // incase of error
  .fail((err) => console.log(err))
})

const loadItems = (data) => {
  // foreach category load items
  data.map((cat) => {
    catItems(cat)
  })
}

const catItems = (cat) => {
  // get dom id
  const itemscontainer = $('#plist')

  // create cat dom
  $(itemscontainer).append(catDom(cat))

  // if we have items in category
  if (cat.items.length > 0) {
     // display each items
     cat.items.map((item) => {
       $(itemscontainer).append(itemDom(item, cat))
     })
   } else {
     // display no items
     $(itemscontainer).append(oops(cat))
   }
}

// no items html
const oops = ({categogry_name}) => `
<div class="card bg-danger text-center" height="200px">${categogry_name} Has No Items Yet</div>
`

// category html
const catDom = ({categogry_name}) => `
<div class="headline primary">
    <h4>${categogry_name}</h4>

    <!-- SLIDE CONTROLS -->
    <div class="slide-control-wrap">
        <div class="slide-control left">
            <!-- SVG ARROW -->
            <svg class="svg-arrow">
                <use xlink:href="#svg-arrow"></use>
            </svg>
            <!-- /SVG ARROW -->
        </div>

        <div class="slide-control right">
            <!-- SVG ARROW -->
            <svg class="svg-arrow">
                <use xlink:href="#svg-arrow"></use>
            </svg>
            <!-- /SVG ARROW -->
        </div>
    </div>
    <!-- /SLIDE CONTROLS -->
</div>
`

// item html
const itemDom = ({id, item_name, category_id, bid_token, description}, {categogry_name}) => `
<div id=${id} class="product-item column">
    <!-- PRODUCT PREVIEW ACTIONS -->
    <div class="product-preview-actions">
        <!-- PRODUCT PREVIEW IMAGE -->
        <figure class="product-preview-image">
            <img src="images/items/park_m.jpg" alt="product-image">
        </figure>
        <!-- /PRODUCT PREVIEW IMAGE -->

        <!-- PREVIEW ACTIONS -->
        <div class="preview-actions">
            <!-- PREVIEW ACTION -->
            <div class="preview-action">
                <a href="item-v1.html">
                    <div class="circle tiny primary">
                        <span class="icon-tag"></span>
                    </div>
                </a>
                <a href="item-v1.html">
                    <p>Go to Item</p>
                </a>
            </div>
            <!-- /PREVIEW ACTION -->

            <!-- PREVIEW ACTION -->
            <div class="preview-action">
                <a href="#">
                    <div class="circle tiny secondary">
                        <span class="icon-heart"></span>
                    </div>
                </a>
                <a href="#">
                    <p>Favourites +</p>
                </a>
            </div>
            <!-- /PREVIEW ACTION -->
        </div>
        <!-- /PREVIEW ACTIONS -->
    </div>
    <!-- /PRODUCT PREVIEW ACTIONS -->

    <!-- PRODUCT INFO -->
    <div class="product-info">
        <a href="item-v1.html">
            <p class="text-header">${categogry_name} - ${item_name}</p>
        </a>
        <p class="product-description">${description}</p>
        <a href="shop-gridview-v1.html">
            <p class="category primary">${categogry_name}</p>
        </a>
        <p class="price"><span>$</span>14</p>
    </div>
    <!-- /PRODUCT INFO -->
    <hr class="line-separator">

    <!-- USER RATING -->
    <div class="user-rating">
        <a href="author-profile.html">
            <figure class="user-avatar small">
                <img src="images/avatars/avatar_13.jpg" alt="user-avatar">
            </figure>
        </a>
        <a href="author-profile.html">
            <p class="text-header tiny">Violet &amp; Jane</p>
        </a>
        <ul class="rating tooltip" title="Author's Reputation">
            <li class="rating-item">
                <!-- SVG STAR -->
                <svg class="svg-star">
                    <use xlink:href="#svg-star"></use>
                </svg>
                <!-- /SVG STAR -->
            </li>
            <li class="rating-item">
                <!-- SVG STAR -->
                <svg class="svg-star">
                    <use xlink:href="#svg-star"></use>
                </svg>
                <!-- /SVG STAR -->
            </li>
            <li class="rating-item">
                <!-- SVG STAR -->
                <svg class="svg-star">
                    <use xlink:href="#svg-star"></use>
                </svg>
                <!-- /SVG STAR -->
            </li>
            <li class="rating-item empty">
                <!-- SVG STAR -->
                <svg class="svg-star">
                    <use xlink:href="#svg-star"></use>
                </svg>
                <!-- /SVG STAR -->
            </li>
            <li class="rating-item empty">
                <!-- SVG STAR -->
                <svg class="svg-star">
                    <use xlink:href="#svg-star"></use>
                </svg>
                <!-- /SVG STAR -->
            </li>
        </ul>
    </div>
    <!-- /USER RATING -->
</div>
<!-- /PRODUCT ITEM -->
`
</script>
@endsection
