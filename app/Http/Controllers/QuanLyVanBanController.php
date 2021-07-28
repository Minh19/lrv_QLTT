<?php

namespace App\Http\Controllers;

use App\Models\QuanLyVanBan;
use Illuminate\Http\Request;

class QuanLyVanBanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.QuanLyVanBan.index');
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
     * @param  \App\Models\QuanLyVanBan  $quanLyVanBan
     * @return \Illuminate\Http\Response
     */
    public function show(QuanLyVanBan $quanLyVanBan)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\QuanLyVanBan  $quanLyVanBan
     * @return \Illuminate\Http\Response
     */
    public function edit(QuanLyVanBan $quanLyVanBan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\QuanLyVanBan  $quanLyVanBan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QuanLyVanBan $quanLyVanBan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QuanLyVanBan  $quanLyVanBan
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuanLyVanBan $quanLyVanBan)
    {
        //
    }
}
