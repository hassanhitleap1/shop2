@extends('layouts.main')

@section('content')
      <!-- bigian slider -->
      @include('sections.slider')
      <!-- end slider -->
      <div class="container">
         <!-- menu list -->
         <div class="row pb-2 mt-4 mb-2">
            <div class="col-md-6">
               <ul class="list-inline dawnlist">
                    <?php $categories=\App\Category::all();?>
                    @foreach ($categories as $category)  
                        <li class="list-inline-item active"><a href="{{url('?category='. $category->name)}}">{{$category->name}}</a></li>
                    @endforeach
                 
               </ul>
            </div>
            <div class="col-md-6">
               <div class="input-group  mt-2 ">
                  <input type="text" class="form-control" placeholder="search" aria-label="Recipient's username"
                     aria-describedby="basic-addon2">
                  <div class="input-group-append">
                     <span class="input-group-text" id="basic-addon2"><i class="fa fa-search" aria-hidden="true"></i> </span>
                  </div>
               </div>
            </div>
         </div>
         <!-- menu list -->
         <div class="row" id="products">
@foreach ($products as $product)
<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 pb-2">
                <div class="card">
                   <button type="button" class="btn btn-primary btn-lg float-right button-save" >Save</button>
                   <img class="card-img-top" src="{{asset($product->image_path)}}" alt="Card image cap">
                   <div class="card-body">
                      <h4 class="float-right"><i class="fas fa-dollar-sign"></i>{{($product->price)}}</h4>
                      <h4 class="card-title">{{$product->name}}</h4>
                      <p class="card-text">{{ substr($product->description,0,400)}}</p>
                   </div>
                   <div class="card-footer">
                      <i class="far fa-heart"></i> <small class="text-muted">love this </small>
                      <a href="{{$product->link}}" class="btn btn-primary btn-sm float-right " >Check out</a>
                   </div>
                </div>
        </div>
@endforeach

</div>

<div class="more" id="more" category="{{!empty(@$_GET['category'])?$_GET['category']:''}}"   search="{{isset($_GET['search'])?$_GET['search']:''}}">
   <a href="#"><i class="fa fa-long-arrow-down" aria-hidden="true"></i>More</a>
   <div class="ajax-load text-center" style="display:none">
       <p><img src="http://demo.itsolutionstuff.com/plugin/loader.gif">Loading More post</p>
   </div>
</div>
</div>

<script type="text/javascript" src="{{asset('js/index.js')}}"></script>

@endsection