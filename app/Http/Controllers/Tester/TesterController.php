<?php

namespace App\Http\Controllers\Tester;

use App\Http\Controllers\Controller;
use App\Models\Tester;
use App\Models\User;
use App\Models\Users\Testing\Testing;
use Illuminate\Http\Request;

class TesterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['user']=User::where('is_admin',0)->get()->all();
        $data['testing']=Testing::get()->all();
        $data['approved']=Testing::where('erp_hidden_type',"approved")->get()->all();
        $data['rejected']=Testing::where('erp_hidden_type',"rejected")->get()->all();
        return view('tester-dashboard',compact('data'));
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
     * @param  \App\Models\Tester  $tester
     * @return \Illuminate\Http\Response
     */
    public function show(Tester $tester)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tester  $tester
     * @return \Illuminate\Http\Response
     */
    public function edit(Tester $tester)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tester  $tester
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tester $tester)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tester  $tester
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tester $tester)
    {
        //
    }
}
