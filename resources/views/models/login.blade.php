<div class="container">
   <h2 class="text-center mt-4" >{{__('lang.Login')}}</h2>
   <div class="card">
      <div class="card-body">
         <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
            @csrf
            <div class="form-group">
               <label for="email">{{__('lang.Email')}}</label>
               <input type="text" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" value="{{ old('email') }}" required autofocus placeholder="{{__('lang.Email')}}">
               @if ($errors->has('email'))
               <span class="invalid-feedback" role="alert">
               <strong>{{ $errors->first('email') }}</strong>
               </span>
               @endif
            </div>
            <div class="form-group">
               <label for="password">{{__('lang.Password')}}</label>
               <input placeholder="{{__('lang.Password')}}" type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" value="{{ old('password') }}" required >
               @if ($errors->has('password'))
               <span class="invalid-feedback" role="alert">
               <strong>{{ $errors->first('password') }}</strong>
               </span>
               @endif
            </div>
            <div class="form-check">

            </div>
            <button type="submit" class="btn btn-primary">{{__('lang.Login')}}</button>
         </form>
      </div>
   </div>
</div>
