@extends('master')
@section('title','category_edit_page')
@section('content')
<div class="row">
    <div class="d-flex justify-content-start my-4">
        <a href="{{ route('category.edit',['category' =>$category->id]) }}" class="btn btn-info">categories</a>
       </div>

    <div class="col-8 m-auto my-3" >
        <div class="card p-4">
            <form action="{{ route('category.update',['category' =>$category->id]) }}" method="POST">
                @method('PUT')
                @csrf

                <div class="mb-3">
                    <label for="category-name" class="form-label">categoryName</label>
                    <input type="text" name="category_name" value="{{ $category->name }}" class="form-control" id="">
                </div>
                <div class="mb-3">
                    <label for="category-slug" class="form-label">categorySlug</label>
                    <input type="text" name="category_slug" value="{{ $category->slug }}" class="form-control" id="">
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" name="is_active"@if ($category->is_active)
                    checked

                    @endif type="checkbox"  id="isActive">
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
