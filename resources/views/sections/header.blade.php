

     <div class="container">
                <div class="mt-3 border-bottom">
                   <div class="row justify-content-md-center">
                      <div class="col col-lg-5">
                         <div class="input-group mb-1 float-left col-4">
                            <input type="text" class="form-control" placeholder="search" aria-label="Recipient's username"
                               aria-describedby="basic-addon2">
                            <div class="input-group-append">
                               <span class="input-group-text" id="basic-addon2"><i class="fa fa-search" aria-hidden="true"></i> </span>
                            </div>
                         </div>
                      </div>
                      <div class="col-md-auto">
                         <a href="{{url('/')}}"><img src="logo-1.png" class="rounded mx-auto d-block" ></a> 
                      </div>
                      <div class="col col-lg-5">
                         <ul class="list-inline  float-right">
                                 @guest
                                        <a id="loginClick"> <li class="list-inline-item auth-menu fas fa-sign-in-alt"></li>Login</a>
                                        <a id="registerClick"><li class="list-inline-item auth-menu fas fa-user-plus"></li>register</a>
                                @else  
                                <a href="{{url('/my-favorite')}}"><li class="list-inline-item auth-menu far fa-heart"></li>MY favorite</a>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();  document.getElementById('logout-form').submit();"> <li class="list-inline-item auth-menu fas fa-sign-out-alt"></li>logout</a> 
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                             </form>               
      
                            
                                 @endguest
                         </ul>
                      </div>
                   </div>
                </div>
             </div>