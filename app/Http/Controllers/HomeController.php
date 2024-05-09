<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Users\Products\Products;
use App\Models\Users\Category\Category;
use App\Models\Users\Testing\Testing;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['user']=User::where('id',auth()->user()->id)->get()->first();
        $data['category']=Category::get()->all();
        $data['products']=Products::get()->all();
        $data['approved']=Testing::where('erp_hidden_type',"approved")->get()->all();
        $data['rejected']=Testing::where('erp_hidden_type',"rejected")->get()->all();
        return view('dashbord',compact('data'));
    }
}
