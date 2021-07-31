<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_activity extends Model
{
    use HasFactory;
    protected $table = 'tbl_dtl_activity';
        // public function commentactiv()
    // {
    // 	return $this->hasMany('App\Models\tbl_comment','id_activ');
    // }
}
