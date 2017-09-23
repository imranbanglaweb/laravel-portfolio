<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use DB;
class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $categories=Category::where('published',1)->get();
        return view('backEnd.admin.Products.add',['categories'=>$categories]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request,[
            'productsname'=>'required',
            'productsldis'=>'required',

            ]);
    
    $productsimage=$request->file('productsimage');
    $name=$productsimage->getClientOriginalName();
    $UploadPath ='public/backEnd/Productsimage/';
    $productsimage->move($UploadPath,$name);
    $imageUrl =$UploadPath.$name;

        DB::table('tbl_products')->insert([
            'productsname'=>$request->productsname,
            'categoryId'=>$request->categoryId,
            'menufactureId'=>$request->menufactureId,
            'productsldis'=>$request->productsldis,
            'productssdis'=>$request->productssdis,
            'productsprice'=>$request->productsprice,
    'productsQuantity'=>$request->productsQuantity,
        'publishedstatus'=>$request->publishedstatus,
        'productsimage'=>$imageUrl,

            ]);
    return redirect('/Products/add')->with('message','Product Added Successfully');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $products = DB::table('tbl_products')
->join('categories', 'tbl_products.categoryId', '=', 'categories.id')
            ->select('tbl_products.*', 'categories.cname')
            ->get();

        return view('backEnd.admin.Products.all',['products'=>$products]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //
    }

}
