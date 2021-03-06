@extends('layouts.main')
@section('content')
@if(!isset(request()->category) && !isset(request()->search) )
<!-- bigian slider -->
@include('sections.slider')
<!-- end slider -->
@endif
<div class="container">
   <!-- menu list -->
   <div class="row pb-2 mt-4 mb-2">
      <div class="col-md-6 col-xl-6 col-lg-6 col-sm-12 col-xs-12">
         <ul class="list-inline dawnlist">
            <li class="list-inline-item active " ><a href="{{url('/')}}">{{__('lang.Home')}}</a></li>
            <li class="list-inline-item active "><a href="{{url('/popular')}}">{{__('lang.Popular')}}</a></li>
            <li class="list-inline-item active "><a href="{{url('/recommended')}}">{{__('lang.Recommended')}}</a></li>
         </ul>
      </div>
      <div class="col-md-6 col-xl-6 col-lg-6 col-sm-12 col-xs-12">
         <form  action="{{url('/')}}" method="GET">
            <div class="input-group  mt-2 ">
               <input type="text" class="form-control" placeholder="{{__('lang.Search')}}" aria-label="Recipient's username"
                  aria-describedby="basic-addon2" name="search">
               <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2"><i class="fa fa-search" aria-hidden="true"></i> </span>
               </div>
            </div>
         </form>
      </div>
   </div>
   <!-- menu list -->
   <div class="row" id="products">
      @foreach ($products as $product)
      <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 pb-2" id="{{$product->id}}">
         <div class="card">
            @if($product->isSaved == null)
            <button type="button"  item="{{$product->id}}" class="btn  btn-primary  float-right button-save saved" > <span class="far fa-save fa-btn-save"></span>{{__('lang.Saved')}}</button>
            @else
            <button type="button"  item="{{$product->id}}" class="btn btn-danger  float-right button-save saved" > <span class="fas fa-trash-alt fa-btn-save"></span>{{__('lang.Un_Saved')}}</button>
            @endif
            <a href="{{$product->link}}" target="_blank"><img class="card-img-top" src="{{asset($product->image_path)}}" alt="Card image cap"> </a>
            <div class="card-body">
               <h4 class="float-right"><i class="fas fa-dollar-sign"></i>{{($product->price)}}</h4>
               <h4 class="card-title">{{$product->name}}</h4>
               <p class="card-text">{{ substr($product->description,0,100)}}</p>
            </div>
            <div class="card-footer">
               <i class="far fa-heart"></i> <small class="text-muted">{{ rand ( 200 , 1000 )}}  {{__('lang.Love_This')}} </small>
               <a href="{{$product->link}}" class="btn btn-primary btn-sm float-right " target="_blank">{{__('lang.Check_Out')}}</a>
            </div>
         </div>
      </div>
      @endforeach
   </div>
   <div class="more" id="more" category="{{!empty(@$_GET['category'])?$_GET['category']:''}}"   search="{{isset($_GET['search'])?$_GET['search']:''}}">
      <a href="#"><i class="fa fa-long-arrow-down" aria-hidden="true"></i>{{__('lang.More')}}</a>
      <div class="ajax-load text-center" style="display:none">
         <p><img src="{{asset('image/loader.gif')}}"> {{__('lang.More')}}</p>
      </div>
   </div>
</div>
<script type="text/javascript" src="{{asset('js/index.js')}}"></script>
@endsection
