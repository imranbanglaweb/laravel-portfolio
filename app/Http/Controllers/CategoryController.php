<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use DB;
class CategoryController extends Controller
{
    public function category(){

return view('backEnd.admin.category.addcategory');
    }

    public function storeCategory(Request $request){
    	$this->validate($request,[
    			'cname'=>'required',
    			'cdis'=>'required',
    		]);
    	// return $request->all();


    // 	$category=New Category();
    // 	$category->cname=$request->cname;
    // 	$category->cdis=$request->cdis;
    // $category->published=$request->published;
    // $category->save();

    // Category::create($request->all());
        
    	DB::table('categories')->insert([
    		'cname'=>$request->cname,
    		'cdis'=>$request->cdis,
    		'published'=>$request->published,

    		]);
    return redirect('/category/add')->with('message','Category Added Successfully');

    }

    public function categoryList(){
    	$categories=Category::all();
return view('backEnd.admin.category.categorylist',['categories'=>$categories]);
    }
    public function edit($id){
    $categoryById=Category::where('id',$id)->first();
return view('backEnd.admin.category.categoryupdate',['categoryById'=>$categoryById]);
    }
    public function update(Request $request ){
    $category = Category::find($request->id);
    $category->cname=$request->cname;
    $category->cdis=$request->cdis;
    $category->published=$request->published;
    $category->save();
    return redirect('/category/all')->with('message','CATEGORY UPDATED SUCCESSFULLY');

    }
    public function delete($id){
    $category = Category::find($id);
    $category->delete();
    return redirect('/category/all')->with('message','CATEGORY Deleted SUCCESSFULLY');
    }



}
