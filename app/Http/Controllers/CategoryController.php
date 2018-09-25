<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Validator;

class CategoryController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::all();
        return view('categories.index')->with('categories',$categories);
    }


    public function create(){
        return view('categories.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
       $category= new Category;
       
       $validator = Validator::make($request->all(), [
        'name' => 'required',
        'color'=>'required',
        'classes'=>'required',
        ]);

        if ($validator->fails()) {
            return redirect('/admin/category/create')->withErrors($validator)->withInput();
        }
        $category->name=$request->get('name');
        $category->color=$request->get('color');
        $category->classes=$request->get('classes');
        $category->save();
       return redirect('/admin/category');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $category=Category::find($id);
        return view('categories.edit')->with('category',$category);
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
        $category= Category::find($id);
       
        $validator = Validator::make($request->all(), [
         'name' => 'required',
         'color'=>'required',
         'classes'=>'required',
         ]);
 
         if ($validator->fails()) {
             return redirect('/admin/category/'.$category->id.'/edit')->withErrors($validator)->withInput();
         }
         $category->name=$request->get('name');
         $category->color=$request->get('color');
         $category->classes=$request->get('classes');
         $category->save();
        return redirect('/admin/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::find($id)->delete();
        return redirect('/admin/category');
    }
}
