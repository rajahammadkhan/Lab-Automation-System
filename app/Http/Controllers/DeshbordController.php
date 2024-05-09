<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Deshbord;
use Illuminate\Http\Request;

class DeshbordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['user']=User::where('id',auth()->user()->id)->get()->first();
        return view('dashbord',compact('data'));
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
     * @param  \App\Models\Deshbord  $deshbord
     * @return \Illuminate\Http\Response
     */
    public function show(Deshbord $deshbord)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Deshbord  $deshbord
     * @return \Illuminate\Http\Response
     */
    public function edit(Deshbord $deshbord)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Deshbord  $deshbord
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Deshbord $deshbord)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Deshbord  $deshbord
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deshbord $deshbord)
    {
        //
    }
}
