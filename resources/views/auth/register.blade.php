@extends('layouts.main')

@section('content')
<div class="box-breadcrumb">
    <div class="container">
        <ul class="list-inline">
            <li><a href="{{url('/')}}">Home <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
            <li><a href="{{url('/register')}}">{{ __('Register') }}</a></li>
        </ul>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="contact-form-faq">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="contact-form">
                                        <h2 class="title18 text-center" >{{ __('Register') }}</h2>
                                         <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                                            @csrf
                                            <input  placeholder="Email" type="text" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" value="{{ old('email') }}" required autofocus>
                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            <input  placeholder="Password" type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" value="{{ old('password') }}" required autofocus>         
                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            <input type="submit" value="{{ __('Register') }}" class="shop-button" />
                                        </form>
                                    </div>
                            </div>
                        </div>
                    </div>
        
    </div>
</div>
@endsection
