<?php

namespace App\Http\Controllers\Tester\TestingRequest;

use App\Http\Controllers\Controller;
use App\Models\Users\Testing\Testing;
use App\Models\Tester\TestingRequest\TestingRequest;
use Illuminate\Http\Request;

class TestingRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Testing::where('erp_hidden_type','request')->with('UserName')->get()->all();
        return view('Tester.TestingRequest.index',compact('data'));
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
     * @param  \App\Models\TestingRequest  $testingRequest
     * @return \Illuminate\Http\Response
     */
    public function show(TestingRequest $testingRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TestingRequest  $testingRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(TestingRequest $testingRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TestingRequest  $testingRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TestingRequest $testingRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TestingRequest  $testingRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(TestingRequest $testingRequest)
    {
        //
    }
}
