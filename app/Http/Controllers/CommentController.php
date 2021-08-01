<?php

namespace App\Http\Controllers;

use App\Models\tbl_comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function index($data)
    {
        $id_dtlactiv = $data->id_dtlactiv;
        $comments = DB::table('tbl_comment')
        ->JOIN ('tbl_user', 'tbl_user.id_user','=', 'tbl_comment.id_user')
        ->where('tbl_comment.id_dtlactiv', '=', $id_dtlactiv)
        ->select('tbl_user.id_user', 'username', 'created_at', 'cmtContent')
        ->orderByRaw('created_at DESC')
        ->paginate(4);
        return view('admin/admin_showAll_cmt',compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function create($data)
    {
        $id_dtlactiv = $data->id_dtlactiv;
        $cmt = tbl_comment::where('id_dtlactiv', $id_dtlactiv);
        $count_cmt = $cmt->count();
        return view('admin/add_cmt',compact('data','count_cmt'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $a = $request->all();
        $id = $request->get('id_dtlactiv');
        // $data = $request->all();
        // dd($a);
        if(tbl_comment::create($request->all())){
            return redirect()->route('CTHD', "$id")->with('thêm bình luận thành công');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tbl_comment  $tbl_comment
     * @return \Illuminate\Http\Response
     */
    public function show(tbl_comment $tbl_comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tbl_comment  $tbl_comment
     * @return \Illuminate\Http\Response
     */
    public function edit(tbl_comment $tbl_comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tbl_comment  $tbl_comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tbl_comment $tbl_comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tbl_comment  $tbl_comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(tbl_comment $tbl_comment)
    {
        //
    }
}
