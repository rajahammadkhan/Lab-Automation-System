<?php

namespace App\Http\Controllers\Users\Approved;

use App\Http\Controllers\Controller;
use App\Models\Users\Testing\Testing;
use App\Models\Users\Approved\Approved;
use Illuminate\Http\Request;

class ApprovedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Testing::where('erp_hidden_type',"approved")->get()->all();
        return view('Users.Approved.index',compact('data'));
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
     * @param  \App\Models\Approved  $approved
     * @return \Illuminate\Http\Response
     */
    public function show(Approved $approved)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Approved  $approved
     * @return \Illuminate\Http\Response
     */
    public function edit(Approved $approved)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Approved  $approved
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Approved $approved)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Approved  $approved
     * @return \Illuminate\Http\Response
     */
    public function destroy(Approved $approved)
    {
        //
    }
}
