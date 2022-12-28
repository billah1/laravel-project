@extends('master')
@section('title','subcategory_show_page')
@section('content')
<div class="row">
    <div class="col-8 m-auto">
        <h1>{{ $subcategory->name }}</h1>
        <h1>{{ $subcategory->category->name }}</h1>
        <h1>{{ $subcategory->created_at->format('d-m-y H:i A') }}</h1>
    </div>
</div>
@endsection
