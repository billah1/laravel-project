@extends('master')
@section('title','category_show_page')
@section('content')
<div class="row">
    <div class="col-8 m-auto">
        <h1>{{ $category->name }}</h1>
        <h1>{{ $category->category->slug }}</h1>
        <h1>{{ $category->created_at->format('d-m-y H:i A') }}</h1>
    </div>
</div>
@endsection
