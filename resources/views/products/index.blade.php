@extends('layouts.app')

@section('content')

<div class="container">
    <a class="btn btn-success" href="{{url('/admin/products/create')}}">create</a>
    <div class="table-responsive">
        <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Link</th>
                    <th scope="col">Image</th>
                    <th scope="col">Category</th>
                    <th scope="col">At Home</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody><?php $i=0;?>
                  @foreach($products as $product)
                  <tr>
                    <th scope="row">{{++$i}}</th>
                        <td>{{$product->name}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->link}}</td>
                        <td><img src="{{asset($product->image_path)}}" class="rounded" style="width: 180px;"> 
                        </td>
                        <td>{{$product->infoCategory['name']}}</td>
                        <td>{{($product->at_home)?'yes':'no'}}</td>
                        <td>
                            <a href="{{url('/admin/products/'.$product->id.'/edit')}}"><i class="fas fa-edit"></i></a>
                            <a href="{{url('/admin/products/'.$product->id)}}"><i class="fas fa-eye"></i></a>
                            <form action="{{url('/admin/products',['id'=>$product->id] )}}" method="post" >
                                @csrf
                                <input name="_method" type="hidden" value="DELETE">
                                <button type="submit" value="Submit" class="fas fa-trash-alt"></button>
                            </form>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
        {{$products->links()}}
</div>
@endsection