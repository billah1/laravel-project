@extends('master')
@section('title','subcategory_create_page')
@section('content')
<div class="row">
    <div class="d-flex justify-content-start my-4">
        <a href="{{ route('subcategory.index') }}" class="btn btn-info">sub categories</a>
       </div>

    <div class="col-8 m-auto my-3" >
        <div class="card p-4">
            <form action="{{ route('subcategory.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <select class="form-select"name="category_id">
                        <option selected>Open this select menu</option>

                        @foreach ($categories as $category )
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach

                      </select>
                </div>
                <div class="mb-3">
                    <label for="subcategory-name" class="form-label">subcategoryName</label>
                    <input type="text" name="subcategory_name" class="form-control" id="">
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" name="is_active" type="checkbox"  id="isActive">
                    <label class="form-check-label" for="isActive">
                      Active/InActive
                    </label>
                  </div>
                  <div class="mb-3">
                    <button type="submit" class="btn btn-danger">Submit</button>
                  </div>
            </form>
        </div>

    </div>

</div>
@endsection
