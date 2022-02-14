<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qual_obj_goal extends Model
{
    use HasFactory;

    protected $table='qual_obj_goal';

    public function Qual_obj_temp(){
        return $this->belongsTo(Qual_obj_temp::class,'id');
    }
}
