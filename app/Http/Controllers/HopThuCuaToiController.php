<?php

namespace App\Http\Controllers;

use App\Models\HopThuCuaToi;
use Illuminate\Http\Request;

class HopThuCuaToiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.HopThuCuaToi.index');
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
     * @param  \App\Models\HopThuCuaToi  $hopThuCuaToi
     * @return \Illuminate\Http\Response
     */
    public function show(HopThuCuaToi $hopThuCuaToi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HopThuCuaToi  $hopThuCuaToi
     * @return \Illuminate\Http\Response
     */
    public function edit(HopThuCuaToi $hopThuCuaToi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HopThuCuaToi  $hopThuCuaToi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HopThuCuaToi $hopThuCuaToi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HopThuCuaToi  $hopThuCuaToi
     * @return \Illuminate\Http\Response
     */
    public function destroy(HopThuCuaToi $hopThuCuaToi)
    {
        //
    }
}
