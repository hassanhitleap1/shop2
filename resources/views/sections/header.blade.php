<div class="container">
                <div class="mt-3 border-bottom">
                   <div class="row justify-content-md-center">
                      <div class="col-lg-5 col-md-5 col-sm-5">
                         <form  action="{{url('/')}}" method="GET">
                            <div class="input-group mb-1 float-left col-6">
                               <input type="text" class="form-control" placeholder="{{__('lang.Search')}}" aria-label="Recipient's username"
                                  aria-describedby="basic-addon2" name="search">
                               <div class="input-group-append">
                                  <span class="input-group-text" id="basic-addon2"><i class="fa fa-search" aria-hidden="true"></i> </span>
                               </div>
                            </div>
                         </form>
                      </div>
                      <div class="col-md-2 col-lg-2  col-sm-2">
                         <a href="{{url('/')}}"><img src="logo-1.png" class="rounded mx-auto d-block" ></a>
                      </div>
                      <div class="col-lg-5 col-md-5 col-sm-5">
                         <ul class="list-inline  float-right">
                            @guest
                            <a id="loginClick" class="m-2">
                               <li class="list-inline-item auth-menu fas fa-sign-in-alt"></li>
                                {{__('lang.Login')}}
                            </a>
                            <a id="registerClick" class="m-2">
                               <li class="list-inline-item auth-menu fas fa-user-plus"></li>
                                {{__('lang.Register')}}

                            </a>
                            @else
                            <a href="{{url('/my-favorite')}}" class="m-2">
                               <li class="list-inline-item auth-menu far fa-heart"></li>
                                {{__('lang.My_Favorite')}}

                            </a>
                            @if(Auth::user()->admin)
                            <a href="{{url('/admin')}}"  class="m-2">
                                <li class="list-inline-item auth-menu fas fa-screwdriver"></li>
                                {{__('lang.Admin')}}

                             </a>
                            @endif
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();  document.getElementById('logout-form').submit();" class="m-2">
                               <li class="list-inline-item auth-menu fas fa-sign-out-alt"></li>
                                {{__('lang.Logout')}}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                               @csrf
                            </form>
                            @endguest
                         </ul>
                      </div>
                   </div>
                </div>
             </div>
