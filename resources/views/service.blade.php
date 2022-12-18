@extends('master')

@section('content')

@for ($i = 0;$i<count($services);$i++)
   {{ $services[$i] }}<br>
@endfor

@endsection
