<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\CtaegoryCreated;
use Illuminate\Support\Facades\Mail;
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
       $categories = category::query()
    //    withTrashed()
            // onlyTrashed()
       ->withCount(['subcategories'])->get(['id','name','created_at']);

       $delcategories = category::query()->
       //    withTrashed()
        onlyTrashed()
          ->withCount(['subcategories'])->get(['id','name','created_at']);

       return view('category.index',compact('categories','delcategories'));

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


     $category = category::create([
           'name' => $request->category_name,
           'slug' => Str::slug($request->category_name),
           'is_active' => $request->filled('is_active'),
        ]);

        // mail send
        $user= User::find(1);
        Mail::to($user)->send(
          new CtaegoryCreated($category)
        );
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
    public function restore($category_id){
        // dd($category_id);
        $category = category::withTrashed()->whereId('category_id', $category_id)->restore();

        return back();
    }
    public function forcedelete($category_id){
        //  dd($category_id);
        $category = category::withTrashed()->whereId('category_id', $category_id)->forcedelete();

        return back();
    }
}
