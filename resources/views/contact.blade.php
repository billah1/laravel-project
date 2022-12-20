@extends('master')

@section('content')
<h1>{{ $page_name }}</h1>
@forelse ($products as $key => $product )
@include('partial.product')
@empty
<p>no products found</p>
@endforelse

@endsection
