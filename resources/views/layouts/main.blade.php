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
       @include('sections.header')
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
            <div class="content">
                @yield('content')
            </div>
         </div>
      </div>
      <!-- end contenier -->

      <!-- footer start  -->
        @include('sections.footer')
      <!-- footer end -->

      <!-- Modal loginModal -->
      <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">login</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="form-group">
                     <label for="exampleInputEmail1">Email address</label>
                     <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                     <label for="exampleInputPassword1">Password</label>
                     <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-check">
                     <input type="checkbox" class="form-check-input" id="exampleCheck1">
                     <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Submit</button>
               </div>
            </div>
         </div>
      </div>
      <!-- Modal loginModal end   -->
      <!-- Central Modal Medium Info -->
      <div class="modal fade" id="centralModalInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-notify modal-info modal-dialog-centered" role="document">
            <!--Content-->
            <div class="modal-content">
               <!--Header-->
               <div class="modal-header">
                  <p class="heading lead">Modal Info</p>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" class="white-text">&times;</span>
                  </button>
               </div>
               <!--Body-->
               <div class="modal-body">
                  <div class="text-center">
                     <i class="fa fa-check fa-4x mb-3 animated rotateIn"></i>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit iusto nulla aperiam blanditiis ad consequatur in dolores culpa, dignissimos, eius non possimus fugiat. Esse ratione fuga, enim,
                        ab officiis totam.
                     </p>
                  </div>
               </div>
               <!--Footer-->
               <div class="modal-footer justify-content-center">
                  <a type="button" class="btn btn-primary">Get it now <i class="fa fa-diamond ml-1"></i></a>
                  <a type="button" class="btn btn-outline-primary waves-effect" data-dismiss="modal">No, thanks</a>
               </div>
            </div>
            <!--/.Content-->
         </div>
      </div>
      <!-- Central Modal Medium Info-->
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

