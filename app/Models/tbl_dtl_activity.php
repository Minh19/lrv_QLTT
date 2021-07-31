<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_dtl_activity extends Model
{
    use HasFactory;
    protected $table = 'tbl_dtl_activity';
    
    // public function commentfile()
    // {
    // 	return $this->hasMany('App\Models\tbl_comment','id_dtlactiv');
    // }
    // public function file()
    // {
    // 	return $this->hasOne('App\Models\tbl_fileactiv','id_dtlactiv');
    // }
}
