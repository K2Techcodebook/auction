@extends('layouts.site')

@section('title') View All {{$name}} Items @endsection

@section('content')
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

         @foreach($items as $item)

         <!-- PRODUCT LIST -->
         <div id="pl-3" class="product-list grid column4-wrap owl-carousel">


             <!-- PRODUCT ITEM -->
             <div class="product-item column">
                 <!-- PRODUCT PREVIEW ACTIONS -->
                 <div class="product-preview-actions">
                     <!-- PRODUCT PREVIEW IMAGE -->
                     <figure class="product-preview-image">
                         <img src="{{URL::asset('images/items/park_m.jpg')}}" alt="product-image">
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
                         <p class="text-header">{{ $item->item_name }}</p>
                     </a>
                     <p class="product-description">{{$item->description}}.</p>
                     <a href="shop-gridview-v1.html">
                         <p class="category primary">Social Covers</p>
                     </a>
                     <p class="price"><span>$</span> {{ $item->bid_token }}</p>
                 </div>
                 <!-- /PRODUCT INFO -->
                 <hr class="line-separator">

                 <!-- USER RATING -->
                 <div class="user-rating">
                     <a href="author-profile.html">
                         <figure class="user-avatar small">
                             <img src="{{URL::asset('images/avatars/avatar_13.jpg')}}" alt="user-avatar">
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
         </div>
         <!-- /PRODUCT LIST -->
     </div>
   </div>
   </div>
     @endforeach


@endsection


@section ('footer')


@endsection
