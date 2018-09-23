@extends('layouts.app')

@section('content')

<div class="container">
    <div class="table-responsive">
        <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">email</th>
                    <th scope="col">subject</th>
                    <th scope="col">messages</th>
                    <th scope="col">Image</th>
                    <th scope="col">resolved</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody><?php $i=0;?>
                  @foreach($contacts as $contact)
                  <tr>
                    <th scope="row">{{++$i}}</th>
                        <td>{{$contact->name}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->subject}}</td>
                        <td>{{$contact->message}}</td>
                        <td><img src="{{asset($contact->image_path)}}" class="rounded" style="width: 180px;"> 
                        </td>
                        <td>{{($contact->resolved)?'yes':'no'}}</td>
                        <td>
                          @if($contact->resolved)
                          <a href=""><i class="fas fa-check-double"></i></a>
                          @else
                          <a href="{{url('/admin/contact/'.$contact->id.'/check')}}"><i class="fas fa-check" style="color:red;"></i></a>
                          @endif
                            <a href="{{url('/admin/contact/'.$contact->id)}}"><i class="fas fa-eye"></i></a>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
        {{$contacts->links()}}
</div>
@endsection