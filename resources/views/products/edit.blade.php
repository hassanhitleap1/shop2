@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">category</div>
                <div class="card-body">
                    <form method="post" action="{{ url('/admin/products/'.$product->id) }}" aria-label="products"  enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="_method" value="Patch" />
                        <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"  value="{{$product->name}}">

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                                <label for="name" class="col-sm-4 col-form-label text-md-right">Description</label>
    
                                <div class="col-md-6">
                                <textarea rows="4" cols="50" id="description"  class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" > {{$product->description }}
                                </textarea>
                                    @if ($errors->has('description'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        </div>
                        <div class="form-group row">
                                <label for="name" class="col-sm-4 col-form-label text-md-right">Link</label>
    
                                <div class="col-md-6">
                                <input id="link" type="text" class="form-control{{ $errors->has('link') ? ' is-invalid' : '' }}" name="link" value="{{$product->link}}">
    
                                    @if ($errors->has('link'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('link') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        </div>
                        <div class="row">
                            <div class="text-center">
                            <button type="button" class="close" aria-label="Close" id="delete-iamge" model-id="{{$product->id}}">
                                    <span aria-hidden="true">&times;</span>
                            </button>
                            <img src="{{asset($product->image_path)}}" class="rounded" alt="" style="    
                            width: 41%;
                            margin-left: 89px;
                            margin-bottom: 10px;">                         
                            </div>
                        </div> 
                        <div class="form-group row">
                                <label for="file" class="col-sm-4 col-form-label text-md-right">Image must be 500*500</label>
    
                                <div class="col-md-6">
                                    <input id="image" type="file" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image"  >
    
                                    @if ($errors->has('image'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('image') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        </div>
                        <div class="form-group row">
                                <label for="price" class="col-sm-4 col-form-label text-md-right">price</label>
    
                                <div class="col-md-6">
                                    <input id="price" type="text" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{$product->price}}" >
    
                                    @if ($errors->has('price'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('price') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        </div>
                        <div class="form-group row">
                                <label for="name" class="col-sm-4 col-form-label text-md-right"></label>
                                <div class="col-md-6 custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="at_home" name="at_home" <?= ($product->at_home)? 'checked':''?> >
                                    <label class="custom-control-label" for="at_home">do you want at home</label>
                                </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label text-md-right">Category</label>
                            <div class="col-md-6">
                                <select id="category"  class="form-control{{ $errors->has('category') ? ' is-invalid' : '' }}" name="category">
                                    @foreach($categories as $category)
                                        @if($product->category == $category->id)
                                            <option value="{{$category->id}}" selected>{{$category->name}}</option>
                                        @else
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endif
                                        
                                    @endforeach
                                </select>
                                @if ($errors->has('category'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('category') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                                                                                                 
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Update 
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('js/products.js')}}"></script>
@endsection
