@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">category</div>
                <div class="card-body">
                    <table class="table">
                                    <thead>
                                    <tr>
                                    <th scope="col">id</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">color</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                            <?php $i=0?>
                            @foreach($categories as $category)
                                <tr>
                                    <th scope="row">{{++$i}} </th>
                                    <td>{{$category->name}} </td>
                                     <td><button type="button" class="btn"style="background:{{$category->color}};">color</button></td>
                                    <td>
                                            <form action="{{url('/admin/category',['id'=>$category->id] )}}" method="post" >
                                                    @csrf
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    <button type="submit" value="Submit" class="fas fa-trash-alt"></button>
                                            </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <form method="POST" action="{{ url('/admin/category') }}" aria-label="category">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"  value="{{ old('name') }}" >

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
                                <input id="name" type="text" class="form-control{{ $errors->has('classes') ? ' is-invalid' : '' }}" name="classes"   value="{{ old('classes') }}">

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
                                    <input type="color"  class="form-control{{ $errors->has('color') ? ' is-invalid' : '' }}" name="color" value="#ff0000">
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
