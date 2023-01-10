@extends('master')
@section('title','product-create_page')
@section('content')
<div class="row">
    <div class="col-8 m-auto">
        <div class="card">
            <div class="card-body">
              <h4 class="card-title">Product Add form</h4>
              <form action="{{ route('products.store')  }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Select category Name</label>
                    <select class="form-select" name="category_id" aria-label="Default select example">
                        <option selected> select a Category</option>
                        @foreach ($categories as $category )
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach

                      </select>
                 </div>
                 <div class="mb-3">
                    <label for="" class="form-label">Select Subcategory Name</label>
                    <select class="form-select"  name="subcategory_id" aria-label="Default select example">
                        <option selected> select a SubCategory</option>
                        @foreach ($subcatergories as $subcatergory )
                        <option value="{{ $subcatergory->id }}">{{ $subcatergory->name }}</option>
                        @endforeach
                      </select>
                 </div>
                 <div class="mb-3">
                    <label for="" class="form-label">Product Name</label>
                    <input type="text" name="name" id="" class="form-control">
                 </div>
                 <div class="mb-3">
                    <label for="" class="form-label">Product Price</label>
                    <input type="number" name="price" id="" class="form-control" min="0">
                 </div>
                 <div class="mb-3">
                    <label for="" class="form-label">Product Description</label>
                    <textarea name="textarea" id="" cols="30" rows="10" class="form-control">description</textarea>
                 </div>
                 <div class="mb-3">
                    <label for="" class="form-label">Product image</label>
                    <input class="form-control" type="file" id="formFile" name="image">
                 </div>
                 <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Add new Product</button>
                 </div>
              </form>
            </div>
        </div>
    </div>
</div>
@endsection
