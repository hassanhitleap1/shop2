@extends('layouts.app')

@section('content')

    <div class="container">
            <div class="row">
                    <div class="col-md-12">
                        <a href="{{url('/admin/contact')}}" class="btn btn-primary btn-lg">back</a>  
                    </div>
                </div>  
        <div class="row">
            <div class="col-md-12">
                    <h3 class="text-center">Name :</h3>
            </div>
            <div class="col-md-12">
                    <h3 class="text-center"> {{$model->name}}</h3>
            </div>
        </div>
        <hr>
        <div class="row">
                <div class="col-md-12">
                        <h3 class="text-center">Email :</h3>
                </div>
                <div class="col-md-12">
                        <h3 class="text-center"> {{$model->email}}</h3>
                </div>
        </div>
        <hr>
        <div class="row">
                <div class="col-md-12">
                        <h3 class="text-center">subject :</h3>
                </div>
                <div class="col-md-12">
                        <h3 class="text-center">{{$model->subject}}</h3>
                </div>                
        </div>
        <hr>
        <div class="row">
                <div class="col-md-12">
                        <h3 class="text-center">message :</h3>
                </div>
                <div class="col-md-12">
                        <h3 class="text-center">{{$model->message}}</h3>
                </div>
        </div>
        <hr>
        <div class="row">
                <div class="col-md-6 col-offset-6 centered">
                        <img src="{{asset($model->image_path)}}" class="rounded" style="width: 280px;">
                </div>
        </div>

        <div class="row">
                <div class="col-md-6 col-offset-6 centered">
                        @if(!$model->resolved)
                            <a href="{{url('/admin/contact/'.$model->id.'/check')}}" class="btn btn-danger"><i class="fas fa-check" >resolved</i></a>
                         @endif
                </div>
        </div>

    </div>
@endsection