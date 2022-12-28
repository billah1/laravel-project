<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\categoryStoreRequest;
use App\Http\Requests\categoryUpdateRequest;

class categorycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $categories = category::get(['id','name','slug','created_at']);

       return view('category.index',compact('categories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = category::get(['id','name']);
        return view('category.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(categoryStoreRequest $request)
    {
        // dd($request->all());


        category::create([
           'name' => $request->category_name,
           'slug' => Str::slug($request->category_name),
           'is_active' => $request->filled('is_active'),
        ]);
        Session::flash('status','category created a sucessfully!');
        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = category::find($id);
        return view('category.show',compact('category'));
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
        $categories =category::get(['id','name','slug','is_active']);
        //  return $categories;
        $category = category::find($id);
        return view('category.edit',compact('categories','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(categoryUpdateRequest $request, $id)
    {
        $category = category::find($id);
        $category->update([
            'category_id' =>$request->category_id,
            'name' =>$request->category_name,
            'slug' =>Str::slug($request->category_slug),
            'is_active' =>$request->filled('is_active')

        ]);
        Session::flash('status','category updated a sucessfully!');
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //  dd($id);
         category::find($id)->delete();
         Session::flash('status','category delete a sucessfully!');
         return redirect()->route('category.index');
    }
}
