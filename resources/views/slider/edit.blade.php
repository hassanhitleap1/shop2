@extends('layouts.app')

@section('content')
<div class="container">
<a class="btn btn-success" href="{{url('/admin/slider')}}">back</a>
    <div class="row justify-content-center">
    
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">slider</div>
                <div class="card-body">
                   <form method="POST" action="{{ url('/admin/slider/'.$slider->id) }}"   enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                                <label for="name" class="col-sm-4 col-form-label text-md-right">Link</label>
    
                                <div class="col-md-6">
                                <input id="link" type="text" class="form-control{{ $errors->has('link') ? ' is-invalid' : '' }}" name="link" value="{{$slider->link}}">
    
                                    @if ($errors->has('link'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('link') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        </div> 
                        <div class="row">
                                <div class="text-center">
                                <button type="button" class="close" aria-label="Close" id="delete-iamge" model-id="{{$slider->id}}">
                                        <span aria-hidden="true">&times;</span>
                                </button>
                                <img src="{{asset($slider->image_path)}}" class="rounded" alt="" style="    
                                width: 41%;
                                margin-left: 89px;
                                margin-bottom: 10px;">                         
                                </div>
                            </div> 
                        <div class="form-group row">
                                <label for="file" class="col-sm-4 col-form-label text-md-right">Image size must dimntions 1918*498</label>
    
                                <div class="col-md-6">
                                    <input id="image" type="file" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image"  >
    
                                </div>
                        </div>
                        <div class="form-group row">
                                <label for="name" class="col-sm-4 col-form-label text-md-right"></label>
                                <div class="col-md-6 custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="published" name="published" <?= ($slider->published)? 'checked':''?> >
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
<script src="{{asset('js/slider.js')}}"></script>
@endsection
