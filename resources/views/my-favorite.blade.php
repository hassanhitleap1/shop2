@extends('layouts.main')

@section('content')
<div class="box-breadcrumb">
        <div class="container">
            <ul class="list-inline">
                <li><a href="{{url('/')}}">Home <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                <li><a href="{{url('//my-favorite')}}">My Favorite</a></li>
            </ul>
        </div>
</div>
<div class="container">
    <div class="box-product box-has-filter">
        <h2> My favorite</h2>
        <div class="tab-content">
            <div id="tab1" role="tabpanel" class="tab-pane fade in active">
                <div class="wrap-product">
                    <div class="row" id="products">
                        @foreach ($savedProducts as $savedProduct)
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" id="{{$savedProduct->product->id}}">
                                <div class="item">
                                    <div class="product-extra-link">
                                        <a href="{{$savedProduct->product->link}}" class="quick-view various" data-fancybox-type="iframe"><i class="fa fa-eye fa-2x" aria-hidden="true"></i><span>Quick View</span></a>
                                        <a  item="{{$savedProduct->product->id}}" class="box-hidden wishlist saved"><i class="fa fa-trash fa-2x" aria-hidden="true" style="color: red;"></i><span>Save to favorite Product</span></a>
                                    </div>
                                    <div class="thumb-product">
                                        <a href="{{$savedProduct->product->link}}"><img src="{{asset($savedProduct->product->image_path)}}" alt="" /></a>
                                    </div>
                                    <div class="name-product">
                                        <h3><a href="{{$savedProduct->product->link}}">Click here to go product</a></h3>
                                    </div>
                                    <div class="box-cart">
                                        <a href="{{$savedProduct->product->link}}" class="cart">Buy product <i class="fa " aria-hidden="true"></i></a>
                                        <ins class="price"><sup>$</sup>{{floor($savedProduct->product->price)}}<sup>.{{ltrim(($savedProduct->product->price - floor($savedProduct->product->price)),"0.")}}</sup></ins>
                                    </div>
                                    <div class="customize various" > {{$savedProduct->product->description}}</div>
                                </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
           
        </div>
        <div class="more" id="more" >
            <a href="#"><i class="fa fa-long-arrow-down" aria-hidden="true"></i>More</a>
            <div class="ajax-load text-center" style="display:none">
                <p><img src="http://demo.itsolutionstuff.com/plugin/loader.gif">Loading More post</p>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{asset('js/my-favourite.js')}}"></script>

@endsection