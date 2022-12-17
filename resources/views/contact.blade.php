@extends('master')

@section('content')
<h1>{{ $page_name }}</h1>
 @if ($product_count <= 10)
 <p>product is reducting....please refill</p>
@else
<p>product count:{{ $product_count }}</p>
 @endif
@switch($color)
    @case("blue")
         <p>blue color is available</p>
        @break
        @case("red")
        <p>red color is available</p>
       @break
       @case("green")
       <p>green color is available</p>
      @break

    @default
    <p>stock out</p>

@endswitch


@empty($products)
<P>no products found</P>

@endempty
@endsection
