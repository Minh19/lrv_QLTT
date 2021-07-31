<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_fileactiv extends Model
{
    use HasFactory;
    protected $table = 'tbl_fileactiv';
//     public function status()
//     {
//     	return $this->hasOne('App\Models\tbl_status','id_status');
//     }
//     public function file()
//     {
//     	return $this->belongsto('App\Models\tbl_fileactiv','id_dtlactiv');
//     }
}
