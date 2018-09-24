@extends('layouts.main')

@section('content')
@foreach ($products as $product)
<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 pb-2">
                <div class="card">
                   <button type="button" class="btn btn-primary btn-lg float-right button-save" >Save</button>
                   <img class="card-img-top" src="{{asset($product->image_path)}}" alt="Card image cap">
                   <div class="card-body">
                      <h4 class="float-right"><i class="fas fa-dollar-sign"></i> {{floor($product->price)}}{{ltrim(($product->price - floor($product->price)),"0.")}}</h4>
                      <h4 class="card-title">{{$product->name}}</h4>
                      <p class="card-text">{{ substr($product->description,0,100)}}...</p>
                   </div>
                   <div class="card-footer">
                      <i class="far fa-heart"></i> <small class="text-muted">love this </small>
                      <a href="{{$product->link}}" class="btn btn-primary btn-sm float-right " >Check out</a>
                   </div>
                </div>
             </div>
@endforeach

<script type="text/javascript" src="{{asset('js/index.js')}}"></script>

@endsection