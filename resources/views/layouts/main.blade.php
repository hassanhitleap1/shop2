<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Page Title</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('sections.head')
   </head>
   <body>
        {{-- head --}}
        @include('sections.header')
      {{-- navbar start --}}
      @include('sections.nav')
      {{-- end navbar --}}
      <!-- bigian slider -->
        @include('sections.slider')
      <!-- end slider -->
      <div class="container">
         <!-- menu list -->
         <div class="row pb-2 mt-4 mb-2">
            <div class="col-md-6">
               <ul class="list-inline dawnlist">
                  <li class="list-inline-item active">Lorem ipsum</li>
                  <li class="list-inline-item">Phasellus iaculis</li>
                  <li class="list-inline-item">Nulla volutpat</li>
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
         <div class="row">
            @include('sections.content')
         </div>
      </div>
      <!-- end contenier -->

      <!-- footer start  -->
      @include('sections.footer')
      <!-- footer end -->
        @include('sections.modal')
      <!-- js model -->
      <script>
         $(document).scroll(function(e){
               var scrollTop = $(document).scrollTop();
               if(scrollTop > 0){
                   $('.navbar').addClass('fixed-top');
               } else {
                   $('.navbar').removeClass('fixed-top');
               }
           });
         $(document).ready(function () {
            $("#loginClick").click(function (e) { 
                e.preventDefault();
                $('#loginModal').modal('show');
            });
            $(".button-save").click(function (e) { 
                e.preventDefault();
                $('#centralModalInfo').modal('show');
            });
         });
      </script>
      <!-- end js model -->
      <!-- begin js -->
        @include('sections.js')
      <!-- end js -->
   </body>
</html>