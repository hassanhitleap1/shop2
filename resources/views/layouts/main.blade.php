<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>{{config('app.name')}} @yield('title')</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('sections.head')
   </head>
   <body>
        {{-- head --}}
        @include('sections.header')
      {{-- navbar start --}}
      @include('sections.nav')
      {{-- end navbar --}}

      @yield('content')

      <!-- footer start  -->
      @include('sections.footer')
      <!-- footer end -->
        @include('sections.modal')
      <!-- js model -->

      <div class="modal fade" id="test" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLongTitle">content</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <div class="modal-body">
               
                  </div>
               </div>
            </div>
         </div>

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
         
            $( ".modal-body" ).load( "user/login .modal-body" , function() {
                    $('#test').modal('show');   
                });
               //$('#loginModal').modal('show');
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