@extends('layouts.main')

@section('content')
<div class="box-slider">
    <div class="wrap-item" data-navigation="true" data-pagination="true" data-itemscustom="[[0,1]]" data-autoplay="false" data-transition="fade">
        @foreach($imagesSlider as $image)
        <div class="wrap-slide">
            <div class="box-img">
                <a href="{{$image->link}}"><img src="{{asset($image->image_path)}}" alt="" /></a>
            </div>
            <div class="box-info-slide">
                <div class="container">
                    <div class="adv-info-slide">
                        <!-- <h2 class="animated" data-animated="fadeInLeftBig">good shop</h2>
                        <h3 class="animated" data-animated="flipInX">up to 50% off</h3> -->
                        <a href="{{$image->link}}" class="animated has-bottom" data-animated="bounceInLeft">shop now</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="container">
    <div class="box-product box-has-filter">
     
        <div class="tab-content">
            <div id="tab1" role="tabpanel" class="tab-pane fade in active">
                <div class="wrap-product">
                    <div class="row" id="products">
                        @foreach ($products as $product)
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <h4>{{$product->name}}</h4>
                                <div class="item">
                                    <div class="product-extra-link">
                                        <a href="{{$product->link}}" class="quick-view various" data-fancybox-type="iframe"><i class="fa fa-eye fa-2x" aria-hidden="true"></i><span>Quick View</span></a>
                                        <a  item="{{$product->id}}" class="box-hidden wishlist saved"><i class="{{($product->isSaved != null )?'fa fa-trash fa-2x':'fa fa-save fa-2x'}}" aria-hidden="true" style="{{($product->isSaved != null )?'color: red':''.';'}}"></i><span>Save to favorite Product</span></a>
                                    </div>
                                    <div class="thumb-product">
                                        <a href="{{$product->link}}"><img src="{{asset($product->image_path)}}" alt="" /></a>
                                    </div>
                                    <div class="name-product">
                                        <h3><a href="{{$product->link}}">Click here to go product</a></h3>
                                    </div>
                                    <div class="box-cart">
                                        <a href="{{$product->link}}" class="cart">Buy product <i class="fa " aria-hidden="true"></i></a>
                                        <ins class="price"><sup>$</sup>{{floor($product->price)}}<sup>.{{ltrim(($product->price - floor($product->price)),"0.")}}</sup></ins>
                                    </div>
                                    <div class="customize various" > {{ substr($product->description,0,100)}}...</div>
                                </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
           
        </div>
        <div class="more" id="more" category="{{!empty(@$_GET['category'])?$_GET['category']:''}}"   search="{{isset($_GET['search'])?$_GET['search']:''}}">
            <a href="#"><i class="fa fa-long-arrow-down" aria-hidden="true"></i>More</a>
            <div class="ajax-load text-center" style="display:none">
                <p><img src="http://demo.itsolutionstuff.com/plugin/loader.gif">Loading More post</p>
            </div>
        </div>

    </div>
</div>

<script type="text/javascript" src="{{asset('js/index.js')}}"></script>

@endsection