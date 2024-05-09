<?php

namespace App\Http\Controllers\Users\Products;

use App\Http\Controllers\Controller;
use App\Models\Users\Products\Products;
use App\Models\Users\Category\Category;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Products::get();
        $bata = Category::get();
        return view('Users.Products.index',compact('data','bata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Category::get();
        return view('Users.Products.addproduct',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request,[
           "erp_product_name"=>"required",
           "erp_product_code"=>"required",
           "erp_product_price"=>"required",
           "erp_sales_price"=>"required",
           "erp_short_description"=>"required",
           "erp_long_description"=>"required",
           "erp_product_image"=>"required",
       ]);

       if(!empty($request->erp_product_image))
       {
           $productimg=$request->file('erp_product_image')->getClientOriginalExtension();
           $productimg2=time().rand(100,1000).'.'.$productimg;
           $request->erp_product_image->move(public_path('ProductImages'),$productimg2);
       }
       else
       {
           $productimg2='';
       }

       $data=[
           'erp_user_id'=>auth()->user()->id,
           'erp_status'=>$request->erp_status,
           'erp_category_name'=>$request->erp_category_name,
           'erp_product_code'=>$request->erp_product_code,
           'erp_product_name'=>$request->erp_product_name,
           'erp_product_price'=>$request->erp_product_price,
           'erp_sales_price'=>$request->erp_sales_price,
           'erp_short_description'=>$request->erp_short_description,
           'erp_long_description'=>$request->erp_long_description,
           'erp_product_image'=>$productimg2,
       ];

        $products = Products::Create($data);
        return redirect()->back()->with('success','Your Data Has Been Inserted');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $products,$id)
    {
       //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $data=Products::where('id',$id)->get()->first();
        $this->validate($request,[
            "erp_product_code"=>"required",
            "erp_product_name"=>"required",
            "erp_product_price"=>"required",
            "erp_sales_price"=>"required",
            "erp_short_description"=>"required",
            "erp_long_description"=>"required",
        ]);

        if(!empty($request->erp_product_image))
        {
            $productimg=$request->file('erp_product_image')->getClientOriginalExtension();
            $productimg2=time().rand(100,1000).'.'.$productimg;
            $request->erp_product_image->move(public_path('ProductImages'),$productimg2);
        }
        else
        {
            $productimg2=$data->erp_product_image;
        }

        $data->update([
            'erp_user_id'=>auth()->user()->id,
            'erp_status'=>$request->erp_status,
            'erp_category_name'=>$request->erp_category_name,
            'erp_product_code'=>$request->erp_product_code,
            'erp_product_name'=>$request->erp_product_name,
            'erp_product_price'=>$request->erp_product_price,
            'erp_sales_price'=>$request->erp_sales_price,
            'erp_short_description'=>$request->erp_short_description,
            'erp_long_description'=>$request->erp_long_description,
            'erp_product_image'=>$productimg2,
        ]);
        return redirect()->back()->with('success','Your Data Has Been Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $products,$id)
    {
        $data=Products::where('id',$id)->get()->first();
        $data->delete();
        return redirect()->back()->with('success','Data Has Been Deleted');
    }
}
