@extends('master')

@section('content')

@for ($i = 0;$i<4;$i++)
   {{ $services[$i] }}<br>
@endfor

@endsection
