@extends('master')

@section('content')
<h1>{{ $page_name }}</h1>
@foreach ($products as $key => $product)
        <ul class="">
            <li>{{ $key }}</li>
            <li>{{ $product['name'] }}</li>
            <li>{{ $product['color'] }}</li>
            <li>{{ $product['price'] }}</li>

        </ul>
        @empty
        <p>no products found</p>

        @endempty
@endforeach
@endsection
