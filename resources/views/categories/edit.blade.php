@extends('layouts.app')
@section('content')
<div class="container">
   <a class="btn btn-success" href="{{url('/admin/category')}}">back</a>
   <div class="row justify-content-center">
      <div class="col-md-8">
         <div class="card">
            <div class="card-header">category</div>
            <div class="card-body">
                    <form method="POST" action="{{ url('/admin/category/'.$category->id) }}" aria-label="category">
                        @csrf
                        <input type="hidden" name="_method" value="Patch" />
                        <div class="form-group row">
                           <label for="name" class="col-sm-4 col-form-label text-md-right">Name</label>
                           <div class="col-md-6">
                              <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"  value="{{ $category->name }}" >
                              @if ($errors->has('name'))
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('name') }}</strong>
                              </span>
                              @endif
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="classes" class="col-sm-4 col-form-label text-md-right">classes</label>
                           <div class="col-md-6">
                              <input id="name" type="text" class="form-control{{ $errors->has('classes') ? ' is-invalid' : '' }}" name="classes"   value="{{$category->classes }}">
                              @if ($errors->has('classes'))
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('classes') }}</strong>
                              </span>
                              @endif
                           </div>
                        </div>
                        <div class="form-group row">
                           <label for="color" class="col-sm-4 col-form-label text-md-right">color</label>
                           <div class="col-md-6">
                              <input type="color"  class="form-control{{ $errors->has('color') ? ' is-invalid' : '' }}" name="color" value="{{$category->color}}">
                              @if ($errors->has('color'))
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('color') }}</strong>
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
   @endsection                