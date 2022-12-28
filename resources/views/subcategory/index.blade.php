@extends('master')
@section('title','subcategory_index_page')
@section('content')
<div class="row">
    <div class="d-flex justify-content-end my-4">
     <a href="{{ route('subcategory.create') }}" class="btn btn-success">create sub category</a>
    </div>
    <div class="col-8 m-auto">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">category name</th>
                    <th scope="col">subcategory name</th>
                    <th scope="col">created</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subcategories as $subcategory)
                <tr>
                <th scope="row">{{ $subcategory->id }}</th>
                <td scope="row">{{ $subcategory->category->name}}</td>
                <td scope="row">{{ $subcategory->name }}</td>
                <td>
                    {{ $subcategory->created_at->diffForHumans() }}
                </td>
                <td>
                    <a href="{{ route('subcategory.edit',['subcategory'=>$subcategory->id]) }}" class="btn btn-info">Edit</a>
                </td>
            </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>
@endsection
