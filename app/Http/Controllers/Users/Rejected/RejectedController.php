<?php

namespace App\Http\Controllers\Users\Rejected;

use App\Http\Controllers\Controller;
use App\Models\Users\Testing\Testing;
use App\Models\Users\Rejected\Rejected;
use Illuminate\Http\Request;

class RejectedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Testing::where('erp_hidden_type',"rejected")->get()->all();
        return view('Users.Rejected.index',compact('data'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rejected  $rejected
     * @return \Illuminate\Http\Response
     */
    public function show(Rejected $rejected)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rejected  $rejected
     * @return \Illuminate\Http\Response
     */
    public function edit(Rejected $rejected)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rejected  $rejected
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rejected $rejected)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rejected  $rejected
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rejected $rejected)
    {
        //
    }
}
