@extends('master')
@section('title','Service_page')
@section('content')

@for ($i = 0;$i<count($services);$i++)
   {{ $services[$i] }}<br>
@endfor

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">slug</th>
        <th scope="col">Joined Date</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($subcategories as $subcategory )
        <tr>
            <th scope="row">{{ $subcategory->id }}</th>
            <td>{{ $subcategory->name }}</td>
            <td>{{ $subcategory->slug }}</td>
            <td>{{ $subcategory->created_at }}</td>
          </tr>
        @endforeach


    </tbody>
  </table>

@endsection
