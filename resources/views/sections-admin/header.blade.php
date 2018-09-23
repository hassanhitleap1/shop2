<div id="header">
    <div class="header">
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                        <div class="logo">
                            <a href="{{url('/')}}"><img src="{{asset('/smartbuy/images/logo-1.png')}}" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-9 col-xs-9">
                        <nav class="main-nav">
                            <a href="#" class="toggle-mobile-menu"><span></span></a>
                            <ul class="list-inline">
                                <li><a href="{{asset('/home')}}">Home</a></li>
                                <li><a href="{{asset('/admin/products')}}">Product</a></li>
                                <li><a href="{{asset('/admin/category')}}">Category</a></li> 
                                 <li><a href="{{asset('/admin/slider')}}">slider</a></li>     
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
                        <div class="box-right">
                            <ul class="list-inline">
                                <li class="mini-cart-box" >
                                    @guest
                                    <a href="#"><i class="fa fa-user-o" aria-hidden="true"></i><sup></sup></a>
                                    <div class="mini-cart-content">
                                        <div class="contact-form">
                                            <div class="box-product box-has-filter">
                                                <div class="title">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="box-tabs">
                                                                <ul class="nav nav-tabs list-inline" role="tablist">
                                                                    <li role="presentation" class="active"><h3><a data-toggle="tab" href="#tab1">login </a></h3></li>
                                                                    <li role="presentation"><h3><a data-toggle="tab" href="#tab2">register</a></h3></li>							
                                                                </ul>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                                        <div class="tab-content">
                                                            <div id="tab1" role="tabpanel" class="tab-pane fade in active">
                                                                                    <h2 class="title18">login</h2>
                                                                                <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                                                                                    @csrf
                                                                                    <input id="email" type="email" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                                                                    @if ($errors->has('email'))
                                                                                        <span class="invalid-feedback" role="alert">
                                                                                            <strong>{{ $errors->first('email') }}</strong>
                                                                                        </span>
                                                                                    @endif
                                                                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                                                                    @if ($errors->has('password'))
                                                                                        <span class="invalid-feedback" role="alert">
                                                                                            <strong>{{ $errors->first('password') }}</strong>
                                                                                        </span>
                                                                                    @endif
                                                                                    <input type="submit" value="login" class="shop-button" />
                                                                                </form>
                                                            </div>
                                                            <div id="tab2" role="tabpanel" class="tab-pane fade in">
                                                                                    <h2 class="title18">register</h2>
                                                                                <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                                                                                    @csrf
                                                                                    <input id="email" type="email" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                                                                    @if ($errors->has('email'))
                                                                                        <span class="invalid-feedback" role="alert">
                                                                                            <strong>{{ $errors->first('email') }}</strong>
                                                                                        </span>
                                                                                    @endif
                                                                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                                                                    @if ($errors->has('password'))
                                                                                        <span class="invalid-feedback" role="alert">
                                                                                            <strong>{{ $errors->first('password') }}</strong>
                                                                                        </span>
                                                                                    @endif
                                                                                    <input type="submit" value="register" class="shop-button" />
                                                                                </form>
                                                                
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
										   
									    </div>
                                    </div>
                                    @else
                                        <a  id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><i class="fa fa-user-o" aria-hidden="true"></i><sup>{{substr(Auth::user()->email, -5 )}} ...</sup></a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="fa fa-sign-out" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();"> {{ __('Logout') }}</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                            @csrf
                                                </form>
                                        </div>
                                    @endguest
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>