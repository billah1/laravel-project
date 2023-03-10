@extends('master')
@section('title','category-create_page')
@section('content')
<div class="row">
    <div class="d-flex justify-content-start my-4">
        <a href="{{ route('category.index') }}" class="btn btn-info">categories</a>
       </div>
    <div class="col-8 m-auto">

        <form action="{{ route('category.store') }}" method="POST">
             @csrf
            <div class="mb-3">
                <label for="category-name" class="form-label">category name</label>
                <input type="text" class="form-control @error('category_name')
                    is_invalid
                @enderror"
                 id="category-name" name="category_name" placeholder="please provide category name" value="{{ old('category_name') }}">

                 @error('category_name')
                 <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                 </span>
                @enderror
                </div>
              {{-- <div class="mb-3">
                <label for="category-slug" class="form-label">category slug</label>
                <input type="text" class="form-control" id="category-slug" name="category_slug" placeholder="please provide category slug">
              </div> --}}
              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="is_active" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  active/inactive
                </label>
              </div>
              <button type="submit" class="btn btn-danger">submit</button>
        </form>


    </div>
</div>

@endsection
