@extends('master')
@section('title','About_page')
@section('content')
<h1>{{ $page_name }}</h1>

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
        @foreach ($categories as $category )
        <tr>
            <th scope="row">{{ $category->id }}</th>
            <td>{{ $category->name }}</td>
            <td>{{ $category->slug }}</td>
            <td>{{ $category->created_at }}</td>
          </tr>
        @endforeach


    </tbody>
  </table>

@endsection
