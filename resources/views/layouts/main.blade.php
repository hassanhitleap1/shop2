<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="google-site-verification" content="nOceAJnmqdCmF1y5DbHnjUqIx_rcpDOovVZkTpAZ52o" />
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
 
         });
      </script>
      <!-- end js model -->
      <!-- begin js -->
      @include('sections.js')
      <!-- end js -->
      <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127102137-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-127102137-1');
        </script>
        <!-- Facebook Pixel Code -->
        <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '180321722907815');
        fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=180321722907815&ev=PageView&noscript=1"
        /></noscript>
        <!-- End Facebook Pixel Code -->

   </body>
</html>