<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\category;
use Illuminate\Support\Str;
use App\Models\subcatergory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ProductStoreRequest;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories =category::select(['id','name'])->get();
        $subcatergories =subcatergory::select(['id','name'])->get();
        // dd($categories,$subcatergories);
        return view('Products.create',compact('categories','subcatergories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductStoreRequest $request)
    {
        // dd($request->all());
        $product = Product::create([
           'category_id' => $request->category_id,
           'subcategory_id' => $request->subcategory_id,
           'name' => $request->name,
           'slug' =>Str::slug($request->slug) ,
           'description' => $request->description,
           'price' => $request->price,

        ]);
        $this->image_upload($request,$product->id);
        return back();

    }
    public function image_upload($request,$product_id){
       if($request->hasFile('image')){
           $photo_location ='public/uploads/product-image/';
           $uploade_photo =$request->file('image');
           $photo_name = $product_id. '.' .$uploade_photo->getClientOriginalExtension();
           $new_photo_location = $photo_location.$photo_name;
           Image::make($uploade_photo)->resize(600,600)->save(base_path($new_photo_location));
           //updated the product image field
           $product = Product::find($product_id);
           $product->update([
            'image'=>$photo_name
           ]);


       }else{
        return back();
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
