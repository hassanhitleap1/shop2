@extends('layouts.app')

@section('content')
<div class="container">
<a class="btn btn-success" href="{{url('/admin/slider')}}">back</a>
    <div class="row justify-content-center">
    
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">slider</div>
                <div class="card-body">
                    <form method="POST" action="{{ url('/admin/slider') }}" aria-label="products"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                                <label for="name" class="col-sm-4 col-form-label text-md-right">Link</label>
    
                                <div class="col-md-6">
                                    <input id="link" type="text" class="form-control{{ $errors->has('link') ? ' is-invalid' : '' }}" name="link" value="{{ old('link') }}"  >
    
                                    @if ($errors->has('link'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('link') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        </div> 
                        <div class="form-group row">
                                <label for="file" class="col-sm-4 col-form-label text-md-right">Image size must dimntions 1918*498 </label>
    
                                <div class="col-md-6">
                                    <input id="image" type="file" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image"  >
    
                                </div>
                        </div>
                        <div class="form-group row">
                                <label for="name" class="col-sm-4 col-form-label text-md-right"></label>
                                <div class="col-md-6 custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="published" name="published" >
                                    <label class="custom-control-label" for="published">publish</label>
                                </div>
                        </div>   
                                                           
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Save 
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
