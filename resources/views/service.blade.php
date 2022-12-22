@extends('master')
@section('title','Service_page')
@section('content')

@for ($i = 0;$i<count($services);$i++)
   {{ $services[$i] }}<br>
@endfor

@endsection
