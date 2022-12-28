@extends('master')
@section('title','category_index_page')
@section('content')
<div class="row">
    <div class="d-flex justify-content-end my-4">
        <a href="{{ route('category.create') }}" class="btn btn-success">create category</a>
       </div>
       <div class="col-8 m-auto">
           <table class="table">
               <thead>
                   <tr>
                       <th scope="col">#</th>
                       <th scope="col">category name</th>
                       <th scope="col">category slug</th>
                       <th scope="col">created</th>
                       <th scope="col">Action</th>
                   </tr>
               </thead>
               <tbody>
                   @foreach ($categories as $category)
                   <tr>
                   <th scope="row">{{ $category->id }}</th>
                   <td scope="row">{{ $category->name}}</td>
                   <td scope="row">{{ $category->slug }}</td>
                   <td>
                       {{ $category->created_at->diffForHumans() }}
                   </td>
                   {{-- <td>
                       <a href="{{ route('subcategory.edit',['subcategory'=>$subcategory->id]) }}" class="btn btn-info">Edit</a>
                       <form action="{{ route('subcategory.destroy',['subcategory'=>$subcategory->id]) }}" method="post">
                         @method('DELETE')
                         @csrf
                           <button href=""type="submit" class="btn btn-danger">Del</button>
                       </form>

                   </td> --}}
               </tr>
                   @endforeach
               </tbody>

           </table>
       </div>

</div>
@endsection
