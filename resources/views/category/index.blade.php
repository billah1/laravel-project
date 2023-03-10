@extends('master')
@section('title','category_index_page')
@section('content')
<div class="row">
    <div class="d-flex justify-content-end my-4">
        <a href="{{ route('category.create') }}" class="btn btn-success">create category</a>
       </div>
       <div class="col-8 m-auto">
       <h4 class="">Normal Data</h4>
           <table class="table">
               <thead>
                   <tr>
                       <th scope="col">#</th>
                       <th scope="col">category name</th>
                       <th scope="col"># of subcategory</th>
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
                   <td scope="row">{{ $category->subcategories_count}}</td>
                   <td scope="row">{{ $category->slug }}</td>
                   <td>
                       {{ $category->created_at->diffForHumans() }}
                   </td>
                   <td>
                       <a href="{{ route('category.edit',['category'=>$category->id]) }}" class="btn btn-info">Edit</a>
                       {{-- <a href="{{ route('category.destroy',['category'=>$category->id]) }}" class="btn btn-danger">DEL</a> --}}
                       <form action="{{ route('category.destroy',['category'=>$category->id]) }}" method="post">
                         @method('DELETE')
                         @csrf
                           <button type="submit" class="btn btn-danger">Del</button>
                       </form>

                   </td>
               </tr>
                   @endforeach
               </tbody>

           </table>
       </div>

</div>
<div class="row my-4">
       <div class="col-8 m-auto">
       <h4 class="">soft delete  Data</h4>
           <table class="table tab-color">
               <thead>
                   <tr>
                       <th scope="col">#</th>
                       <th scope="col">category name</th>
                       <th scope="col"># of subcategory</th>
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
                   <td scope="row">{{ $category->subcategories_count}}</td>
                   <td scope="row">{{ $category->slug }}</td>
                   <td>
                       {{ $category->created_at->diffForHumans() }}
                   </td>
                   <td>
                       <a href="{{ route('category.restore',['category_id'=>$category->id,]) }}" class="btn btn-info">Restore</a>
                       <form action="{{ route('category.forcedelete',['category_id'=>$category->id]) }}" method="post">
                        @method('GET')
                        @csrf
                          <button type="submit" class="btn btn-danger">ForceDel</button>
                      </form>
{{--
                       <a href="{{ route('category.forcedelete',['category_id'=>$category->id,]) }}" class="btn btn-danger">Force Del</a> --}}
                       {{-- <a href="{{ route('category.destroy',['category'=>$category->id]) }}" class="btn btn-danger">DEL</a> --}}


                   </td>
               </tr>
                   @endforeach
               </tbody>

           </table>
       </div>

</div>
@endsection
