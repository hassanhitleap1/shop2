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
                    <a action="{{url('/user/register')}}" id="loadmodel" >
                       <li class="list-inline-item fas fa-user-plus"></li>
                       Regidter
                    </a>
                    <li>
                                <a class="fa fa-sign-out" href="{{ route('logout') }}" onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();"> {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                   @csrf
                                </form>
                             </li>
                 </ul>
              </div>
           </div>
        </div>
     </div>