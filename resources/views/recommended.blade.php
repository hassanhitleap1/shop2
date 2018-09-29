@extends('layouts.main')
@section('content')

<div class="container">
   <!-- menu list -->
   <div class="row pb-2 mt-4 mb-2">
      <div class="col-md-6">
         <ul class="list-inline dawnlist">
            <li class="list-inline-item active animate" ><a href="{{url('/')}}">Home</a></li>
            <li class="list-inline-item active animate"><a href="{{url('/popular')}}">Popular</a></li>
            <li class="list-inline-item active animate"><a href="{{url('/recommended')}}">Recommended</a></li>
         </ul>
      </div>
      <div class="col-md-6">
         <form  action="{{url('/')}}" method="GET">
            <div class="input-group  mt-2 ">
               <input type="text" class="form-control" placeholder="search" aria-label="Recipient's username"
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
   </div>
   <div class="more" id="more"    search="{{isset($_GET['search'])?$_GET['search']:''}}">
      <a href="#"><i class="fa fa-long-arrow-down" aria-hidden="true"></i>More</a>
      <div class="ajax-load text-center" style="display:none">
         <p><img src="http://demo.itsolutionstuff.com/plugin/loader.gif">Loading More post</p>
      </div>
   </div>
</div>
<script type="text/javascript" src="{{asset('js/recommended.js')}}"></script>
@endsection