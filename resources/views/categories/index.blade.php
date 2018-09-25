@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-8">
         <div class="card">
            <div class="card-header">category</div>
            <a class="btn btn-success" href="{{url('/admin/category/create')}}">create</a>
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
                                <a href="{{url('/admin/category/'.$category->id.'/edit')}}"><i class="fas fa-edit"></i></a>
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
            </div>
         </div>
      </div>
   </div>
</div>
@endsection