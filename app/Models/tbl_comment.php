<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_comment extends Model
{
    use HasFactory;
    protected $table = 'tbl_comment';
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

