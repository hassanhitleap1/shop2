@extends('layouts.main')

@section('content')

<div class="container">
                       <div class="row" id="products">
                        @foreach ($savedProducts as $savedProduct) 
 <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 pb-2" id="{{$savedProduct->product->id}}">
                <div class="card">
                      <button type="button"  item="{{$savedProduct->product->id}}" class="btn btn-primary btn-lg float-right button-save saved" >{{($savedProduct->product->isSaved != null)?'UnSave':'Saved'}}</button>
                   <img class="card-img-top" src="{{asset($savedProduct->product->image_path)}}" alt="Card image cap">
                   <div class="card-body">
                      <h4 class="float-right"><i class="fas fa-dollar-sign"></i>{{($savedProduct->product->price)}}</h4>
                      <h4 class="card-title">{{$savedProduct->product->name}}</h4>
                      <p class="card-text">{{ substr($savedProduct->product->description,0,400)}}</p>
                   </div>
                   <div class="card-footer">
                      <i class="far fa-heart"></i> <small class="text-muted">love this </small>
                      <a href="{{$savedProduct->product->link}}" class="btn btn-primary btn-sm float-right " >Check out</a>
                   </div>
                </div>
        </div>
        @endforeach
    </div>
  <div class="more" id="more" >
            <a href="#"><i class="fa fa-long-arrow-down" aria-hidden="true"></i>More</a>
            <div class="ajax-load text-center" style="display:none">
                <p><img src="http://demo.itsolutionstuff.com/plugin/loader.gif">Loading More post</p>
            </div>
        </div>
</div>
<script type="text/javascript" src="{{asset('js/my-favourite.js')}}"></script>

@endsection