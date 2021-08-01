<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_comment extends Model
{
    protected $guarded = []; 
    use HasFactory;
    protected $table = 'tbl_comment';
    // protected $fillable = ['id_dtlactiv','id_activ','id_user','cmtContent'];
    // public function commentuser()
    // {
    // 	return $this->belongsto('App\Models\tbl_user','id_user');
    // }
    // public function commentfile()
    // {
    // 	return $this->belongsto('App\Models\tbl_fileactiv','id_dtlactiv');
    // }
    // public function commentactiv()
    // {
    // 	return $this->belongsto('App\Models\tbl_activity','id_activ');
    // }
}

