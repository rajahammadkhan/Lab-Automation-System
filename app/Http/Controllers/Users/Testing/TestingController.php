<?php

namespace App\Http\Controllers\Users\Testing;

use App\Http\Controllers\Controller;
use App\Models\Users\Testing\Testing;
use App\Models\Users\Products\Products;
use App\Models\Users\Category\Category;
use Illuminate\Http\Request;

class TestingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['products'] = Products::get();
        $data['category'] = Category::get();
        return view('Users.Testing.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            "erp_category_name"=>"required",
            "erp_product_name"=>"required",
            "erp_request_type"=>"required",
        ]);

        $data=[
            'erp_user_id'=>auth()->user()->id,
            'erp_status'=>$request->erp_status,
            'erp_category_name'=>$request->erp_category_name,
            'erp_product_name'=>$request->erp_product_name,
            'erp_request_type'=>$request->erp_request_type,
            'erp_hidden_type'=>$request->erp_hidden_type,
            'erp_suggestion_category'=>$request->erp_suggestion_category,
            'erp_suggestion_product'=>$request->erp_suggestion_product,
            'erp_requirement_need'=>$request->erp_requirement_need,
            'erp_general_feedback'=>$request->erp_general_feedback,
            'erp_testing_request'=>$request->erp_testing_request,
        ];

        $testing = Testing::Create($data);
        return redirect()->back()->with('success','Data Has Been Inserted');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testing  $testing
     * @return \Illuminate\Http\Response
     */
    public function show(Testing $testing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testing  $testing
     * @return \Illuminate\Http\Response
     */
    public function edit(Testing $testing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testing  $testing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $data=Testing::where('id',$id)->get()->first();
        if($data->erp_hidden_type=="approved")
        {
            $data->update([
                'erp_user_id' => auth()->user()->id,
                'erp_status' => $request->erp_status,
                'erp_category_name' => $request->erp_category_name,
                'erp_product_name' => $request->erp_product_name,
                'erp_request_type' => $request->erp_request_type,
                'erp_hidden_type' => $request->erp_hidden_type,
                'erp_suggestion_category' => $request->erp_suggestion_category,
                'erp_suggestion_product' => $request->erp_suggestion_product,
                'erp_requirement_need' => $request->erp_requirement_need,
                'erp_general_feedback' => $request->erp_general_feedback,
                'erp_testing_request' => $request->erp_testing_request,
            ]);
            return redirect()->back()->with('success', 'Data Has Been Approved');
        }
        else
        {
            $data->update([
                'erp_user_id' => auth()->user()->id,
                'erp_status' => $request->erp_status,
                'erp_category_name' => $request->erp_category_name,
                'erp_product_name' => $request->erp_product_name,
                'erp_request_type' => $request->erp_request_type,
                'erp_hidden_type' => $request->erp_hidden_type,
                'erp_rejected'=>$request->erp_rejected,
                'erp_suggestion_category' => $request->erp_suggestion_category,
                'erp_suggestion_product' => $request->erp_suggestion_product,
                'erp_requirement_need' => $request->erp_requirement_need,
                'erp_general_feedback' => $request->erp_general_feedback,
                'erp_testing_request' => $request->erp_testing_request,
            ]);
            return redirect()->back()->with('success', 'Data Has Been Rejected');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testing  $testing
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
      //
    }
}
