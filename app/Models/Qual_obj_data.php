<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qual_obj_data extends Model
{
    use HasFactory;

    protected $table = 'qual_obj_data';

    public function Qual_obj_temp(){
        return $this->belongsTo(Qual_obj_temp::class,'id');
    }
}
