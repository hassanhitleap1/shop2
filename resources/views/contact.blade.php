@extends('layouts.main')
@section('content')
<div class="container">
        @if(Session::has('recorud'))
        <div class="alert alert-success">
                {{Session::get('recorud')}}
                {{Session::forget('recorud')}}
        </div>
        @else
        <h2 class="text-center">Contact Form</h2>
        <div class="card">
           <div class="card-body">
             <form action="{{url('/saved-contact')}}" method="POST" enctype="multipart/form-data">
                 @csrf
                 <div class="form-group">
                    <label for="name">name</label>
                    <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" value="{{ old('name') }}" required  placeholder="Enter Your Name">
                    @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                 </div>
                 <div class="form-group">
                         <label for="subject">subject</label>
                         <input type="text" name="subject" class="form-control{{ $errors->has('subject') ? ' is-invalid' : '' }}" id="subject" value="{{ old('subject') }}" required  placeholder="Enter Your subject">
                         @if ($errors->has('subject'))
                         <span class="invalid-feedback" role="alert">
                         <strong>{{ $errors->first('subject') }}</strong>
                         </span>
                         @endif
                 </div>
                 <div class="form-group">
                         <label for="message">message</label>
                         <textarea  name="message" class="form-control{{ $errors->has('message') ? ' is-invalid' : '' }}" id="message" required  placeholder="Enter Your Message">{{ old('message') }}
                         </textarea>    
                         @if ($errors->has('message'))
                         <span class="invalid-feedback" role="alert">
                         <strong>{{ $errors->first('message') }}</strong>
                         </span>
                         @endif
                 </div>
                 <div class="form-group">
                        <label for="exampleFormControlFile1">Your Image</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                    </div>
                 <button type="submit" class="btn btn-primary btn-lg">Send</button>
              </form>
           </div>
        </div>
        @endif
</div>

@endsection