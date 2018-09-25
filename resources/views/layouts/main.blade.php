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
      <div class="modal fade" id="model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
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
                $( ".modal-content" ).load( "user/login" , function() {
                    $('#model').modal('show');   
                });
            });
            $("#registerClick").click(function (e) { 
                e.preventDefault();
                $( ".modal-content" ).load( "user/register" , function() {
                    $('#model').modal('show');   
                });
            });
            $('.animate').hover(function() {
                    element = $(this);
                $(element).addClass('animated bounce');
                        window.setTimeout( function(){
                            removeClassmm(element);
                        }, 2000);  
                });
            function removeClassmm(element) {
                $(element).removeClass( "animated bounce" ); 
            }
         });
      </script>
      <!-- end js model -->
      <!-- begin js -->
      @include('sections.js')
      <!-- end js -->
   </body>
</html>