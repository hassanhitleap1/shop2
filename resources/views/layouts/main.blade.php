<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Page Title</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
         integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
      <link rel="stylesheet" type="text/css" media="screen" href="css/responsive.css" />
      <script
         src="https://code.jquery.com/jquery-3.3.1.js"
         integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
         crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="js/main.js"></script>
   </head>
   <body>
      <div class="container">
         <div class="pb-2 mt-4 mb-2 border-bottom">
            <div class="row justify-content-md-center">
               <div class="col col-lg-4">
                  <div class="input-group mb-1">
                     <input type="text" class="form-control" placeholder="search" aria-label="Recipient's username"
                        aria-describedby="basic-addon2">
                     <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2"><i class="fa fa-search" aria-hidden="true"></i> </span>
                     </div>
                  </div>
               </div>
               <div class="col-md-auto">
                  <img src="logo-1.png" class="rounded mx-auto d-block" >
               </div>
               <div class="col col-lg-4">
                  <ul class="float-right list-inline">
                     <a id="loginClick">
                        <li class="list-inline-item fas fa-sign-in-alt"></li>
                        Login
                     </a>
                     <a>
                        <li class="list-inline-item fas fa-user-plus"></li>
                        Regidter
                     </a>
                  </ul>
               </div>
            </div>
         </div>
      </div>
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