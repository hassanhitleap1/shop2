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