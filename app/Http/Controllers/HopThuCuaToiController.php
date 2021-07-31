<?php

namespace App\Http\Controllers;

use App\Models\HopThuCuaToi;
use App\Models\tbl_activity;
use App\Models\tbl_user;
use App\Models\tbl_fileactiv;
use App\Models\tbl_status;





use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HopThuCuaToiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('tbl_dtl_activity')
        ->JOIN ('tbl_user', 'tbl_user.id_user','=', 'tbl_dtl_activity.id_user')
        ->JOIN ('tbl_fileactiv', 'tbl_fileactiv.id_dtlactiv','=', 'tbl_dtl_activity.id_dtlactiv')   
        ->JOIN ('tbl_status', 'tbl_status.id_status','=', 'tbl_fileactiv.id_status')
        ->orderByRaw('f_activCreateDate DESC')
        // ->get();
        ->paginate(5);
    
        // $data = HopThuCuaToi::orderBy('f_activCreateDate','DESC')-> paginate(5);
            return view('admin.HopThuCuaToi.index',compact('data'));
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
    public function show($id_dtlactiv)
    {
        $data = tbl_fileactiv::where('id_dtlactiv', '=', $id_dtlactiv)->select('*')->first();
      return view('admin/HopThuCuaToi/ChiTietHoatDong',compact('data'));
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
