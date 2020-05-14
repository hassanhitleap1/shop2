<div class="container">
   <h2 class="text-center mt-4">{{__('lang.Register')}}</h2>
   <div class="card">
      <div class="card-body">
            <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
            @csrf
            <div class="form-group">
               <label for="exampleInputEmail1">{{__('lang.Email')}}</label>
               <input type="text" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" value="{{ old('email') }}" required autofocus aria-describedby="emailHelp" placeholder="{{__('lang.Email')}}">
               @if ($errors->has('email'))
               <span class="invalid-feedback" role="alert">
               <strong>{{ $errors->first('email') }}</strong>
               </span>
               @endif
            </div>
            <div class="form-group">
               <label for="exampleInputPassword1">{{__('lang.Password')}}</label>
               <input placeholder="{{__('lang.Password')}}" type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" value="{{ old('password') }}" required >
               @if ($errors->has('password'))
               <span class="invalid-feedback" role="alert">
               <strong>{{ $errors->first('password') }}</strong>
               </span>
               @endif
            </div>

            <button type="submit" class="btn btn-primary">{{ __('lang.Register') }}</button>
         </form>
      </div>
   </div>
</div>
