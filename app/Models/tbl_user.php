<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_user extends Model
{
    use HasFactory;
    protected $table = 'tbl_user';
    // public function commentuser()
    // {
    // 	return $this->hasMany('App\Models\tbl_comment','id_user');
    // }
}
