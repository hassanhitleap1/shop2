@extends('layouts.main')
@section('content')
<div class="container">
   <h2 class="text-center">{{ __('Login') }}</h2>
   <div class="card">
      <div class="card-body">
         <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
            @csrf
            <div class="form-group">
               <label for="exampleInputEmail1">Email address</label>
               <input type="text" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" value="{{ old('email') }}" required autofocus aria-describedby="emailHelp" placeholder="Enter email">
               <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
               @if ($errors->has('email'))
               <span class="invalid-feedback" role="alert">
               <strong>{{ $errors->first('email') }}</strong>
               </span>
               @endif
            </div>
            <div class="form-group">
               <label for="exampleInputPassword1">Password</label>
               <input placeholder="Password" type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" value="{{ old('password') }}" required >
               @if ($errors->has('password'))
               <span class="invalid-feedback" role="alert">
               <strong>{{ $errors->first('password') }}</strong>
               </span>
               @endif
            </div>
            <div class="form-check">
               <input type="checkbox" class="form-check-input" id="exampleCheck1">
               <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
         </form>
      </div>
   </div>
</div>
@endsection