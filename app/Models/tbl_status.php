<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_status extends Model
{
    use HasFactory;
    protected $table = 'tbl_status';
    // public function status()
    // {
    // 	return $this->belongsto('App\Models\tbl_fileactiv','id_status');
    // }
}
