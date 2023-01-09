<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\subcatergory;
use Illuminate\Http\Request;
use App\Http\Requests\ProductStoreRequest;
use Illuminate\Support\Facades\Storage;

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
        // dd($request->hasFile('image'));
         $file_exits = $request->hasFile('image');
         if($file_exits){
            $file = $request->file('image');
            $file_type = $file->getClientMimeType();
            $file_ext = $file->getClientOriginalExtension();
            $file_org_name = $file->getClientOriginalName();

            // dump($file->store('image'));
            // dump(Storage::disk('public')->put('image',$file));
            // dump($file->storeAs('image','new_product_1'.','.$file->getClientOriginalExtension()));
            dump(storage::putFileAs('product_image',$file,'new_product_1'.'.'.$file->getClientOriginalExtension()));
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
