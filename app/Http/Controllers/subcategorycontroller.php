<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Support\Str;
use App\Models\subcatergory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\SubCategoryStoreRequest;
use App\Http\Requests\subCategoryUpdateRequest;

class subcategorycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $subcategories = subcatergory::with(['category'])->get(['id','name','category_id','created_at']);
    //    return $subcategories ;
       return view('subcatergory.index',compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories =category::get(['id','name']);
        //  return $categories;
        return view('subcatergory.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubCategoryStoreRequest $request)
    {
        //  dd($request->all());

        subcatergory::create([
            'category_id' =>$request->category_id,
            'name' =>$request->subcategory_name,
            'slug' =>Str::slug($request->subcategory_slug),
            'is_active' =>$request->filled('is_active')

        ]);
        Session::flash('status','subcategory created a sucessfully!');
        return redirect()->route('subcategory.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subcategory = subcatergory::find($id);
        return view('subcatergory.show',compact('subcategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //  dd($id);
        $categories =category::get(['id','name']);
        //  return $categories;
        $subcategory = subcatergory::find($id);
        return view('subcatergory.edit',compact('categories','subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(subCategoryUpdateRequest $request, $id)
    {
        // dd($request->all());
        $subcategory = subcatergory::find($id);
        $subcategory->update([
            'category_id' =>$request->category_id,
            'name' =>$request->subcategory_name,
            'slug' =>Str::slug($request->subcategory_slug),
            'is_active' =>$request->filled('is_active')

        ]);
        Session::flash('status','subcategory updated a sucessfully!');
        return redirect()->route('subcategory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        subcatergory::find($id)->delete();
        Session::flash('status','subcategory deleted a sucessfully!');
        return redirect()->route('subcategory.index');
    }
}
